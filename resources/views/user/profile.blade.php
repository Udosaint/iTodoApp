
<x-title>Profile </x-title>


<x-app-layout>
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
                    <img src="img/avatar-ali.png" alt="profile" class="rounded-full ring-2 ring-brightRed" />
                    <label for="profile"
                      class="absolute bottom-0 right-0 flex h-8.5 w-8.5 cursor-pointer items-center justify-center rounded-full bg-darkBlue border-2 border-brightRed text-white hover:bg-opacity-90 sm:bottom-2 sm:right-2">
                      <i class="fas fa-camera"></i>
                      <input type="file" name="profile" id="profile" class="sr-only" />
                    </label>
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
                      <span class="font-semibold text-black dark:text-white">Udochukwu</span>
                    </div>

                    <div
                      class="flex flex-row items-center my-2 rounded bg-white border border-stroke  gap-6  px-4 py-2 dark:border-strokedark xsm:flex-row">
                      <span class="font-semibold text-black dark:text-white ">Lastname </span>
                      <div class="ring-r border-3 border-stroke">:</div>
                      <span class="font-semibold text-black dark:text-white">Okoye</span>
                    </div>

                    <div
                      class="flex flex-row items-center my-2 rounded bg-white border border-stroke  gap-6  px-4 py-2 dark:border-strokedark xsm:flex-row">
                      <span class="font-semibold text-black dark:text-white ">Email </span>
                      <div class="ring-r border-3 border-stroke">:</div>
                      <span class="font-semibold text-black dark:text-white">udosaint@gmail.com</span>
                    </div>

                    <div
                      class="flex flex-row items-center my-2 rounded bg-white border border-stroke  gap-6  px-4 py-2 dark:border-strokedark xsm:flex-row">
                      <span class="font-semibold text-black dark:text-white ">Profession </span>
                      <div class="ring-r border-3 border-stroke">:</div>
                      <span class="font-semibold text-black dark:text-white">Ui/Ux Designer</span>
                    </div>

                    <div
                      class="flex flex-row items-center my-2 rounded bg-white border border-stroke  gap-6  px-4 py-2 dark:border-strokedark xsm:flex-row">
                      <span class="font-semibold text-black dark:text-white ">Phone </span>
                      <div class="ring-r border-3 border-stroke">:</div>
                      <span class="font-semibold text-black dark:text-white">+2345675548554</span>
                    </div> 
                    
                  </div>

                  <div class="mx-auto max-w-180">
                    <h4 class="font-medium text-black dark:text-white">
                      About Me
                    </h4>
                    <p class="mt-4.5 font-medium text-sm">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Pellentesque posuere fermentum urna, eu condimentum
                      mauris tempus ut. Donec fermentum blandit aliquet. Etiam
                      dictum dapibus ultricies. Sed vel aliquet libero. Nunc a
                      augue fermentum, pharetra ligula sed, aliquam lacus.
                    </p>
                  </div>

                </div>
              </div>
            </div>
            <!-- ====== Profile Section End -->

        

        </div>
    </main>
      <!-- ===== Main Content End ===== -->

</x-app-layout>


