<?php
include_once('function.php');
$insertdata = new DB_con();


//เช็คจากการกดปุ่ม insert ตรงปุ่ม insert มีตัวแปรข้างในว่า name="insert"
if(isset($_POST['insert'])){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];

    $sql= $insertdata->insert($fname,$lname,$email,$phonenumber,$address);

    if($sql){
        echo "<script> alert('Record Inseted Successfully!');</script>";
        echo "<script> window.location.href='index.php'</script>";
    } else {
        echo "<script> alert('Something went wrong! Please try again!');</script>";
        echo "<script> window.location.href='insert.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <a href="index.php" class="btn btn-primary mt-3">Go Back</a>
        <hr>
        <h1 class="mt-5">Insert Page</h1>
        <hr>
        <form action="" method="post">
        <div class="mb-3">
            <label for="firstname" class="form-label">First name</label>
            <input type="text" class="form-control" name="firstname" required>
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last name</label>
            <input type="text" class="form-control" name="lastname" required>
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
            <label for="phonenumber">Phone number</label>
            <input type="text" class="form-control" name="phonenumber" required>
        </div>
        <div class="mb-3">
            <label for="address">Address</label>
            <textarea name="address"  cols="30" rows="10" class="form-control" required></textarea>
        </div>
        <button type="submit" name="insert" class="btn btn-success">Insert</button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>