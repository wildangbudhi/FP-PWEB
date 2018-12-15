<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $table = 'tags'; // Table Name
    public $primaryKey = 'id'; // Primary Key

    public function stories()
    {
        $this->hasMany('App\story');
    }

    public function reviews()
    {
        $this->hasMany('App\review');
    }
}
