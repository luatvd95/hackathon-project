<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $guarded = ['id'];
    protected $casts = [
        'grade' => 'json',
    ];

    public function user()
    {
    	return $this->belongsTo('App\Models\Users','id');
    }
}
