@extends('index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-lg-10">
                <h1>Miserend szerkesztése</h1>
                <div class="customHr">&nbsp;</div>
                <form class="form-inline" method="post" action="/miserend" role="form">
                    <div class="form-group">
                        {{ csrf_field() }}
                        <label class="form_date">Dátum</label>
                        <label class="form_time">Időpont</label>
                        <label class="form_story">Felajánlás</label>
                        <label class="form_type">Típus</label>
                        <label class="form_priest">Celebráns</label>
                        @foreach($miserend as $item)
                            <input id="date{{$item->id}}" name="date{{$item->id}}" type="text" class="form-control form_hirdetes form_date" value="{{$item->date}}">
                            <input id="time{{$item->id}}" name="time{{$item->id}}" type="text" class="form-control form_hirdetes form_time" value="{{$item->time}}">
                            <input id="story{{$item->id}}" name="story{{$item->id}}" type="text" class="form-control form_hirdetes form_story" value="{{$item->story}}">
                            <input id="type{{$item->id}}" name="type{{$item->id}}" type="text" class="form-control form_hirdetes form_type" value="{{$item->type}}">
                            <input id="priest{{$item->id}}" name="priest{{$item->id}}" type="text" class="form-control form_hirdetes form_priest" value="{{$item->priest}}"><br>
                        @endforeach
                        @for($i=$counter+1; $i <= 20; $i++)
                            <input id="date{{$i}}" name="date{{$i}}" type="text" class="form-control form_hirdetes form_date" value="">
                            <input id="time{{$i}}" name="time{{$i}}" type="text" class="form-control form_hirdetes form_time" value="">
                            <input id="story{{$i}}" name="story{{$i}}" type="text" class="form-control form_hirdetes form_story" value="">
                            <input id="type{{$i}}" name="type{{$i}}" type="text" class="form-control form_hirdetes form_type" value="">
                            <input id="priest{{$i}}" name="priest{{$i}}" type="text" class="form-control form_hirdetes form_priest" value=""><br>
                        @endfor
                    </div>
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Mentés</button>
                </form>
            </div>
        </div>
    </div>
@endsection