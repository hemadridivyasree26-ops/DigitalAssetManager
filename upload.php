<?php
include "db.php";

$msg = "";

if(isset($_POST['upload'])){

    $name = $_POST['name'];
    $file = $_FILES['file']['name'];
    $type = $_FILES['file']['type'];

    $path = "uploads/".$file;

    move_uploaded_file($_FILES['file']['tmp_name'], $path);

    $query = "INSERT INTO assets(name,file,type)
              VALUES('$name','$file','$type')";

    mysqli_query($conn,$query);

    $msg = "File Uploaded Successfully 🎉";
}

?>

<!DOCTYPE html>
<html>

<head>
<title>Digital Asset Manager</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<nav>
    <h1>✨ Digital Asset Manager</h1>
</nav>


<div class="container">

<h2>Upload Your Asset 📁</h2>


<?php
if($msg!=""){
    echo "<div class='success'>$msg</div>";
}
?>


<form method="post" enctype="multipart/form-data">


<input type="text" 
name="name" 
placeholder="Enter Asset Name"
required>


<input type="file" 
name="file"
required>


<button name="upload">
Upload Asset
</button>


</form>


</div>


</body>

</html>
