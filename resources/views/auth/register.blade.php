<x-auth-layout>

    
   <div class="flex flex-row">
        
        <div class="hidden md:flex md:w-1/2 h-screen bg-gradient-to-tr from-brightRedLight from-40% to-darkGrayishBlue bg-gray-300  items-center justify-center">
            <img src="img/register.png" alt="Image" class="w-2/4">
        </div>

        <div class=" flex flex-col h-screen w-full md:w-3/5  md:h-screen md:flex items-center justify-center p-2">

            <div class=" px-4 md:p-8 rounded-xl shadow-sm shadow-veryDarkBlue w-full md:w-3/5  bg-white">
                <h2 class="text-3xl font-bold mb-4 mt-2 text-center text-veryDarkBlue">Create Account</h2>

                {{-- Form start here --}}
                <form class=" my-1" action="{{route('register')}}" method="POST">

                    @csrf
                    <div class="mb-4 mt-8 my-3">
                        <label class="block  text-veryDarkBlue text-md  mb-3" for="username">Your Firstname</label>
                        <input class="w-full border border-veryDarkBlue rounded-md px-3 py-2 focus:outline-none focus:border-2 focus:border-brightRed"
                            type="text" id="firstname" type="text" name="firstname" placeholder="Enter your firstname" />
                    </div>

                    <div class="mb-4">
                        <label class="block  text-veryDarkBlue text-md  mb-3" for="username">Your Lastname</label>
                        <input class="w-full border border-veryDarkBlue rounded-md px-3 py-2 focus:outline-none focus:border-2 focus:border-brightRed"
                            type="text" id="lastname" type="text" name="lastname" placeholder="Enter your lastname" />
                    </div>
                    <div class="mb-4 my-3">
                        <label class="block  text-veryDarkBlue text-md  mb-3" for="username">Your Email</label>
                        <input class="w-full border border-veryDarkBlue rounded-md px-3 py-2 focus:outline-none focus:border-2 focus:border-brightRed"
                            type="email" id="email" name="email" placeholder="Enter your email" />
                    </div>
                    <div class="mb-4 md:mb-4">
                        <label class="block text-veryDarkBlue text-md  mb-2" for="password">Your Password</label>
                        <input class="w-full border border-veryDarkBlue rounded-md px-3 py-2 focus:outline-none focus:border-2 focus:border-brightRed"
                            type="password" id="password" name="confirm" placeholder="Enter your password" />
                    </div>

                    <div class="mb-4 md:mb-4">
                        <label class="block text-veryDarkBlue text-md  mb-2" for="password">Confirm Password</label>
                        <input class="w-full border border-veryDarkBlue rounded-md px-3 py-2 focus:outline-none focus:border-2 focus:border-brightRed"
                            type="password" id="password_confirm" name="password_confirm" placeholder="Enter your confirm password" />
                    </div>

                    <button class="w-full h-11 mt-4 mb-4 bg-brightRed hover:bg-brightRedLight transition text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline"
                        type="submit">Register
                    </button>

                    {{-- Create new Account --}}
                    <p class=" text-center text-veryDarkBlue font-bold nav-link mb-4">
                        Already have account?  
                        <a href="{{route('login')}}" class=" text-brightRed  font-bold nav-link">Sign in</a>
                    </p>

                </form>
            </div>
        </div>
    </div>

</x-auth-layout>