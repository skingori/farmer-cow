
<?php


// Create connection
include "../connection/db.php";
// Check connection

if(isset($_POST['add'])) {

    $Milk_Quantity_ =$_POST['Milk_Quantity'];
    $Milk_Description_ =$_POST['Milk_Description'];
    $Milk_Schedule_ =$_POST['Milk_Schedule'];
    $Milk_Price_ =$_POST['Milk_Price']* $_POST['Milk_Quantity'];


    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "INSERT INTO  Milk_table( Milk_Quantity, Milk_Description,Milk_Date,Milk_Time,Milk_Schedule, Milk_Price)
VALUES ('$Milk_Quantity_', '$Milk_Description_',NOW() ,NOW(),'$Milk_Schedule_','$Milk_Price_')";

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
        <label for="">Milk Quantity (Ltrs)</label>
        <div class="form-line">
            <input type="number" class="form-control" name="Milk_Quantity" placeholder="" required>
        </div>
    </div>

    <div class="input-group">
        <label for="">Milk Price</label>
        <div class="form-line">
            <input type="number" class="form-control" name="Milk_Price" placeholder="" required>
        </div>
    </div>
    <div class="form-group">
        <input type="radio" name="Milk_Schedule" id="1" class="with-gap" value="Morning">
        <label for="1">Morning</label>

        <input type="radio" name="Milk_Schedule" id="2" class="with-gap" value="Afternoon">
        <label for="2" class="m-l-20">Afternoon</label>

        <input type="radio" name="Milk_Schedule" id="3" class="with-gap" value="Evening">
        <label for="3" class="m-l-20">Evening</label>
    </div>

    <div class="input-group">
        <label for="">Milk Description</label>
        <div class="form-line">
            <textarea rows="2" cols="" class="form-control" name="Milk_Description" placeholder="" required></textarea>
        </div>
    </div>
    <div class="input-group">

        <button type="submit" class="btn bg-green waves-effect" name="add" >Add Record</button>
		</div>


</form>

<!-- #END# add content -->

<?php include "ft.php";?>