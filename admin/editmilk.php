
<?php


// Create connection
include "../connection/db.php";
// Check connection
$id=$_GET['id'];

$result1 = mysqli_query($con, "SELECT * FROM milk_table WHERE Milk_Id='$id'");

while($res = mysqli_fetch_array($result1))
{
    $Milk_Quantity= $res['Milk_Quantity'];
    $Milk_Description= $res['Milk_Description'];
    $Milk_Price= $res['Milk_Price'];
    $Milk_Schedule= $res['Milk_Schedule'];

}

if(isset($_POST['add'])) {

    $Milk_Quantity_ =$_POST['Milk_Quantity'];
    $Milk_Description_ =$_POST['Milk_Description'];
    $Milk_Date_ =$_POST['Milk_Date'];
    $Milk_Time_ =$_POST['Milk_Time'];
    $Milk_Schedule_ =$_POST['Milk_Schedule'];
    $Milk_Price_ =$_POST['Milk_Price'] * $_POST['Milk_Quantity'] ;



    $result = mysqli_query($con, "UPDATE milk_table SET Milk_Id='$id',Milk_Quantity='$Milk_Quantity_'
 ,Milk_Description='$Milk_Description_',Milk_Schedule='$Milk_Schedule_',Milk_Price='$Milk_Price_' WHERE Milk_Id=$id");

    //redirectig to the display page. In our case, it is index.php
    $msg = "<div class='alert alert-success'>
    <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
        </div>";

    header('refresh: 2; url=milk.php');
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
        <label for="">Milk Quantity (Ltrs)</label>
        <div class="form-line">
            <input type="number" class="form-control" name="Milk_Quantity" placeholder="" required value="<?php echo $Milk_Quantity;?>">
        </div>
    </div>

    <div class="input-group">
        <label for="">Milk Price / Ltr</label>
        <div class="form-line">
            <input type="number" class="form-control" name="Milk_Price" placeholder="" required value="<?php echo $Milk_Price;?>">
        </div>
    </div>
    <div class="form-group">
        <input type="radio" name="Milk_Schedule" id="1" class="with-gap" value="Morning" value="<?php echo $Milk_Description;?>">
        <label for="1">Morning</label>

        <input type="radio" name="Milk_Schedule" id="2" class="with-gap" value="Afternoon">
        <label for="2" class="m-l-20">Afternoon</label>

        <input type="radio" name="Milk_Schedule" id="3" class="with-gap" value="Evening">
        <label for="3" class="m-l-20">Evening</label>
    </div>

    <div class="input-group">
        <label for="">Milk Description</label>
        <div class="form-line">
            <textarea rows="2" cols="" class="form-control" name="Milk_Description" placeholder="" required><?php echo $Milk_Description;?></textarea>
        </div>
    </div>
    <div class="input-group">

        <button type="submit" class="btn bg-green waves-effect" name="add" >Update Record</button>

    </div>


</form>

<!-- #END# add content -->

<?php include "ft.php";?>