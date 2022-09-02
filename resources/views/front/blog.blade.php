
@extends('front.layouts.main')
@section('title' , 'BLOG')
@section('content')
@include('front.widgets.categoryWidget')
<article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-9 col-xl-7">
                    @foreach($blogs as $blog)
                        <!-- Post preview-->
                        <div class="post-preview">
                            <span>
                                <h2 class="post-title">{{$blog->title}}</h2>
                                <h3 class="post-subtitle">{{$blog->content}}</h3>
                            </span>
                           
                            <p class="post-meta">
                                <a href="#!">{{$blog->users->name}}  {{$blog->users->surname}}</a><br>
                            {{$blog->created_at->diffForHumans()}} <br>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                    </svg>
{{$blog->read_count}}
                            </p>

                    @endforeach
                    </div>
                </div>
            </div>
        </article>
        @endsection