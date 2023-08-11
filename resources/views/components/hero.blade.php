


    <section id="hero">
      <!-- Flex Container -->
      <div
        class="container flex flex-col-reverse items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row"
      >
        <!-- Left item -->
        <div class="flex flex-col mb-32 space-y-12 md:w-1/2">
          <h1
            class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left"
          >
            Effortlessly Manage and Organize Your Tasks
          </h1>
          <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
            iTodo is the ultimate task management app that helps you stay organized and productive.
          </p>
          <div class="flex justify-center md:justify-start gap-3">
            <a
              href="{{route('register')}}"
              class="p-3 px-6 pt-2 text-white bg-brightRed rounded-md baseline hover:bg-brightRedLight"
              >Get Started</a
            >
            <a
              href="{{route('login')}}"
              class="p-3 px-6 pt-2 text-white bg-veryDarkBlue rounded-md baseline hover:outline hover:outline-2 outline-blue-950 hover:text-veryDarkBlue hover:bg-white"
              >Sign In</a
            >
          </div>
        </div>
        <!-- Image -->
        <div class="md:w-1/2">
          <img src="img/illustration-intro-01.png" alt="" />
        </div>
      </div>
    </section>