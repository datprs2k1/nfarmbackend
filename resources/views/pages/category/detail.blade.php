@extends('layouts.layout')

@section('title')
{{$category->name}} - NFarm
@endsection

@section('content')
<section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="background: url('assets/img/page-header-bg.svg')no-repeat center bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="section-heading text-center">
                    <h1 class="display-5">{{$category->name}}</h1>
                    <p class="lead mb-0">{{$category->detail}}</p>
                </div>
            </div>
        </div>
        <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
    </div>
</section>
<section class="masonary-blog-section ptb-80">
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-lg-4 col-md-6">
                <div class="single-article rounded-custom my-3">
                    <a href="{{route('post.detail', ['slug' => $post->slug])}}" class="article-img">
                        <img src="{{$post->image}}" alt="article" class="img-fluid">
                    </a>
                    <div class="article-content p-4">
                        <a href="{{route('post.detail', ['slug' => $post->slug])}}">
                            <h2 class="h5 article-title limit-2-line-text">{{$post->name}}</h2>
                        </a>
                        <p class="limit-2-line-text">{{$post->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!--pagination start-->
        {{ $posts->links() }}

        {{-- <div class="row justify-content-center align-items-center mt-5">
            <div class="col-auto my-1">
                <a href="#" class="btn btn-soft-primary btn-sm">Previous</a>
            </div>
            <div class="col-auto my-1">
                <nav>
                    <ul class="pagination rounded mb-0">
                        <li class="page-item"><a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-auto my-1">
                <a href="#" class="btn btn-soft-primary btn-sm">Next</a>
            </div>
        </div> --}}
        <!--pagination end-->
    </div>
</section>
@endsection
