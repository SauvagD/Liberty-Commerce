<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

</head>
<body>
  <header>
    <link href="{{ asset('../css/site.css') }}" rel="stylesheet">

    <div class="conteneur">

      <div class="logobox">
        <a href="{{route('catalog')}}">
        <img src="{{ asset('../../images/logo.png') }}" alt="logo" class="logo"/>
      </a>
				</div>
        <nav class="connexion">
                    <!-- Left Side Of Navbar -->
                    <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                        @guest
                        <
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                            @endif
                        @else

<div class="NAME">
@if (Auth::user()->role == 1)
  <a href="{{ route ('admin') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
      {{ __('Admin') }}
  </a>
  @endif
  <a href="{{ route('cart_index') }}">
    <img class="imag" src="{{ asset('../images/cadis.png') }}" alt="notre logo" title= "Regardez ce beau logo" />
  </a>
  <div>
                                <a class="name" href="{{ route ('login') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                    <a class="item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </div>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
        </nav>
      </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="white">
    				<span class="text_reseaux">
    				<h4 class="black"> Nos réseaux sociaux : </h4>
    				</span>
    				<span class="reseaux">

    						<div class="logo_twitter" >
    								<a href= "https://twitter.com/FaythBy" title="Rejoignez nous sur Twitter" target= "blank"> <img src="{{ asset('images/twitter.png') }}" alt="twitter" class="twitter" /> </a>
    						</div>

    						<div class ="logo_facebook">
    								<a href= "https://www.facebook.com/profile.php?id=100011360366524" title="Rejoignez nous sur Facebook" target= "blank"> <img src="{{ asset('images/facebook.png') }}" 	alt="logo facebook" class="facebook"/> </a>
    						</div>
    				</span>

    						<p class="black"> © Copyright - Tous droits réservés </p>
    		</footer>
</body>
</html>
