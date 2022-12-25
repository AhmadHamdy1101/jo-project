<?php
include('../main.php');



if(isset($_POST['add'])){
    $name = $_POST["name"];
    $price = $_POST["price"];
    $discount = $_POST["discount"];
    $department = $_POST["department"];
    $photo = $_FILES["photo"]["name"];
    $photo_temp = $_FILES["photo"]["tmp_name"];
    $folder = "../image/product/" . $photo;
   
    $insert = "INSERT INTO `product` (`name`, `price`, `discount`, `photo`, `department-id`) VALUES ('$name', '$price', '$discount', '$photo', '$department')";

    mysqli_query($conn, $insert);

 if (move_uploaded_file( $photo_temp , $folder)) {

} else { 

}
}
?>
    <div class="main">
        <h1>Add Product</h1>
        <form action="" method="post" enctype="multipart/form-data" >
            <div class="lable">
                <label for="name">Product name</label>
                <label for="price">price</label>
                <label for="discount">discount</label>
                <label for="department">department</label>
                <label for="photo">photo</label>
            </div>
            <div class="inbuts  ">
                <input type="text" name="name" id="name" required>
                <input type="text" name="price" id="price"required>
                <input type="text" name="discount" id="discount">
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
                <input type="file" name="photo" id="photo" required>

                <button type="submit" name="add"> Add </button>
            </div>
            
        </form>
    </div>

    <?php

include('../include/footer.php');
?>
