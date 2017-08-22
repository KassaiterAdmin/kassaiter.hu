<?php

namespace App\Http\Controllers;

use App\Hirdetes;
use Illuminate\Http\Request;

class HirdetesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.hirdetesek');
    }
}
