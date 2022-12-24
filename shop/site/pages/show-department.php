<?php
include('../main.php');
session_start();
$select= "SELECT * FROM department";
$query= mysqli_query($conn, $select);
?>
    <div class="main">

        <div class="content">
            <?php
                if($query->num_rows>0){

                    while($row = $query->fetch_assoc()){

                     ?>
                        <div class="card">
                    <img src="../image/department/<?php echo $row['photo'];?>" alt="<?php echo $row['photo'];?>">
                    <h3><?php echo $row['name'];?></h3>

                    <div class="ed">
                    <a class="delete" href="delete.php?department_id=<?php echo $row['id'];?>">Delete</a>
                    <a class="edit"  href="edit.php?department_id=<?php echo $row['id'];?>">Edit</a>
                    </div>
                </div>  

                        <?php
                    }
                }
            
            ?>
                
           
            </div>
        
    </div>

    <?php

include('../include/footer.php');
?>
