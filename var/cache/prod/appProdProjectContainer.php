<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6unkpq7\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6unkpq7/appProdProjectContainer.php') {
    touch(__DIR__.'/Container6unkpq7.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container6unkpq7\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container6unkpq7\appProdProjectContainer([
    'container.build_hash' => '6unkpq7',
    'container.build_id' => 'e95a4df5',
    'container.build_time' => 1581595951,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6unkpq7');