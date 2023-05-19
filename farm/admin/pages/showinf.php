<?php require_once('../../config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ABOUT</title>
</head>
<body>
    <?php include('header.php');?>
    

 <?php 
 
     $insert_query = "SELECT * FROM `information`";
     $execute = mysqli_query($conn,$insert_query);
     $kitni_rows = mysqli_num_rows($execute);

     echo"<center><button class='btn btn-primary'><a style='text-decoration: none;' href='addinf.php'>ADD</a></button></center>";

     echo  "<table class='table table-striped table-hover table-dark'>";
        
       echo 
       "
       <tr class='table-primary'>
        <td>ID</td>
        <td>ADDRESS</td>

        <td>PHONE NUMBER</td>
        <td>EMAIL</td>
        <td>CLEAR</td>
        <td>EDIT</td>
        </tr>";

       

      
      
      


     if($kitni_rows > 0 ){
     

        while($z = mysqli_fetch_array($execute)){
        
            echo "<tr class='table-primary'>
            <td>$z[0]</td>
            <td>$z[1]</td>
            <td>$z[2]</td>
            <td>$z[3]</td>

            

             
            <td><a href='deleteinf.php?idbhaago=$z[0]'><i class='fa-solid fa-delete-left' style='red'></i></a></td>
            <td><a href='updateinf.php?idbhaago=$z[0]'><i class='fa-solid fa-edit' style='color:'red'></i></a></td>
               
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