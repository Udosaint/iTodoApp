<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="icon" href="img/favicon-02.png">

        <link  href="font/css/all.min.css">
        <script src="font/js/all.min.js"></script>

        <!-- Styles -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
        
    </head>


    <body class="bg-white">

        <!-- ========== Start NAvigation ========== -->
        
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> 

        <!-- ========== End NAvigation ========== -->


        <?php echo e($slot); ?>



        <!-- ========== FOOTER Section ========== -->
        
            <footer class="bg-veryDarkBlue">
      <!-- Flex Container -->
      <div
        class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0"
      >
        <!-- Logo and social links container -->
        <div
          class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start"
        >
          <div class="mx-auto my-6 text-center text-white md:hidden">
            Copyright &copy; 2022, All Rights Reserved
          </div>
          <!-- Logo -->
          <div>
            <img src="img/logo-white.png" class="h-8" alt="" />
          </div>
          <!-- Social Links Container -->
          <div class="flex justify-center space-x-4">
            <!-- Link 1 -->
            <a href="#">
              <img src="img/icon-facebook.svg" alt="" class="h-8" />
            </a>
            <!-- Link 2 -->
            <a href="#">
              <img src="img/icon-youtube.svg" alt="" class="h-8" />
            </a>
            <!-- Link 3 -->
            <a href="#">
              <img src="img/icon-twitter.svg" alt="" class="h-8" />
            </a>
            <!-- Link 4 -->
            <a href="#">
              <img src="img/icon-pinterest.svg" alt="" class="h-8" />
            </a>
            <!-- Link 5 -->
            <a href="#">
              <img src="img/icon-instagram.svg" alt="" class="h-8" />
            </a>
          </div>
        </div>
        <!-- List Container -->
        <div class="flex justify-around space-x-32">
          <div class="flex flex-col space-y-3 text-white">
            <a href="#" class="hover:text-brightRed">Home</a>
            <a href="#" class="hover:text-brightRed">Pricing</a>
            <a href="#" class="hover:text-brightRed">About</a>
          </div>
          <div class="flex flex-col space-y-3 text-white">
            <a href="#" class="hover:text-brightRed">Careers</a>
            <a href="#" class="hover:text-brightRed">Community</a>
            <a href="#" class="hover:text-brightRed">Privacy Policy</a>
          </div>
        </div>

        <!-- Input Container -->
        <div class="flex flex-col justify-between">
          <form>
            <div class="flex space-x-3">
              <input
                type="text"
                class="flex-1 px-4 rounded-md focus:outline-none"
                placeholder="Updated in your inbox"
              />
              <button
                class="px-6 py-2 text-white rounded-md bg-brightRed hover:bg-brightRedLight focus:outline-none"
              >
                Go
              </button>
            </div>
          </form>
          <div class="hidden text-white md:block">
            Copyright &copy; 2022, All Rights Reserved
          </div>
        </div>
      </div>
    </footer>

        <!-- ========== End Section ========== -->
        <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>
<?php /**PATH C:\MY FILES\LARAVEL\PROJECT\iTodoApp\resources\views/layouts/guest.blade.php ENDPATH**/ ?>