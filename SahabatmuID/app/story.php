<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class story extends Model
{
    protected $table = 'stories'; // Table Name
    public $primaryKey = 'id'; // Primary Key

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tag()
    {
        return $this->belongsTo('App\tag');
    }
}
