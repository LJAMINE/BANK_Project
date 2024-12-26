<?php

require_once 'config.php';

class Database extends Config{

    //insert user too database 

    public function insert ($acountNumF,$holderNameF,$balanceF,){
        $sql='INSERT INTO account (accountNum,holderName,balance)VALUES (:acountNumF,:holderNameF,:balanceF)';
        $stmt=$this->conn->prepare($sql);
        $stmt->execute([


  
            'acountNumF'=>$acountNumF,
            'holderNameF'=>$holderNameF,
            'balanceF'=>$balanceF,

        ]);
        return true;

    }
}

?>