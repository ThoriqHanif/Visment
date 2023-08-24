<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRecord extends Model
{
    use HasFactory;
    protected $fillable = [
        'session', 'user_id', 'my_class_id', 'section_id', 'my_parent_id', 'adm_no', 'year_admitted', 'wd', 'wd_date', 'grad', 'grad_date', 'age'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function my_parent()
    {
        return $this->belongsTo(User::class);
    }

    public function my_class()
    {
        return $this->belongsTo(MyClass::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
