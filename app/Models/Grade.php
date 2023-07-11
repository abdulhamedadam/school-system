<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Grade extends Model
{
    use HasFactory;
    use HasTranslations;


    protected $table = 'Grades';
    public $timestamps = true;
    protected $fillable = ['name','notes'];

    public $translatable = ['name'];
}
