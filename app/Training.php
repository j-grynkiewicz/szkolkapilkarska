<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = ['title', 'coach', 'field', 'date'];
}
