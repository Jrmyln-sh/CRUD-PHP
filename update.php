<?php
include('connection.php');

if(isset($_POST['edit'])){
    $UpID = $_POST['UpID'];
    $UpName = $_POST['UpName'];
    $UpPrice = $_POST['UpPrice'];
    $UpQuantity = $_POST['UpQuantity'];
    $UpCreated = $_POST['UpCreated'];
    $UpUpdated = $_POST['UpUpdated'];
}

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['model_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $created = $_POST['created'];
    $updated = $_POST['updated'];

    $update = "UPDATE mobile_phones SET model_name='$name', price='$price', quantity=$quantity WHERE id=$id";
    $sqlUpdate = mysqli_query($connect, $update);

    echo "<script>alert('Successfully Updated!')</script>";
    echo "<script>window.location.href='index.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <style>
        body {
            background-color: #F5F5F5;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            width: 25%;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
        }

        input[type="text"], input[type="number"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #77B254;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #5B913B;
        }

        button {
            background-color: #4D55CC;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #211C84;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $UpID; ?>">
        <label for="model_name">Model Name:</label>
        <input type="text" name="model_name" id="model_name" value="<?= $UpName; ?>" required>

        <label for="price">Price:</label>
        <input type="text" name="price" id="price" value="<?= $UpPrice; ?>" required>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" value="<?= $UpQuantity; ?>" required>

        <div class="button-container">
            <input type="submit" name="submit" value="Update">
            <button type="button" onclick="window.location.href='index.php'">Back</button>
        </div>
    </form>
</body>
</html>