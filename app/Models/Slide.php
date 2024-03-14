<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slide extends Model
{
    
    use HasFactory, SoftDeletes;

    public $table = 'slides';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = config('global.num_pagination');
    }

    protected $fillable = [
        'content_id',
        'slide',
        'slide_url',
        'slide_title',
        'slide_description',
    ];

    static $rules = [
        'content_id' => 'bail|required|numeric',
        'slide' => 'bail|required|numeric',
        'slide_url' => 'bail|required',
        'slide_title' => 'bail|required',
        'slide_description' => 'bail|required',
    ];

    public function content()
    {
        return $this->hasOne(Content::class, 'id', 'content_id');
    }

}
