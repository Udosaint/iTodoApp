  <main>

    <x-user-alert/>

    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">

        
        
        <div class="mb-4">
            <h3 class="text-2xl font-bold">My Folders ✍</h3>
        </div>

        <div class="grid grid-cols-5 gap-8">

            @if ($page == "Add")

                {{-- ADD FOLDER START --}}
                <div class="col-span-5 xl:col-span-2">
                    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <div class="border-b border-stroke py-4 px-7 dark:border-strokedark">
                            <h3 class="font-bold text-black dark:text-white">
                            Add Folder
                            </h3>
                        </div>
                        <div class="flex flex-col gap-5.5 p-6.5 ">
                            
                            <div>
                                <label class="mb-3 block font-medium text-sm text-darkBlue dark:text-white">
                                    Folder Name
                                </label>
                                <input wire:model.lazy="name" type="text" placeholder="Enter Task Name"
                                class="w-full rounded-lg border-2 border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-darkBlue active:border-darkBlue disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-brightRed" />
                                    @error('name')
                                        <p class=" text-red-500 p-1">{{$message}}</p>
                                    @enderror
                            </div>
                                @unless (count($icons) == 0)
                                    <div>
                                        <label class="mb-2 block font-medium text-sm text-black dark:text-white">
                                        Select Icon
                                        </label>

                                        <div class="grid grid-cols-5 gap-2 md:grid-cols-5 md:gap-2 xl:grid-cols-6 2xl:gap-4 ">
                                            @foreach ($icons as $icon)
                                                <div class="border border-stroke p-3 px-3 sm:w-full bg-white shadow-3 rounded">
                                                    <label class="flex flex-row justify-between items-center ">
                                                    <input wire:model="icon" type="radio"  class="form-radio"   name="icon" value="{{$icon->icon_name}}">
                                                    <span class="ml-1">{!!$icon->icon_name!!}</span>
                                                    </label>
                                                </div>                                                
                                            @endforeach
                                        </div> 
                                        @error('icon')
                                            <p class=" text-red-500 p-1">{{$message}}</p>
                                        @enderror
                                    </div>
                                @else
                                    <div class="text-center w-full p-4 bg-brightRedLight font-medium">
                                        <i class="fas fa-face-frown-open text-white"></i>
                                        There is no icon yet
                                    </div>
                                @endunless
                                    

                            <div class="flex">
                                <button wire:click="addfolder"
                                class="md:w-2/5 mx-auto rounded-lg gap-3 border-2 border-stroke text-white hover:bg-darkGrayishBlue 
                                py-3 px-5 font-medium outline-none transition bg-darkBlue focus:border-brightRed active:border-brightRed 
                                dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                                
                                <i class="fas fa-paper-plane"></i>
                                Add Folder
                                </button>                        
                            </div>

                            <div wire:loading.delay.shortest  wire:target="addfolder" class="flex mt-1 text-center bg-success text-white rounded items-center w-full">
                                <p class="p-2 text-center items-center">
                                    <i class="fas fa-spinner fa-spin"></i>
                                    Adding Folder...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- ADD FOLDER END  --}}                
            @else
                {{-- Edit FOLDER START --}}
                <div class="col-span-5 xl:col-span-2">
                    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <div class="border-b border-stroke py-4 px-7 dark:border-strokedark">
                            <h3 class="font-bold text-black dark:text-white">
                            Edit Folder
                            </h3>
                        </div>
                        <div class="flex flex-col gap-5.5 p-6.5 ">
                            
                            <div>
                                <label class="mb-3 block font-medium text-sm text-darkBlue dark:text-white">
                                    Folder Name
                                </label>
                                <input wire:model.lazy="name" type="text" placeholder="Enter Task Name"
                                class="w-full rounded-lg border-2 border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-darkBlue active:border-darkBlue disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-brightRed" />
                                    @error('name')
                                        <p class=" text-red-500 p-1">{{$message}}</p>
                                    @enderror
                            </div>
                            
                            @unless (count($icons) == 0) 
                            <div>
                                <label class="mb-2 block font-medium text-sm text-black dark:text-white">
                                Select Icon
                                </label>

                                <div class="grid grid-cols-4 gap-4 md:grid-cols-5 md:gap-4 xl:grid-cols-6 2xl:gap-7 ">
                            @foreach ($icons as $icon)
                                    <div class="border border-stroke p-3 bg-white shadow-3 rounded">
                                        <label class="flex items-center justify-between">
                                        <input wire:model="icon" type="radio"  class="form-radio"   name="icon" value="{{$icon->icon_name}}">
                                        <span class="ml-2">{!!$icon->icon_name!!}</span>
                                        </label>
                                    </div>                          
                                                    
                            @endforeach
                                </div> 
                                    @error('icon')
                                        <p class=" text-red-500 p-1">{{$message}}</p>
                                    @enderror
                            </div> 

                            @else
                                <div class="w-full border-stroke bg-white text-center">
                                    <p class=" text-green-500 p-1">There is no Icons yet, contact the admin</p>
                                </div>
                            @endunless
                                    

                            <div class="flex">
                                <button wire:click="updatefolder"
                                class="md:w-3/5 mx-auto rounded-lg gap-3 border-2 border-stroke text-white hover:bg-darkGrayishBlue 
                                py-3 px-5 font-medium outline-none transition bg-darkBlue focus:border-brightRed active:border-brightRed 
                                dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                                
                                <i class="fas fa-paper-plane"></i>
                                Update Folder
                                </button>                        
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Edit FOLDER END  --}}                
            @endif



            <div class="col-span-5 xl:col-span-3">
                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="border-b border-stroke py-4 px-7 dark:border-strokedark">
                        <h3 class="font-bold text-black dark:text-white">
                        All Folders
                        </h3>
                    </div>


                    <div class="max-w-full overflow-x-auto">
                        <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-gray-2 text-left dark:bg-meta-4">
                            <th class="min-w-[20px] py-4 px-4 font-medium text-black dark:text-white xl:pl-11">
                                #
                            </th>
                            <th class="min-w-[150px] py-4 px-4 font-medium text-black dark:text-white">
                                Folder
                            </th>
                            <th class="min-w-[120px] py-4 px-4 font-medium text-black dark:text-white">
                                Icon
                            </th>
                            <th class="py-4 px-4 font-medium text-black dark:text-white">
                                Actions
                            </th>
                            </tr>
                        </thead>
                        <tbody>

                            @unless (count($folders) == 0)
                            @foreach ($folders as $folder)
                            <tr>
                            <td class="border-b border-[#eee] py-5 px-4 pl-9 dark:border-strokedark xl:pl-11">
                                <h5 class="font-medium text-black dark:text-white">{{$loop->iteration}}</h5>
                            </td>
                            <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                <p class="text-black dark:text-white">{{$folder->name}}</p>
                            </td>
                            <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                <p class="inline-flex rounded-full bg-opacity-10 py-1 px-3 text-sm font-medium text-success">
                                {!!$folder->icon!!}
                                </p>
                            </td>
                            <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                <div class="flex items-center space-x-3.5">
                                <button  wire:click="editFolder({{$folder->id}})" class="hover:text-primary bg-white border border-primary p-2 hover:shadow-2">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button wire:click="deleteFolder({{$folder->id}})" class="hover:text-brightRed bg-white border border-brightRed p-2 hover:shadow-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                                
                                </div>
                            </td>
                            </tr>                            
                            @endforeach
                            @else
                                
                            @endunless


                        </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
      



    </div>
</main>
