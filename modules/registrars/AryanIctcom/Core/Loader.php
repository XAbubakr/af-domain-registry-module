<?php

namespace AryanIct\DomainsReseller\Registrar\AryanIctcom\Core;

/**
 * Description of Loader
 *
 * @author Abubakr Sediq <support@x.com.af>
 * @link https://x.com.af
 */
class Loader
{
    private $rootdir;
    
    public function __construct($dir)
    {
        $this->rootdir = $dir;
        $this->register();
    }

    protected function register()
    {
        spl_autoload_register(function($className)
        {
            $namespace = str_replace("\\Core","", __NAMESPACE__);
            if (strpos($className, $namespace) === 0)
            {
                $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
                $file      = str_replace("AryanIct".DIRECTORY_SEPARATOR."DomainsReseller".DIRECTORY_SEPARATOR."Registrar".DIRECTORY_SEPARATOR."AryanIctcom", $this->rootdir, $className) . '.php';
                
                if (file_exists($file))
                {
                    require_once $file;
                }
            }
        });
    }
}
