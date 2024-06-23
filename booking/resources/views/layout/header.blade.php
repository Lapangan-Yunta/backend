    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="">
        <div class="container-fluid" style="padding: 5px 80px">
            <a class="navbar-brand" href="/frontend/home"><span><img class="img-fluid ms-3" src="{{ asset('img/lgo.png') }}" width="50px"
                        height="50px" alt="" /></span>MY FUTSAL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item mt-2">
                        <a class="nav-link" href="/frontend/home">HOME</a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" href="/frontend/venue">VENUE</a>
                    </li>
                    <li class="nav-item nav-link mt-2"><a href="/frontend/payment"><i class="fa-solid fa-cart-shopping"
                                style="color: #b31312"></i></a>
                    </li>
                    <li class="nav-item nav-link">
                        <a href="/auth/register" class="text-decoration-none"><button type="button"
                                class="shadow-sm d-flex btn btn-light"
                                style="font-family: 'inter'; font-weight: bold">REGISTER</button></a>
                    </li>
                    <li class="nav-item nav-link">
                        <a href="/auth/login" class="text-decoration-none"><button type="button" class="d-flex btn"
                                style="background: #b31312; color: #f5f5f5; font-family: 'inter'; font-weight: bold">LOGIN</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>