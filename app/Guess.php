<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guess extends Model
{

    protected $table = 'guess';
    protected $primaryKey = 'id_guess';
    protected $fillable = ['id_presence', 'id_option'];
}
