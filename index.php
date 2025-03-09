<?php
include('connect.php');

$select = "SELECT * FROM employees";
$sqlSelect = mysqli_query($connect, $select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_back" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=badge" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #EAE6E0;
        }

        header {
            background-color: #1C1C1C;
            color: #EAE6E0;
            padding: 1rem 0;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-weight: 600;
        }

        main {
            padding: 2rem;
        }

        section {
            background-color: #EAE6E0;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #add {
            display: inline-block;
            margin-bottom: 1rem;
            padding: 0.5rem 1rem;
            background-color: #6FD404;
            color: #1C1C1C;
            text-decoration: none;
            border-radius: 4px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
        }

        #add:hover {
            background-color: #218838;
        }

        #add .material-symbols-outlined {
            vertical-align: middle;
            margin-right: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        thead {
            background-color: #1C1C1C;
            color: #fff;
        }

        th, td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            font-weight: 600;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .btn {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .edit {
            background-color: #007bff;
            color: #fff;
        }

        .edit:hover {
            background-color: #0056b3;
        }

        .delete {
            background-color: #dc3545;
            color: #fff;
        }

        .delete:hover {
            background-color: #c82333;
        }

        .actions {
            display: flex;
            gap: 5px;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.5);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            width: 90%;
            max-width: 500px;
            position: relative;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #aaa;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
        }

        .modal-content form {
            display: flex;
            flex-direction: column;
        }

        .modal-content form label {
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .modal-content form input[type="text"],
        .modal-content form input[type="number"],
        .modal-content form select {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .modal-content form input[type="submit"],
        .modal-content form button[type="button"] {
            padding: 0.75rem;
            background-color: #6FD404;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 1rem;
        }

        .modal-content form input[type="submit"]:hover,
        .modal-content form button[type="button"]:hover {
            background-color: #218838;
        }

        .modal-content form button[type="button"] {
            background-color: #007bff;
        }

        .modal-content form button[type="button"]:hover {
            background-color: #0056b3;
        }

        .modal-content form button[type="button"] .material-symbols-outlined {
            margin-right: 5px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <header>
        <h1>EMPLOYEE MANAGEMENT SYSTEM</h1>
    </header>
    <main>
        <section>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Department</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($sqlSelect as $result => $value) {  ?>
                        <tr>
                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['name'] ?></td>
                            <td><?php echo $value['age'] ?></td>
                            <td><?php echo $value['email'] ?></td>
                            <td><?php echo $value['position'] ?></td>
                            <td><?php echo $value['department'] ?></td>
                            <td><?php echo $value['created'] ?></td>
                            <td><?php echo $value['updated'] ?></td>
                            <td class="actions">
                                <form action="update.php" method="post">
                                    <input class="btn edit" type="submit" value="Edit" name="edit">
                                    <input type="hidden" name="edId" value="<?= $value['id'] ?>">
                                    <input type="hidden" name="edName" value="<?= $value['name'] ?>">
                                    <input type="hidden" name="edAge" value="<?= $value['age'] ?>">
                                    <input type="hidden" name="edEmail" value="<?= $value['email'] ?>">
                                    <input type="hidden" name="edPosition" value="<?= $value['position'] ?>">
                                    <input type="hidden" name="edDepartment" value="<?= $value['department'] ?>">
                                    <input type="hidden" name="edCreated" value="<?= $value['created'] ?>">
                                    <input type="hidden" name="edUpdated" value="<?= $value['updated'] ?>">
                                </form>
                                <form action="delete.php" method="post" onsubmit="return confirm('Are you sure to delete?')">
                                    <input type="hidden" name="delID" value="<?= $value['id'] ?>">
                                    <input class="btn delete" type="submit" value="Delete" name="delete">
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a id="add" href="add.php"><span class="material-symbols-outlined">badge</span>Add Employee</a>
        </section>
    </main>