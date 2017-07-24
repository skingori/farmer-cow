<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 01/04/2017
 * Time: 11:24
 */
// Inialize session
session_start();

// Check, if user is already login, then jump to secured page
if (isset($_SESSION['logname']) && isset($_SESSION['rank'])) {
    switch($_SESSION['rank']) {

        case 1:
            header('location:../user/index.php');//redirect to  page
            break;

    }
}elseif(!isset($_SESSION['logname']) && !isset($_SESSION['rank'])) {
    header('Location:../sessions.php');
}
else
{

    header('Location:index.php');
}
?>

<?php


// Create connection
include "../connection/db.php";
// Check connection
$username=$_SESSION['logname'];

$result1 = mysqli_query($con, "SELECT * FROM Login_table WHERE Login_Username='$username'");

while($res = mysqli_fetch_array($result1))
{
    $id= $res['Login_Id'];

}
//get farmer id
if(isset($_POST['add'])) {

    $Farmer_Id_ =$_POST['Farmer_Id'];
    $Farmer_Name_ =$_POST['Farmer_Name'];
    $Farmer_Age_ =$_POST['Farmer_Age'];
    $Farmer_Phone_ =$_POST['Farmer_Phone'];
    $Farmer_Address_ =$_POST['Farmer_Address'];
    $Farmer_Email_ =$_POST['Farmer_Email'];



    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "INSERT INTO Farmer_table(Farmer_Id,Farmer_Name ,Farmer_Age,Farmer_Phone,Farmer_Address,Farmer_Email )
VALUES ('$Farmer_Id_', '$Farmer_Name_' ,'$Farmer_Age_','$Farmer_Phone_','$Farmer_Address_','$Farmer_Email_')";

    if ($con->query($sql) === TRUE) {
        $msg = "<div class='alert alert-success'>
            <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
            </div>";
        ?>
        <p align="center">
            <meta content="2;index.php?action=home" http-equiv="refresh" />
        </p>
        <?php
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

    <form id="" method="POST">
        <?php
        if (isset($msg)) {
            echo $msg;
        }
        ?>

        <div class="form-group label-floating" hidden>
            <label class="control-label">Id</label>
            <input type="text" class="form-control" value="<?php echo $id;?>" required name="Farmer_Id" readonly>
        </div>
        <div class="form-group label-floating">
            <label class="control-label">Name</label>
            <input type="text" class="form-control" required name="Farmer_Name">
        </div>
        <div class="form-group label-floating">
            <label class="control-label">Age</label>
            <input type="text" class="form-control" required name="Farmer_Age">
        </div>
        <div class="form-group label-floating">
            <label class="control-label">Phone</label>
            <input type="text" class="form-control" required name="Farmer_Phone">
        </div>
        <div class="form-group label-floating">
            <label class="control-label">Address</label>
            <input type="text" class="form-control" required name="Farmer_Address">
        </div>
        <div class="form-group label-floating">
            <label class="control-label">Email</label>
            <input type="email" class="form-control" required name="Farmer_Email">
        </div>
        <div class="form-group">

            <button type="submit" class="btn btn-primary" name="add" >Update profile</button>

        </div>


    </form>

    <!-- #END# add content -->

<?php include "ft.php";?>