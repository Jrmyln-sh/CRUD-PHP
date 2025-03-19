<?php
include('connection.php');

if(isset($_POST['submit'])) {
    $model_name = $_POST['model_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $insert = "INSERT INTO mobile_phones VALUES (NULL, '$model_name', '$price', $quantity, NULL, NULL)";
    $sqlInsert = mysqli_query($connect, $insert);

    echo "<script>alert('Succeessfully Added!')</script>";
    echo "<script>window.location.href='index.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding Page</title>
    <style>
        body {
            background-color: #F5F5F5;
            justify-content: center;
            display: flex;
            align-items: center;
            height: 100vh;
        }

        form {
            width: 25%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            border: 4px solid #ddd;
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

       .material-symbols-outlined {
            font-size: 1.2em;
            color: #1C1C1C;
        }
    </style>
</head>
<body>
    <form action="add.php" method="POST">
        <label for="model_name">Model Name:</label>
        <input type="text" name="model_name" id="model_name" required>
        <br>
        <label for="price">Price:</label>
        <input type="text" name="price" id="price" required>
        <br>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" required>
        <br>
        
        <div class="button-container">
        <input type="submit" name="submit" value="Submit">
        <button type="button" onclick="window.location.href='index.php'">Back</button>
        </div>
    </form>
</body>
</html>