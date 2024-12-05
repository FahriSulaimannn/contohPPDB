<?php

require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory())
    ->withServiceAccount('coba-2db4c-firebase-adminsdk-hcdr9-e7ede570be.json')
    ->withDatabaseUri('https://coba-2db4c-default-rtdb.asia-southeast1.firebasedatabase.app/');
/*  
    withServiceAccount dari config API Firebase
    withDatabaseUri dari utl database Firebase
*/

$database = $factory->createDatabase();