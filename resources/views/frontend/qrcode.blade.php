@extends('layouts.frontend')

@section('title')
    QR Code
@endsection

@section('content')
<div class="py-3 mb-4 shadow-sm bg-secondary border-top">
    <div class="container">
    <h6 class="mb-0"><a href="/view-categories">Categories</a> / <a href="{{ url('view-categories/'.$menu->categories->slug) }}">{{ $menu->categories->name }} </a>/ <a href="{{ url('view-categories/'.$menu->categories->slug.'/'.$menu->name) }}">{{ $menu->name }}</a> / <a href="{{ url('qrcode/'.$menu->id) }}">QR Code</a></h6>
    </div>
</div>

    <div class="container pb-5">
        <div class="card shadow ">
            <div class="card-body">
                <div class="row">
                    <div class="col text-center">
                        <img src="{{ asset('assets/uploads/qr/'.$menu->qrcode) }}" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection







