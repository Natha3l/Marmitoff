<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNcHsXSX\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNcHsXSX/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNcHsXSX.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNcHsXSX\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNcHsXSX\App_KernelDevDebugContainer([
    'container.build_hash' => 'NcHsXSX',
    'container.build_id' => 'd9c7b39a',
    'container.build_time' => 1732891881,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNcHsXSX');