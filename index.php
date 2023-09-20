<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>
    
<div class="container">
    <h1 class="mt-5">Information Page</h1>
    <a href="insert.php" class="btn btn-success mt-3">Go to Insert</a>
    <hr>
<table id="mytable" class="table table-bordered table-striped">
    <thead>
        <th>#</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Phone number</th>
        <th>Address</th>
        <th>Posting Date</th>
        <th>Edit</th>
        <th>Delete</th>
    </thead>
    <tbody>
        <?php

        include_once('function.php');
        $fetchdata = new DB_con();
        $sql = $fetchdata->fetchdata();
        while($row = mysqli_fetch_array($sql)) {


        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phonenumber']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['postingdate']; ?></td>
            <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i>Edit</a></td>
            <td><a href="delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="bi bi-trash"></i>Delete</a></td>
        </tr>

        <?php
   }

        ?>
    </tbody>
</table>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>