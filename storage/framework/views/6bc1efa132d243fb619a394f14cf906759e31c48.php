<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="<?php echo e(asset('admin/')); ?>/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-secondary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Giriş</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="<?php echo e(url('login')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">şifre</label>
                                                
                                            </div>
                                             <a class="small" href="<?php echo e(url('registerPage')); ?>">Kayıt Ol</a> <br>
                                            <?php if($errors->any()): ?>
                                            <div class="alert  alert-danger" >
                                                <?php echo e($errors->first()); ?>

                                            </div>
                                            <?php endif; ?>

                                           
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                <button type="submit" class="btn btn-primary" href="#">Giriş</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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
                            <div class="text-muted">Blog Admin Panel 2022</div>
                          
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('admin/')); ?>/js/scripts.js"></script>
    </body>
</html>
<?php /**PATH C:\Users\Mine\Desktop\BlogSite\resources\views/auth/login.blade.php ENDPATH**/ ?>