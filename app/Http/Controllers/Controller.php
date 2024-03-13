<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\JsonResponse;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function createResponse($data = [],  $message = '', $status = 200, $success = true, $module = "null", $action = ""):JsonResponse
    {
        return response()->json([
            "success" => $success,
            "module" => $module,
            "action" => $action,
            "items" => $data,
            'message' => $message,
            "meta" => [
                "organization" => config('global.organization', 'OpenCode SAS'),
                "authors" => config('global.authors', 'Jorge Usuga'),
            ],
        ], $status);
    }

    function createErrorResponse($data = [], $error = '', $status = 404, $success = true, $module = "null", $action = ""):JsonResponse
    {
        return response()->json([
            "success" => $success,
            "module" => $module,
            "action" => $action,
            "items" => $data,
            'message' => $error,
            "meta" => [
                "organization" => config('global.organization', 'OpenCode SAS'),
                "authors" => config('global.authors', 'Jorge Usuga'),
            ],
        ], $status);
    }

}
