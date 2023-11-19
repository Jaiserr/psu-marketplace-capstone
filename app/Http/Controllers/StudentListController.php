<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentListController extends Controller
{
    public function index()
    {
        return view('administrator.student-list.index');
    }
}
