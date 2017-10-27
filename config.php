<?php

return [
  'database' => [
      'name'       => 'sql9201485',
      'username'   => 'sql9201485',
      'password'   => 'VjDAUA9kg5',
      'connection' => 'mysql:host=sql9.freemysqlhosting.net',
      'options'    => [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
      ]
  ]
];


