<?php

namespace App\Http\Controllers\V1;

use App\Http\Resources\V1\ContentResource;
use Exception;
use App\Models\Content;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ContentCollection;

class ContentController extends Controller
{

    use GeneralTrait;

    public $module = "content";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $content = Content::latest()->paginate();
            return new ContentCollection($content);
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
            $res_validator = $this->validator($request->all(), Content::$rules);
            // Si hay errores que los retorne
            if ($res_validator->fails()) {
                return $this->createErrorResponse([], $res_validator->errors()->first(), 422, false, $this->module, 'Create');
            }
            // Llenamos el objeto
            $content = new Content();
            $content->section_id = $request->section_id;
            $content->title = $request->title;
            $content->sub_title = $request->sub_title;
            $content->body = $request->body;
            $content->button = $request->button;
            $content->slide = $request->slide;
            $content->slide_url = $request->slide_url;
            $content->slide_title = $request->slide_title;
            $content->slide_description = $request->slide_description;
            // Guardamos el objeto
            $save = $content->save();
            if (!$save) {
                throw new Exception("Algo surgió y no se guardo el $this->module");
            }
            // Retornamos el objeto guardado
            return $this->createResponse(new ContentResource($content), "Creado con exito.", 200, true, $this->module, 'Create');
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
            $content = Content::findOrFail($id);
            // Retornamos el objeto guardado
            return $this->createResponse(new ContentResource($content), "Consultado con exito.", 200, true, $this->module, 'Show');
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
            $res_validator = $this->validator($request->all(), Content::$rules);
            // Si hay errores que los retorne
            if ($res_validator->fails()) {
                return $this->createErrorResponse([], $res_validator->errors()->first(), 422, false, $this->module, 'Update');
            }
            // Llenamos el objeto
            $content = Content::findOrFail($id);
            $content->section_id = $request->section_id;
            $content->title = $request->title;
            $content->sub_title = $request->sub_title;
            $content->body = $request->body;
            $content->button = $request->button;
            $content->slide = $request->slide;
            $content->slide_url = $request->slide_url;
            $content->slide_title = $request->slide_title;
            $content->slide_description = $request->slide_description;
            // Guardamos el objeto
            $save = $content->save();
            if (!$save) {
                throw new Exception("Algo surgió y no se guardo el $this->module");
            }
            // Retornamos el objeto guardado
            return $this->createResponse(new ContentResource($content), "Actualizado con exito.", 200, true, $this->module, 'Update');
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
            $content = Content::findOrFail($id);
            $content->delete();
            // Retornamos el objeto guardado
            return $this->createResponse([], "Eliminado con exito.", 200, true, $this->module, 'Destroy');
        } catch (Exception $e) {
            return $this->createErrorResponse([], $e->getMessage(), 404, false, $this->module, 'Destroy');
        }
    }
}
