<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
    use HasFactory, SoftDeletes;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = config('global.num_pagination');
    }

    protected $fillable = [
        'name',
        'public',
    ];

    static $rules = [
        'name' => 'bail|required',
        'public' => 'bail|required'
    ];

    public function contents()
    {
        return $this->hasMany(Content::class, 'section_id', 'id');
    }

}
