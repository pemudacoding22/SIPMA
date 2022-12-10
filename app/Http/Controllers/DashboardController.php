<?php

namespace App\Http\Controllers;

use App\Models\DataDosen;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        $dataDosen = DataDosen::all();
        return view('dashboard.index', compact('dataDosen'));
    }

    public function create()
    {
        return view('dashboard.create');
    }


}
