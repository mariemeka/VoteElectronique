<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUrw7QjN\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUrw7QjN/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUrw7QjN.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUrw7QjN\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUrw7QjN\App_KernelDevDebugContainer([
    'container.build_hash' => 'Urw7QjN',
    'container.build_id' => '5349fde4',
    'container.build_time' => 1717768217,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUrw7QjN');
