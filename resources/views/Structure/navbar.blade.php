<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: var(--main1-color) ">
    {{-- <div class="container" > --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list" style="color:var(--main2-color)"></i>
        </button>

        <div class="collapse navbar-collapse" style="margin-left: 50px"  id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 flex-grow-1">
                <li class="nav-item col-md-3">
                    <a class="nav-link text-dark " id="NavItems" href="/">
                      @if(Request::is("/"))
                      <u>HOME</u>
                      @else
                      HOME
                      @endif
                    </a>
                </li>
                <li class="nav-item col-md-3">
                    <a class="nav-link text-dark" id="NavItems" href="/products">
                      @if(Request::is("products"))
                      <u>PRODUCT</u>
                      @else
                      PRODUCT
                      @endif
                    </a>
                </li>
                <li class="nav-item col-md-3">
                    <a class="position-relative nav-link text-dark" id="NavItems" href="/cart" style="width: 45%">
                      @if(Request::is("cart"))
                      <u>CART</u>
                      @else
                      CART
                      @endif
                      @if(isset($cart->cart_details))
                      <span class="position-absolute top-15 start-100 translate-middle badge rounded-pill bg-danger">
                        {{count($cart->cart_details)}}
                        <span class="visually-hidden">unread messages</span>
                      </span>
                      @endif
                    </a>
                </li>
                <li class="nav-item col-md-3">
                    <a class="text-decoration-none" href="/login">
                        <button class="nav-link text-light rounded-50 text-decoration-none" id="loginBTN"><strong>LOG IN</strong></button>
                    </a>
                </li>
            </ul>

            <!-- Add margin-right to navbar-brand -->
            <a class="navbar-brand flex-grow-1 text-center me-3" href="/"><img src="\image\MedigoLogo.svg" alt="Medigo Logo"></a>

              @if(!(Request::is('products')))
                <form class="form-inline my-2 my-lg-0 flex-grow-1" style="margin-right: 50px;" action="/products">
                  <div class="input-group mb-3 w-100" style="margin-top:20px;">
                      <input type="text" class="form-control" placeholder="Search.." name="search">
                      <button class="btn" style="background-color:var(--main2-color)" type="submit"><i style="color: var(--main1-color)" class="bi bi-search"></i></button>
                  </div>
                </form>
              @else
                <div class="flex-grow-1 mb-3" style="margin-right: 50px; margin-top:20px; width:19%">

                </div>
              @endif
        </div>
    {{-- </div> --}}
</nav>




{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid bg-primary">
    <a class="navbar-brand text-light" href="/">WPU Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ ($active==="home")? 'active' :"" }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ ($active==="about")? 'active' :"" }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ ($active=="posts")? 'active' :"" }}" href="/blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ ($active=="categories")? 'active' :"" }}" href="/categories">Categories</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
      @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toogle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back,{{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">
                  <i class="bi bi-box-arrow-right"></i> Logout
                </button>
              </form>
            </li>
          </ul>
        </li>
      @else
        <li class="nav-item">
          <a class="nav-link {{ ($active=="login")? 'active' :"" }}" href="/login" ><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
      @endauth
      </ul>

    </div>
  </div>
</nav> --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public\css\style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img\MedigoLogo.svg" alt="Medigo Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Chart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-primary rounded text-light" href="#">Login</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Chart
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Home</a></li>
            <li><a class="dropdown-item" href="#">Cart</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html> --}}
