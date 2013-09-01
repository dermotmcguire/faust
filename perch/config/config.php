<?php

    define('PERCH_LICENSE_KEY', 'P21302-CTW748-HXU168-WPF275-RKL003');

    define("PERCH_DB_USERNAME", 'db151967_ALP01');
    define("PERCH_DB_PASSWORD", 'oB6zfKjk');
    define("PERCH_DB_SERVER", "internal-db.s151967.gridserver.com");
    define("PERCH_DB_DATABASE", "db151967_digital_dev_ALP01");
    define("PERCH_DB_PREFIX", "perch2_");
    
    define('PERCH_TZ', 'Australia/Sydney');

    define('PERCH_EMAIL_FROM', 'web@invisibleartists.net');
    define('PERCH_EMAIL_FROM_NAME', 'Dermot McGuire');

    define('PERCH_LOGINPATH', '/dev/alp01/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', dirname(__FILE__)));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
  
?>