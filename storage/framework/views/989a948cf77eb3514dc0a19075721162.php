<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.title','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> Email Verify <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginala6488acc797ee40bc55ed6344dee8ea1 = $component; } ?>
<?php $component = App\View\Components\AuthLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('auth-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AuthLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('auth.email-verify')->html();
} elseif ($_instance->childHasBeenRendered('z4yRj42')) {
    $componentId = $_instance->getRenderedChildComponentId('z4yRj42');
    $componentTag = $_instance->getRenderedChildComponentTagName('z4yRj42');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('z4yRj42');
} else {
    $response = \Livewire\Livewire::mount('auth.email-verify');
    $html = $response->html();
    $_instance->logRenderedChild('z4yRj42', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala6488acc797ee40bc55ed6344dee8ea1)): ?>
<?php $component = $__componentOriginala6488acc797ee40bc55ed6344dee8ea1; ?>
<?php unset($__componentOriginala6488acc797ee40bc55ed6344dee8ea1); ?>
<?php endif; ?>

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
  </script><?php /**PATH C:\MY FILES\LARAVEL\PROJECT\iTodoApp\resources\views/auth/email-verify.blade.php ENDPATH**/ ?>