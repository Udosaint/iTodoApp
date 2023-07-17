
<x-title>Inbox</x-title>


<x-app-layout>
    <main>

        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">

            <div class="mb-4">
                <h3 class="text-2xl font-bold">Inbox</h3>
            </div>

            <!-- ====== Chat Card Start -->
            <div
              class="col-span-12 mt-8 rounded-sm border border-stroke bg-white py-6 shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-4">
              <h4 class="mb-6 px-7.5 text-xl font-bold text-black dark:text-white">
                Notification
              </h4>
        
              <div>
                <a href="messages.html" class="flex items-center gap-5 py-3 px-7.5 hover:bg-gray-3 dark:hover:bg-meta-4">
                  <div class="relative h-14 w-14 rounded-full">
                    <img src="img/avatar-ali.png" alt="User" />
                    <span class="absolute right-0 bottom-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-3"></span>
                  </div>
        
                  <div class="flex flex-1 items-center justify-between">
                    <div>
                      <h5 class="font-medium text-black dark:text-white">
                        Devid Heilo
                      </h5>
                      <p>
                        <span class="text-sm font-medium text-black dark:text-white">Hello, how are you?</span>
                        <span class="text-xs"> . 12 min</span>
                      </p>
                    </div>
                    <div class="flex h-6 w-6 items-center justify-center rounded-full bg-primary">
                      <span class="text-sm font-medium text-white">3</span>
                    </div>
                  </div>
                </a>



              </div>
            </div>
            <!-- ====== Chat Card End -->
        </div>
    </main>
      <!-- ===== Main Content End ===== -->

</x-app-layout>


