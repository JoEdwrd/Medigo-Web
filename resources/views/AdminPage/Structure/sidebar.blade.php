<nav id="sidebarMenu" class="col-lg-2 d-md-block bg-light sidebar collapse sticky-top">
    <div class="position-sticky pt-3 d-flex flex-column">
        <ul class="nav flex-column">
            <li>
                <div class="d-flex flex-row justify-content-center mt-2">
                    <img src="\image\PP.png" alt="profile picture" style="width: 50px;height:50px;margin-right:20px">
                    <div class="d-flex flex-column">
                        <label id="textfont" style="font-weight: bold">Shamgar Eugene</label>
                        <label id="textfont">CTO,Jakarta</label>
                    </div>
                </div>
                <hr style="margin-left:4px;margin-right:4px">
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is("dashboard") ? "active":"" }}" aria-current="page" href="/dashboard">
                <i class="bi bi-house-door-fill me-2"></i>
                Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is("dashboard/product*") ? "active":"" }}" href="/dashboard/products">
                <i class="bi bi-box-seam-fill me-2"></i>
                Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="bi bi-people-fill  me-2"></i>
                Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="bi bi-wallet2 me-2"></i>
                Transactions
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is("dashboard/promotions*") ? "active" : "" }}" href="/dashboard/promotions">
                <i class="bi bi-cash-coin me-2"></i>
                Promo
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="bi bi-person-heart me-2"></i>
                Product Category
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="bi bi-envelope-paper-fill  me-2"></i>
                Prescriptions
                </a>
            </li>   
        </ul>

        <hr style="margin-left:4px;margin-right:4px">
        
        <div class="nav-item">
            <a class="nav-link" href="#">
            <i class="bi bi-door-closed-fill  me-2"></i>
            Logout
            </a>
        </div>

        <div class="nav-item d-flex justify-content-center" style="margin-top: 80%">
            <a class="navbar-brand flex-grow-1 text-center P-0 m-0" href="/dashboard">
                <img src="\image\MedigoLogo.svg" alt="Medigo Logo">
            </a>
        </div>
    </div>
</nav>