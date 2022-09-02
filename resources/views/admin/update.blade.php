<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Güncelle</title>
        <link href="{{asset('admin/')}}/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="d-flex   mt-3 ">
                                     <ion-icon name="arrow-back-outline"></ion-icon>
                                     <a type="button" href="{{url('/panel')}}" class="btn btn-light">Ana Sayfa</a>
                                </div>
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Blog Güncelle</h3></div>
                                    @foreach($blogs as $blog)
                                    <div  class="my-4" style="padding:'5px 5px 5px 5px ;'">  
                                    <h4 class="post-title">{{$blog->title}}</h4>
                                    </div>
                                    <div class="card-body">
                                    <form  method="post" action="{{route('updatePost')}}">
                                        @csrf
                                            <div class="form-floating mb-3">
                                            <input type="hidden" id="user_id" name="user_id" value="{{$blog->user_id}}">
                                            <input type="hidden" id="id" name="id" value="{{$blog->id}}">
                                                <textarea class="" name="content" id="" cols="91" rows="20"> {{$blog->content}}</textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary" href="{{url('insert')}}" >Kaydet</button>
                                    </form>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('admin/')}}/js/scripts.js"></script>
    </body>
</html>
