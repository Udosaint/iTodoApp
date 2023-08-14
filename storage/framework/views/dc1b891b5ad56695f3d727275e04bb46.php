<main>

        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">

            <div class="mb-4">
                <h3 class="text-2xl font-bold">User Profile 😉</h3>
            </div>

                        <!-- ====== Profile Section Start -->
            <div
              class="overflow-hidden rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
              <div class="px-4 pb-6 text-center lg:pb-8 xl:pb-11.5">
                <div
                  class="relative z-30 mx-auto mt-4 h-30 w-full max-w-30 rounded-full bg-white/20 p-1 backdrop-blur sm:h-44 sm:max-w-44 sm:p-3">
                  <div class="relative drop-shadow-2 ">
                    <img src="<?php echo e(auth()->user()->photo? asset('storage/'.auth()->user()->photo) : asset('img/avatar-ali.png')); ?>" alt="profile" class="rounded-full ring-2 ring-brightRed" />
                    
                  </div>
                </div>
                <div class="mt-4">
                  <h3 class="mb-1.5 text-2xl font-medium text-black dark:text-white">
                    Danish Heilium
                  </h3>
                  <p class="font-medium">Ui/Ux Designer</p>
                  <div
                    class="dark:bg-[#37404F] mx-auto mt-4.5 mb-5.5 grid max-w-94 grid-cols-1 rounded-md border border-stroke py-2.5 px-2 shadow-1 dark:border-strokedark">
                    
                    <div
                      class="flex flex-row items-center my-2 rounded bg-white border border-stroke   gap-6  px-4 py-2 dark:border-strokedark xsm:flex-row">
                      <span class="font-semibold text-black dark:text-white ">Firstname </span>
                      <div class="font-semibol text-black">:</div>
                      <span class="font-semibold text-black dark:text-white"><?php echo e(auth()->user()->firstname); ?></span>
                    </div>

                    <div
                      class="flex flex-row items-center my-2 rounded bg-white border border-stroke  gap-6  px-4 py-2 dark:border-strokedark xsm:flex-row">
                      <span class="font-semibold text-black dark:text-white ">Lastname </span>
                      <div class="ring-r border-3 border-stroke">:</div>
                      <span class="font-semibold text-black dark:text-white"><?php echo e(auth()->user()->lastname); ?></span>
                    </div>

                    <div
                      class="flex flex-row items-center my-2 rounded bg-white border border-stroke  gap-6  px-4 py-2 dark:border-strokedark xsm:flex-row">
                      <span class="font-semibold text-black dark:text-white ">Email </span>
                      <div class="ring-r border-3 border-stroke">:</div>
                      <span class="font-semibold text-black dark:text-white"><?php echo e(auth()->user()->email); ?></span>
                    </div>

                    <div
                      class="flex flex-row items-center my-2 rounded bg-white border border-stroke  gap-6  px-4 py-2 dark:border-strokedark xsm:flex-row">
                      <span class="font-semibold text-black dark:text-white ">Profession </span>
                      <div class="ring-r border-3 border-stroke">:</div>
                      <span class="font-semibold text-black dark:text-white"><?php echo e(auth()->user()->profession); ?></span>
                    </div>

                    <div
                      class="flex flex-row items-center my-2 rounded bg-white border border-stroke  gap-6  px-4 py-2 dark:border-strokedark xsm:flex-row">
                      <span class="font-semibold text-black dark:text-white ">Phone </span>
                      <div class="ring-r border-3 border-stroke">:</div>
                      <span class="font-semibold text-black dark:text-white"><?php echo e(auth()->user()->phone); ?></span>
                    </div> 
                    
                  </div>

                  <div class="mx-auto max-w-180">
                    <h4 class="font-medium text-black dark:text-white">
                      About Me
                    </h4>
                    <p class="mt-4.5 font-medium text-sm">
                      <?php echo e(auth()->user()->bio); ?>

                    </p>
                  </div>

                </div>
              </div>
            </div>
            <!-- ====== Profile Section End -->

        

        </div>
    </main><?php /**PATH C:\MY FILES\LARAVEL\PROJECT\iTodoApp\resources\views/livewire/profile.blade.php ENDPATH**/ ?>