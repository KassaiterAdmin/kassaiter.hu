<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Budapest-Herminamezői Szentlélek Plébánia</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet" type="text/css">
        <link href="css/nav.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" type="image/svg" href="/img/logo.svg"/>

    </head>
    <body>
    @include('components.header')
    @include ('components.nav')
    <div class="container top_align">
        @yield ('content')
    </div>
    @include ('components.footer')
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/pdfobject.js"></script>
    <script>PDFObject.embed("docs/szh_2017_husvet.pdf", "#szentlelek_hirado");</script>
</html>
