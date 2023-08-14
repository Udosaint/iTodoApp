
<x-title>Settings</x-title>


<x-app-layout>
    <main>

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
                    <form action="#">

                      <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">

                        <div class="w-full sm:w-1/2">
                          <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="firstname">First
                            Name</label>
                          <div class="relative">
                            <span class="absolute left-4.5 top-4">
                              <i class="fas fa-user"></i>
                            </span>
                            <input
                              class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text" name="firstname" id="firstname" placeholder="Devid Jhon"  />
                          </div>
                        </div>

                        <div class="w-full sm:w-1/2">
                          <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="lastname">Last
                            Name</label>
                          <div class="relative">
                            <span class="absolute left-4.5 top-4">
                              <i class="fas fa-user"></i>
                            </span>
                            <input
                              class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text" name="lastname" id="lastname" placeholder="Devid Jhon"  />
                          </div>
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
                            <input
                              class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text" name="profession" id="profession" placeholder="Devid Jhon"  />
                          </div>
                        </div>

                        <div class="w-full sm:w-1/2">
                          <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="phone">Phone Number
                            </label>
                          <div class="relative">
                            <span class="absolute left-4.5 top-4">
                              <i class="fas fa-phone"></i>
                            </span>
                            <input
                              class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text" name="phone" id="phone" placeholder="+120 586 5687 42"  />
                          </div>
                        </div>

                      </div>
                      
                      <div class="mb-5.5">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                          for="emailAddress">Email Address</label>
                        <div class="relative">
                          <span class="absolute left-4.5 top-4">
                            <i class="far fa-envelope"></i>
                          </span>
                          <input
                            class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                            type="email" name="emailAddress" id="emailAddress" placeholder="devidjond45@gmail.com"
                            value="devidjond45@gmail.com" />
                        </div>
                      </div>



                      <div class="mb-5.5">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                          for="Username">BIO</label>
                        <div class="relative">
                          <span class="absolute left-4.5 top-4">
                            <i class="far fa-edit"></i>
                          </span>

                          <textarea
                            class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                            name="bio" id="bio" rows="3" placeholder="Write your bio here">Lorem ipsum dolor si aliquet.
                              </textarea>
                        </div>
                      </div>

                      <div class="flex justify-end gap-4.5">
                        <button
                          class="flex justify-center rounded bg-brightRed py-2 px-6 font-medium text-gray hover:bg-opacity-90"
                          type="submit">
                          Update
                        </button>
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
                    <form action="#">

                        <div class="mb-5">
                          <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="old_password">Old Password
                            </label>
                          <div class="relative">
                            <span class="absolute left-4.5 top-4">
                              <i class="fas fa-passport"></i>
                            </span>
                            <input
                              class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text" name="old_password" id="old_password" placeholder="************"  />
                          </div>
                        </div>

                        <div class="mb-5">
                          <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="password">New Password
                            </label>
                          <div class="relative">
                            <span class="absolute left-4.5 top-4">
                              <i class="fas fa-lock"></i>
                            </span>
                            <input
                              class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text" name="password" id="password" placeholder="Enter new Password "/>
                          </div>
                        </div>

                        <div class="mb-5">
                          <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="password_confirm">Confirm Password
                            </label>
                          <div class="relative">
                            <span class="absolute left-4.5 top-4">
                              <i class="fas fa-shield"></i>
                            </span>
                            <input
                              class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text" name="password_confirm" id="password_confirm" placeholder="Enter password again"  />
                          </div>
                        </div>


                      

                      <div class="flex justify-end gap-4.5">
                        <button
                          class="flex justify-center rounded bg-brightRed py-2 px-6 font-medium text-gray hover:bg-opacity-90"
                          type="submit">
                          Confirm
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- ====== Settings Section End -->
          </div>

        </div>
    </main>
      <!-- ===== Main Content End ===== -->

</x-app-layout>


