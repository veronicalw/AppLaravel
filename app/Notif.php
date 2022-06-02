<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notif extends Model
{
    //
    protected $table = 'tb_expo';
    protected $fillable = ['token_expo'];
    public $timestamps = false;
    protected $primaryKey = 'id';
}
