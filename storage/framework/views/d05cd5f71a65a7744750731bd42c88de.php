

    <!-- Navbar -->
    <nav class="relative container mx-auto p-6">
      <!-- Flex container -->
      <div class="flex items-center justify-between">
        <!-- Logo -->
        <div class="pt-2">
          <img class="" style="width: 6rem" src="img/itodo-logo.png" alt="" />
        </div>
        <!-- Menu Items -->
        <div class="hidden space-x-6 md:flex">
          <a href="#" class="text-veryDarkBlue hover:text-brightRed  hover:border-b-2  border-veryDarkBlue">Pricing</a>
          <a href="#" class="text-veryDarkBlue hover:text-brightRed  hover:border-b-2  border-veryDarkBlue">Product</a>
          <a href="#" class="text-veryDarkBlue hover:text-brightRed  hover:border-b-2  border-veryDarkBlue">About Us</a>
          <a href="#" class="text-veryDarkBlue hover:text-brightRed  hover:border-b-2  border-veryDarkBlue">Careers</a>s
          <a href="#" class="text-veryDarkBlue hover:text-brightRed  hover:border-b-2  border-veryDarkBlue">Community</a>
        </div>
        <!-- Button -->


        <div class="flex gap-3">
            <a
          href="<?php echo e(route('login')); ?>"
          class="hidden p-3 px-6 pt-2 transition text-veryDarkBlue outline outline-2 outline-blue-950 rounded-md baseline hover:bg-veryDarkBlue hover:text-white md:block"
          >Sign In</a
        >
        <a
          href="<?php echo e(route('register')); ?>"
          class="hidden p-3 px-6 pt-2 text-white bg-brightRed rounded-md baseline hover:bg-brightRedLight md:block"
          >Get Started</a
        >
        </div>


        <!-- Hamburger Icon -->
        <button
          id="menu-btn"
          class="block hamburger md:hidden focus:outline-none"
        >
          <span class="hamburger-top"></span>
          <span class="hamburger-middle"></span>
          <span class="hamburger-bottom"></span>
        </button>
      </div>

      <!-- Mobile Menu -->
      <div class="md:hidden">
        <div
          id="menu"
          class="absolute flex-col items-center hidden self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md"
        >
          <a class="text-veryDarkBlue" href="#">Pricing</a>
          <a class="text-veryDarkBlue" href="#">Product</a>
          <a class="text-veryDarkBlue" href="#">About Us</a>
          <a  class="text-veryDarkBlue"href="#">Careers</a>
          <a class="text-veryDarkBlue" href="#">Community</a>
        </div>
      </div>
    </nav><?php /**PATH C:\MY FILES\LARAVEL\PROJECT\iTodoApp\resources\views/components/nav.blade.php ENDPATH**/ ?>