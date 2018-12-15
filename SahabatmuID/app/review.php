<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $table = 'reviews'; // Table Name
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
