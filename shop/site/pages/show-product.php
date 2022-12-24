<?php
include('../main.php');
$select= "SELECT * FROM product";
$query= mysqli_query($conn, $select);

?>
    <div class="main">

        <div class="content">
            <?php
             if ($query->num_rows > 0) {
                // output data of each row
                while($row = $query->fetch_assoc()) {
            
            ?>
                <div class="card">
                    <img src="../image/product/<?php echo $row["photo"];?>" alt="<?php echo $row["photo"];?>">
                    <h3><?php echo $row["name"];?></h3>
                    <p class="price"><?php echo $row["price"];?>EGP</p>
                    <span><?php echo $row["discount"];?>%</span>
                    <div class="ed">
                    <a class="delete" href="delete.php?product_id=<?php echo $row['id'];?>">Delete</a>
                    <a class="edit" href="edit.php?product_id=<?php echo $row['id'];?>">Edit</a>
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
