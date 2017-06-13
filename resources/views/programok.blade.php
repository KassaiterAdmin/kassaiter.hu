@extends('index')

@section('content')
    <h1>Programajánló</h1>
    <a href="mailto:rendszergazda.kassaiter@gmail.com?Subject=irany a természet&amp;body=Kedves Címzett!%0D%0ASzeretném a honlapon viszont látni az alábbi programot:%0D%0A%0D%0ATalálkozó időpontja:%0D%0ATalálkozó helyszíne:%0D%0AA program rövid leírása:%0D%0AA program időtartama:%0D%0AA program leírása:%0D%0AJelentkezési határidő:%0D%0AKapcsolattartó adatai (E-mail, név):%0D%0AKedvcsinálóként egy url:%0D%0A%0D%0AKöszönettel:">
        <p class="fontos_info" >
           Amennyiben saját programját is szeretné viszont látni ide kattintva írhat nekünk! Amennyiben a link nem működik levelét a rendszergazda.kassaiter@gmail.com-ra is küldheti.
        </p>
    </a>
    <h3>Aktuális kirándulások:</h3>
    @foreach ($aktualis as $item)
        <div class="row program_item">
            <div class="col-lg-4">
                <img class="program_picture" src="{{$item->image}}" alt="{{$item->nev}}" />
            </div>
            <div class="col-lg-8 program_content">
                <h4>{{$item->nev}}</h4>
                <p>
                    <strong>Találkozó helye, ideje:</strong> {{$item->tal_hely}} , {{$item->tal_date}} <br>
                    <strong>Időtartam:</strong> {{$item->idotartam}} <br>
                    {{$item->story}} <br>
                    <strong>Jelentkezés, bővebb információ:</strong><br>
                    &emsp;<i class="glyphicon glyphicon-envelope"></i>&nbsp;{{$item->kapcsolat}} <br>
                    &emsp;<i class="glyphicon glyphicon-globe"></i>&nbsp;<a href="{{$item->izelito}}">{{$item->izelito}}</a>
                </p>

            </div>
        </div>
    @endforeach
    <h3>Szervezés alatt:</h3>
    @foreach ($tervezett as $item)
        <div class="row program_item">
            <div class="col-lg-4">
                <img class="program_picture" src="{{$item->image}}" alt="{{$item->nev}}" />
            </div>
            <div class="col-lg-8 program_content">
                <h4>{{$item->nev}}</h4>
                <p>
                    <strong>Találkozó helye, ideje:</strong> Bővebb információk hamarosan! <br>
                    <strong>Időtartam:</strong> {{$item->idotartam}} <br>
                    {{$item->story}} <br>
                    <strong>Bővebb információ:</strong><br>
                    &emsp;<i class="glyphicon glyphicon-envelope"></i>&nbsp;{{$item->kapcsolat}} <br>
                    &emsp;<i class="glyphicon glyphicon-globe"></i>&nbsp;<a href="{{$item->izelito}}">{{$item->izelito}}</a>
                </p>

            </div>
        </div>
    @endforeach
    <h3>Eddig megszervezett kirándulások - kedvcsináló gyanánt:</h3>
    @foreach ($lejart as $item)
        <div class="row program_item">
            <div class="col-lg-4">
                <img class="program_picture" src="{{$item->image}}" alt="{{$item->nev}}" />
            </div>
            <div class="col-lg-8 program_content">
                <h4>{{$item->nev}}</h4>
                <p>
                    <strong>Időtartam:</strong> {{$item->idotartam}} <br>
                    {{$item->story}} <br>
                    <strong>Bővebb információ:</strong><br>
                    &emsp;<i class="glyphicon glyphicon-envelope"></i>&nbsp;{{$item->kapcsolat}} <br>
                    &emsp;<i class="glyphicon glyphicon-globe"></i>&nbsp;<a href="{{$item->izelito}}">{{$item->izelito}}</a>
                </p>

            </div>
        </div>
    @endforeach
@endsection