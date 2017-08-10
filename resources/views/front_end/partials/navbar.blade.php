  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">CLYDE</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Acceuil</a>
                    </li>
                    <li>
                        <a href="#">Restaurant</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
                 <ul class="nav navbar-nav navbar-right">
                 @if (auth::guest())
                    <li>
                        <a href="{{route('login')}}">Connexion</a>
                    </li>
                    <li>
                        <a href="{{route('register')}}">S'inscrire</a>
                    </li>
                    @else
                        @if( Cart::count() > 0)
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span> {{Cart::count()}} - Plats<span class="caret"></span></a>
                          <ul class="dropdown-menu dropdown-cart" role="menu">
                            @foreach(cart::content() as $plat)
                              <li>
                                  <span class="item">
                                    <span class="item-left">
                                        <img src="{{asset('images/'.$plat->options->image)}}" alt="" height="50px" width="50px" />
                                        <span class="item-info">
                                            <span>{{$plat->name}}</span>
                                            <span class="small" >{{$plat->options->resto}}</span>
                                            <span class="small" style="color: red; text-decoration: inherit;">{{$plat->price}} XFA</span>
                                        </span>
                                    </span>
                                    <span class="item-right">
                                        <button class="btn btn-xs btn-danger pull-right">x</button>
                                    </span>
                                </span>
                              </li>
                             @endforeach
                              <li class="divider"></li>
                              <li><a class="text-center" href="{{route('panier')}}">voir le panier</a></li>
                          </ul>
                        </li>                            
                        @else
                            <li>
                                <a href="#">0 <span class="glyphicon glyphicon-shopping-cart"></span></a>
                            </li>
                        @endif

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                             {{ Auth::user()->nom }} <span class="caret"></span>
                        </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{route('dashboard')}}">Espace Membre</a> </li>
                                <li><a href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                Deconnexion
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
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
