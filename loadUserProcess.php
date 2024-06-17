<?php

include "connection.php";



$rs = Database::search("SELECT * FROM `user` WHERE `user_email ");

$num = $rs->num_rows;

for ($i = 0; $i < $num; $i++) {

    $d = $rs->fetch_assoc();

  


?>

    <tr>
        <th scope="row"><?php echo $img_data["path"] ?></th>
        <td><?php echo $d["fname"]. " " . $d["lname"] ?></td>
        <td><?php echo $d["email"] ?></td>
        <td><?php echo $d["mobile"] ?></td>
        <td><?php echo $d["joined_date"] ?></td>
        <td><?php
            if ($d["status"] == 1) {
                echo ("Active");
            } else {
                echo ("Deactive");
            }
            ?></td>
    </tr>

<?php

}


?>