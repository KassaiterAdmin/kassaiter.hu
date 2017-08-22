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
        $hirdetes = Hirdetes::all()->sortBy('id');

        return view('admin.hirdetesek')->withHirdetes ( $hirdetes )->withCounter ( sizeof($hirdetes));
    }

    public function store()
    {
        Hirdetes::truncate();

        for($i=1;$i <=15; $i++){
            $hirdetes = new Hirdetes;
            $item = 'item'.$i;
            if(empty(\request($item)) == false) {
                $hirdetes->story = \request($item);
                $hirdetes->save();
            }
        }
        return redirect('/admin');
    }
}
