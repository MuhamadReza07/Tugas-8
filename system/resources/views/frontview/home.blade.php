@extends('frontview.base')

@section('client_content')
<div class="container px-4 px-lg-5">
@foreach ($list_artikel as $artikel)
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <div class="post-preview">
                <a href="{{ url('artikel', $artikel->id) }}">
                            <h2 class="post-title">{{ $artikel->judul }}</h2>
                            <h3 class="post-subtitle">{{ $artikel->deskripsi }}</h3>
                </a>
                <p>
                    <strong> Penulis : Muhamad Reza </strong>
                    <br>
                    <strong> Waktu : 30 Agustus 2022 </strong>
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection