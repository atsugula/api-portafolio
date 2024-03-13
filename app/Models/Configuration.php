<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'configuration';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = config('global.num_pagination');
    }

    protected $fillable = [
        'brand',
        'linkedin',
        'github',
    ];

    static $rules = [
        'brand' => 'bail|required',
        'linkedin' => 'bail|required',
        'github' => 'bail|required',
    ];

}
