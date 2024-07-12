<nav class="navbar navbar-expand-lg navbar-dark p-0 py-3" style="background-color: var(--main1-color) ">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="bi bi-list" style="color:var(--main2-color)"></i>
  </button>

  <div class="collapse navbar-collapse d-flex justify-content-between mx-5" id="navbarSupportedContent">
    <div class="nav-logo">
      <a class="navbar-brand" href="/"><img src="\image\MedigoLogo.svg" alt="Medigo Logo"></a>
    </div>

    <div class="nav-searchbar" style="width: 500px">
      @if(!(Request::is('products')))
        <form class="form-inline" action="/products">
          <div class="input-group" style="width: 100%">
            <input type="text" class="form-control" placeholder="Search.." name="search">
            <button class="btn" style="background-color: var(--main2-color)" type="submit">
              <i style="color: var(--main1-color)" class="bi bi-search"></i>
            </button>
          </div>
        </form>
      @else
        <div class="flex-grow-1 mb-3" style="margin-right: 50px; margin-top:20px; width:19%">
        </div>
      @endif
    </div>
    

    <div class="nav-content" style="width: 550px">
      <ul class="navbar-nav d-flex justify-content-between">
        <li class="nav-item">
          <a class="nav-link text-dark" id="NavItems" href="/">
            @if(Request::is("/"))
              <u>HOME</u>
            @else
              HOME
            @endif
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" id="NavItems" href="/products">
            @if(Request::is("products"))
              <u>PRODUCT</u>
            @else
              PRODUCT
            @endif
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" id="NavItems" href="/history">
            @if(Request::is("history"))
              <u>HISTORY</u>
            @else
              HISTORY
            @endif
          </a>
        </li>
  
        @auth
          <li class="nav-item">
            <a class="position-relative nav-link text-dark" id="NavItems" href="/cart" style="width: 45%">
              @if(Request::is("cart"))
                <u>CART</u>
              @else
                CART
              @endif
              @if(isset($cart->cart_details) && count($cart->cart_details) > 0)
                <span class="position-absolute translate-middle badge rounded-pill bg-danger" style="top: 7px; left:60px">
                  {{count($cart->cart_details)}}
                  <span class="visually-hidden">unread messages</span>
                </span>
              @endif
            </a>
          </li>
        @else
          <li class="nav-item">
            <a class="position-relative nav-link text-dark" id="NavItems" href="/login" style="width: 45%">
              @if(Request::is("cart"))
                <u>CART</u>
              @else
                CART
              @endif
            </a>
          </li>
        @endauth
  
        @auth
          <li class="nav-item">
            <a class="text-decoration-none" href="/profile">
              {{-- <button class="nav-link text-light rounded-50 text-decoration-none px-4" id="loginBTN">
                <strong>{{ Str::upper(auth()->user()->name) }}</strong>
              </button> --}}
              @if (auth()->user()->profile_picture) 
                <img src="{{ asset("/storage/". auth()->user()->profile_picture) }}" alt="Profile Picture" class="profile-img-circle" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
              @else
                <img src="/image/userTemp.png" alt="Profile Picture" class="profile-img-circle" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
              @endif
            </a>
          </li>
        @else
          <li class="nav-item">
            <a class="text-decoration-none" href="/login">
              <button class="nav-link text-light rounded-50 text-decoration-none" id="loginBTN"><strong>LOG IN</strong></button>
            </a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>