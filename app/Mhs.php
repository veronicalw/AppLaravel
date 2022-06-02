<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mhs extends Model
{
    //
    protected $table = 'usermhs';
    protected $fillable = ['nim','namMhs','emailMhs','password'];
    public $timestamps = false;
    protected $primaryKey = 'nim';
}
