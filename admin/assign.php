
<?php include "hd1.php";

// Create connection
include "../connection/db.php";
// Check connection


$result = mysqli_query($con, "SELECT * FROM Animal_table ORDER BY Animal_Id ASC");
?>
<div class="card">
    <div class="card-content table-responsive table-full-width">
        <table class="table">
            <thead class="bg-blue-grey">
            <th>Id</th>
            <th>Name</th>
            <th>Breed</th>
            <th>Lactation</th>
            <th><i class="fa fa-user-plus"></i> </th>
            <th><i class="fa fa-bitbucket-square"></i> </th>
            <th><i class="fa fa-rss"></i> </th>
            <th><i class="fa fa-trash-o"></i> </th>
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
                echo "<td><a href=\"animal_farmer.php?id=$res[Animal_Id]\" onClick=\"return confirm('Are you sure you want to assign?')\" class='fa fa-user-plus lg-2'></a></td>";
                echo "<td><a href=\"animal_milk.php?id=$res[Animal_Id]\" onClick=\"return confirm('Are you sure you want to assign?')\" class='fa fa-bitbucket lg-2'></a></td>";
                echo "<td><a href=\"animal_feeds.php?id=$res[Animal_Id]\" onClick=\"return confirm('Are you sure you want to assign?')\" class='fa fa-rss lg-2'></a></td>";
                echo "<td><a href=\"delete.php?id=$res[Animal_Id]\" onClick=\"return confirm('Are you sure you want to delete?')\" class='fa fa-trash-o lg-2'></a></td>";

            }
            ?>

            </tbody>
            <tfoot class="bg-info">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Breed</th>
                <th>Lactation</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </tfoot>
        </table>

    </div>
</div>

<?php include "ft.php"?>