<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Test extends Model  {

use SoftDeletes;

public $table = 'tests';

protected $dates = [
'created_at',
'updated_at',
'deleted_at',
];

protected $fillable = [
'papai',
'created_at',
'updated_at',
'deleted_at',
];




}