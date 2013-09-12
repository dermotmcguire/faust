<?php

    define('PERCH_LICENSE_KEY', 'P21302-CTW748-HXU168-WPF275-RKL003');

    define("PERCH_DB_USERNAME", 'db174880');
    define("PERCH_DB_PASSWORD", 'ALP01#Faustdatabase');
    define("PERCH_DB_SERVER", "internal-db.s174880.gridserver.com");
    define("PERCH_DB_DATABASE", "db174880_FaustProdn");
    define("PERCH_DB_PREFIX", "perch2_");
    
    define('PERCH_TZ', 'Australia/Sydney');

    define('PERCH_EMAIL_FROM', 'web@invisibleartists.net');
    define('PERCH_EMAIL_FROM_NAME', 'Dermot McGuire');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', dirname(__FILE__)));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
  
?>