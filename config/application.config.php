<?php
/**
 * Configuration file generated by ZFTool
 * The previous configuration file is stored in application.config.old
 *
 * @see https://github.com/zendframework/ZFTool
 */

use Zend\Console\Console;


 $config =  array(
    'modules' => array(
        'Application', 
        'Oms', 
        'Pms', 
        'Resquezf2' 
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor',
        ),
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
    ),
); 

// if (Console::isConsole()) {   
//     array_splice($config['modules'],  array_search('BjyAuthorize', $config['modules'] ),1);
// } 

return $config;