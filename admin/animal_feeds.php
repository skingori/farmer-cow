
<?php

$aid=$_GET['id'];



// Create connection
include "../connection/db.php";
// Check connection

if(isset($_POST['add'])) {

    $Animal_feeds_Feed_Id_ =$_POST['Animal_feeds_Feed_Id'];
    $Animal_feeds_Animal_Id_ =$_POST['Animal_feeds_Animal_Id'];
    $Animal_feeds_quantity_ =$_POST['Animal_feeds_quantity'];
    $Animal_feeds_cost_ =$_POST['Animal_feeds_cost'];


    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "INSERT INTO  Animal_feeds_table(Animal_feeds_Feed_Id,Animal_feeds_Animal_Id,Animal_feeds_quantity,Animal_feeds_cost )
VALUES ('$Animal_feeds_Feed_Id_', '$Animal_feeds_Animal_Id_', '$Animal_feeds_quantity_', '$Animal_feeds_cost_')";

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
            <input type="text" class="form-control" value="<?php echo $aid?>" name="Animal_feeds_Animal_Id" placeholder="" required readonly="">
        </div>
    </div>
    <div class="input-group">
        <label for="">Feed ID</label>&nbsp; <a href="javascript:window.open('feeds.php','mypopuptitle','width=700,height=400')"><small>Get feed id</small></a>

        <div class="form-line">
            <input type="text" class="form-control" value="" name="Animal_feeds_Feed_Id" placeholder="" required >
        </div>
    </div>
    <div class="input-group">
        <label for="">Feeds Quantity</label>
        <div class="form-line">
            <input type="text" class="form-control" name="Animal_feeds_quantity" placeholder="" required>

        </div>
    </div>
    <div class="input-group">
        <label for="">Feeds Cost</label>
        <div class="form-line">
            <input type="text" class="form-control" name="Animal_feeds_cost" placeholder="" required>

        </div>
    </div>

    <div class="input-group">

        <button type="submit" class="btn bg-green waves-effect" name="add" >Assign</button>

    </div>


</form>

<!-- #END# add content -->

<?php include "ft.php";?>