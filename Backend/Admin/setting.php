<?php include('./assets/includes/sidebar.php');
include('./assets/includes/connect.php');
$profileid = $_SESSION['user_id'];
$sql = "SELECT * FROM user WHERE id = $profileid";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['savechange'])) {
      $firstname = $_POST["first-name"];
      $lastname = $_POST["last-name"];
      $username = $_POST["username"];
      $phone = $_POST["number"];
      $email = $_POST["email"];

      // Check if profile image is uploaded
      if (isset($_FILES["profile_image"]) && !empty($_FILES["profile_image"]["name"])) {
          $profile = $_FILES["profile_image"];

          $picname = rand(1000, 10000) . '-' . $profile['name'];
          $tname = $profile['tmp_name'];
          $upload_dir = '../User/assets/images';

          move_uploaded_file($tname, $upload_dir . $picname);
      } else {
          // If profile image is not uploaded, retain the existing image
          $picname = $row['profile'];
      }

      $updatequery = $con->prepare("UPDATE `user` SET `firstname` = ?, `lastname` = ?, `username` = ?, `phone` = ?, `email` = ?, `profile` = ? WHERE `id` = ?");
      $updatequery->bind_param("sssissi", $firstname, $lastname, $username, $phone, $email, $picname, $profileid);

      if ($updatequery->execute()) {
          echo "<script>alert('Update Successfully');</script>";
      } else {
          echo "<script>alert('Update Failed');</script>";
      }
  }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
</head>
<style>
    /*Start of body content */
.containerp {
  width: 1200px;
  width: 100%;
  max-width: 800px;
  margin: 0 auto;
  padding-top: 50px;
}

.Profile_info h2{
  font-size: 5em;
  padding-left: 300px;
} 

.profile-picture {
  max-width: 100px;
  border-radius: 50%;
  aspect-ratio: 1/1;
  object-fit: cover;
}

.contact-info {
    margin: 0 50px 0px;
    padding: 230px 0;
}
.personal_info{
  position: relative;
  width: 50%;
  height: 50px;
  border-bottom: 2px solid #000;
  margin: 30px 0;
  
}

.personal_info label{
  position: absolute;
  top: 50%;
  left: 5px;
  transform: translateY(-50%);
  font-size: 1em;
  color: #000;
  font-weight: 6  00;
  pointer-events: none;
  transition: 0.5s;
  font-size: 2em;
}

.personal_info input:focus ~ label,
.personal_info input:valid ~ label {
  top: -5px;
} 

.personal_info input{
  width: 100%;
  height: 100%;
  background-color: transparent;
  border: none;
  outline: none;
  font-size: 1em;
  color: #000;
  font-weight: 600;
  padding: 0 35px 0 5px;
  font-size: 2em;
}
.form-container{
  background-color: rgba(0, 255, 255, 0.156);
  padding-left: 200px;
}

.link-edit {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff; 
  color: #fff; 
  text-align: center;
  text-decoration: none;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

.link-edit:hover {
  background-color: #0056b3; 
}

.link-edit {
  margin-right: 10px; 
}


.file-input {
  display: none;
}

.edit-button {
  display: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: rgba(255, 252, 252, 0.5);
  padding: 5px 10px;
  border-radius: 5px;
  cursor: pointer;
}

.edit-profile-picture:hover .edit-button {
  display: inline-block;
}

.image-container {
  position: relative;
  display: inline-block;
}

</style>
<body>
<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <span>PROFILE</span>
            <h2>Setting</h2>
        </div>
    </div>

    <?php
    include './assets/includes/connect.php';
    
    if (isset ($_SESSION['user_id'])){
        $profileid = $_SESSION['user_id'];
        $sql = "SELECT * FROM user WHERE id = $profileid";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
        }
    }
    else{
        header('Location: login.php');
    }
?>
    <!-- Start of body -->
    <div class="containerp">
        <form method="post" enctype="multipart/form-data" >
            <div class="Profile_info">
                <h1>Profile Page</h1>
                <div class="form-container">
                <label for="profile-picture" class="edit-profile-picture">
                    <div class="image-container">
                    <img src="<?php echo '../User/assets/images' . $row['profile']; ?>"  alt="Profile Picture" class="profile-picture">
                        <span class="edit-button">Edit</span>
                    </div>
                    <input type="file" id="profile-picture" name="profile_image" class="file-input">
                </label>
                <div class="personal_info">
                    <input type="text" id="first-name" name="first-name" value="<?php echo $row['firstname'] ? $row['firstname']:"" ?> ">
                    <label for="first-name">First Name</label>
                </div><br>
                <div class="personal_info">
                    <input type="text" id="last-name" name="last-name" value="<?php echo $row['lastname'] ? $row['lastname']:"" ?>">
                    <label for="last-name">Last Name </label>
                </div><br>
                <div class="personal_info">
                    <input type="text" id="username" name="username" value="<?php echo $row['username'] ? $row['username']:"" ?>">
                    <label for="username">Username</label>
                </div><br>
                <div class="personal_info">
                    <input type="number" id="number" name="number" value="<?php echo $row['phone'] ? $row['phone']:"" ?>">
                    <label for="number">Phone</label>
                </div><br>
                <div class="personal_info">
                    <input type="email" id="email" name="email" value="<?php echo $row['email'] ? $row['email']:"" ?>">
                    <label for="email">Email </label>
                </div><br>
                <button type="submit" class="link-edit" name="savechange">Save Changes</button>
            </div>
            </div>
        </form>
    </div>
   
    <script src="/assets/js/homepage.js"></script>
</body>

</html>
</body>
</html>