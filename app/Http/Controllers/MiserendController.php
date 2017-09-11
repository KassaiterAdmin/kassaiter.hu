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
        Miserend::truncate();

        $this->validate(\request(),[
            'date' => 'date_format:Y-m-d',
            'time' => 'date_format:H:i' ,
            'story' => 'nullable',
            'type'  => 'nullable|in:cs.,org.',
            'priest' => 'nullable'
        ]);

        for($i=1;$i <=15; $i++){
            $miserend = new Miserend;
            $date = 'date'.$i;
            $time = 'time'.$i;
            $story = 'story'.$i;
            $type = 'type'.$i;
            $priest = 'priest'.$i;
            if(empty(\request($date)) == false) {
                $miserend->date = \request($date);
                $miserend->time = \request($time);
                $miserend->story = \request($story);
                $miserend->type = \request($type);
                $miserend->priest = \request($priest);
                $miserend->save();
            }
        }
        return redirect('/admin');
    }
}