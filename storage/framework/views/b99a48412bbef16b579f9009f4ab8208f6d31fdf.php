<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">

        <?php echo \Livewire\Livewire::styles(); ?>


        <!-- Scripts -->
        <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            
            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    
                </div>
            </header>

iqbal apps2


<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('home')->html();
} elseif ($_instance->childHasBeenRendered('A4a0wze')) {
    $componentId = $_instance->getRenderedChildComponentId('A4a0wze');
    $componentTag = $_instance->getRenderedChildComponentTagName('A4a0wze');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('A4a0wze');
} else {
    $response = \Livewire\Livewire::mount('home');
    $html = $response->html();
    $_instance->logRenderedChild('A4a0wze', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>



            <!-- Page Content -->

        </div>

     

        <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
</html>
<?php /**PATH G:\laragon\www\lav8\resources\views/layouts/app.blade.php ENDPATH**/ ?>