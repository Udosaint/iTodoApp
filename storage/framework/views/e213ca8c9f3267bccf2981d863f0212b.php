<main>

    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.user-alert','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('user-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">

            <div class="mb-4">
                <h3 class="text-2xl font-bold">Setting ⚒</h3>
            </div>

                        <!-- ====== Settings Section Start -->
            <div class="grid grid-cols-5 gap-8">
              
              <div class="col-span-5 xl:col-span-3">
                <div
                  class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                  <div class="border-b border-stroke py-4 px-7 dark:border-strokedark">
                    <h3 class="font-medium text-black dark:text-white">
                      Personal Information
                    </h3>
                  </div>
                  <div class="p-7">
                    <form wire:submit.prevent="updateprofile">

                      <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">

                        <div class="w-full sm:w-1/2">
                          <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="firstname">First
                            </label>
                          <div class="relative">
                            <span class="absolute left-4.5 top-4">
                              <i class="fas fa-user"></i>
                            </span>
                            <input wire:model="firstname"
                              class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text" name="firstname" id="firstname" placeholder="Devid Jhon"  />
                          </div>
                            <?php $__errorArgs = ['firstname'];
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

                        <div class="w-full sm:w-1/2">
                          <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="lastname">Last
                            Name</label>
                          <div class="relative">
                            <span class="absolute left-4.5 top-4">
                              <i class="fas fa-user"></i>
                            </span>
                            <input wire:model="lastname"
                              class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text" name="lastname" id="lastname" placeholder="Devid Jhon"  />
                          </div>
                            <?php $__errorArgs = ['lastname'];
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
                      </div>

                      <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">

                        <div class="w-full sm:w-1/2">
                          <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="profession">Profession
                            </label>
                          <div class="relative">
                            <span class="absolute left-4.5 top-4">
                              <i class="fas fa-certificate"></i>
                            </span>
                            <input wire:model="profession"
                              class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text" name="profession" id="profession" placeholder="Devid Jhon"  />
                          </div>
                          <?php $__errorArgs = ['profession'];
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

                        <div class="w-full sm:w-1/2">
                          <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="phone">Phone Number
                            </label>
                          <div class="relative">
                            <span class="absolute left-4.5 top-4">
                              <i class="fas fa-phone"></i>
                            </span>
                            <input wire:model="phone"
                              class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text" name="phone" id="phone" placeholder="+120 586 5687 42"  />
                          </div>
                          <?php $__errorArgs = ['phone'];
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

                      </div>
                      
                      <div class="mb-5.5">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                          for="emailAddress">Email Address</label>
                        <div class="relative">
                          <span class="absolute left-4.5 top-4">
                            <i class="far fa-envelope"></i>
                          </span>
                          <input wire:model="email" disabled
                            class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                            type="email" name="emailAddress" id="emailAddress" placeholder="devidjond45@gmail.com"
                             />
                        </div>
                      </div>



                      <div class="mb-5.5">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                          for="Username">BIO</label>
                        <div class="relative">
                          <span class="absolute left-4.5 top-4">
                            <i class="far fa-edit"></i>
                          </span>

                          <textarea wire:model="bio"
                            class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                            name="bio" id="bio" rows="3" placeholder="Write your bio here">Lorem ipsum dolor si aliquet.
                              </textarea>
                            <?php $__errorArgs = ['bio'];
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
                      </div>

                      <div class="flex justify-end gap-4.5">
                        <button
                          class="flex justify-center rounded bg-brightRed py-2 px-6 font-medium text-gray hover:bg-opacity-90"
                          >
                          Update
                        </button>
                      </div>

                      <div wire:loading.delay.shortest  wire:target="updateprofile" class="flex mt-1 text-center bg-success text-white rounded items-center w-full">
                          <p class="p-2 text-center items-center">
                            <i class="fas fa-spinner fa-spin"></i>
                            Updating Profile...
                          </p>
                      </div>
                    </form>
                  </div>
                </div>
              </div>


              <div class="col-span-5 xl:col-span-2">
                <div
                  class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                  <div class="border-b border-stroke py-4 px-7 dark:border-strokedark">
                    <h3 class="font-medium text-black dark:text-white">
                      Your Password
                    </h3>
                  </div>
                  <div class="p-7">
                    <form wire:submit.prevent="changePassword">

                        <div class="mb-5">
                          <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="password">New Password
                            </label>
                          <div class="relative">
                            <span class="absolute left-4.5 top-4">
                              <i class="fas fa-lock"></i>
                            </span>
                            <input wire:model="password"
                              class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text" name="password" id="password" placeholder="Enter new Password "/>
                          </div>
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

                        <div class="mb-5">
                          <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="password_confirm">Confirm Password
                            </label>
                          <div class="relative">
                            <span class="absolute left-4.5 top-4">
                              <i class="fas fa-shield"></i>
                            </span>
                            <input wire:model="password_confirmation"
                              class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text" name="password_confirmation" id="password_confirm" placeholder="Enter password again"  />
                          </div>
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

                      <div class="flex justify-end gap-4.5">
                        <button
                          class="flex justify-center rounded bg-brightRed py-2 px-6 font-medium text-gray hover:bg-opacity-90"
                          >
                          Confirm
                        </button>
                      </div>

                      <div wire:loading.delay.shortest  wire:target="changePassword" class="flex mt-1 text-center bg-success text-white rounded items-center w-full">
                          <p class="p-2 text-center items-center">
                            <i class="fas fa-spinner fa-spin"></i>
                            Changing Password...
                          </p>
                      </div>
                    </form>
                  </div>
                </div>


                <div class="col-span-5 xl:col-span-2 mt-3">
                  <div
                  class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                  <div class="border-b border-stroke py-4 px-7 dark:border-strokedark">
                    <h3 class="font-medium text-black dark:text-white">
                      Edit Photo
                    </h3>
                  </div>
                  <div class="p-7">
                    
                  <form wire:submit.prevent="uploadPhoto">
                    <div id="FileUpload" style="background-repeat: no-repeat; background-size: contain; background-image: url('<?php echo e($photo? $photo->temporaryUrl() : ''); ?>'); background-position:center"
                      class="relative mb-5 block w-full cursor-pointer appearance-none rounded border-2 border-dashed border-primary bg-gray py-4 px-4 dark:bg-meta-4 sm:py-7.5">
                      <input wire:model="photo" type="file" 
                        class="absolute inset-0 z-50 m-0 h-full w-full cursor-pointer p-0 opacity-0 outline-none" />
                      <div class="flex flex-col items-center justify-center space-y-3">
                        <span
                          class="flex h-10 w-10 items-center justify-center rounded-full border border-stroke bg-white dark:border-strokedark dark:bg-boxdark">
                          <i class="fas fa-upload"></i>
                        </span>
                        <p class="font-medium text-sm">
                          <span class="text-primary">Click to upload</span>
                          or drag and drop
                        </p>
                        <p class="mt-1.5 font-medium text-sm">PNG or JPG</p>
                      </div>
                    </div>
                    <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p class=" text-red-500 p-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <span class="flex justify-end gap-2.5 mt-2">
                      <button  class="flex justify-center rounded bg-primary py-2 px-6 font-medium text-gray hover:bg-opacity-90">
                        Update
                      </button>
                    </span>
                  </form>
                  <div wire:loading.delay.shortest  wire:target="uploadPhoto" class="flex mt-1 text-center bg-success text-white rounded items-center w-full">
                      <p class="p-2 text-center items-center">
                        <i class="fas fa-spinner fa-spin"></i>
                        Uploading Photo...
                      </p>
                  </div>
                    
                  </div>
                </div>
              </div>
              </div>
            </div>
            <!-- ====== Settings Section End -->
          </div>

        </div>
    </main><?php /**PATH C:\MY FILES\LARAVEL\PROJECT\iTodoApp\resources\views/livewire/settings.blade.php ENDPATH**/ ?>