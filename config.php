<?php

return [
  'database' => [
      'name'       => 'applestore',
      'username'   => 'root',
      'password'   => '1',
      'connection' => 'mysql:host=localhost',
      'options'    => [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ]
  ]
];
