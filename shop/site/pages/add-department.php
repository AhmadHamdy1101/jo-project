<?php
include('../main.php');
session_start();


if(isset($_POST['add'])){
    $name = $_POST["name"];
    $photo = $_FILES["photo"]["name"];
    $photo_temp = $_FILES["photo"]["tmp_name"];
    $folder = "../image/department/" . $photo;

   
    $sql = "INSERT INTO department (name, photo)
    VALUES ('$name', '$photo')";
 mysqli_query($conn,$sql);
 if (move_uploaded_file( $photo_temp , $folder)) {
   
} else {

}
}

?>
    <div class="main">
        <h1>Add department</h1>
        <form action="add-department.php" method="post" enctype="multipart/form-data" >
            <div class="lable">
                <label for="name">department name</label>
                <label for="photo">photo</label>
            </div>
            <div class="inbuts">
                <input type="text" name="name" id="name" required>
                <input type="file" name="photo" id="photo" required>
                <button type="submit" name="add"> Add </button>
            </div>
            
        </form>
    </div>

    <?php

include('../include/footer.php');
?>
