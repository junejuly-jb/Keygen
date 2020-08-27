<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'name'];
    protected $keyType = 'string';
}
