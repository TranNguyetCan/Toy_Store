<?php
class Connect{
    public $server;
    public $user;
    public $password;
    public $dbName;

    public function __construct()
    {
        // $this->server ="";
        // $this->user ="root";
        // $this->password ="";
        // $this->dbName="store_trannguyetcan";

        $this->server ="frwahxxknm9kwy6c.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $this->user ="bvll8asxboygugd6";
        $this->password ="dlinxzdsovqf6n0q";
        $this->dbName="u0xdcybzb5nua3o1";
    }

    //Option 1: use mysqli
    function connectToMySQL(): mysqli{
        $conn_my = new mysqli($this->server,$this->user, $this->password,$this->dbName);
        if($conn_my->connect_error){
            die("Failed".$conn_my->connect_error);
        }else{
            // echo"Connected!!!!!";
        }
        return $conn_my;

    }
    //Option 2: use PDO
    function connectToPDO():PDO{
        try{
            $conn_pdo = new PDO("mysql:host=$this->server; 
            dbname=$this->dbName", $this->user,$this->password);
            $conn_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connect to PDO";
        }catch(PDOException $e){
            die("Failed $e");
        }
        return $conn_pdo;
    }
}
//test connect
// $c = new Connect();
// $c->connectToPDO();
?>