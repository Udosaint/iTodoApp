<x-title> Email Verify</x-title>

<x-auth-layout>

    @livewire('auth.email-verify')


</x-auth-layout>

  <script>
    const otpInputs = document.querySelectorAll('.otp-input');

    otpInputs.forEach((input, index) => {

      input.addEventListener('input', (event) => {
        const currentInput = event.target;
        if (currentInput.value.length === 1) {
          if (index < otpInputs.length - 1) {
            otpInputs[index + 1].focus();
          }
        }
      });

      input.addEventListener('keydown', (event) => {
        if (event.key === 'Backspace' && input.value === '') {
          if (index > 0) {
            otpInputs[index - 1].focus();
          }
        }
      });




    });

    // counter for resend otp
    document.addEventListener("DOMContentLoaded", function() {
      var countdown = 15;
      var timerDisplay = document.getElementById("timer");

      function updateTimer() {
        timerDisplay.textContent = countdown + " sec";
        countdown--;
        $('#resend_otp').hide();

        if (countdown < 0) {
          clearInterval(timerInterval);
          timerDisplay.textContent = "";
          $('#resend_otp').show();
        }
      }

      updateTimer(); // Initial call to display the starting time

      var timerInterval = setInterval(updateTimer, 1000);
    });

    // Resend the Otp 
    $('#resend_otp').click(function(){
        alert("OTP Resend");
    });
  </script>