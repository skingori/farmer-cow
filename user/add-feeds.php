
<?php


// Create connection
include "../connection/db.php";
// Check connection

if(isset($_POST['add'])) {

    $Feeds_Type_ =$_POST['Feeds_Type'];
    $Feeds_Quantity_ =$_POST['Feeds_Quantity'];
    $Feeds_Cost_ =$_POST['Feeds_Cost'];


    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "INSERT INTO  Feeds_table(Feeds_Type,Feeds_Quantity ,Feeds_Cost )
VALUES ('$Feeds_Type_', '$Feeds_Quantity_' ,'$Feeds_Cost_')";

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
        <label for="">Feeds_Type</label>
        <div class="form-line">
            <input type="text" class="form-control" name="Feeds_Type" placeholder="" required>
        </div>
    </div>
    <div class="input-group">
        <label for="">Feeds_Quantity</label>
        <div class="form-line">
            <input type="text" class="form-control" name="Feeds_Quantity" placeholder="" required>
        </div>
    </div>
    <div class="input-group">
        <label for="">Feeds_Cost</label>
        <div class="form-line">
            <input type="text" class="form-control" name="Feeds_Cost" placeholder="" required>
        </div>
    </div>
    <div class="input-group">

        <button type="submit" class="btn bg-green waves-effect" name="add" >Add Feeds</button>

    </div>


</form>

<!-- #END# add content -->

<?php include "ft.php";?>