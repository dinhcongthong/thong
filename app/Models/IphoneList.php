<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IphoneList extends Model
{
    protected $table = 'list_iphone';

    protected $fillable = ['name', 'origin', 'phone_id'];

    public function getPhone () {
        return $this->belongsTo('App\Models\Phone', 'phone_id', 'id');
    }
}
