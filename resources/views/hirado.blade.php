@extends('index')

@section('content')
    <div class="row">
        <div class="col-lg-2">&nbsp;</div>
        <div class="col-lg-8">
            <h2>A Szentlélek híradó aktuális száma:</h2>
            <embed class="pdfobject pdfobject-container" src="docs/szh_2017_karacsony.pdf">
            <h2>Korábban megjelent számok:</h2>
            <a href="docs/szh_2017_advent.pdf"><i class="glyphicon glyphicon-file"></i>&nbsp;2017 - Advent</a>
            <a href="docs/szh_2017_osz.pdf"><i class="glyphicon glyphicon-file"></i>&nbsp;2017 - Ősz</a>
	        <a href="docs/szh_2017_punkosd.pdf"><i class="glyphicon glyphicon-file"></i>&nbsp;2017 - Pünkösd</a>
            <a href="docs/szh_2017_husvet.pdf"><i class="glyphicon glyphicon-file"></i>&nbsp;2017 - Húsvét</a>
        </div>
        <div class="col-lg-2">&nbsp;</div>
    </div>

@endsection
