<?php

defined('APP_PATH') || define('APP_PATH', realpath('.'));

return new \Phalcon\Config(array(
    'database' => array(
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'root',
        'password'    => 'evan',
        'dbname'      => 'unitedstatescivilwars',
        'charset'     => 'utf8',
    ),
    'application' => array(
        'controllersDir' => APP_PATH . '/app/frontend/controllers/',
        'modelsDir'      => APP_PATH . '/app/frontend/models/',
        'migrationsDir'  => APP_PATH . '/app/frontend/migrations/',
        'viewsDir'       => APP_PATH . '/app/frontend/views/',
        'pluginsDir'     => APP_PATH . '/app/shared/plugins/',
        'libraryDir'     => APP_PATH . '/app/shared/library/',
        'cacheDir'       => APP_PATH . '/app/shared/cache/',
        'baseUri'        => '/unitedstatescivilwar.org/',
    )
));
