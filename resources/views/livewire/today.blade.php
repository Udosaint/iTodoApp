    <main>

         <x-user-alert/>

        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">

            <div class="mb-4">
                <h3 class="text-2xl font-bold">Today ⌚</h3>
            </div>


            <div
                class="rounded-sm border border-stroke bg-white px-5 pt-6 pb-2.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
                
                <h4 class="mb-6 text-xl font-bold text-black dark:text-white">
                    Today Task
                </h4>

                 <div class="max-w-full overflow-x-auto"> 
                    @unless (count($today) == 0)
                        <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-gray-2 text-left dark:bg-meta-4">
                            <th class="py-4 px-4 font-medium text-black dark:text-white xl:pl-11">
                                #
                            </th>
                            <th class=" py-4 px-4 font-medium text-black dark:text-white">
                                Name
                            </th>
                            <th class="min-w-[120px] py-4 px-4 font-medium text-black dark:text-white">
                                Description
                            </th>
                            
                            <th class="min-w-[120px] py-4 px-4 font-medium text-black dark:text-white">
                                Status
                            </th>
                            <th class="min-w-[120px] py-4 px-4 font-medium text-black dark:text-white">
                                Date
                            </th>
                            <th class="min-w-[120px] py-4 px-4 font-medium text-black dark:text-white">
                                Folder
                            </th>
                            <th class="py-4 px-4 font-medium text-black dark:text-white">
                                Actions
                            </th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            @foreach ($today as $task)
                                <tr class="{{$task->status == 0 ? '' : 'line-through' }}">
                                <td class="border-b border-[#eee] py-5 px-4  dark:border-strokedark xl:pl-11">
                                    <div >
                                        <label for="checkboxLabelOne" class="flex cursor-pointer select-none items-center">
                                        <div class="relative">
                                            <input type="checkbox" id="checkboxLabelOne" class="sr-only"/>
                                            <div class="{{$task->status == 0 ? 'border-warning' : 'border-success' }} bg-gray dark:bg-transparent mr-4 flex h-5 w-5 items-center justify-center rounded border">
                                            <span class="h-2.5 w-2.5 rounded-sm {{$task->status == 0 ? 'bg-warning' : 'bg-success' }}"></span>
                                            </div>
                                        </div>
                                       <h5 class="font-medium text-black dark:text-white">{{$loop->iteration}}</h5>
                                        </label>
                                    </div>
                                    
                                </td>
                                <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                    <p class="text-black dark:text-white">{{$task->name}}</p>
                                </td>
                                <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                    <p class="text-black dark:text-white">{{$task->description}}</p>
                                </td>
                                <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                    <p class="text-black dark:text-white">{{$task->status == 0 ? 'Pending' : 'Done'}}</p>
                                </td>
                                <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                    <p class="text-black dark:text-white">{{$task->date}}</p>
                                </td>
                                <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                    <p class="inline-flex items-center rounded-full bg-opacity-10 py-1 px-3 text-sm font-medium text-success">
                                    {!!$task->icon!!}
                                    <span class="ml-1">{{$task->folder}}</span>
                                    </p>
                                </td>
                                <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                    <div class="flex items-center space-x-3.5">
                                    <button  wire:click="editTask({{$task->id}})" class="hover:text-primary bg-white border border-primary p-2 hover:shadow-2">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button wire:click="deleteTask({{$task->id}})" class="hover:text-brightRed bg-white border border-brightRed p-2 hover:shadow-2">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <button wire:click="completeTask({{$task->id}})" class="hover:text-success bg-white border border-success p-2 hover:shadow-2">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    
                                    </div>
                                </td>
                                </tr>                            
                            @endforeach
                        </tbody>
                        </table>
                    @else
                        <p class="text-center text-lg font-medium p-4">No task found</p>
                    @endunless
                    
                    
                </div>
            </div>
            <!-- ====== Chat Card End -->
        </div>
    </main>