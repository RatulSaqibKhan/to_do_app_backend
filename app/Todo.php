<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';

    protected $fillable = [
        'title', 'body', 'completed', 'created_by'
    ];

    public function createdUser()
    {
        return $this->belongsTo(User::class, 'created_by', 'id')->withDefault();
    }
}
