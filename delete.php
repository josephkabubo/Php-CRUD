<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/12/19
 * Time: 9:51 AM
 */

//connect to DB
$conn = mysqli_connect("localhost", "root", "", "may_syst");

//check if connection was successful
if (!$conn){
    echo "Connection failed";
}else{
    //proceed to delete
    //start by checking if the delete has been clicked
    if (isset($_GET['id_yangu'])){
        $received_id = $_GET['id_yangu'];

        //create the delete query
        $deleteQuery = "DELETE FROM majina WHERE id=$received_id";
        //complete by deleting

        $delete = mysqli_query($conn, $deleteQuery);

        //check if deleting was successful
        if (!$delete){
            echo "Deleting Failed";
        }else{
            echo "Record Deleted Successfully";
            header('location:viewUsers.php');
        }
    }
}

?>