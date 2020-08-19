<?php
  include_once 'includes/index.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Resource</title>
</head>
<body>
  <header>
    <h1 style="text-align:center">Resource</h1>

    <form  method="POST" enctype="multipart/form-data">
      Choose file to upload:
      <input type="file" name="file">
      <button type="submit"  name="submit"> Upload </button>
   </form>

    <button type="button" onclick = "download()">Download</button>
  <header>
  <div>
    <?php
      if(isset($_POST['submit'])){
        $path = "/image";
        $path = $path.basename($_FILES['file']['name']);
        if(move_uploaded_file($_FILES['file']['tmp_name'], $path)){
          $sql = "Insert into upload_file('path') values('$path')";
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
            $sql = "INSERT INTO upload_file (`path`) VALUES ('$path');";
            if($conn->query($sql) == True){
                echo"success";
            }

        }
      }
      ?>
  </div>

  <script src="main.js"></script>
</body>
</html>
