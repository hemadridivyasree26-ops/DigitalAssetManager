<?php
include "db.php";

$result = mysqli_query($conn,"SELECT * FROM assets");

?>

<!DOCTYPE html>
<html>

<head>

<title>Dashboard - Digital Asset Manager</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body>


<nav>

<h1>✨ Digital Asset Manager</h1>

</nav>



<h2>My Digital Assets 📂</h2>



<div class="cards">


<?php

while($row = mysqli_fetch_assoc($result)){

?>


<div class="card">


<img src="uploads/<?php echo $row['file']; ?>">


<h3>
<?php echo $row['name']; ?>
</h3>


<p>
<?php echo $row['type']; ?>
</p>



<a class="view" 
href="uploads/<?php echo $row['file']; ?>" 
target="_blank">

View File

</a>


<br><br>


<a class="delete"
href="delete.php?id=<?php echo $row['id']; ?>">

Delete

</a>



</div>


<?php

}

?>


</div>



</body>

</html>
