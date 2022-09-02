@extends('admin.layouts.main')
@section('content')
         
<div class="col-md-9 col-lg-8 col-xl-7">
                    @foreach($blogs as $blog)
                    <h2>{{$blog->categories->name}}</h2>
                        <!-- Post preview-->
                        <div class="post-preview">
                        <a href="{{ url('/blog')}}/{{$blog->id}}">
                                <img src="{{$blog->photo_link}}" width="600" height="300" />
                                <h2 class="post-title">{{$blog->title}}</h2>
                                <h3 class="post-subtitle">{{str_limit($blog->content , 70)}}</h3>
                            </a>
                            <p class="post-meta">
                            {{$blog->created_at->diffForHumans()}}
                            </p>
                                      <div class="d-flex   mt-3 ">
                                          <a class="btn btn-primary"  href="{{url('/update')}}/{{$blog->id}}">Güncelle</a>
                                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">sil</button>
                                      </div>
                        </div>
                        @if(!$loop->last)
                         <hr class="my-4" />
                        @endif
                    @endforeach
                    
                    </div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Blog Sil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Silmek istediğinize emin misiniz?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <a class="btn btn-success" href="{{url('/delete')}}/{{$blog->id}}">Sil</a>
      </div>
    </div>
  </div>
</div>

                </main>
                @endsection