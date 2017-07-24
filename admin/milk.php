
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
            <th><i class="fa fa-universal-access"></i> </th>
            <th>Milk Id</th>
            <th>Milk Quantity</th>
            <th>Milk Date</th>
            <th>Milk Time</th>
            <th>Schedule</th>
            <th>Milk Price</th>
            <th><i class="fa fa-pencil"></i> </th>
            <th><i class="fa fa-trash-o"></i> </th>
            </thead>
            <tbody>

            <?php
            //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
            while($res = mysqli_fetch_array($result)) {
                echo "<tr class=''>";
                echo "<td><a href=\"javascript:window.open('milk-cow.php?id=$res[Milk_Id]','mypopuptitle','width=700,height=400')\"><small>Get Animal</small></a></td>";

                echo "<td class=''>".$res['Milk_Id']."</td>";
                echo "<td>".$res['Milk_Quantity']."</td>";
                echo "<td class='text-primary'>".$res['Milk_Date']."</td>";
                echo "<td class='text-primary'>".$res['Milk_Time']."</td>";
                echo "<td class='text-primary'>".$res['Milk_Schedule']."</td>";
                echo "<td class='text-primary'>".$res['Milk_Price']."</td>";
                echo "<td><a href=\"editmilk.php?id=$res[Milk_Id]\" onClick=\"return confirm('Are you sure you want to send Message?')\" class='fa fa-pencil lg-2'></a></td>";
                echo "<td><a href=\"javascript:window.open('delete.php?id=$res[Milk_Id]','width=700,height=400')\" onClick=\"return confirm('Are you sure you want to edit?')\" class='fa fa-trash-o lg-2'></a></td>";

            }

            $a=mysqli_query($con,"select SUM(Milk_Price) AS cost FROM milk_table");
            $fetch1=mysqli_fetch_array($a);
            ?>

            </tbody>
            <tfoot class="bg-info">
            <tr>

                <th>TOTAL</th>
                <th></th>
                <th></th>
                <th</th>
                <th></th>
                <th></th>
                <th></th>
                <td>KSH <?php echo $fetch1[cost];?></td>
                <td></td>
                <td></td>
            </tr>
            </tfoot>
        </table>

    </div>
</div>

<?php include "ft.php"?>