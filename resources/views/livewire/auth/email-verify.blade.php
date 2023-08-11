<div class="flex flex-row">
    <x-alert></x-alert>
        
        <div class="hidden md:flex md:w-1/2 h-screen bg-gradient-to-tr from-brightRedLight from-40% to-darkGrayishBlue bg-gray-300  items-center justify-center">
            <img src="img/otp.png" alt="Image" class="w-3/4">
        </div>

        <div class=" flex flex-col h-screen w-full md:w-3/5  md:h-screen md:flex items-center justify-center p-2">

            {{-- <img src="img/itodo-logo.png" alt="" class="items-center w-40 mb-8 mt-4"> --}}

            <div class=" p-8 rounded-xl shadow-sm shadow-veryDarkBlue w-full md:w-3/5  bg-white">
                <h2 class="text-3xl font-bold mb-6 mt-6 text-center text-veryDarkBlue">Verify your Email</h2>
                <p class="mb-8 text-center justify-center ">Enter the 6 digit pin sent to[{{session('user')}}]</p>

                {{-- Form start here --}}


                <form class=" my-4" wire:submit.prevent="verifyOtp" >

                    @csrf

                    <div class=" {{$otp_error? '' : 'hidden'}} mb-2 p-2 rounde text-brightRedLight font-medium text-center">
                        {{$otp_error}}
                    </div>

                    <div class="mb-4 flex justify-between">

                        <input type="phone" wire:model.defer="digit1" id="digit1" name="digit1" 
                            class="otp-input w-1/2 mr-2 border-2 border-veryDarkBlue  rounded py-2 px-3 text-center focus:outline-none focus:border-brightRed focus:border-2" 
                            maxlength="1" required>

                        <input type="phone" wire:model.defer="digit2" id="digit2" name="digit2" 
                            class="otp-input w-1/2 mr-2 border-2 border-veryDarkBlue  rounded py-2 px-3 text-center focus:outline-none focus:border-brightRed focus:border-2" 
                            maxlength="1" required>

                        <input type="phone" wire:model.defer="digit3" id="digit3" name="digit3" 
                            class="otp-input w-1/2 mr-2 border-2 border-veryDarkBlue  rounded py-2 px-3 text-center focus:outline-none focus:border-brightRed focus:border-2" 
                            maxlength="1" required>

                        <input type="phone" wire:model.defer="digit4" id="digit4" name="digit4" 
                            class="otp-input w-1/2 mr-2 border-2 border-veryDarkBlue  rounded py-2 px-3 text-center focus:outline-none focus:border-brightRed focus:border-2" 
                            maxlength="1" required>

                        <input type="phone" wire:model.defer="digit5" id="digit5" name="digit5" 
                            class="otp-input w-1/2 mr-2 border-2 border-veryDarkBlue  rounded py-2 px-3 text-center focus:outline-none focus:border-brightRed focus:border-2" 
                            maxlength="1" required>

                        <input type="phone" wire:model.defer="digit6" id="digit6" name="digit6" 
                            class="otp-input w-1/2 mr-2 border-2 border-veryDarkBlue  rounded py-2 px-3 text-center focus:outline-none focus:border-brightRed focus:border-2" 
                            maxlength="1" required>

                    </div>

                    <div class="flex justify-between">

                    <button type="submit"  class=" w-full bg-brightRed hover:bg-brightRedLight text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline">
                        Verify
                    </button>

                    </div>
                </form>

                {{-- Resend OTP Form --}}

                <form action="">
                    <p class="mt-3  text-veryDarkBlue nav-link"> Did'nt Recieve OTP ?
                        <button id="resend_otp" href="mailto:{{env('SITE_MAIL')}}" class=" text-brightRed font-bold nav-link">Resend OTP</button>
                        <span id="timer"></span>
                    </p>
                </form>

            </div>
        </div>
    </div>