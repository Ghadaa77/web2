<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXJNcPIx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXJNcPIx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXJNcPIx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXJNcPIx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXJNcPIx\App_KernelDevDebugContainer([
    'container.build_hash' => 'XJNcPIx',
    'container.build_id' => 'd508b0b5',
    'container.build_time' => 1682512423,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXJNcPIx');
