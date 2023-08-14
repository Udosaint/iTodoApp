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
            <img src="img/forgot-password.png" alt="Image" class="w-3/4">
        </div>

        <div class=" flex flex-col h-screen w-full md:w-3/5  md:h-screen md:flex items-center justify-center p-2">

            

            <div class=" p-8 rounded-xl shadow-sm shadow-veryDarkBlue w-full md:w-3/5  bg-white">
                <h2 class="text-3xl font-bold mb-6 mt-6 text-center text-veryDarkBlue">Trouble Logging in?</h2>
                <p class="mb-8 justify-center">Enter your email associated to your account and we will send you a pin to reset your account.</p>

                
                <form class=" my-4" action="<?php echo e(route('forget.password')); ?>" method="POST">

                    <?php echo csrf_field(); ?>

                    <div class="mb-6 mt-4 my-3">
                        <label class="block  text-veryDarkBlue text-md  mb-5" for="username">Your Email</label>
                        <input class="w-full border border-veryDarkBlue rounded-md px-3 py-2 focus:outline-none focus:border-2 focus:border-brightRed"
                            type="email" name="email" id="email" placeholder="Enter your email" />
                             <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class=" text-red-500 p-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <button class="w-full h-11  bg-brightRed hover:bg-brightRedLight transition text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline"
                        type="submit">Continue
                    </button>

                    <p class="mt-3 text-center text-veryDarkBlue font-bold nav-link">
                        Still having trouble logging in? 
                        <a href="mailto:<?php echo e(env('SITE_MAIL')); ?>" class=" text-brightRed font-bold nav-link">send us a message</a>
                    </p>

                </form>
            </div>
        </div>
    </div>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala6488acc797ee40bc55ed6344dee8ea1)): ?>
<?php $component = $__componentOriginala6488acc797ee40bc55ed6344dee8ea1; ?>
<?php unset($__componentOriginala6488acc797ee40bc55ed6344dee8ea1); ?>
<?php endif; ?><?php /**PATH C:\MY FILES\LARAVEL\PROJECT\iTodoApp\resources\views/auth/forget-password.blade.php ENDPATH**/ ?>