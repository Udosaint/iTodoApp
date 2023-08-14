<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.title','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Register <?php echo $__env->renderComponent(); ?>
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
    $html = \Livewire\Livewire::mount('auth.register')->html();
} elseif ($_instance->childHasBeenRendered('LNqzMqw')) {
    $componentId = $_instance->getRenderedChildComponentId('LNqzMqw');
    $componentTag = $_instance->getRenderedChildComponentTagName('LNqzMqw');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LNqzMqw');
} else {
    $response = \Livewire\Livewire::mount('auth.register');
    $html = $response->html();
    $_instance->logRenderedChild('LNqzMqw', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala6488acc797ee40bc55ed6344dee8ea1)): ?>
<?php $component = $__componentOriginala6488acc797ee40bc55ed6344dee8ea1; ?>
<?php unset($__componentOriginala6488acc797ee40bc55ed6344dee8ea1); ?>
<?php endif; ?><?php /**PATH C:\MY FILES\LARAVEL\PROJECT\iTodoApp\resources\views/auth/register.blade.php ENDPATH**/ ?>