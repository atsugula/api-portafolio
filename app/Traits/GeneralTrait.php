<?php

namespace App\Traits;

use Carbon\Carbon;
use App\Models\Role;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

trait GeneralTrait {

    static $messages = [
        'bail' => 'Algo fallo en :attribute.',
        'required' => ':attribute es obligatorio.',
        'unique' => 'Ya existe un asistente con este :attribute.',
        'email' => ':attribute, no es un correo electronico.',
        'min' => 'No cumple con la cantidad mínima de caracteres.',
        'confirmed' => 'Los campos :attribute no coinciden.',
        'numeric' => 'El campo :attribute no es un número.',
        'date_format' => 'La fecha no cumple con el formato (Y-m-d).',
    ];

    static $customAttributes = [
		'name' => 'Nombre',
		'email' => 'Email',
		'password' => 'contraseña',
    ];

    function validator($data, $validation): \Illuminate\Validation\Validator
    {
        $validator = Validator::make($data, $validation, GeneralTrait::$messages, GeneralTrait::$customAttributes);
        return $validator;
    }

}