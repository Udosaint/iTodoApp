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
            <img src="img/otp.png" alt="Image" class="w-3/4">
        </div>

        <div class=" flex flex-col h-screen w-full md:w-3/5  md:h-screen md:flex items-center justify-center p-2">

            

            <div class=" p-8 rounded-xl shadow-sm shadow-veryDarkBlue w-full md:w-3/5  bg-white">
                <h2 class="text-3xl font-bold mb-6 mt-6 text-center text-veryDarkBlue">Verify your Email</h2>
                <p class="mb-8 text-center justify-center ">Enter the 6 digit pin sent to[<?php echo e(session('user')); ?>]</p>

                


                <form class=" my-4" wire:submit.prevent="verifyOtp" >

                    <?php echo csrf_field(); ?>

                    <div class=" <?php echo e($otp_error? '' : 'hidden'); ?> mb-2 p-2 rounde text-brightRedLight font-medium text-center">
                        <?php echo e($otp_error); ?>

                    </div>

                    <div class="mb-4 flex justify-between">

                        <input type="phone" wire:model.defer="digit1" id="digit1" name="digit1" 
                            class="otp-input w-1/2 mr-2 border-2 border-veryDarkBlue  rounded py-2 px-3 text-center focus:outline-none focus:border-brightRed focus:border-2" 
                            maxlength="1" required>

                        <input type="phone" wire:model.defer="digit2" id="digit2" name="digit2" 
                            class="otp-input w-1/2 mr-2 border-2 border-veryDarkBlue  rounded py-2 px-3 text-center focus:outline-none focus:border-brightRed focus:border-2" 
                            maxlength="1" required>

                        <input type="phone" wire:model.defer="digit3" id="digit3" name="digit3" 
                            class="otp-input w-1/2 mr-2 border-2 border-veryDarkBlue  rounded py-2 px-3 text-center focus:outline-none focus:border-brightRed focus:border-2" 
                            maxlength="1" required>

                        <input type="phone" wire:model.defer="digit4" id="digit4" name="digit4" 
                            class="otp-input w-1/2 mr-2 border-2 border-veryDarkBlue  rounded py-2 px-3 text-center focus:outline-none focus:border-brightRed focus:border-2" 
                            maxlength="1" required>

                        <input type="phone" wire:model.defer="digit5" id="digit5" name="digit5" 
                            class="otp-input w-1/2 mr-2 border-2 border-veryDarkBlue  rounded py-2 px-3 text-center focus:outline-none focus:border-brightRed focus:border-2" 
                            maxlength="1" required>

                        <input type="phone" wire:model.defer="digit6" id="digit6" name="digit6" 
                            class="otp-input w-1/2 mr-2 border-2 border-veryDarkBlue  rounded py-2 px-3 text-center focus:outline-none focus:border-brightRed focus:border-2" 
                            maxlength="1" required>

                    </div>

                    <div class="flex justify-between">

                    <button type="submit"  class=" w-full bg-brightRed hover:bg-brightRedLight text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline">
                        Verify
                    </button>

                    </div>
                </form>

                

                <form action="">
                    <p class="mt-3  text-veryDarkBlue nav-link"> Did'nt Recieve OTP ?
                        <button id="resend_otp" href="mailto:<?php echo e(env('SITE_MAIL')); ?>" class=" text-brightRed font-bold nav-link">Resend OTP</button>
                        <span id="timer"></span>
                    </p>
                </form>

            </div>
        </div>
    </div><?php /**PATH C:\MY FILES\LARAVEL\PROJECT\iTodoApp\resources\views/livewire/auth/email-verify.blade.php ENDPATH**/ ?>