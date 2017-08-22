@extends('index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-lg-3 menu-box">
                <a href="/hirdetesek">
                    <i class="material-icons sized colored">toc</i><br>
                    <h2>Hirdetések</h2>
                </a>
            </div>
            <div class="col-sm-3 col-lg-3 menu-box">
                <i class="material-icons sized colored">event_note</i><br>
                <h2>Miserend</h2>
            </div>
            <div class="col-sm-3 col-lg-3 menu-box">
                <i class="material-icons sized colored">nature_people</i><br>
                <h2>Programok</h2>
            </div>
        </div>
    </div>

@endsection