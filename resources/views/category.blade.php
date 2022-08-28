@extends('mainlayout')
@section('content')
    <section id="postbycategory">
        <div class="container">
            <h1 class="text-light">{{ ucwords($title) }}</h1>
            <div class="row justify-content-between align-items-center text-light">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ini Adalah Judul Postingan</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt eos
                                repellat saepe, similique autem sequi perferendis tenetur odit deserunt laudantium!</p>
                            <span class="badge bg-info mb-1">Kategori</span>
                            <a href="#" class="btn btn-primary w-100">Baca Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ini Adalah Judul Postingan</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt eos
                                repellat saepe, similique autem sequi perferendis tenetur odit deserunt laudantium!</p>
                            <span class="badge bg-info mb-1">Kategori</span>
                            <a href="#" class="btn btn-primary w-100">Baca Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ini Adalah Judul Postingan</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt eos
                                repellat saepe, similique autem sequi perferendis tenetur odit deserunt laudantium!</p>
                            <span class="badge bg-info mb-1">Kategori</span>
                            <a href="#" class="btn btn-primary w-100">Baca Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
