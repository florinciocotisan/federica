<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMw82MaJ\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMw82MaJ/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerMw82MaJ.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerMw82MaJ\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerMw82MaJ\appAppKernelProdContainer([
    'container.build_hash' => 'Mw82MaJ',
    'container.build_id' => '5105985b',
    'container.build_time' => 1717836395,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMw82MaJ');
