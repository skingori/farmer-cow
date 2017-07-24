
<?php include "hd.php";

// Create connection
include "../connection/db.php";
// Check connection


$result = mysqli_query($con, "SELECT * FROM Animal_table ORDER BY Animal_Id ASC");
?>
<div class="card">
    <div class="card-content table-responsive table-full-width">
        <table class="table" id="table1">
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
        </table>

    </div>
</div>

<?php include "ft.php"?>