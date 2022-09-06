
<?php $__env->startSection('title' , 'BLOG'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('front.widgets.categoryWidget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-md-9 col-lg-8 col-xl-7">
                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Post preview-->
                        <div class="post-preview">
                        <a href="<?php echo e(url('/blog')); ?>/<?php echo e($blog->id); ?>">
                                <img src="<?php echo e($blog->photo_link); ?>" width="300" height="250" />
                                <h2 class="post-title"><?php echo e($blog->title); ?></h2>
                                <h3 class="post-subtitle"><?php echo e(str_limit($blog->content , 70)); ?></h3>
                            </a>
                            <p class="post-meta">
                                <a href="#!"><?php echo e($blog->users->name); ?> <?php echo e($blog->users->surname); ?></a>
                            </p>
                            <?php echo e($blog->created_at->diffForHumans()); ?>


                        </div>
                        
                        <?php if(!$loop->last): ?>
                         <hr class="my-4" />
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <?php $__env->stopSection(); ?>
      
<?php echo $__env->make('front.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mine\Desktop\BlogSite\resources\views/front/category.blade.php ENDPATH**/ ?>