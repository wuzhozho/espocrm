<?php
return [
  'database' => [
    'host' => 'localhost',
    'port' => '',
    'charset' => NULL,
    'dbname' => 'espocrm',
    'user' => 'espocrm-owner',
    'password' => 'espocrm123$%',
    'platform' => 'Mysql'
  ],
  'smtpPassword' => 'pxkvcwhlyfehddha',
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false
  ],
  'restrictedMode' => false,
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'adminUpgradeDisabled' => false,
  'isInstalled' => true,
  'microtimeInternal' => 1718013969.800197,
  'passwordSalt' => '1849740c4cab0ccb',
  'cryptKey' => '0cff95ec02011fb74914f1470224764d',
  'hashSecretKey' => '655d77f9a2ee0ed866e007a0140bbef4',
  'actualDatabaseType' => 'mariadb',
  'actualDatabaseVersion' => '10.4.32',
  'instanceId' => '9fbe1c12-5900-45fa-9775-049c0bd9d4bf'
];
