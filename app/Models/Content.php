<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Content extends Model
{
    
    use HasFactory, SoftDeletes;

    public $table = 'content';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = config('global.num_pagination');
    }

    protected $fillable = [
        'section_id',
        'title',
        'sub_title',
        'body',
        'button',
    ];

    static $rules = [
        'section_id' => 'bail|required|numeric',
        'title' => 'bail|required',
        'sub_title' => 'bail|required',
        'body' => 'bail|required',
        'button' => 'bail|required',
    ];

    public function section()
    {
        return $this->hasOne(Section::class, 'id', 'section_id');
    }

    public function slides()
    {
        return $this->hasMany(Slide::class, 'content_id', 'id');
    }

}
