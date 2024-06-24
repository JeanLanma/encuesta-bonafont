<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    public function setContentAttribute($value)
    {
        $this->attributes['content'] = json_encode($value);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
