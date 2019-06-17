<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="save_div">
        <form action="updateProcess.php" method="post">
            <?php
            /**
             * Created by PhpStorm.
             * User: emobilis
             * Date: 6/12/19
             * Time: 10:33 AM
             */

            if (isset($_GET['jina_yetu'])){
                $id = $_GET['id_yetu'];
                $name = $_GET['jina_yetu'];
                $email = $_GET['arafa_yetu'];
                $password = $_GET['pass_yetu'];
            }
            ?>
            <input type="text" name="x" class="inputs" value="<?php echo $id;?>" hidden><br>
            <input type="text" name="y" class="inputs"value="<?php echo $name;?>"><br>
            <input type="email" name="z" class="inputs" value="<?php echo $email;?>"><br>
            <input type="text" name="pwd" class="inputs" value="<?php echo $password;?>"><br>
            <input type="submit" value="Update" name="btn_update" class="sbtn"><br>
            <a class="vlink" href="viewUsers.php">Back</a>




        </form>
    </div>




</body>
</html>