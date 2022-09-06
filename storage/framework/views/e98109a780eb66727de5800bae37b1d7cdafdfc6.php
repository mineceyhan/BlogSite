<div class="col-md-3" style=' 
        left: 30px; bottom :30px; right:12px;'>
                <div class="card" style="width: 15rem;">
                          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($category->parent_category_id == 0): ?>
                                <div class="btn-group">
                                        <a  href="<?php echo e(url('/category')); ?>/<?php echo e($category->id); ?>" type="button" class="dropdown-item"><?php echo e($category->name); ?></a><br>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <?php if( $category1->parent_category_id == $category->id): ?>
                                            <button type="button" class=" dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="<?php echo e(url('/category')); ?>/<?php echo e($category1->id); ?>">  <?php echo e($category1->name); ?></a>
                                                    </div>
                                         <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>

                        
<?php /**PATH C:\Users\Mine\Desktop\BlogSite\resources\views/front/widgets/categoryWidget.blade.php ENDPATH**/ ?>