
<?php

// Create connection
include "../connection/db.php";
// Check connection


include "hd1.php";?>

<?php
$result = mysqli_query($con, "SELECT * FROM Milk_table ORDER BY Milk_Id ASC");
?>
<div class="card">

    <div class="card-content table-responsive table-full-width">
        <table class="table">
            <thead class="bg-blue-grey">
            <th>Milk Id</th>
            <th>Milk Quantity</th>
            <th>Milk Date</th>
            <th>Milk Time</th>
            <th>Schedule</th>
            <th>Milk Price</th>

            </thead>
            <tbody>

            <?php
            //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
            while($res = mysqli_fetch_array($result)) {
                echo "<tr class=''>";
                echo "<td class=''>".$res['Milk_Id']."</td>";
                echo "<td>".$res['Milk_Quantity']."</td>";
                echo "<td class='text-primary'>".$res['Milk_Date']."</td>";
                echo "<td class='text-primary'>".$res['Milk_Time']."</td>";
                echo "<td class='text-primary'>".$res['Milk_Schedule']."</td>";
                echo "<td class='text-primary'>".$res['Milk_Price']."</td>";

            }
            ?>

            </tbody>
        </table>

    </div>
</div>

<?php include "ft.php"?>