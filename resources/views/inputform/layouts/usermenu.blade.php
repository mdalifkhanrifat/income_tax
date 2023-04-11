<div class="container">
<nav>
    <a class="btn btn-outline-success m-3" type="submit" href="{{url('/info1')}}">InfoOne</a> |
    <a class="btn btn-outline-success m-3" type="submit" href="{{url('/info2')}}">InfoTwo</a> |
    <a class="btn btn-outline-success m-3" type="submit" href="{{url('/info3')}}">InfoThree</a> |
    <a class="btn btn-outline-success m-3" type="submit" href="{{url('/info')}}">Info</a> |
    <a class="btn btn-outline-success m-3" type="submit" href="{{url('/download-pdf')}}">Download Return</a>

    <a class="btn btn-outline-success m-3" type="submit" href="{{ route('logout') }}"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none m-3">
        @csrf
    </form>
</nav>
</div>
