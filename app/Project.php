<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    public $table = 'projects';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'author_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'description',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
