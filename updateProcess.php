<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/12/19
 * Time: 10:33 AM
 */

if (isset($_POST['btn_update'])){
    $received_id = $_POST['x'];
    $received_name = $_POST['y'];
    $received_email = $_POST['z'];
    $received_pass = $_POST['pwd'];

    //connect to database
    $conn = mysqli_connect("localhost", "root", "", "may_syst" );
    //check if conn is successful
    if(!$conn){
        echo "Connection failed";
    }else{
        //Proceed to update DB
        //Create update query first
        $updateQuery = "UPDATE majina SET jina='$received_name',arafa='$received_email',password='$received_pass' WHERE id='$received_id'";
        //check if querry is correct
        if (!$updateQuery){
            echo "Error on update query";
        }else{
            //Proceed to update query
            $update = mysqli_query($conn,$updateQuery);
            //check if the update is successful
            if (!$update){
              echo  "Updating failed";
            }else{
                echo "Record updated successfully";
                header('location:saveUser.php');
            }

        }
    }



}

?>