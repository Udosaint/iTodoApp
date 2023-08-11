  <main>

    <x-user-alert/>

    
    @if ($page == "Add Task")

      <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        
        <div class="mb-4">
          <h3 class="text-2xl font-bold">Add Task ✍</h3>
        </div>
        
        <div
        class="md:w-3/5 mx-auto rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">

        <div class="flex flex-col gap-5.5 p-6.5 ">
          
          <div>
            <label class="mb-3 block font-medium text-sm text-darkBlue dark:text-white">
              Task Name
            </label>
            <input wire:model="name" type="text" placeholder="Enter Task Name"
            class="w-full rounded-lg border-2 border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-darkBlue active:border-darkBlue disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-brightRed" />
              @error('name')
                  <p class=" text-red-500 p-1">{{$message}}</p>
              @enderror
          </div>
          
          <div>
            <label class="mb-3 block font-medium text-sm text-darkBlue dark:text-white">
              Enter Description (Optional)
            </label>
            <textarea wire:model="description" rows="3" placeholder="Enter Description (Optional)"
            class="w-full rounded-lg border-2 border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-darkBlue active:border-darkBlue disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-brightRed"></textarea>
              @error('description')
                  <p class=" text-red-500 p-1">{{$message}}</p>
              @enderror
          </div>
          

          
          <div class="relative" x-data="{ switcherToggle: false }">
              
            <label for="toggle4" class="flex cursor-pointer select-none items-center">
              Set Reminder 
              <div class="relative left-3">
                <input type="checkbox" wire:model="setreminder" id="toggle4" class="sr-only"
                @change="switcherToggle = !switcherToggle" />
                <div :class="switcherToggle && '!bg-brightRed'" class="block h-8 w-14 rounded-full bg-black">
                </div>
                <div :class="switcherToggle && '!right-1 !translate-x-full'"
                class="absolute left-1 top-1 flex h-6 w-6 items-center justify-center rounded-full bg-white transition">
              </div>
            </div>
          </label>

          <div class="mb-2 mt-2 flex flex-col gap-5.5 sm:flex-row">

              <div class="w-full sm:w-1/2">
                <label class="mb-3 block font-medium text-sm text-darkBlue dark:text-white">
                  Select Date
                </label>
                <div class="relative">
                  <input wire:model="task_date" type="date"  id=""
                  class="datepicker custom-input-date custom-input-date-1
                  w-full rounded border-2 border-stroke bg-transparent
                  py-3 px-5 font-medium outline-none transition focus:border-darkBlue active:border-darkBlue
                  dark:border-form-strokedark dark:bg-form-input dark:focus:border-brightRed" />
                </div>
                  @error('task_date')
                      <p class=" text-red-500 p-1">{{$message}}</p>
                  @enderror
              </div>

              <div class="w-full sm:w-1/2" style="display: none"  x-show="switcherToggle">
                <label class="mb-3 block font-medium text-sm text-darkBlue dark:text-white">
                  Select time
                </label>
                <div class="relative">
                  <input wire:model="reminder" type="time" placeholder="{{now()->format('H:i:s')}}" id=""
                  class="datetimepicker custom-input-date custom-input-date-1
                  w-full rounded border-2 border-stroke bg-transparent
                  py-3 px-5 font-medium outline-none transition focus:border-darkBlue active:border-primary
                  dark:border-form-strokedark dark:bg-form-input dark:focus:border-brightRed" />
                </div>
              </div>
          </div>  

        </div>
        
        <div>
          <label class="mb-3 block font-medium text-sm text-black dark:text-white">
            Select Folder
          </label>
          <div class="relative z-20 bg-white dark:bg-transparent">
            <span class="absolute top-1/2 left-4 z-30 -translate-y-1/2">
              <i class="fas fa-folder"></i>
            </span>
            <select wire:model="folder_id"
            class="relative z-20 w-full appearance-none rounded border-2 border-stroke bg-transparent 
            py-3 px-12 outline-none transition focus:border-darkBlue  active:border-darkBlue 
            dark:border-form-strokedark dark:bg-form-input  dark:focus:border-brightRed">
            <option class="p-3" selected>-- select folder --</option>
            @unless (count($folders)==0)
              @forelse ($folders as $folder)
                  <option value="{{$folder->id}}">{{$folder->name}}</option>
              @empty
                  <option >-- No Folder fount --</option>
              @endforelse
            @endunless
          </select>
          
          
          <span class="absolute top-1/2 right-4 z-10 -translate-y-1/2">
            <i class="fas fa-chevron-down "></i>
          </span>
        </div>

          @error('folder_id')
              <p class=" text-red-500 p-1">{{$message}}</p>
          @enderror
      </div>
      
      <div class="flex ">
          <button wire:click="addTask"
              class="md:w-2/5 mx-auto rounded-lg gap-3 border-2 border-stroke text-white hover:bg-darkGrayishBlue 
              py-3 px-5 font-medium outline-none transition bg-darkBlue focus:border-brightRed active:border-brightRed 
              dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
          
              <i class="fas fa-paper-plane"></i>
              Add Task
          </button>
      </div>

      <div wire:loading.delay.shortest  wire:target="addTask" class="flex mt-1 text-center bg-success text-white rounded items-center w-full">
          <p class="p-2 text-center items-center">
            <i class="fas fa-spinner fa-spin"></i>
            Adding Task...
          </p>
      </div>
        
    @elseif ($page == "Edit Task")
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
      
      <div class="mb-4">
        <h3 class="text-2xl font-bold">Edit Task ✍</h3>
      </div>
      
      <div class="md:w-3/5 mx-auto rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">

      <div class="flex flex-col gap-5.5 p-6.5 ">
        
        <div>
          <label class="mb-3 block font-medium text-sm text-darkBlue dark:text-white">
            Task Name
          </label>
          <input wire:model="name" type="text"  placeholder="Enter Task Name"
          class="w-full rounded-lg border-2 border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-darkBlue active:border-darkBlue disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-brightRed" />
            @error('name')
                <p class=" text-red-500 p-1">{{$message}}</p>
            @enderror
        </div>
        
        <div>
          <label class="mb-3 block font-medium text-sm text-darkBlue dark:text-white">
            Enter Description (Optional)
          </label>
          <textarea wire:model="description" rows="3" placeholder="Enter Description (Optional)"
          class="w-full rounded-lg border-2 border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-darkBlue active:border-darkBlue disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-brightRed"></textarea>
             @error('description')
                <p class=" text-red-500 p-1">{{$message}}</p>
            @enderror
        </div>
        

        
        <div class="relative" x-data="{ switcherToggle: false }">
            
          <label for="toggle4" class="flex cursor-pointer select-none items-center">
            Set Reminder 
            <div class="relative left-3">
              <input type="checkbox" wire:model="setreminder" id="toggle4" class="sr-only"
              @change="switcherToggle = !switcherToggle" />
              <div :class="switcherToggle && '!bg-brightRed'" class="block h-8 w-14 rounded-full bg-black">
              </div>
              <div :class="switcherToggle && '!right-1 !translate-x-full'"
              class="absolute left-1 top-1 flex h-6 w-6 items-center justify-center rounded-full bg-white transition">
            </div>
          </div>
        </label>

        <div class="mb-2 mt-2 flex flex-col gap-5.5 sm:flex-row">

            <div class="w-full sm:w-1/2">
              <label class="mb-3 block font-medium text-sm text-darkBlue dark:text-white">
                Select Date
              </label>
              <div class="relative">
                <input wire:model="task_date" type="date"  id=""
                class="datepicker custom-input-date custom-input-date-1
                w-full rounded border-2 border-stroke bg-transparent
                py-3 px-5 font-medium outline-none transition focus:border-darkBlue active:border-darkBlue
                dark:border-form-strokedark dark:bg-form-input dark:focus:border-brightRed" />
              </div>
                @error('task_date')
                    <p class=" text-red-500 p-1">{{$message}}</p>
                @enderror
            </div>

            <div class="w-full sm:w-1/2" style="display: none"  x-show="switcherToggle">
              <label class="mb-3 block font-medium text-sm text-darkBlue dark:text-white">
                Select time
              </label>
              <div class="relative">
                <input wire:model="reminder" type="time" placeholder="{{now()->format('H:i:s')}}" id=""
                class="datetimepicker custom-input-date custom-input-date-1
                w-full rounded border-2 border-stroke bg-transparent
                py-3 px-5 font-medium outline-none transition focus:border-darkBlue active:border-primary
                dark:border-form-strokedark dark:bg-form-input dark:focus:border-brightRed" />
              </div>
            </div>
        </div>  

      </div>
      
      <div>
        <label class="mb-3 block font-medium text-sm text-black dark:text-white">
          Select Folder
        </label>
          <div class="relative z-20 bg-white dark:bg-transparent">
            <span class="absolute top-1/2 left-4 z-30 -translate-y-1/2">
              <i class="fas fa-folder"></i>
            </span>
            <select wire:model="folder_id"
            class="relative z-20 w-full appearance-none rounded border-2 border-stroke bg-transparent 
            py-3 px-12 outline-none transition focus:border-darkBlue  active:border-darkBlue 
            dark:border-form-strokedark dark:bg-form-input  dark:focus:border-brightRed">
            <option class="p-3" selected>-- select folder --</option>
              @unless (count($folders)==0)
                @forelse ($folders as $folder)
                    <option value="{{$folder->id}}">{{$folder->name}}</option>
                @empty
                    <option >-- No Folder fount --</option>
                @endforelse
              @endunless
            </select>
          
          
            <span class="absolute top-1/2 right-4 z-10 -translate-y-1/2">
              <i class="fas fa-chevron-down "></i>
            </span>
          </div>

        @error('folder_id')
            <p class=" text-red-500 p-1">{{$message}}</p>
        @enderror
      </div>
    
      <div class="flex ">
        <button wire:click="updateTask({{$task_id}})"
            class="md:w-2/5 mx-auto rounded-lg gap-3 border-2 border-stroke text-white hover:bg-darkGrayishBlue 
            py-3 px-5 font-medium outline-none transition bg-darkBlue focus:border-brightRed active:border-brightRed 
            dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
        
            <i class="fas fa-paper-plane"></i>
            Update Task
        </button>
      </div>

      <div wire:loading.delay.shortest  wire:target="updateTask({{$task_id}})" class="flex mt-1 text-center bg-success text-white rounded items-center w-full">
          <p class="p-2 text-center items-center">
            <i class="fas fa-spinner fa-spin"></i>
            Updating Task...
          </p>
      </div>
    @endif
    

</main>