<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $fillable = ['image', 'name', 'description', 'location'];
}
