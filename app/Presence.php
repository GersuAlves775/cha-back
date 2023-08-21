<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{

    protected $table = 'presence';
    protected $primaryKey = "id_presence";
    protected $fillable = [
        'hash',
        'name',
        'confirm'
    ];
}
