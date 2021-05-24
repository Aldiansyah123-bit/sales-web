<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Company extends Model
{
    protected $fillable = [
        'code', 'name', 'description', 'address', 'color', 'logo', 'background',
    ];
}