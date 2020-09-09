<?php
require_once './vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class Users
{
    protected $database;
    protected $dbname = 'Acount';
    public function __construct()
    {
        $acc = ServiceAccount::fromJsonFile(__DIR__ . '/secret/partclub-3ae0d828ca8a.json');
        $firebase = (new Factory)->withServiceAccount($acc)->withDatabaseUri('https://partclub.firebaseio.com')->create();

        $this->database = $firebase->getDatabase();
    }

    public function get(int $userID = NULL)
    {
        if (empty($userID) || !isset($userID)) {
            return false;
        }

        if ($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)) {
            return $this->database->getReference($this->dbname)->getChild($userID)->getValue();
        } else {
            return false;
        }
    }
    public function getAll()
    {
        if ($this->database->getReference($this->dbname)->getSnapshot()->hasChildren()) {
            $dataArray = $this->database->getReference($this->dbname)->getSnapshot()->getValue();
            return  $dataArray;
            // $this->database->getReference($this->dbname)->getChild()->getValue();
        } else {
            return false;
        }
    }

    public function insert(array $data)
    {
        if (empty($data) || !isset($data)) {
            return false;
        }
        foreach ($data as $key => $value) {
            $this->database->getReference()->getChild($this->dbname)->getChild($key)->set($value);
        }
        return true;
    }

    public function delete(int $userID)
    {
        if (empty($userID) || !isset($userID)) {
            return false;
        }
        if ($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)) {
            $this->database->getReference($this->dbname)->getChild($userID)->remove();
            return true;
        } else {
            return false;
        }
    }
}
$users = new Users();

var_dump($users->getAll());

    // var_dump($users->delete(3));
    // var_dump($users->insert([
    //     "1" => "Tony"
    // ]));

    // var_dump($users->delete(2));

?>

