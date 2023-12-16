@extends('layouts.layout')

@section('title')
    {{$post->name}} - NFarm
@endsection

@section('content')
<section class="page-header position-relative overflow-hidden ptb-80 bg-dark" style="background: url('assets/img/page-header-bg.svg')no-repeat bottom left">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-12">
                <div class="d-flex justify-content-center">
                    <a href="{{route('category.detail', ['slug' => $post->category->slug])}}" class="btn btn-soft-primary btn-pill btn-lg m-2">{{$post->category->name}}</a>
                </div>
                <h1 class="display-5">{{$post->name}}</h1>
            </div>
        </div>
        <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
    </div>
</section>
<section class="blog-details ptb-120">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-12 pe-lg-5">
                <div class="blog-details-wrap">
                    {!!$post->content!!}
                </div>
            </div>
        </div>
    </div>
    <!--newsletter subscription container start-->
    <!--newsletter subscription container end-->
</section>

@endsection
