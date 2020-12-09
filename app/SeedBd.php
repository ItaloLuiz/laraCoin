<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeedBd extends Model
{
    protected $table = 'tbl_coins';
    protected $fillable = ['code','id'];
}
