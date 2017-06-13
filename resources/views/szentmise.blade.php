@extends('index')

@section('content')
    <h1>Dr. Petró József: A szentmise története</h1>
    Az alábbi leírás 1930-ban született, így ennek megfelelően a latin (tridenti) nyelvű misékre vonatkozik és az imák fordítása ennek megfelelően eltér a maitól és régies nyelvezetű.<br>
    A szöveg eredete a <a href="http://www.ppek.hu/k164.htm">Pázmány Péter Elektronikus Könyvtár</a> a magyarnyelvű keresztény irodalom tárháza. <br>
    Felhasználhatóság: csak lelkipásztori munkára, nyomtatása nem engedélyezett.<br>
    Szerzői jog tulajdonosa: Szent István Társulat<br><br>
    
    @include('szentmise.szentmise_nav')
    

    <h3 id="eloszo">Előszó<a class="change_section" href="#attekintes">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a></h3>
    @include('szentmise.I')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="attekintes">Áttekintés a szentmise történetéről
        <a class="change_section" href="#eloszo"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#1"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.II')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>

    

    <h3 id="1">Lépcsőima
        <a class="change_section" href="#attekintes"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#2"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.1')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="2">Oltárfüstölés
        <a class="change_section" href="#1"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#3"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.2')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="3">Introitus
        <a class="change_section" href="#2"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#3"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.3')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="4">Kyrie eleison
        <a class="change_section" href="#3"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#5"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.4')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="5">Gloria
        <a class="change_section" href="#4"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#6"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.5')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="6">Oratio
        <a class="change_section" href="#5"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#7"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.6')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="7">A szentlecke
        <a class="change_section" href="#6"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#8"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.7')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>

    

    <h3 id="8">Karversek a szentlecke után
        <a class="change_section" href="#7"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#9"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.8')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="9">Evangélium
        <a class="change_section" href="#8"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#10"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.9')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="10">Szentbeszéd
        <a class="change_section" href="#9"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#11"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.10')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="11">Hiszekegy
        <a class="change_section" href="#10"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#12"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.11')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="12">Felajánlás
        <a class="change_section" href="#11"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#13"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.12')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="13">A második oltárfüstölés és a kézmosás
        <a class="change_section" href="#12"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#14"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.13')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="14">Secreta
        <a class="change_section" href="#13"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#15"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.14')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="15">Praefatio
        <a class="change_section" href="#14"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#16"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.15')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="16">Sanctus
        <a class="change_section" href="#15"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#17"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.16')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="17">Kánon
        <a class="change_section" href="#16"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#18"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.17')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="18">Te igitur
        <a class="change_section" href="#17"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#19"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.18')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="19">Megemlékezés az élőkről
        <a class="change_section" href="#18"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#20"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.19')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="20">Communicantes
        <a class="change_section" href="#19"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#21"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.20')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="21">Hanc igitur és Quam oblationem
        <a class="change_section" href="#20"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#22"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.21')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="22">Átváltoztatás
        <a class="change_section" href="#21"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#23"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.22')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="23">Megemlékezés az Úr haláláról
        <a class="change_section" href="#22"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#24"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.23')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="24">Supra quae
        <a class="change_section" href="#23"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#25"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.24')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="25">Supplices te rogamus
        <a class="change_section" href="#24"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#26"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.25')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="26">Megemlékezés a holtakról
        <a class="change_section" href="#25"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#27"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.26')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="27">Nobis quoque
        <a class="change_section" href="#26"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#28"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.27')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="28">Per quem haec omnia
        <a class="change_section" href="#27"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#29"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.28')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="29">Per ipsum
        <a class="change_section" href="#28"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#30"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.29')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="30">Miatyánk
        <a class="change_section" href="#29"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#31"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.30')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="31">Libera nos
        <a class="change_section" href="#30"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#32"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.31')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="32">A Szentostya eltörése
        <a class="change_section" href="#31"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#33"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.32')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="33">A szent Test és Vér egyesítése
        <a class="change_section" href="#32"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#34"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.33')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="34">Agnus Dei
        <a class="change_section" href="#33"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#35"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.34')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="35">Békeköszöntés
        <a class="change_section" href="#34"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#36"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.35')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="36">Előkészület a szentáldozásra
        <a class="change_section" href="#35"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#37"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.36')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="37">Szentáldozás
        <a class="change_section" href="#36"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#38"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.37')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="38">A hívek áldoztatása
        <a class="change_section" href="#37"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#39"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.38')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="39">Az egy szín alatt való áldozás
        <a class="change_section" href="#38"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#40"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.39')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="40">A kehely kiöblítése
        <a class="change_section" href="#39"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#41"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.40')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="41">Zsoltáréneklés az áldozás alatt
        <a class="change_section" href="#40"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#42"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.41')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="42">Postcommunio
        <a class="change_section" href="#41"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#43"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.42')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="43">A liturgikus elbocsátás
        <a class="change_section" href="#42"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#45"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.43')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="44">Placeat
        <a class="change_section" href="#43"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#45"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.44')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="45">Áldás
        <a class="change_section" href="#44"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#46"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.45')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="46">Az utolsó evangélium
        <a class="change_section" href="#45"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#IV"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.46')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="IV">Utószó
        <a class="change_section" href="#46"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>|
        <a class="change_section" href="#V"> következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
    </h3>
    @include('szentmise.IV')
    <div class="row">
        <p class="to_top"><a href="#top">A lap tetejére</a><span class="glyphicon glyphicon-arrow-up"></span></p>
    </div>
    

    <h3 id="V">Felhasznált irodalom
        <a class="change_section" href="#IV"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet </a>
    </h3>
    @include('szentmise.V')
@endsection