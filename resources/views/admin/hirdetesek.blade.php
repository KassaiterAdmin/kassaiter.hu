@extends('index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-lg-10">
                <h1>Hirdetések szerkesztése</h1>
                <hr>
                <form class="form-inline" method="post" action="/hirdetesek">
                    <div class="form-group">
                        {{ csrf_field() }}
                        @foreach($hirdetes as $item)
                            <textarea class="form-control form_hirdetes" id="item{{$item->id}}" name="item{{$item->id}}">{{$item->story}}</textarea><br>
                        @endforeach
                        @for($i=$counter+1; $i <= 15; $i++)
                            <textarea class="form-control form_hirdetes" id="item{{$i}}" name="item{{$i}}"></textarea><br>
                        @endfor
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Mentés</button>
                </form>
            </div>
        </div>
    </div>
@endsection