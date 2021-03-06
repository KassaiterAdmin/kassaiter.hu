<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Budapest-Herminamezői Szentlélek Plébánia</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/app.css" rel="stylesheet" type="text/css">
        <link href="css/nav.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    <script src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script src="js/pdfobject.js"></script>
    <script>PDFObject.embed("docs/szh_2017_osz.pdf", "#szentlelek_hirado");</script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-76686221-2', 'auto');
        ga('send', 'pageview');

    </script>


    <script type="text/javascript">
        $('.form_date').datetimepicker({
            format: 'yyyy-mm-dd',
            language:  'en',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
    </script>
</html>
