<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Office;

class OfficeController extends Controller
{
    public function index() {
        $offices = Office::orderBy('name')->with('user')->get();
        return inertia('offices/Index',compact('offices'));
    }

    public function create() {
        return inertia('offices/Create');
    }
}
