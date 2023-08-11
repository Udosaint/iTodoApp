<x-auth-layout>

    <x-title>Reset Password</x-title>
    <x-alert/>

    <div class="flex flex-row">
        
        <div class="hidden md:flex md:w-1/2 h-screen bg-gradient-to-tr from-brightRedLight from-40% to-darkGrayishBlue bg-gray-300  items-center justify-center">
            <img src="img/forgot-password.png" alt="Image" class="w-3/4">
        </div>

        <div class=" flex flex-col h-screen w-full md:w-3/5  md:h-screen md:flex items-center justify-center p-2">

            {{-- <img src="img/itodo-logo.png" alt="" class="items-center w-40 mb-8 mt-4"> --}}

            <div class=" p-8 rounded-xl shadow-sm shadow-veryDarkBlue w-full md:w-3/5  bg-white">
                <h2 class="text-3xl font-bold mb-6 mt-6 text-center text-veryDarkBlue">Reset Password?</h2>
                <p class="mb-8 justify-center text-center">Enter the verification pin sent to your email [{{session('email')}}] and your new password.</p>

                {{-- Form start here --}}
                <form class=" my-4" action="{{route('reset.password')}}" method="POST">

                    @csrf

                    <div class="mb-6 mt-4 my-3">
                        <label class="block  text-veryDarkBlue text-md  mb-2" for="otp">Your Verification Code</label>
                        <input class="w-full border border-veryDarkBlue rounded-md px-3 py-2 focus:outline-none focus:border-2 focus:border-brightRed"
                            type="text" name="otp" id="otp" value="{{old('otp')}}" placeholder="Enter your OTP code" />
                        @error('otp')
                            <p class=" text-red-500 p-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6 mt-4 my-3">
                        <label class="block  text-veryDarkBlue text-md  mb-2" for="username">Your Password</label>
                        <input class="w-full border border-veryDarkBlue rounded-md px-3 py-2 focus:outline-none focus:border-2 focus:border-brightRed"
                            type="password" name="password" id="password" placeholder="Enter your password" />
                        @error('password')
                            <p class=" text-red-500 p-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6 mt-4 my-3">
                        <label class="block  text-veryDarkBlue text-md  mb-2" for="username">Confirm Password</label>
                        <input class="w-full border border-veryDarkBlue rounded-md px-3 py-2 focus:outline-none focus:border-2 focus:border-brightRed"
                            type="password" name="password_confirmation" id="password_confirmation" placeholder="Enter your password" />
                        @error('password_confirmation')
                            <p class=" text-red-500 p-1">{{$message}}</p>
                        @enderror
                    </div> 

                    <button class="w-full h-11  bg-brightRed hover:bg-brightRedLight transition text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline"
                        type="submit">Reset Password
                    </button>

                    <p class="mt-3 text-center text-veryDarkBlue font-bold nav-link">
                        Still having trouble logging in? 
                        <a href="mailto:{{env('SITE_MAIL')}}" class=" text-brightRed font-bold nav-link">send us a message</a>
                    </p>

                </form>
            </div>
        </div>
    </div>


</x-auth-layout>