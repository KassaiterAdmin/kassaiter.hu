<?php

namespace App\Http\Controllers;

use App\Miserend;
use Illuminate\Http\Request;

class MiserendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $miserend = Miserend::all()->sortBy('id');

        return view('admin.miserend')->withMiserend ( $miserend )->withCounter ( sizeof($miserend));
    }

    public function store()
    {
        // Miserend::truncate();

        $this->validate(\request(),[
            //'date' => 'required|date_format:Y-m-d',
            //'time' => 'required|date_format:H:i' ,
            //'story' => 'nullable',
            //'type'  => 'nullable|in:cs.,org.',
            //'priest' => 'nullable'
        ]);

        for($i=1;$i <=15; $i++){
            $miserend = new Miserend;
            $item = 'item'.$i;
            if(empty(\request($item)) == false) {

            }
        }
        return redirect('/admin');
    }
}