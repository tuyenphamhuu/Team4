<?php

return [
  'database' => [
      'name'       => 'applestore',
      'username'   => 'root',
      'password'   => '1',
      'connection' => 'mysql:host=localhost',
      'options'    => [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
      ]
  ]
];
