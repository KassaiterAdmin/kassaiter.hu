<div class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse ">
            <ul class="nav navbar-nav">
                <li>
                    <a class="home_button" href="/"><i class="glyphicon glyphicon-home"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Rólunk &ensp;<span class="glyphicon glyphicon-chevron-down"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/plebania">Plébánia</a></li>
                        <li><a href="/szolgalat">Szolgálat</a></li>
                        <li><a href="/kollegium">Kollégium</a></li>
                        <li><a href="/lelkipasztoraink">Lelkipásztoraink</a></li>
                        <li><a href="/egyhaztanacs">Egyháztanács</a></li>
                        <li><a href="/kozossegek">Közösségek</a></li>
                        <li><a href="/elerhetoseg">Elérhetőség</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Egyházi élet(évek) &ensp;<span class="glyphicon glyphicon-chevron-down"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://www.magyarkurir.hu/hirek/meghirdette-papa-hit-evet">Hit éve 2013</a></li>
                        <li><a href="http://www.magyarkurir.hu/megszentelt-elet">Megszentelt élet éve 2015</a></li>
                        <li><a href="http://www.magyarkurir.hu/cimke/az-irgalmassag-szenteve">Irgalmasság éve 2016</a></li>
                        <li><a href="/olvasnivalo">Olvasnivaló</a></li>
                    </ul>
                </li><li class="dropdown">
                    <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Egyházi témák &ensp;<span class="glyphicon glyphicon-chevron-down"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/szentsegeink">Szentségeink</a></li>
                        <li><a href="/szentmise">Szentmise</a></li>
                    </ul>
                </li>
                <li class="hidden">
                    <a href="/galeria">Galéria</a>
                </li>
                <li>
                    <a href="/hirado">Szentlélekhiradó</a>
                </li>
                <li>
                    <a href="/programok">Programok</a>
                </li>
                <li>
                    <a href="/konyvtar">Könyvtár</a>
                </li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                @if (Auth::guest())
                    <li class="hidden"><a href="{{ route('login') }}">Bejelentkezés</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <i class="glyphicon glyphicon-chevron-down"></i></a>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/register">Felhasználó hozzáadása</a>
                            </li>
                            <li>
                                <a href="/admin">Adminisztráció</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Kijelentkezés
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>