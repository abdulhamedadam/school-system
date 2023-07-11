<?php

namespace App\Http\Controllers\Grades;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGrades;
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
    public function store(StoreGrades $request)
    {
        $validated = $request->validate();
        $grade=new ModelsGrade();
        $grade->name = ['en' => $request->Name_en, 'ar' => $request->Name];
        $grade->notes=$request->Notes;

        $grade->save();
        return redirect('/Grades');

    }
}
