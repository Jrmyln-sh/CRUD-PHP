<?php
include('connection.php');

$select = "SELECT * FROM mobile_phones";
$sqlSelect = mysqli_query($connect, $select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Inventory Management System</title>
    <style>
        body {
            background-color: #F5F5F5;
        }
        header {
            background-color: #212121;
            padding: 20px;
            text-align: center;
       }

        header h1 {
            font-family: 'Montserrat', sans-serif;
            color: white;
            font-size: 2.5em;
            margin: 0;
        }

        .table-container {
            width: 80%;
            margin: 30px auto;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }        
        
        table {
            font-family: 'Poppins', sans-serif;
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
        }
        
        th {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: left;
        }
        
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        tr:hover {
            background-color: #EFEFEF;
        }

        .actions {
            display: flex;
            justify-content: space-around;
        }

        .actions input[type="submit"] {
            padding: 8px 15px;
            border: none;
            cursor: pointer;
            font-size: 1em;
            margin: 5px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        
        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #77B254;
            margin-left: 50px;
            color: white;
            text-decoration: none;
            font-size: 1.2em;
            border-radius: 5px;
            transition: background-color 0.3s;
            margin: 20px auto;
            text-align: center;
        }

        .add-button {
            padding: 10px 20px;
        }
        
        a:hover {
            background-color: #5B913B;
        }
        
        input.edit {
            background-color: #4D55CC;
            color: white;
        }
        
        input.edit:hover {
            background-color: #211C84;
        }
        
        input.delete {
            background-color: #BF3131;
            color: white;
        }
        
        input.delete:hover {
            background-color: #A31D1D;
        }
    </style>
</head>
<body>
    <header>
        <h1>INVENTORY MANAGEMENT SYSTEM</h1>
    </header>
<div class="table-container">
    <table>
        <tr>
            <th>ID</th>
            <th>Model Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tr>

        <?php foreach ($sqlSelect as $result => $value) { ?>
            <tr>
                <td><?= $value['id']; ?></td>
                <td><?= $value['model_name']; ?></td>
                <td><?= $value['price']; ?></td>
                <td><?= $value['quantity']; ?></td>
                <td><?= $value['created']; ?></td>
                <td><?= $value['updated']; ?></td>
                <td class="actions">
                <form action="update.php" method="POST">
                    <input class="edit" type="submit" value="Edit" name="edit">
                    <input type="hidden" name="UpID" value="<?= $value['id']; ?>">
                    <input type="hidden" name="UpName" value="<?= $value['model_name']; ?>">
                    <input type="hidden" name="UpPrice" value="<?= $value['price']; ?>">
                    <input type="hidden" name="UpQuantity" value="<?= $value['quantity']; ?>">
                    <input type="hidden" name="UpCreated" value="<?= $value['created']; ?>">
                    <input type="hidden" name="UpUpdated" value="<?= $value['updated']; ?>">
                </form>
                <form action="delete.php" method="POST" onsubmit="return confirm('Are you sure to delete?')" >
                    <input type="hidden" name="rmID" value="<?= $value['id']; ?>">
                    <input class="delete" type="submit" value="Delete" name="delete">
                </form>
                </td>
            </tr>
        <?php } ?>
    </table>
    <div class="add-button">
        <a href="add.php" >Add New</a>
    </div>
</div>
</body>
</html>