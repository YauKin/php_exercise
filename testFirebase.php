<?php 
    require_once './vendor/autoload.php';
    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;


    $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/secret/partclub-3ae0d828ca8a.json');

    $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->create();

    $database = $firebase->getDatabase();

    die(print_r($database));
?>