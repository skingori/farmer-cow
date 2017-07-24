
<?php


// Create connection
include "../connection/db.php";
// Check connection

if(isset($_POST['add'])) {

    $Login_Id_ =$_POST['Login_Id'];
    $Login_Rank_ =$_POST['Login_Rank'];
    $Login_Username_ =$_POST['Login_Username'];
    $pass_=$_POST['Login_Password'];
    $Login_Password_ =md5($pass_);


    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "INSERT INTO Login_table(Login_Id,Login_Username ,Login_Password,Login_Rank)
VALUES ('$Login_Id_', '$Login_Username_' ,'$Login_Password_','$Login_Rank_')";

    if ($con->query($sql) === TRUE) {
        $msg = "<div class='alert alert-success'>
            <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
            </div>";
    } else {

        $msg = "<div class='alert alert-danger'>
            <span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
            </div>" . $sql . "<br>" . $con->error;
    }

    $con->close();
}

?>

<?php include "hd1.php";?>

<!-- Add content -->

<form id="sign_in" method="POST">
    <?php
    if (isset($msg)) {
        echo $msg;
    }
    ?>

    <div class="input-group">
        <label for="">Login Id</label>
        <div class="form-line">
            <input type="text" class="form-control" name="Login_Id" placeholder="" required>
        </div>
    </div>
    <div class="input-group">
        <label for="">Username</label>
        <div class="form-line">
            <input type="text" class="form-control" name="Login_Username" placeholder="" required>
        </div>
    </div>
    <div class="form-group">
        <input type="radio" name="Login_Rank" id="1" class="with-gap" value="2">
        <label for="1">User</label>

        <input type="radio" name="Login_Rank" id="2" class="with-gap" value="1">
        <label for="2" class="m-l-20">Administrator</label>

    </div>
    <div class="input-group">
        <label for="">Password</label>
        <div class="form-line">
            <input type="password" class="form-control" name="Login_Password" placeholder="" required>
        </div>
    </div>
    <div class="input-group">

        <button type="submit" class="btn bg-green waves-effect" name="add" >Add User</button>

    </div>


</form>

<!-- #END# add content -->

<?php include "ft.php";?>