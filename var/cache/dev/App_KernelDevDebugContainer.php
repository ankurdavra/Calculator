<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQ38Jbh9\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQ38Jbh9/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQ38Jbh9.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQ38Jbh9\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQ38Jbh9\App_KernelDevDebugContainer([
    'container.build_hash' => 'Q38Jbh9',
    'container.build_id' => 'c5cc3deb',
    'container.build_time' => 1624643216,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQ38Jbh9');
