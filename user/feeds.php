
<?php

// Create connection
include "../connection/db.php";
// Check connection


include "hd1.php";?>

<?php
$result = mysqli_query($con, "SELECT * FROM Feeds_table ORDER BY Feeds_Id ASC");
?>
<div class="card">

    <div class="card-content table-responsive table-full-width">
        <table class="table">
            <thead class="bg-blue-grey">
            <th>Feeds Id</th>
            <th>Feeds Type</th>
            <th>Feeds Quantity</th>
            <th>Feeds Cost</th>


            </thead>
            <tbody>

            <?php
            //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
            while($res = mysqli_fetch_array($result)) {
                echo "<tr class=''>";
                echo "<td class=''>".$res['Feeds_Id']."</td>";
                echo "<td class=''>".$res['Feeds_Type']."</td>";
                echo "<td>".$res['Feeds_Quantity']."</td>";
                echo "<td>".$res['Feeds_Cost']."</td>";

            }
            ?>

            </tbody>
        </table>

    </div>
</div>

<?php include "ft.php"?>