<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIn7uujj\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIn7uujj/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerIn7uujj.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerIn7uujj\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerIn7uujj\appDevDebugProjectContainer(array(
    'container.build_hash' => 'In7uujj',
    'container.build_id' => '878990c8',
    'container.build_time' => 1530607435,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerIn7uujj');
