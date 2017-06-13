@extends('index')

@section('content')
    <h1>Könyvtár</h1>
    <div class="row">
        <p class="center_warning">
            A könyvtár szeretettel várja a Kassai téri gyülekezet tagjait!<br><br>
	    <strong>A könyvtár  vasárnap délelőtt 10-12 óráig tart nyitva.</strong>
        </p>
        <h1>Katalógus</h1>
        <p class="center_warning">A listánk még nem teljes. Az elektronikus katalógusért köszönet az Olvasókör működtetőinek!</p>
        <form action="/konyvtar_kereso" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group col-lg-8 centered">
                <input type="text" class="form-control" name="q" placeholder="Keresés a könyvek között">
                <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span> Keresés
                </button>
            </div>
        </form>
    </div>
    @if(isset($details))
        @if(isset($query))
            <p>A(z) <b> {{ $query }} </b> szót tartalmazó köteteink:</p>
        @endif
            <div class='row table-colored'>
                <div class='col-lg-2'>Sorszám</div>
                <div class='col-lg-2'>Szerző</div>
                <div class='col-lg-3'>Cím</div>
                <div class='col-lg-3'>Kiadó</div>
                <div class='col-lg-2'>Kiadás helye,éve</div>
            </div>

            @foreach ($details as $item)
                @if($counter++%2 ==0)
                    <div class='row'>
                @else
                    <div class='row table-colored'>
                @endif
                        <div class='col-lg-2'>{{$item->ssz}}</div>
                        <div class='col-lg-2'>{{$item->szerzo}}</div>
                        <div class='col-lg-3'>{{$item->cim}}</div>
                        <div class='col-lg-3'>{{$item->kiado}}</div>
                        <div class='col-lg-2'>{{$item->ev}}</div>
                    </div>
            @endforeach
    @else
        <p class="alert alert-danger">A keresett kötet nem található meg könyvtárunk gyűjteményében!</p>
    @endif
@endsection
