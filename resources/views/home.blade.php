@extends('index')

@section('content')
        <h1 class="center">A KASSAI TÉRI URNATEMETŐ ÜNNEPI NYITVATARTÁSA</h1>
        <div class="row">
            <div class="col-lg-6" style="text-align: right;">
                Október 29.  Vasárnap<br>
                November 1. Szerda<br>
                November 2. Csütörtök
            </div>
            <div class="col-lg-6">
                7:00-12:00 és 18:00-19:30<br>
                8:30-19:00<br>
                7:00-19:00
            </div>
        </div>
        <h3 class="center">Ünnepi szentmisék</h3>
        <div class="row">
            <div class="col-lg-6" style="text-align: right;">
                November 1. Szerda<br>
                November 2. Csütörtök
            </div>
            <div class="col-lg-6">
                9:00 és 18:30
                7:30 és 18:30
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <h2>Aktuális hirdetéseink</h2>
                <ol>
                    @foreach ($hirdetes as $item)
                        <li>{{$item->story}}</li>
                    @endforeach
                </ol>
            </div>
            <div class="col-lg-7">
                <div class="row">
		<h2>Rendszeres alkalmaink</h2>
		<p>
			Minden kedden 17:30-18:30 Rózsafüzér, aztán szentmise Ferenc Atyával<br>
			Minden első pénteken reggel 7:30-kor szentmise Ferenc Atyával
		</p>	
		<h2>Szentmiséink a héten </h2>
		</div>
                @foreach ($miserend as $item)
                    @if($item->id%2 ==0)
                        <div class='row'>
                    @else
                        <div class='row table-colored'>
                    @endif
                            <div class='col-lg-2'>{{$item->date}}</div>
                            <div class='col-lg-1'>{{$item->time}}</div>
                            <div class='col-lg-5'>{{$item->story}}</div>
                            <div class='col-lg-1'>{{$item->type}}</div>
                            <div class='col-lg-3'>{{$item->priest}}</div>
                        </div>
                @endforeach
            </div>
        </div>
@endsection
