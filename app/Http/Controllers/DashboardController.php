<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use App\Models\Students;
use App\Models\Teachers;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $data = [];
    public function index()
    {
        $students = Students::count();
        $teachers = Teachers::count();
        $parents = Parents::count();

        $this->data = [
            'students' => $students,
            'teachers' => $teachers,
            'parents' => $parents
        ];
        return view('pages.dashboard.index', $this->data);
    }
}
