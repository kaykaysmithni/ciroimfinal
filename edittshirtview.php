<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <?php
        $tid=$_GET['tid'];
        
         $connection = mysqli_connect("localhost","root","","sis_ciroimfinal");
         $sql = "SELECT * FROM tshirt WHERE tid=$tid";
         $result=$connection->query($sql);
         $row = mysqli_fetch_assoc($result);
    ?>    
        
        <form action="edittshirt.php" method="POST">
            <input type="hidden" id="tid" name="tid" value="<?php echo $row['tid']; ?>">
            <label for="brand">Brand</label>
            <input type="text" id="brand" name="brand" placeholder="brand" value="<?php echo $row['brand']; ?>">
            <label for="color">Color</label>
            <input type="text" id="color" name="color" placeholder="color" value="<?php echo $row['color']; ?>">
            <label for="size">Size</label>
            <input type="text" id="size" name="size" placeholder="size" value="<?php echo $row['size']; ?>">
            <input type="submit" value="Edit" onclick="return confirm('Edit Details?')">
        </form>
    </body>
</html>
