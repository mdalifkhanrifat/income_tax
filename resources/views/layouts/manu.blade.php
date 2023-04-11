<header class="bg-light">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('contents/website')}}/images/logo.png" alt="Tax Analyzer">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
               <div class="container text-center">
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/about')}}">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/law')}}">Tax Rules</a>
                            </li>
                        @else

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/about')}}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/law')}}">Tax Rules</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="{{url('/service')}}">Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/info')}}"> Profile </a>
                            </li>
                        @endguest

                    </ul>

                    @guest
                        <a class="btn btn-outline-success m-3" type="submit" href="{{url('register')}}">Register</a>
                        <a class="btn btn-outline-success m-3" type="submit" href="{{url('login')}}">Login</a>
                    @else
                        <a class="btn btn-outline-success p-2" type="submit" href="{{url('/info')}}">{{ Auth::user()->name }}</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none m-3">
                            @csrf
                        </form>
                    @endguest
                </div>
               </div>
            </div>
        </nav>
    </div>
</header>
<!-- header part end -->
