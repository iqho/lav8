<!DOCTYPE html>
<html>
<head>
    <title>Single</title>
</head>
<body>

<?php if( !empty($posts)): ?>
<?php echo e($posts->name); ?><br>
User: <?php echo e($posts->author->name); ?>

<?php else: ?>
<h1> No Post Found </h1>
<?php endif; ?>



</body>
</html><?php /**PATH G:\laragon\www\lav8\resources\views/single.blade.php ENDPATH**/ ?>