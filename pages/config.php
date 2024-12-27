<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname="db_banque";


// try {
// $dns="mysql:host=" . $servername . ";dbname=" .$dbname;
// $pdo=new PDO($dns,$username,$password);

//     echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }

class Config{

 private const DBHOST='localhost';
 private const DBUSER='root';
 private const DBPASS='';
 private const DBNAME='db_banque';

 private $dns='mysql:host=' .self::DBHOST . ';dbname=' .self::DBNAME . '';

 protected $conn=null;

 public function __construct(){
  
  try {

    $this->conn=new PDO($this->dns,self::DBUSER,self::DBPASS);
    $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    // echo "Connected successfully";
} catch (PDOException $e) {

  echo "error";
die('Error:' .$e->getMessage());

  }

 }

}
$ob=new Config;

?>