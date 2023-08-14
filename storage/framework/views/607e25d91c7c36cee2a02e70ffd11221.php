<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="icon" href="<?php echo e(asset('img/favicon-02.png')); ?>">

        <link  href="<?php echo e(asset('font/css/all.min.css')); ?>">
        <script src="<?php echo e(asset('font/js/all.min.js')); ?>"></script>
        <!-- Styles -->
       <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

        <?php echo \Livewire\Livewire::styles(); ?>

    </head>


    <body>
        
        

        <?php echo e($slot); ?>


        <!-- ========== End Section ========== -->
    <script src="<?php echo e(asset('js/jquery-3.4.1.min.js')); ?>"></script>

    <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
</html>
<?php /**PATH C:\MY FILES\LARAVEL\PROJECT\iTodoApp\resources\views/layouts/auth.blade.php ENDPATH**/ ?>