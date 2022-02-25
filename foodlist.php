
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">

<table>
    <?php 
    foreach ($foods as $food){
        ?>
        <tr>
            <th>Food Name</th>
            <th>Price</th>
            <th>Description</th>
    </tr>
    <tr>
            <td><?php echo $food->name; ?> </a> </td>
            <td><?php echo $food->price; ?></td>
            <td><?php echo $food->description; ?></td>
        </tr>
        
        
        <?php

    }
    ?>
    </head>
    <body>
    
    </body>
    </html>
    
    
    

