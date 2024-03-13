<?php

namespace App\Http\Controllers\V1;

use Exception;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use App\Models\Configuration;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ConfigurationResource;
use App\Http\Resources\V1\ConfigurationCollection;

class ConfigurationController extends Controller
{

    use GeneralTrait;

    public $module = "configuration";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $configuration = Configuration::latest()->paginate();
            return new ConfigurationCollection($configuration);
        } catch (Exception $e) {
            return $this->createErrorResponse([], $e->getMessage(), 404, false, $this->module, 'Index');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // Validamos que esten todos los campos
            $res_validator = $this->validator($request->all(), Configuration::$rules);
            // Si hay errores que los retorne
            if ($res_validator->fails()) {
                return $this->createErrorResponse([], $res_validator->errors()->first(), 422, false, $this->module, 'Create');
            }
            // Llenamos el objeto
            $configuration = new Configuration();
            $configuration->brand = $request->brand;
            $configuration->linkedin = $request->linkedin;
            $configuration->github = $request->github;
            // Guardamos el objeto
            $save = $configuration->save();
            if (!$save) {
                throw new Exception("Algo surgió y no se guardo el $this->module");
            }
            // Retornamos el objeto guardado
            return $this->createResponse(new ConfigurationResource($configuration), "Creado con exito.", 200, true, $this->module, 'Create');
        } catch (Exception $e) {
            return $this->createErrorResponse([], $e->getMessage(), 404, false, $this->module, 'Create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            // Buscamos por ID
            $configuration = Configuration::findOrFail($id);
            // Retornamos el objeto guardado
            return $this->createResponse(new ConfigurationResource($configuration), "Consultado con exito.", 200, true, $this->module, 'Show');
        } catch (Exception $e) {
            return $this->createErrorResponse([], $e->getMessage(), 404, false, $this->module, 'Show');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            // Validamos que esten todos los campos
            $res_validator = $this->validator($request->all(), Configuration::$rules);
            // Si hay errores que los retorne
            if ($res_validator->fails()) {
                return $this->createErrorResponse([], $res_validator->errors()->first(), 422, false, $this->module, 'Update');
            }
            // Llenamos el objeto
            $configuration = Configuration::findOrFail($id);
            $configuration->brand = $request->brand;
            $configuration->linkedin = $request->linkedin;
            $configuration->github = $request->github;
            // Guardamos el objeto
            $save = $configuration->save();
            if (!$save) {
                throw new Exception("Algo surgió y no se guardo el $this->module");
            }
            // Retornamos el objeto guardado
            return $this->createResponse(new ConfigurationResource($configuration), "Actualizado con exito.", 200, true, $this->module, 'Update');
        } catch (Exception $e) {
            return $this->createErrorResponse([], $e->getMessage(), 404, false, $this->module, 'Update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            // Buscamos por ID
            $configuration = Configuration::findOrFail($id);
            $configuration->delete();
            // Retornamos el objeto guardado
            return $this->createResponse([], "Eliminado con exito.", 200, true, $this->module, 'Destroy');
        } catch (Exception $e) {
            return $this->createErrorResponse([], $e->getMessage(), 404, false, $this->module, 'Destroy');
        }
    }
}
