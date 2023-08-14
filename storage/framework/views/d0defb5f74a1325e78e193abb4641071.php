   
   <div class="flex flex-row"> 
    
       <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
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


        <div class="hidden md:flex md:w-1/2 h-screen bg-gradient-to-tr from-brightRedLight from-40% to-darkGrayishBlue bg-gray-300  items-center justify-center">
            <img src="img/register.png" alt="Image" class="w-2/4">
        </div>

        <div class=" flex flex-col h-screen w-full md:w-3/5  md:h-screen md:flex items-center justify-center p-2">

            <div class=" px-4 md:p-8 rounded-xl shadow-sm shadow-veryDarkBlue w-full md:w-3/5  bg-white">
                
                

                <h2 class="text-3xl font-bold mb-4 mt-2 text-center text-veryDarkBlue">Create Account</h2>

                
                <form class=" my-1" wire:submit.prevent="CreateAccount">

                    <?php echo csrf_field(); ?>

                    

                    <div class="mb-4 my-3">
                        <label class="block  text-veryDarkBlue text-md  mb-3" for="email">Your Email</label>
                        <input wire:model.lazy="email" class="w-full border border-veryDarkBlue rounded-md px-3 py-2 focus:outline-none focus:border-2 focus:border-brightRed"
                            type="email" id="email" name="email" placeholder="Enter your email" />
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
                    <div class="mb-4 md:mb-4">
                        <label class="block text-veryDarkBlue text-md  mb-2" for="password">Your Password</label>
                        <input wire:model.lazy="password" class="w-full border border-veryDarkBlue rounded-md px-3 py-2 focus:outline-none focus:border-2 focus:border-brightRed"
                            type="password" id="password" name="password" placeholder="Enter your password" />
                            <?php $__errorArgs = ['password'];
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

                    <div class="mb-4 md:mb-4">
                        <label class="block text-veryDarkBlue text-md  mb-2" for="password_confirmation">Confirm Password</label>
                        <input wire:model.lazy="password_confirmation" class="w-full border border-veryDarkBlue rounded-md px-3 py-2 focus:outline-none focus:border-2 focus:border-brightRed"
                            type="password" id="password_confirmation" name="password_confirmation" placeholder="Enter your confirm password" />
                            <?php $__errorArgs = ['password_confirmation'];
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

                   
                        <button class="  w-full h-11 mt-4 mb-4 bg-brightRed hover:bg-brightRedLight transition text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline"
                            type="submit">
                                Register
                        </button>

                        <div wire:loading.delay.shorter  wire:target="CreateAccount" class="flex mt-1 text-center bg-success text-white rounded items-center w-full">
                         <p class="p-2 text-center items-center">
                            <i class="fas fa-spinner fa-spin"></i>
                            Registering...
                        </p>
                        </div>



                    
                    <p class=" text-center text-veryDarkBlue font-bold nav-link mb-4">
                        Already have account?  
                        <a href="<?php echo e(route('login')); ?>" class=" text-brightRed  font-bold nav-link">Sign in</a>
                    </p>

                </form>
            </div>
        </div>
    </div><?php /**PATH C:\MY FILES\LARAVEL\PROJECT\iTodoApp\resources\views/livewire/auth/register.blade.php ENDPATH**/ ?>