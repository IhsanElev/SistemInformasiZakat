<header class="main_menu home_menu " >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="img/logo_succ.png"  alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/kalkulator">kalkulator</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/beritasatu">berita</a>
                                </li>
                                @if (auth::check())
                                    @if(!empty($halaman) && $halaman == 'pembayaran')
                                <li class="nav-item">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre href="/pembayaran">pembayaran</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a href="/pembayaran" class="dropdown-item">Form Pembayaran</a>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a href="tbpembayaran" class="dropdown-item">Data pembayaran</a>
                                        </div>
                                </li>
                                    @else
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre href="/pembayaran">pembayaran</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a href="/pembayaran" class="dropdown-item">Form Pembayaran</a>
                                     
                                            <a href="tbpembayaran" class="dropdown-item">Data pembayaran</a>
                                        </div>
                                    </li> 
                                        @endif
                                @endif
                                    @if(!isset(auth::user()->id))
                                   <li class="nav-item">
                                    <a class="nav-link" href="/register">Daftar</a>
                                    </li>
                                    @endif
                                   
                                @if (Auth::check())
                                <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                        
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                           
                                        </div>
                                </li>
                                @else 
                                <li class="nav-item" >
                                <a class="nav-link" href="{{route('login')}}">{{__('Login')}}</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                        
                            <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="single_product">

                                </div>
                            </div> -->
                        </div>
                    </nav>
                </div>
            </div>   
</header>
