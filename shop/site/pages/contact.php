<?php
    include('../main.php')

?>
    <div class="main">
       <div class="contact">
        <h1>Store</h1>
                <h3>Contact US</h3>
            <form action="" method="post">
                
                <div class="lable">
                    <label for="firstName">first Name:</label>                    
                    <label for="lastName">Last Name:</label>                    
                    <label for="email">Email:</label>                    
                    <label for="Phone">Phone:</label>                    
                    <label for="Message">Message:</label>                    
                </div>
                <div class="inbuts">
                    <input type="text" name="firstName" >
                    <input type="text" name="lastName" >
                    <input type="email" name="email" >
                    <input type="text" name="Phone" >
                    <textarea name="Message" id="" cols="54" rows="10"> your Message ....</textarea>
                    <button type="">send</button>
                </div>
            </form>
       </div>
            

    <?php
    include("../include/footer.php")
    
    ?>