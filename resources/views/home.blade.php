@extends('index')

@section('content')
        <div class="row">
            <div class="col-lg-6">
                <h2>Aktuális hirdetéseink</h2>
                <ol>
                    @foreach ($hirdetes as $item)
                        <li>{{$item->story}}</li>
                    @endforeach
                </ol>
            </div>
            <div class="col-lg-6">
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
