<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

        <?php echo \Livewire\Livewire::styles(); ?>

    </head>
    <body>
      
iqbal

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('home')->html();
} elseif ($_instance->childHasBeenRendered('Jk4i8W2')) {
    $componentId = $_instance->getRenderedChildComponentId('Jk4i8W2');
    $componentTag = $_instance->getRenderedChildComponentTagName('Jk4i8W2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Jk4i8W2');
} else {
    $response = \Livewire\Livewire::mount('home');
    $html = $response->html();
    $_instance->logRenderedChild('Jk4i8W2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>


        <?php echo \Livewire\Livewire::scripts(); ?>

        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    </body>
</html><?php /**PATH G:\laragon\www\lav8\resources\views/layouts/master.blade.php ENDPATH**/ ?>