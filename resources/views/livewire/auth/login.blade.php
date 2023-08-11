   <div class="flex flex-row">

        <x-alert></x-alert>

        <div class="hidden md:flex md:w-1/2 h-screen bg-gradient-to-tr from-brightRedLight from-40% to-darkGrayishBlue bg-gray-300  items-center justify-center">
            <img src="{{asset('img/login-1.png')}}" alt="Image" class="w-3/4">
        </div>

        <div class=" flex flex-col h-screen w-full md:w-3/5  md:h-screen md:flex items-center justify-center p-2">

            {{-- <img src="img/itodo-logo.png" alt="" class="items-center w-40 mb-8 mt-4"> --}}

            <div class=" p-8 rounded-xl shadow-sm shadow-veryDarkBlue w-full md:w-3/5  bg-white">
                <h2 class="text-3xl font-bold mb-6 mt-6 text-center text-veryDarkBlue">Sign in to {{env('SITE')}}</h2>

                {{-- Form start here --}}
                <form class=" my-4"  wire:submit.prevent="LoginAccount" >

                    @csrf

                    <div class="mb-6 mt-8 my-3">
                        <label class="block  text-veryDarkBlue text-md  mb-2" for="username">Your Email</label>
                        <input wire:model.lazy="email" class="w-full border border-veryDarkBlue rounded-md px-3 py-2 focus:outline-none focus:border-2 focus:border-brightRed"
                            type="text" id="email" placeholder="Enter your email" />
                            @error('email')
                                <p class=" text-red-500 p-1">{{$message}}</p>
                            @enderror
                    </div>
                    <div class="mb-6 md:mb-6">
                        <label class="block text-veryDarkBlue text-md  mb-2" for="password">Your Password</label>
                        <input wire:model.lazy="password" class="w-full border border-veryDarkBlue rounded-md px-3 py-2 focus:outline-none focus:border-2 focus:border-brightRed"
                            type="password" id="password" placeholder="Enter your password" />
                            @error('password')
                                <p class=" text-red-500 p-1">{{$message}}</p>
                            @enderror
                    </div>
                    
                    {{-- Forget Password --}}
                    <a href="{{route('forget.password')}}" class=" text-brightRed font-bold nav-link">Forget Password</a>

                    <button class="w-full h-11 mt-8 bg-brightRed hover:bg-brightRedLight transition text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline"
                        type="submit">Sign In
                    </button>

                    <div wire:loading.delay.shorter  wire:target="LoginAccount" class="flex mt-1 text-center bg-success text-white rounded items-center w-full">
                         <p class="p-2 text-center items-center">
                            <i class="fas fa-spinner fa-spin"></i>
                            Loging in, please wait...
                        </p>
                    </div>

                    {{-- Create new Account --}}
                    <p class="mb-8 mt-8 text-center text-veryDarkBlue font-bold nav-link">
                        New to {{env('SITE')}}? 
                        <a href="{{route('register')}}" class=" text-brightRed font-bold nav-link">Create Account</a>
                    </p>

                </form>
            </div>
        </div>
    </div>
