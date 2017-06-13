@extends('index')

@section('content')
    <div class="row">
        <div class="col-lg-2">&nbsp;</div>
        <div class="col-lg-8">
            <h2>A Szentlélek híradó aktuális száma:</h2>
            <embed class="pdfobject pdfobject-container" src="docs/szh_2017_punkosd.pdf">
            <h2>Korábban megjelent számok:</h2>
            <a href="docs/szh_2017_husvet.pdf"><i class="glyphicon glyphicon-file"></i>&nbsp;2017 - Húsvét</a>
        </div>
        <div class="col-lg-2">&nbsp;</div>
    </div>

@endsection