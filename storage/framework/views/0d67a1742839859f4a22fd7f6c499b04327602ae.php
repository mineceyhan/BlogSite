
<?php $__env->startSection('content'); ?>
         
<div class="col-md-9 col-lg-8 col-xl-7">
                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h2><?php echo e($blog->categories->name); ?></h2>
                        <!-- Post preview-->
                        <div class="post-preview">
                        <a href="<?php echo e(url('/blog')); ?>/<?php echo e($blog->id); ?>">
                                <img src="<?php echo e($blog->photo_link); ?>" width="600" height="300" />
                                <h2 class="post-title"><?php echo e($blog->title); ?></h2>
                                <h3 class="post-subtitle"><?php echo e(str_limit($blog->content , 70)); ?></h3>
                            </a>
                            <p class="post-meta">
                            <?php echo e($blog->created_at->diffForHumans()); ?>

                            </p>
                                      <div class="d-flex   mt-3 ">
                                          <a class="btn btn-primary"  href="<?php echo e(url('/update')); ?>/<?php echo e($blog->id); ?>">Güncelle</a>
                                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">sil</button>
                                      </div>
                        </div>
                        <?php if(!$loop->last): ?>
                         <hr class="my-4" />
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
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
        <a class="btn btn-success" href="<?php echo e(url('/delete')); ?>/<?php echo e($blog->id); ?>">Sil</a>
      </div>
    </div>
  </div>
</div>

                </main>
                <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mine\Desktop\BlogSite\resources\views/admin/category.blade.php ENDPATH**/ ?>