<?php
if (version_compare(PHP_VERSION, '5.4', '>=') && gc_enabled()) {
    // Disabling Zend Garbage Collection to prevent segfaults with PHP5.4+
    // https://bugs.php.net/bug.php?id=53976
    gc_disable();
}

/**
 * @var $loader \Composer\Autoload\ClassLoader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

\Ladybug\Loader::loadHelpers();

require_once __DIR__.'/AppKernel.php';

return $loader;
