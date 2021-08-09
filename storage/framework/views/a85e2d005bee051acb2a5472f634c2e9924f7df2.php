

<?php $__env->startSection('content'); ?>
     <a href="/posts" class="btn btn-default"> Back</a>
     <h1><?php echo e($post->title); ?></h1>
     <div>
         <?php echo e($post->body); ?>

     </div>
     <hr>
     <small>Written on <?php echo e($post->created_at); ?></small>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LAB1\resources\views/posts/show.blade.php ENDPATH**/ ?>