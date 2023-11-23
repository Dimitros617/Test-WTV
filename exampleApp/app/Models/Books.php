<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    public function autors()
    {
        return $this->belongsTo('App\Models\Autors', 'autor_id', 'id');
    }

}
