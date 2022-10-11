<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    protected $fillable = [
        'title', 'description','description2','description3'
    ];
}
