

<?php
session_start();
  // DB Params
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'book');
  define('ADMIN_NAME', 'praveenraj11132@gmail.com');
  define('ADMIN_PASSWORD', '123');

  // App Root
  define('APPROOT', dirname(dirname(__FILE__)));
  // URL Root
  define('URLROOT', 'http://localhost/mvc/');
  // Site Name
  define('SITENAME', '_YOUR_SITENAME_');