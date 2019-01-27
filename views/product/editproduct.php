<?php
require_once('../../controllers/ProductController.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <title>  </title>
        <meta charset= "UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>
    <body>
        <form action="" method="POST">
            <div class="form-group">
                <label for="formGroupExampleInput">Product</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="pro_title" value="<?php echo $data['pro_title']?>">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">price</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="pro_price" value="<?php echo $data['pro_price']?>">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">status</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="pro_status" value="<?php echo $data['pro_status']?>">
            </div>
            <div>
                <input type= "submit" name="submit" >
            </div>
        </form>
    </body>
    
    

</html>
