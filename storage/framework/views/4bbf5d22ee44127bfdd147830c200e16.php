<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('sidebar')->html();
} elseif ($_instance->childHasBeenRendered('oXEQwe9')) {
    $componentId = $_instance->getRenderedChildComponentId('oXEQwe9');
    $componentTag = $_instance->getRenderedChildComponentTagName('oXEQwe9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('oXEQwe9');
} else {
    $response = \Livewire\Livewire::mount('sidebar');
    $html = $response->html();
    $_instance->logRenderedChild('oXEQwe9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?><?php /**PATH C:\MY FILES\LARAVEL\PROJECT\iTodoApp\resources\views/components/sidebar.blade.php ENDPATH**/ ?>