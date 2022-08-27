@extends('layouts.main')
@section('content')
    <section id="ads">
        <div class="container-fluid">
            <div class="row justify-content-center text-center mb-4">
                <a href="https://my.domainesia.com/ref.php?u=19662"><img src="https://dnva.me/32ar4"
                         alt="Web Hosting"></a>
            </div>
        </div>
    </section>
    <section id="posts-1">
        <div class="container-fluid">
            <div class="card-post">
                <div class="row justify-content-center">
                    <h2 class="text-center mb-4">Semua Postingan</h2>
                    @foreach ($post as $posts)
                        <div class="col-md-3">
                        <div class="cards">
                            <a href="#">
                                <img src="https://images.unsplash.com/photo-1578632749014-ca77efd052eb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                    alt="image">
                                <h3>{{ $posts->title }}</h3>
                                <p>{{ $posts->description }}</p>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
