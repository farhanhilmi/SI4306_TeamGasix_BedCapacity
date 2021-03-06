<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
    navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            {{-- <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                </li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
            </ol> --}}
            <h6 class="font-weight-bolder mb-0">{{$page}}</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">

            </div>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item d-flex align-items-center dropdown">
                    <a href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                        class="nav-link text-body font-weight-bold px-0">
                        <i class="fa fa-user me-sm-1"></i>
                        {{-- @guest
                        <span class="d-sm-inline d-none">{{session()->get('email') }}</span>
                        @endguest --}}
                        <span class="d-sm-inline d-none">{{session()->get('email') }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        {{-- <li><a class="dropdown-item" href="#">Profile</a></li> --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{route('signOut')}}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>