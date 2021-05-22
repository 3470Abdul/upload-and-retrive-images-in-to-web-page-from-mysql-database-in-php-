<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- CSS Link -->
    <link rel="stylesheet" href="style.css">
    <title>Retrive Images</title>
  </head>
  <body>
  <?php
    error_reporting(0);

    $con = mysqli_connect("localhost", "root", "", "php-images");
    if(!$con)
    {
        echo "Connection Failed";
    }

    ?>


  <?php

  
    $sql = "SELECT * FROM imagestable";
    $query = mysqli_query($con,$sql);
    $total_rows = mysqli_num_rows($query);
    if($total_rows > 0)
    {

    ?>
       
    

  <div class="images-table">
  <div class="container-fluid" >
    <table class="table table-striped">
    <thead class="thead-light">
    <tr>
    <th colspan="2" class="images-heading">Images List</th>
    </tr>
        <tr>
        <th scope="col" class="th-content">ID</th>
        <th scope="col" class="th-content">Image</th>
        </tr>
    </thead>
    <tbody>
      <?php
       while($row = mysqli_fetch_array($query))
       {
           

         ?>
        <tr>
        <th scope="row" class="th-content"><div class="th-content-id"><?php  echo $row[0] ?></div></th>
        <td class="th-content"><img style ="width:200px; height:200px;" src="<?php  echo $row[1]  ?>" class="rounded mx-auto d-block" alt=""></td>
        </tr>
    
    <?php

                
        }
      }
      else
      {
          echo "<script>alert('No Record Found !!')</script>";
      }
  
  
  
  if(isset($_POST['UploadBtn']))
  {
      // echo $_FILES['imageUpload'];
      // print_r($_FILES['imageUpload']);
  
      $image_name = $_FILES['imageUpload']['name'];
      $temp_name = $_FILES['imageUpload']['tmp_name'];
      $image_type = $_FILES['imageUpload']['type'];
      $image_size = $_FILES['imageUpload']['size'];
      $folder = "images/";
  
      // echo $image_name . " " . $temp_name . " " . $image_type. " " . $image_size; 
   
      if(strtolower($image_type) == "image/jfif" || strtolower($image_type) == "image/.jpg" || strtolower($image_type) == "image/jpeg" || strtolower($image_type) == "image/png")
      {
          if($image_size <= 1000000)
          {
              $folder = "images/" . $image_name;
              $sql= "INSERT INTO imagestable (image_path) VALUES ('$folder')";
              $query = mysqli_query($con,$sql);
              if($query)
              {
                  move_uploaded_file($temp_name,$folder);
                  echo "<script>alert('Image successfully Uploaded !!')</script>";
                  // getData();
              }
              else
              {
                  echo "<script>alert('File Upload Process Failed!!')</script>";
              }
          }
          else
          {
              echo "<script>alert('Image size should be less than 1 MB !!')</script>";
          }
      }
      else
      {
          echo "<script>alert('Image format not supported !!')</script>";
      }
  
      }
  
  ?>
 </tbody>
</table>
    </div>
  </div>

   

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>