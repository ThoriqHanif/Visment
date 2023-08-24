<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Eloquent
{
    protected $fillable = ['name', 'class_type_id', 'mark_from', 'mark_to', 'remark'];
}
