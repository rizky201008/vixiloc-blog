    <section id="navs">
        <div class="container-fluid">
            <div class="row justify-content-center text-center">
                <div class="col-md-5">
                    <h1 class="text-center">{{ $title }}</h1>
                </div>
            </div>
        </div>
    </section>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/posts">Postingan</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Kategori
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Kategori 1</a></li>
                    <li><a class="dropdown-item" href="#">Kategori 2</a></li>
                    <li><a class="dropdown-item" href="#">Kategori 3</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="/categories">Semua Kategori</a></li>
                </ul>
            </li>
        </ul>
    </nav>
