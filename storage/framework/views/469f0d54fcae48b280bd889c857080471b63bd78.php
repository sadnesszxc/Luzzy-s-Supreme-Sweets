

<?php $__env->startSection('content'); ?>
     <h1>Create Post</h1>
     <?php echo Form::open(['action' => 'PostsController@store', 'method' => 'POST']); ?>

     <div class="form-group">
        <?php echo e(Form::label('title', 'Title')); ?>

        <?php echo e(Form::text('title', '', ['class' => 'form-control', ])); ?>

    </div>
          <div class="form-group">
            <?php echo e(Form::label('body', 'Body')); ?>

            <?php echo e(Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])); ?>

        </div>
        <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

     <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LAB1\resources\views/posts/create.blade.php ENDPATH**/ ?>