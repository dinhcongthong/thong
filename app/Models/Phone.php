<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phone';

    protected $fillable = [
        'name', 'origin', 'description'
    ];

    public function getIPhone () {
        return $this->hasMany('App\Models\IphoneList', 'phone_id', 'id');
    }
}
