<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamRecord extends Eloquent
{
    use HasFactory;
    protected $fillable = ['exam_id', 'my_class_id', 'student_id', 'section_id', 'af', 'af_id', 'ps', 'ps_id','t_comment', 'p_comment', 'year', 'total', 'ave', 'class_ave', 'pos'];
}