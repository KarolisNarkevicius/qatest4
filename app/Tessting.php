<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Tessting extends Model  {

use SoftDeletes;

public $table = 'tesstings';

protected $dates = [
'created_at',
'updated_at',
'deleted_at',
];

protected $fillable = [
'testas',
'created_at',
'updated_at',
'deleted_at',
];




}