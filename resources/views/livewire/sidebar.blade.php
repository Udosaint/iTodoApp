
 <aside
  :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
  class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col 
    overflow-y-hidden bg-bodydark1 border-r-2 border-r-brightRed duration-300 ease-linear  dark:bg-boxdark lg:static lg:translate-x-0"
  @click.outside="sidebarToggle = false"
>
  <!-- SIDEBAR HEADER -->
  <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5">
    
    <a href="{{route('user.dashboard')}}">
      <img src="{{asset('img/itodo-logo.png')}}" alt="Logo"  class="w-52 items-center justify-center"/>
    </a>

    <button
      class="block lg:hidden"
      @click.stop="sidebarToggle = !sidebarToggle"
    >
      <i class="fa-solid fa-arrow-left fill-current text-lg"></i>
    </button>
  </div>
  <!-- SIDEBAR HEADER -->

  <div
    class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear"
  >
    <!-- Sidebar Menu -->
    <nav class="mt-5 py-4 px-4 lg:mt-9 lg:px-6">
      <!-- Menu Group -->
      <div>

        <ul class="mb-6 flex flex-col gap-1.5">
          <!-- Menu Item Dashboard -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium
               text-darkBlue duration-300 ease-in-out hover:bg-bodydark hover:text-whiten
                dark:hover:bg-meta-4 {{ Route::currentRouteNamed('user.dashboard') ? 'bg-darkBlue text-white' : '' }}"
              href="{{route('user.dashboard')}}"
            
            >
            <i class=" fas fa-house"></i>
              Dashboard
            </a>
          </li>
          <!-- Menu Item Dashboard -->

          <!-- Menu Item inbox -->
          {{-- <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium
               text-darkBlue duration-300 ease-in-out hover:bg-bodydark hover:text-whiten
                dark:hover:bg-meta-4 {{ Route::currentRouteNamed('user.inbox') ? 'bg-darkBlue text-white' : '' }}"
              href="{{route('user.inbox')}}"  
            >
            <i class=" fas fa-message"></i>
              Inbox
            </a>
          </li> --}}
          <!-- Menu Item inbox -->

          <!-- Menu Item today -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium
               text-darkBlue duration-300 ease-in-out hover:bg-bodydark hover:text-whiten
                dark:hover:bg-meta-4 {{ Route::currentRouteNamed('user.today') ? 'bg-darkBlue text-white' : '' }}"
              href="{{route('user.today')}}"
            >
            <i class=" fas fa-calendar"></i>
              Today
              <i class=" fas absolute right-4 top-1/2 -translate-y-1/2 fill-current">{{$today}}</i>
            </a>
          </li>
          <!-- Menu Item today -->

          <!-- Menu Item createtask -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium
               text-darkBlue duration-300 ease-in-out hover:bg-bodydark hover:text-whiten
                dark:hover:bg-meta-4 {{ Route::currentRouteNamed('user.createtask') ? 'bg-darkBlue text-white' : '' }}"
              href="{{route('user.createtask')}}"
            >
            <i class=" fas fa-plus"></i>
              Create Task
            </a>
          </li>
          <!-- Menu Item createtask -->

        <h3 class="mb-4 ml-4 mt-4 text-sm font-medium text-bodydark2">Organize Task</h3>
          <!-- Menu Item Forms -->
          <div x-data="{dropfolder:false}" class=" cursor-pointer">
            <a
              class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-darkBlue duration-300 ease-in-out hover:bg-bodydark hover:text-whiten dark:hover:bg-meta-4"
              
              @click="dropfolder = !dropfolder"
              
            >
              <i class=" fas fa-folder"></i>

              My folders

                <i class=" fas fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 fill-current"></i>
            </a>

            <!-- Dropdown Menu Start -->
            <div style="display: none;" x-show="dropfolder"
              class="overflow-hidden"
            >
              <ul class="mt-4 mb-5.5 flex flex-col gap-2.5 pl-6">
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium
                    text-darkBlue duration-300 ease-in-out hover:bg-bodydark hover:text-whiten
                      dark:hover:bg-meta-4 {{ Route::currentRouteNamed('user.folders') ? 'bg-darkBlue text-white' : '' }}"
                    href="{{route('user.folders')}}"
                  >
                      <i class=" fas fa-folder-open"></i>
                    Folder List
                  </a>
                </li>

                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium
                    text-darkBlue duration-300 ease-in-out hover:bg-bodydark hover:text-whiten
                      dark:hover:bg-meta-4 {{ Route::currentRouteNamed('user.createfolder') ? 'bg-darkBlue text-white' : '' }}"
                    href="{{route('user.createfolder')}}"
                  >
                      <i class=" fas fa-file-circle-plus"></i>
                    Create folder
                  </a>
                </li>
                @unless (count($folders) == 0)

                @foreach ($folders as $folder)
                    <li>
                  <a wire:click="showfolder({{$folder->id}})"
                    class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium
                    text-darkBlue duration-300 ease-in-out hover:bg-bodydark hover:text-whiten
                      dark:hover:bg-meta-4 "
                    
                  >
                      {!!$folder->icon!!}
                    {{$folder->name}}
                  </a>
                </li>
                @endforeach


                @else
                    
                @endunless

              </ul>
            </div>
            <!-- Dropdown Menu End -->
          </div>
          <!-- Menu Item Forms -->

          <!-- Menu Item Profile -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium
               text-darkBlue duration-300 ease-in-out hover:bg-bodydark hover:text-whiten
                dark:hover:bg-meta-4 {{ Route::currentRouteNamed('user.profile') ? 'bg-darkBlue text-white' : '' }}"
              href="{{route('user.profile')}}"
            >
                <i class=" fas fa-user"></i>
              Profile
            </a>
          </li>
          <!-- Menu Item Profile -->

          <!-- Menu Item Settings -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium
               text-darkBlue duration-300 ease-in-out hover:bg-bodydark hover:text-whiten
                dark:hover:bg-meta-4 {{ Route::currentRouteNamed('user.settings') ? 'bg-darkBlue text-white' : '' }}"
              href="{{route('user.settings')}}"settings
            >
              <i class=" fas fa-gear"></i>

              Settings
            </a>
          </li>
          <!-- Menu Item Settings -->
        
          <!-- Menu Item logout -->
          <li>

            <form action="{{route('user.logout')}}" method="POST">
            @csrf
            <button
              class="group relative w-full flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium
               text-darkBlue  duration-300 ease-in-out hover:bg-brightRedLight hover:text-whiten"
            >
              <i class=" fas fa-right-from-bracket"></i>

              Logout
            </button>
            </form>
          </li>
          <!-- Menu Item logout -->          
        </ul>

      </div>

    </nav>
    <!-- Sidebar Menu -->

    <!-- Promo Box -->
    <div
      class="flex flex-col mx-auto mb-10 w-full max-w-60 rounded-sm border items-center justify-center border-brightRed bg-white py-6 px-4 text-center shadow-default">
      <img src="{{$user->photo? asset('storage/'.$user->photo) : asset('img/avatar-ali.png')}}" class="w-18  rounded-full ring-2 ring-brightRed" alt="">
      <p class="mb-1 mt-3 text-md font-medium text-darkBlue">{{auth()->user()->firstname}}</p>
      <p class="mb-4 text-xs text-darkBlue">{{auth()->user()->email}}</p>
    </div>
    <!-- Promo Box -->
  </div>
</aside>
