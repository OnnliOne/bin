<?php
// change this, if your php files and data is outside of your webservers document root
define('PATH', '');

define('PUBLIC_PATH', __DIR__);
require PATH . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
new PrivateBin\Controller;
