<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">Blog Website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>
                @guest
                <li class="nav-item"><a class="nav-link" href="{{route('user.register')}}">Registation</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('user.login')}}">Login</a></li>
                @endguest
                @auth
                 <li class="nav-item"><a class="nav-link" href="{{route('user.logout')}}">LogOut</a></li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
