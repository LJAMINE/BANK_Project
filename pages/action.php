<?php 
require_once('db.php');
require_once('util.php');

$db=new Database;
$util=new Util;


//add account ajax

if (isset($_POST['add'])) {
//  print_r($_POST);

$acountNumF=$_POST['acountNumF'];
$holderNameF=$_POST['holderNameF'];
$balanceF=$_POST['balanceF'];


if ($db->insert( $acountNumF,$holderNameF,$balanceF)) {

    echo $util->showMessage('success','account is added successefully');
    }else{
    echo $util->showMessage('danger','something wrong');

    }
 }


?>