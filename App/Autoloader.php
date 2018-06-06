<?php

namespace icd0007\App;

class Autoloader 
{

    protected static $dirs = ['Controllers', 'Models', 'framework'];

    public function __construct()
    {
        //Magic?
    }

    /**
     * Try to load a class
     *
     * @param string $class The class name to load
     *
     * @return boolean If the loading was successful
     */
    public function load($class)
    {
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

        //Search for file in pre-defined directories.
        foreach (self::$dirs as $dir) 
        {
            $path = __DIR__ . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $fileName;
            if (file_exists($path)) 
            {
                require_once $path;
                return true;
            }
        }

        return false;
    }

    /**
     * Register the autoloader with PHP
     *
     * @return boolean The status of the registration
     */
    public function register()
    {
        return spl_autoload_register(array($this, 'load'));
    }

    /**
     * Unregister the autoloader with PHP
     *
     * @return boolean The status of the unregistration
     */
    public function unregister()
    {
        return spl_autoload_unregister(array($this, 'load'));
    }
}