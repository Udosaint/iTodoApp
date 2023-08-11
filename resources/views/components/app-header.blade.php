

<header class="sticky top-0 z-999 flex w-full bg-white drop-shadow-1 dark:bg-boxdark dark:drop-shadow-none">
  <div class="flex flex-grow items-center justify-between py-4 px-4 shadow-2 md:px-6 2xl:px-11">

    <div class="flex items-center gap-2 sm:gap-4 ">
      <!-- Hamburger Toggle BTN -->
      <button
        class="z-99999 block rounded-sm border border-stroke bg-white p-1.5 shadow-sm dark:border-strokedark dark:bg-boxdark lg:hidden"
        @click.stop="sidebarToggle = !sidebarToggle">
        <span class="relative block h-5.5 w-5.5 cursor-pointer">
          <span class="du-block absolute right-0 h-full w-full">
            <span
              class="relative top-0 left-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-[0] duration-200 ease-in-out dark:bg-white"
              :class="{ '!w-full delay-300': !sidebarToggle }"></span>
            <span
              class="relative top-0 left-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-150 duration-200 ease-in-out dark:bg-white"
              :class="{ '!w-full delay-400': !sidebarToggle }"></span>
            <span
              class="relative top-0 left-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-200 duration-200 ease-in-out dark:bg-white"
              :class="{ '!w-full delay-500': !sidebarToggle }"></span>
          </span>
          <span class="du-block absolute right-0 h-full w-full rotate-45">
            <span
              class="absolute left-2.5 top-0 block h-full w-0.5 rounded-sm bg-black delay-300 duration-200 ease-in-out dark:bg-white"
              :class="{ '!h-0 delay-[0]': !sidebarToggle }"></span>
            <span
              class="delay-400 absolute left-0 top-2.5 block h-0.5 w-full rounded-sm bg-black duration-200 ease-in-out dark:bg-white"
              :class="{ '!h-0 dealy-200': !sidebarToggle }"></span>
          </span>
        </span>
      </button>
      <!-- Hamburger Toggle BTN -->
      <a class="block flex-shrink-0 lg:hidden" href="{{route('user.dashboard')}}">
        <img src="img/itodo-logo.png" alt="Logo" class="w-10" />
      </a>
    </div>


    <div class="flex items-center gap-3 2xsm:gap-7 ">
      <ul class="flex items-center gap-2 2xsm:gap-4">
        <li>
          <!-- Dark Mode Toggler -->
          <label :class="darkMode ? 'bg-primary' : 'bg-stroke'" class="relative m-0 block h-7.5 w-14 rounded-full">
            <input type="checkbox" :value="darkMode" @change="darkMode = !darkMode"
              class="absolute top-0 z-50 m-0 h-full w-full cursor-pointer opacity-0" />
            <span :class="darkMode && '!right-[3px] !translate-x-full'"
              class="absolute top-1/2 left-[3px] flex h-6 w-6 -translate-y-1/2 translate-x-0 items-center justify-center rounded-full bg-white shadow-switcher duration-75 ease-linear">
              <span class="dark:hidden">
                <i class="fa-solid fa-sun"></i>
              </span>
              <span class="hidden dark:inline-block">
                <i class="fa-solid fa-moon"></i>
              </span>
            </span>
          </label>
          <!-- Dark Mode Toggler -->
        </li>

        <!-- Notification Menu Area -->
        <li class="relative" >
          <a class="relative flex h-8.5 w-8.5 items-center justify-center rounded-full border-[0.5px] border-stroke bg-gray hover:text-primary dark:border-strokedark dark:bg-meta-4 dark:text-white"
            href="#">
            <span class="absolute -top-0.5 right-0 z-1 h-2 w-2 rounded-full bg-danger">
              <span
                class="absolute -z-1 inline-flex h-full w-full animate-ping rounded-full bg-danger opacity-75"></span>
            </span>

            <i class="far fa-bell text-xl duration-300 ease-in-out"></i>
          </a>

        </li>
        <!-- Notification Menu Area -->

      </ul>

      <!-- User Area -->
      <div class="relative" x-data="{ dropdownOpen: false }" @click.outside="dropdownOpen = false">
        <a class="flex items-center gap-4" href="#" @click.prevent="dropdownOpen = ! dropdownOpen">
          <span class="hidden text-right lg:block">
            <span class="block text-sm font-medium text-black dark:text-white">{{auth()->user()->firstname}} {{auth()->user()->lastname}}</span>
            <span class="block text-xs font-medium">{{auth()->user()->profession}}</span>
          </span>

          <span class="h-12 w-12 rounded-full">
            <img src="{{auth()->user()->photo? asset('storage/'.auth()->user()->photo) : asset('img/avatar-ali.png')}}" alt="User" />
          </span>

          <svg :class="dropdownOpen && 'rotate-180'" class="hidden fill-current sm:block" width="12" height="8"
            viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M0.410765 0.910734C0.736202 0.585297 1.26384 0.585297 1.58928 0.910734L6.00002 5.32148L10.4108 0.910734C10.7362 0.585297 11.2638 0.585297 11.5893 0.910734C11.9147 1.23617 11.9147 1.76381 11.5893 2.08924L6.58928 7.08924C6.26384 7.41468 5.7362 7.41468 5.41077 7.08924L0.410765 2.08924C0.0853277 1.76381 0.0853277 1.23617 0.410765 0.910734Z"
              fill="" />
          </svg>
        </a>

        <!-- Dropdown Start -->
        <div style="display: none;" x-show="dropdownOpen"
          class="absolute userdropdown right-0 mt-4 flex w-62.5 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
          <ul class="flex flex-col gap-5 border-b border-stroke px-6 py-7.5 dark:border-strokedark">
            <li>
              <a href="{{route('user.profile')}}"
                class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-brightRed lg:text-base">
                 <i class="far fa-user text-xl duration-300 ease-in-out"></i>
                My Profile
              </a>
            </li>
            <li>
              <a href="{{route('user.settings')}}"
                class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-brightRed lg:text-base">
                <i class="fas fa-gear text-xl duration-300 ease-in-out"></i>
                Account Settings
              </a>
            </li>
          </ul>
          <form action="{{route('user.logout')}}" method="POST">
            @csrf
            <button
              class="group relative w-full flex items-center gap-2.5 rounded-sm py-2 px-8 font-medium
               text-darkBlue  duration-300 ease-in-out hover:bg-brightRedLight hover:text-whiten"
            >
              <i class=" fas fa-right-from-bracket"></i>

              Logout
            </button>
            </form>
        </div>
        <!-- Dropdown End -->



      </div>
      <!-- User Area -->
    </div>
  </div>
</header>
