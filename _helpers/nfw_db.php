<?php
if (!isset($setDb)) {
    $setDb = [];
    $setDb['db_host'] = '127.0.0.1';
    $setDb['db_name'] = 'webgis-php';
    $setDb['db_user'] = 'root';
    $setDb['db_password'] = '';
}
$db = new MysqliDb($setDb['db_host'], $setDb['db_user'], $setDb['db_password'], $setDb['db_name']);
