<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">Blog Website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link {{request()->is('admin/dashboard')? 'active':''}}" href="#">Dashboard</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{request()->is('admin/category/index')?'active':''}}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item {{request()->is('admin/category/create')?'active':''}}" href="{{route('admin.category.create')}}">Add Category</a></li>
                        <li><a class="dropdown-item {{request()->is('admin/category/index')?'active':''}}" href="{{route('admin.category.index')}}">Magage Category</a></li>

                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('user.logout')}}">LogOut</a></li>


            </ul>
        </div>
    </div>
</nav>
