<?php require_once('../../config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>catogaries</title>
</head>
<body>
    <?php include('header.php');?>
    

 <?php 
 
     $insert_query = "SELECT * FROM `tbl_catogary`";
     $execute = mysqli_query($conn,$insert_query);
     $kitni_rows = mysqli_num_rows($execute);

     echo"<center><button class='btn btn-primary'><a style='text-decoration: none;' href='addcatogary.php'>ADD CATOGARY</a></button></center>";

     echo  "<table class='table table-striped table-hover table-dark'>";
        
       echo 
       "
       <tr  class='table-primary'>
        <td>ID</td>
        <td>NAME</td>
        <td>DESCRIPTION</td>
       
        
        </tr>";

       

      
      
      


     if($kitni_rows > 0 ){

        while($a = mysqli_fetch_array($execute)){
            echo "<tr class='table-primary'>
            <td>$a[0]</td>
            <td>$a[1]</td>
            <td class = 'text-wrap text-justify'>$a[2]</td>
             
               
             </tr>";


        }
     }
     else{

       echo "<tr class='bg-info'>
            <td colspan = '3' style='text-align:center' class='text-danger'>no records</td>
        </tr>";    
     }
      "</table>";


      
    ?>
    <?php include('footer.php');?>

</body>
</html>