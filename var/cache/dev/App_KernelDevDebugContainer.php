<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQx5juKx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQx5juKx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQx5juKx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQx5juKx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQx5juKx\App_KernelDevDebugContainer([
    'container.build_hash' => 'Qx5juKx',
    'container.build_id' => '065a047b',
    'container.build_time' => 1654615453,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQx5juKx');
