
<?php include "hd1.php"?>

<?php
// Create connection
include "../connection/db.php";

$id=$_GET['id'];

$result1 = mysqli_query($con, "SELECT * FROM animal_milk_table WHERE Animal_milk_Milk_Id='$id'");

while($res = mysqli_fetch_array($result1))
{
    $Animal_milk_Animal_Id= $res['Animal_milk_Animal_Id'];


}
$result = mysqli_query($con, "SELECT * FROM Animal_table WHERE Animal_Id=$Animal_milk_Animal_Id ORDER BY Animal_Id ASC");
?>
<div class="card">
    <div class="card-content table-responsive table-full-width">
        <table class="table table-bordered">
            <thead class="bg-blue-grey">
            <th>Id</th>
            <th>Name</th>
            <th>Breed</th>
            <th>Lactation</th>
            </thead>
            <tbody>

            <?php
            //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
            while($res = mysqli_fetch_array($result)) {
                echo "<tr class=''>";
                echo "<td class=''>".$res['Animal_Id']."</td>";
                echo "<td>".$res['Animal_Name']."</td>";
                echo "<td class='text-primary'>".$res['Animal_Breed']."</td>";
                echo "<td class='text-primary'>".$res['Animal_Lactation']."</td>";

            }
            ?>

            </tbody>
            <tfoot class="bg-info">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Breed</th>
                <th>Lactation</th>

            </tr>
            </tfoot>
        </table>

    </div>
</div>

<?php include "ft.php"?>
