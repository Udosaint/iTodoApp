

<x-guest-layout>

{{-- Hero Section --}}
    <x-hero/>



{{-- features  --}}


<x-features/>


{{-- HOW IT WORK --}}

    <!--  -->
    <section id="howitworks ">
      <!-- Container to heading and testm blocks -->
      <div class="max-w-6xl px-5 mx-auto mt-32 text-center">
        <!-- Heading -->
        <h2 class="text-4xl font-bold text-center text-veryDarkBlue">
          How it Work
        </h2>
        <!-- Testimonials Container -->
        <div class="flex flex-col mt-24 md:flex-row md:space-x-6">
          <!-- Testimonial 1 -->
          <div
            class="flex flex-col items-center p-6 space-y-6 rounded-lg md:w-1/3"
          >
            <img src="img/signup.png" class="-mt-14" alt="" />
            <h5 class="text-lg font-bold">Sign Up</h5>
            <p class="text-sm text-darkGrayishBlue">
              Create your iTodo account to access all the powerful task management features.
            </p>
          </div>

          <!-- Testimonial 2 -->
          <div
            class="flex flex-col items-center mt-10 md:mt-0 p-6 space-y-6 rounded-lg md:flex md:w-1/3"
          >
            <img src="img/create-task.png" class="-mt-14" alt="" />
            <h5 class="text-lg font-bold">Create Tasks</h5>
            <p class="text-sm text-darkGrayishBlue">
              Add your tasks, set due dates, and organize them into different categories for better clarity.
            </p>
          </div>

          <!-- Testimonial 3 -->
          <div
            class="flex flex-col items-center  mt-10 md:mt-0 p-6 space-y-6 rounded-lg md:flex md:w-1/3"
          >
            <img src="img/alert.png" class="-mt-14" alt="" />
            <h5 class="text-lg font-bold">Get Notified</h5>
            <p class="text-sm text-darkGrayishBlue">
              Receive notifications when tasks are completed or approaching their due dates.
            </p>
          </div>
        </div>

      </div>
    </section>

{{-- Testimony --}}

<x-testimony/>


{{-- CTA  --}}

<x-cta/>

</x-guest-layout>