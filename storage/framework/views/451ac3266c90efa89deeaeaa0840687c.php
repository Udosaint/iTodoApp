<?php if (isset($component)) { $__componentOriginala6488acc797ee40bc55ed6344dee8ea1 = $component; } ?>
<?php $component = App\View\Components\AuthLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('auth-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AuthLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <div class="flex flex-row">
        
        <div class="hidden md:flex md:w-1/2 h-screen bg-gradient-to-tr from-brightRedLight from-40% to-darkGrayishBlue bg-gray-300  items-center justify-center">
            <img src="img/email.png" alt="Image" class="w-3/4">
        </div>

        <div class=" flex flex-col h-screen w-full md:w-3/5  md:h-screen md:flex items-center justify-center p-2">

            <img src="img/email.png" alt="" class="items-center w-40 mb-4 mt-4 md:hidden">

            <div class=" p-8 rounded-xl  w-full md:w-3/5  bg-white">
                <h2 class="text-3xl font-bold mb-6 mt-6 text-center text-veryDarkBlue">Email Verified</h2>
                <p class="mb-8 justify-center text-center md:text-left">Your email has been verified successfully, you can access your dashboard.</p>

                <a class="flex flex-col w-full text-center h-11  bg-brightRed hover:bg-brightRedLight transition text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline"
                    href="<?php echo e(route('login')); ?>">Continue
                </a>


            </div>
        </div>
    </div>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala6488acc797ee40bc55ed6344dee8ea1)): ?>
<?php $component = $__componentOriginala6488acc797ee40bc55ed6344dee8ea1; ?>
<?php unset($__componentOriginala6488acc797ee40bc55ed6344dee8ea1); ?>
<?php endif; ?><?php /**PATH C:\MY FILES\LARAVEL\PROJECT\iTodoApp\resources\views/auth/email-confirm.blade.php ENDPATH**/ ?>