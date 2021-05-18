<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;
class TeacherController extends Controller
{
    //
    //first method
    public function index(teacher $teacher)
    {   
        return $teacher;
    }

}
