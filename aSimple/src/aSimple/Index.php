<?php
/**
 * SPL-Autoload test
 */

$test_map = array(
    'Animal\\Dog' => __DIR__ . '/Dog.php',
    '\\Animal\\Cat' => __DIR__ . '/Cat.php',
);

spl_autoload_register(
    function ($class) use ($test_map) {

        echo 'PHP Sent in thus: <pre>';
        var_dump($class);
        echo '</pre>';

        if (array_key_exists($class, $test_map)) {
            require_once $test_map[$class];
        }
    }
);


/**
 *  Instantiate using Qualified Namespace
 */

echo 'Class constructed using a Qualified Namespace.<br />';
echo 'PHP will request Animal\Dog, not \Animal\Dog';
echo 'spl_autoload will work fine since Animal\\Dog is stored in the map';

$dogClass = '\\Animal\\Dog';
$dog = new $dogClass();
$dog->speak();

/**
 *  Instantiate using an Unqualified Namespace
 */

echo 'Class constructed using an Unqualified Namespace.<br />';
echo 'PHP will request Animal\Cat';
echo 'spl_autoload will not locate a matching classmap entry since it stored \\Animal\\Cat';

$catClass = 'Animal\\Cat';
$cat = new $catClass();
$cat->meow();


/**
 *  Instantiate using a Fully Qualified Namespace
 */

echo 'PHP will never send a FQCN to spl_autoloader. It strips the leading namespace separator.';
