@extends('layouts.main')
@section('content')
    <section id="welcome-1">
        <div class="container-fluid">
            <div class="row justify-content-center text-center">
                <div class="col-md-5">
                    <h1 class="text-center">Welcome</h1>
                </div>
            </div>
        </div>
    </section>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Posts</a></li>
            <li><a href="#">Category</a></li>
        </ul>
    </nav>
    <section id="welcome-2">
        <div class="container-fluid">
            <div class="card-randpost">
                <div class="row justify-content-center">
                    <h2 class="text-center mb-4">Postingan Menarik</h2>
                    <div class="col-md-3">
                        <div class="cards">
                            <a href="#">
                                <img src="https://images.unsplash.com/photo-1578632749014-ca77efd052eb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                    alt="image">
                                <h3>Judul Saja Ya Guys Ya Ini</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, debitis?</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="ads">
        <div class="container">
            <div class="row justify-content-center text-center mb-4">
                <a href="https://my.domainesia.com/ref.php?u=19662"><img src="https://dnva.me/32ar4" width="728px"
                        height="90px" alt="Web Hosting"></a>
            </div>
        </div>
    </section>
    <section id="welcome-3">
        <div class="container-fluid">
            <div class="card-randpost">
                <div class="row justify-content-center">
                    <h2 class="text-center mb-4">Postingan Terbaru</h2>
                    <div class="col-md-3">
                        <div class="cards">
                            <a href="#">
                                <img src="https://images.unsplash.com/photo-1578632749014-ca77efd052eb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                    alt="image">
                                <h3>Judul Saja Ya Guys Ya Ini</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, debitis?</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-4 text-center">
                    <div class="col-md-4"><button class="btn btn-primary"><i class="bi bi-compass"></i>Tampilkan
                            Semua</button></div>
                </div>
            </div>
        </div>
    </section>
@endsection
