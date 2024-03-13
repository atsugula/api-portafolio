<?php

namespace App\Http\Controllers\V1;

use Exception;
use App\Models\Section;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\SectionResource;
use App\Http\Resources\V1\SectionCollection;

class SectionController extends Controller
{

    use GeneralTrait;

    public $module = "sections";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $sections = Section::where('public', '1')->latest()->paginate();
            return new SectionCollection($sections);
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
            $res_validator = $this->validator($request->all(), Section::$rules);
            // Si hay errores que los retorne
            if ($res_validator->fails()) {
                return $this->createErrorResponse([], $res_validator->errors()->first(), 422, false, $this->module, 'Create');
            }
            // Llenamos el objeto
            $section = new Section();
            $section->name = $request->name;
            $section->public = $request->public;
            // Guardamos el objeto
            $save = $section->save();
            if (!$save) {
                throw new Exception("Algo surgió y no se guardo el $this->module");
            }
            // Retornamos el objeto guardado
            return $this->createResponse(new SectionResource($section), "Creado con exito.", 200, true, $this->module, 'Create');
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
            $section = Section::findOrFail($id);
            // Retornamos el objeto guardado
            return $this->createResponse(new SectionResource($section), "Consultado con exito.", 200, true, $this->module, 'Show');
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
            $res_validator = $this->validator($request->all(), Section::$rules);
            // Si hay errores que los retorne
            if ($res_validator->fails()) {
                return $this->createErrorResponse([], $res_validator->errors()->first(), 422, false, $this->module, 'Update');
            }
            // Llenamos el objeto
            $section = Section::findOrFail($id);
            $section->name = $request->name;
            $section->public = $request->public;
            // Guardamos el objeto
            $save = $section->save();
            if (!$save) {
                throw new Exception("Algo surgió y no se guardo el $this->module");
            }
            // Retornamos el objeto guardado
            return $this->createResponse(new SectionResource($section), "Actualizado con exito.", 200, true, $this->module, 'Update');
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
            $customer = Section::findOrFail($id);
            $customer->delete();
            // Retornamos el objeto guardado
            return $this->createResponse([], "Eliminado con exito.", 200, true, $this->module, 'Destroy');
        } catch (Exception $e) {
            return $this->createErrorResponse([], $e->getMessage(), 404, false, $this->module, 'Destroy');
        }
    }
}
