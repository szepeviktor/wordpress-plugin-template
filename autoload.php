<?php

// The autoloader takes care of automatic file loading.
// If the given class has the namespace we want, and
// the file exists we include it automatically.
spl_autoload_register(static function (string $class): void {
    if (strpos($class, $namespace = 'Cone\\') === 0) {
        $file = __DIR__.sprintf('/src/%s.php', str_replace([$namespace, '\\'], ['', '/'], $class));

        if (is_file($file)) {
            require_once $file;
        }
    }
});
