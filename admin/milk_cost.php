
<?php

// Create connection
include "../connection/db.php";
// Check connection


include "hd.php";?>

<?php
$result = mysqli_query($con, "SELECT * FROM Milk_table ORDER BY Milk_Id ASC");
?>
<div class="card">

    <div class="card-content table-responsive table-full-width">
        <table class="table" id="table1">
            <thead class="bg-blue-grey">
            <th>Milk Id</th>
            <th>Milk Quantity</th>
            <th>Milk Price</th>
			<th>Milk Description</th>
            </thead>
            <tbody>

            <?php
            //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
            while($res = mysqli_fetch_array($result)) {
                echo "<tr class=''>";
                echo "<td class=''>".$res['Milk_Id']."</td>";
                echo "<td>".$res['Milk_Quantity']."</td>";
                echo "<td class='text-primary'>".$res['Milk_Price']."</td>";
				echo "<td class=''>".$res['Milk_Description']."</td>";
            }
            $a=mysqli_query($con,"select SUM(Milk_Price ) AS cost FROM milk_table");
            $fetch1=mysqli_fetch_array($a);
            ?>

            </tbody>
			<tfoot class="bg-info">
			<th>TOTAL</th>
            <th></th>
            <th>KSH <?php echo $fetch1[cost];?></th>
			<th></th>
			</tfoot>
			
        </table>

    </div>
</div>

<?php include "ft.php"?>