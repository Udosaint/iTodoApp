<x-auth-layout>

    <div class="flex flex-row">
        
        <div class="hidden md:flex md:w-1/2 h-screen bg-gradient-to-tr from-brightRedLight from-40% to-darkGrayishBlue bg-gray-300  items-center justify-center">
            <img src="img/forgot-password.png" alt="Image" class="w-3/4">
        </div>

        <div class=" flex flex-col h-screen w-full md:w-3/5  md:h-screen md:flex items-center justify-center p-2">

            {{-- <img src="img/itodo-logo.png" alt="" class="items-center w-40 mb-8 mt-4"> --}}

            <div class=" p-8 rounded-xl shadow-sm shadow-veryDarkBlue w-full md:w-3/5  bg-white">
                <h2 class="text-3xl font-bold mb-6 mt-6 text-center text-veryDarkBlue">Trouble Logging in?</h2>
                <p class="mb-8 justify-center">Enter your email associated to your account and we will send you a pin to reset your account.</p>

                {{-- Form start here --}}
                <form class=" my-4" action="{{route('forget.password')}}" method="POST">

                    @csrf

                    <div class="mb-6 mt-4 my-3">
                        <label class="block  text-veryDarkBlue text-md  mb-5" for="username">Your Email</label>
                        <input class="w-full border border-veryDarkBlue rounded-md px-3 py-2 focus:outline-none focus:border-2 focus:border-brightRed"
                            type="text" id="email" placeholder="Enter your email" />
                    </div>

                    <button class="w-full h-11  bg-brightRed hover:bg-brightRedLight transition text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline"
                        type="submit">Continue
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