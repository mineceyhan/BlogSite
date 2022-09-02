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
         <!-- Font Awesome icons (free version)-->
         <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-secondary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="d-flex   mt-3 ">
                                <ion-icon name="arrow-back-outline"></ion-icon>
                                <a type="button" href="{{ url('/panel')}}" class="btn btn-light">Ana Sayfa</a>
</div>
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Blog Ekle</h3></div>
                                    <div class="card-body">
                                    <form  method="post" action="{{route('insert')}}">
                                    @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="title" id="tit" type="text"/>
                                                <label for="tit">Başlık</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea style="color:black;" id="inputblog" class="form-control" name="content"  cols="30" rows="50"></textarea>
                                                <label for="inputblog">Blog yazınız.</label>
                                            </div>
                                            <div class="form-floating ">
                                                <input class="form-control" name="category" id="category" type="text"/>
                                                <label for="category">Kategoriler kısmından istediğiniz kategori belirleyip kategori ismini buraya yazınız.</label> <br>
                                                <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Kategoriler
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        @foreach($categories as $category)
                                                        <a class="dropdown-item" href="#">  {{$category->name}}</a>
                                                            @endforeach
                                                        </div>
                                                        </div>
                                                            </div>
                                                    <div>
                                                        </div>
                                                            <div class="mt-4 mb-0">
                                                                <button type="submit" class="btn btn-primary" href="{{url('insert')}}" >Kaydet</button>
                                                            </div>
                                                            @if($errors->any())
                                            <div class="alert  alert-danger" >
                                                {{$errors->first()}}
                                            </div>
                                            @endif
                                    </form>
                                                    </div>
                                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('admin/')}}/js/scripts.js"></script>
    </body>
</html>
