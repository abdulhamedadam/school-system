<?php

namespace App\Http\Controllers\Grades;

use App\Http\Controllers\Controller;
use App\Models\Grade as ModelsGrade;
use Grade\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
      $grades=ModelsGrade::all();
      return view('pages.Grades.Grades',compact('grades'));
    }
    public function store()
    {
      $grades=ModelsGrade::all();

    }
}
