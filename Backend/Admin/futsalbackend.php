<?php
if (isset($_POST['add_futsal'])) {
  $futsalname = mysqli_real_escape_string($conn, $_POST['futsal_name']);
  $futsal_discription = mysqli_real_escape_string($conn, $_POST['description']);
  $futsal_location = mysqli_real_escape_string($conn, $_POST['location']);
  $main_image = $_FILES['main_image']['name'];
  $main_image_size = $_FILES['main_image']['size'];
  $main_image_tmp_name = $_FILES['main_image']['tmp_name'];
  $image_folder = 'img/' . $main_image;
  
  $gallery_image = $_FILES['gallery_images']['name'];
  $gallery_image_size = $_FILES['gallery_images']['size'];
  $gallery_image_tmp_name = $_FILES['gallery_images']['tmp_name'];
  $image_folder = 'img/' . $gallery_image;

  $select_futsal_name = mysqli_query($conn, "SELECT name FROM `futsal_info` WHERE name = '$futsalname' ") or die('Querry Failed');

  if (mysqli_num_rows($select_futsal_name) > 0) {
    echo "<script> alert('Name already Exits') </script>";
  } else {
    $insert_futsal = mysqli_query($conn, "INSERT INTO `futsal_info`(`name`,`description`,`location`,`img_path`, `gallery` )
    VALUES('$futsalname','$futsal_discription','$futsal_location','$main_image','$gallery_image')") or die('querry failed');
    if ($insert_futsal) {
      if ($main_image_size && $gallery_image > 20000000000000) {
        echo "<script> alert('Image size is big') </script>";
      } else {
        move_uploaded_file($main_image_tmp_name,$gallery_image_tmp_name, $image_folder);
        echo "<script> alert('added') </script>";
      }
    }
  }
}
?>