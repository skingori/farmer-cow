
<?php

$aid=$_GET['id'];



// Create connection
include "../connection/db.php";
// Check connection

if(isset($_POST['add'])) {

    $Animal_milk_Milk_Id_ =$_POST['Animal_milk_Milk_Id'];
    $Animal_milk_Animal_Id_ =$_POST['Animal_milk_Animal_Id'];


    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "INSERT INTO  Animal_milk_table(Animal_milk_Milk_Id,Animal_milk_Animal_Id )
VALUES ('$Animal_milk_Milk_Id_', '$Animal_milk_Animal_Id_')";

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

<?php include "hd.php";?>

<!-- Add content -->

<form id="sign_in" method="POST">
    <?php
    if (isset($msg)) {
        echo $msg;
    }
    ?>

    <div class="input-group">
        <label for="">Animal ID</label>
        <div class="form-line">
            <input type="text" class="form-control" value="<?php echo $aid?>" name="Animal_milk_Animal_Id" placeholder="" required readonly="">
        </div>
    </div>
    <div class="input-group">
        <label for="">Milk ID</label>&nbsp; <a href="javascript:window.open('milk.php','mypopuptitle','width=700,height=400')"><small>Get milk id</small></a>

        <div class="form-line">
            <input type="text" class="form-control" name="Animal_milk_Milk_Id" placeholder="" required>

        </div>
    </div>

    <div class="input-group">

        <button type="submit" class="btn bg-green waves-effect" name="add" >Assign</button>

    </div>


</form>

<!-- #END# add content -->

<?php include "ft.php";?>