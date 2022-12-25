<?php

include('../main.php');    
session_start();

if (isset($_GET['department_id'])) {
    $id=$_GET['department_id'];

                    if(isset($_POST['update'])){
                        $name = $_POST["name"];
                        $photo = $_FILES["photo"]["name"];
                        $photo_temp = $_FILES["photo"]["tmp_name"];
                        $folder = "../image/product/" . $photo;
                        $insert = "UPDATE  department SET name='$name', photo= '$photo' WHERE id=$id";
                    
                        mysqli_query($conn, $insert);
                                    
                                    if (move_uploaded_file( $photo_temp , $folder)) {
                                    
                                    } else { 
                                    
                                    }
                    }



  
   ?>

<div class="main">
        <h1>Update department</h1>
        <form action="" method="post" enctype="multipart/form-data" >
            <div class="lable">
                <label for="name">department name</label>
                <label for="photo">photo</label>
            </div>
            <div class="inbuts">
                <?php
                    $select = "SELECT * FROM department WHERE id=$id ";
                    $query= mysqli_query($conn, $select);
                    if($query->num_rows> 0){

                        while ($row= $query->fetch_assoc()) {
                       
                
                ?>
                <input type="text" name="name" id="name" value="<?php echo $row['name']?>" required>
                <input type="file" name="photo" id="photo" required>
                <button type="submit" name="update"> save </button>
                <?php

                        }}
                    
                ?>
            </div>
            
        </form>
    </div>
   <?php
        
                    }







if (isset($_GET['product_id'])) {

    $product_id= $_GET['product_id'];

                        if(isset($_POST['edit'])){

                            $name_p = $_POST["name"];
                            $price = $_POST["price"];
                            $discount = $_POST["discount"];
                            $department = $_POST["department"];
                            $image = $_FILES["photo"]["name"];
                            $image_temp = $_FILES["photo"]["tmp_name"];
                            $folder = "../image/product/" . $image;

                            $insert = "UPDATE `product` SET `name` = '$name_p', `price` = '$price', `discount` = '$discount', `photo` = '$image', `department-id` = '$department' WHERE `product`.`id` = $product_id;";
                        
                            mysqli_query($conn, $insert);
                        
                                if (move_uploaded_file( $image_temp , $folder)) {
                                    
                                    } else { 
                                    
                                    }
                        }





    $show = "SELECT * from product WHERE id=$product_id";
    $sql = mysqli_query($conn,$show );

    ?>
    <div class="main">
        <h1>Edit Product</h1>
        <form action="" method="post" enctype="multipart/form-data" >
            <div class="lable">
                <label for="name">Product name</label>
                <label for="price">price</label>
                <label for="discount">discount</label>
                <label for="department">department</label>
                <label for="photo">photo</label>
            </div>
            <div class="inbuts">
                <?php
                
                if($sql->num_rows> 0){

                    while ($row= $sql->fetch_assoc()) {
                ?>
                <input type="text" name="name" id="name" value="<?php echo $row['name']?>" required>
                <input type="text" name="price" id="price" value="<?php echo $row['price']?>" required>
                <input type="text" name="discount" value="<?php echo $row['discount']?>" id="discount">
                <select name="department" style="margin-bottom: 1.5rem; width:100%; padding:0.5rem 0.5rem" >
                <?php
                    $select = "SELECT * from department";
                    $query = mysqli_query($conn,$select );
                    if ($query->num_rows > 0) {
                        // output data of each row
                        while($row = $query->fetch_assoc()) {
                            ?>
                            

                    <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                            
                            
                            <?php
                        }
                      } else {
                        echo "0 results";
                      }
                
                
                      ?>
                </select>
                <input type="file" name="photo" id="photo" value="<?php echo $row['photo']?>" required>
                <?php
                    }}
                
                ?>

                <button type="submit" name="edit"> save </button>
            </div>
            
        </form>
    </div>
<?php
}






?>