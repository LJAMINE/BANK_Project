<?php
require_once('db.php');
require_once('util.php');

$db = new Database;
$util = new Util;


//add account ajax

if (isset($_POST['add'])) {
    //  print_r($_POST);

    $acountNumF = $_POST['acountNumF'];
    $holderNameF = $_POST['holderNameF'];
    $balanceF = $_POST['balanceF'];


    if ($db->insert($acountNumF, $holderNameF, $balanceF)) {

        echo $util->showMessage('success', 'account is added successefully');
    } else {
        echo $util->showMessage('danger', 'something wrong');
    }
}


// logicx fetch all account ajax requett

if (isset($_GET['read'])) {
    echo 'succes';

    $accounts = $db->read();
    // print_r($accounts);

    $output = '';

    if ($accounts) {
        foreach ($accounts as $row) {
            $output .= '  <tr>
                    <td>' . $row['accountID'] . '</td>
                    <td>' . $row['accountNum'] . '</td>
                    <td>' . $row['holderName'] . '</td>
                    <td>' . $row['balance'] . '</td>
                

                    <!-- <td>business account</td> -->
                    <td>
                        <a href="#" id="' . $row['accountID'] .'"  class="btn btn-success btn-sm rounded-pill">edit</a>
                        <a href="#" id="' . $row['accountID'] .'"  class="btn btn-danger btn-sm rounded-pill">delete</a>

                    </td>
            </tr>';
        }
        echo $output;
    }
}
