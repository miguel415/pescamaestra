<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\teachers;

class Course extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'idcategory',
        'idteachers',
        'description',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'idcategory');
    }

    public function teachers()
    {
        return $this->belongsTo(teachers::class, 'idteachers');
    }
}
