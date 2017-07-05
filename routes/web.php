<?php
use App\konyv;
use App\Miserend;
use App\Hirdetes;
use App\Program;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    $miserend = Miserend::all()->sortBy('id');
    $hirdetes = Hirdetes::all()->sortBy('id');

    return view('home')->withMiserend ( $miserend )->withHirdetes ( $hirdetes );
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/romzsa_teodor', function () {
    return view('szemelyek.romzsa_teodor');
});

Route::get('/seres_ferenc', function () {
    return view('szemelyek.seres_ferenc');
});

Route::get('/mihalovics_zsigmond', function () {
    return view('szemelyek.mihalovics_zsigmond');
});

Route::get('/pajor_andras', function () {
    return view('szemelyek.pajor_andras');
});

Route::get('/hoka_imre', function () {
    return view('szemelyek.hoka_imre');
});

Route::get('/tarnai_bela', function () {
    return view('szemelyek.tarnai_bela');
});

Route::get('/olvasnivalo', function () {
    return view('olvasnivalo');
});

// Rólunk //

Route::get('/plebania', function () {
    return View::make('rolunk.plebania', ['tabs'=>Tabs::get('kassaiter')]);
});

Route::get('/szolgalat', function () {
    return View::make('rolunk.szolgalat', ['tabs'=>Tabs::get('szentsegek')]);
});

Route::get('/kollegium', function () {
    return view('rolunk.kollegium');
});

Route::get('/lelkipasztoraink', function () {
    return view('rolunk.lelkipasztoraink');
});

Route::get('/egyhaztanacs', function () {
    return view('rolunk.egyhaztanacs');
});

Route::get('/kozossegek', function () {
    return View::make('rolunk.kozossegek', ['tabs'=>Tabs::get('kozossegek')]);
});

Route::get('/elerhetoseg', function () {
    return view('rolunk.elerhetoseg');
});

// Főmenü //

Route::get('/szentsegeink', function () {
    return View::make('szentsegeink', ['tabs'=>Tabs::get('szentsegeink')]);
});

Route::get('/szentmise', function () {
    return view('szentmise');
});

Route::get('/galeria', function () {
    return view('galeria');
});

Route::get('/hirado', function () {
    return view('hirado');
});

Route::get('/programok', function () {
    $today = Carbon::now();
    $actual = Program::where ( 'tal_date', '>=', Carbon::now() )->get ();
    $archive = Program::where ( 'tal_date', '<', Carbon::now() )->get ();
    $planned = Program::whereNull ('tal_date')->get ();
    return view('programok')->withAktualis( $actual )->withTervezett ( $planned )->withLejart ( $archive )->withToday( $today );
});

Route::get ( '/konyvtar', function () {
    $cnt = 0;
    return view ( 'konyvtar' )->withDetails ( konyv::all() )->withCounter ( $cnt );
} );

Route::any ( '/konyvtar_kereso', function () {
    $q = Input::get ( 'q' );
    $cnt = 0;
    $book = konyv::where ( 'cim', 'LIKE', '%' . $q . '%' )->orWhere ( 'szerzo', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $book ) > 0)
        return view ( 'konyvtar' )->withDetails ( $book )->withQuery ( $q )->withCounter ( $cnt );
    else
        return view ( 'konyvtar' );
} );

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');