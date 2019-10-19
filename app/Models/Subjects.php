<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    protected $tables = 'subjects';
    protected $fillable = [
    	'id',
    	'name'
    ];
}
