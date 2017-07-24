
<?php


// Create connection
include "../connection/db.php";
// Check connection

if(isset($_POST['add'])) {

$Animal_Name_ =$_POST['Animal_Name'];
$Animal_Breed_ =$_POST['Animal_Breed'];
$Animal_Lactation_ =$_POST['Animal_Lactation'];


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "INSERT INTO  Animal_table(Animal_Name ,Animal_Breed ,Animal_Lactation )
VALUES ('$Animal_Name_', '$Animal_Breed_' ,'$Animal_Lactation_')";

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
        <label for="">Animal Name</label>
        <div class="form-line">
            <input type="text" class="form-control" name="Animal_Name" placeholder="" required>
        </div>
    </div>
    <div class="input-group">
        <label for="">Animal Breed</label>
        <div class="form-line">
            <input type="text" class="form-control" name="Animal_Breed" placeholder="" required>
        </div>
    </div>
    <div class="input-group">
        <label for="">Animal Lactation</label>
        <div class="form-line">
            <input type="text" class="form-control" name="Animal_Lactation" placeholder="" required>
        </div>
    </div>
    <div class="input-group">

        <button type="submit" class="btn bg-green waves-effect" name="add" >Add Cow</button>

    </div>


</form>

       <!-- #END# add content -->

<?php include "ft.php";?>