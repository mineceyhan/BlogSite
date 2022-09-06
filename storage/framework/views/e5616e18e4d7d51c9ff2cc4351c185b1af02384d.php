<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Güncelle</title>
        <link href="<?php echo e(asset('admin/')); ?>/css/styles.css" rel="stylesheet" />
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
                                <a type="button" href="<?php echo e(url('/panel')); ?>" class="btn btn-light">Ana Sayfa</a>
</div>
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Blog Ekle</h3></div>
                                    <div class="card-body">
                                    <form  method="post" action="<?php echo e(route('insert')); ?>">
                                    <?php echo csrf_field(); ?>
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
                                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <a class="dropdown-item" href="#">  <?php echo e($category->name); ?></a>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                        </div>
                                                            </div>
                                                    <div>
                                                        </div>
                                                            <div class="mt-4 mb-0">
                                                                <button type="submit" class="btn btn-primary" href="<?php echo e(url('insert')); ?>" >Kaydet</button>
                                                            </div>
                                                            <?php if($errors->any()): ?>
                                            <div class="alert  alert-danger" >
                                                <?php echo e($errors->first()); ?>

                                            </div>
                                            <?php endif; ?>
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
        <script src="<?php echo e(asset('admin/')); ?>/js/scripts.js"></script>
    </body>
</html>
<?php /**PATH C:\Users\Mine\Desktop\BlogSite\resources\views/admin/insert.blade.php ENDPATH**/ ?>