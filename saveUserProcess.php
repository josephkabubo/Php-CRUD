<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/11/19
 * Time: 9:53 AM
 */

if (isset($_GET['btnSave'])){
    $inputedName = $_GET['name'];
    $inputedEmail = $_GET['email'];
    $inputedPassword = $_GET['password'];

//    connect to DB
$conn = mysqli_connect("localhost", "root", "", "may_syst" );
//Check if conn is successful
if (!$conn){
    echo "Connection Failed";
}else{
    //Proceed to save data
    //Start by creating the insert query
    $insertQuery = "INSERT INTO `majina`(`id`, `jina`, `arafa`, `password`) VALUES (null,'$inputedName','$inputedEmail','$inputedPassword')";
    //Check if the Insert Query is correct
    if (!$insertQuery){
        echo "Error on Insert Query";
    }else{
        //Proceed to write data to DB
        $ingiza = mysqli_query($conn, $insertQuery);
        //Check if data was saved successfully
        if (!$ingiza){
            echo "Saving failed";
        }else{
            echo "Saved Successfully";
           header('location:saveUser.php');

        }

    }

}
}


?>