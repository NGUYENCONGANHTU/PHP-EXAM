<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php require_once 'connect.php'?>
    <?php 
    if(isset($_POST['add'])){
        $user=$_POST['user'];
        $phonenumber=$_POST['phonenumber'];
      if($conn -> query("INSERT INTO contacts (ID,Name,Phone,Edit) Values ('',N' $user', N' $phonenumber','')")){
        echo "<script> alert('Successfully!')</script>";
      }else{
        echo "<script> alert('Defeat!')</script>";
      }
    }
    $conn->close();
    ?>
    <div class="container">
        <Center><b style="font-size: 20px;font-family: 'Times New Roman', Times, serif">PhoneNumber Contact</b></Center>
        <form method="POST" action="">

            <div class="mb-3">
                <label for="user">User:</label>
                <input name="user" class="form-control" placeholder="User">
            </div>
            <div class="mb-3">
                <label for="phonenumber">PhoneNumber:</label>
                <input type="number" name="phonenumber" class="form-control" placeholder="PhoneNumber">
            </div>

            <button name="add" type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>

</body>

</html>