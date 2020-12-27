<html>
    <body>
    <div>
    	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($user->name); ?>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <hr>
        <div>
    	<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($post->name); ?> <br>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
        <hr>
        <div>
    	<?php $__currentLoopData = $postusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($post->name); ?> <br>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    </body>
</html>
<?php /**PATH G:\laragon\www\lav8\resources\views/wel.blade.php ENDPATH**/ ?>