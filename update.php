<?php
include('connect.php');

if(isset($_POST['edit'])){
    $EdId = $_POST['edId'];
    $EdName = $_POST['edName'];
    $EdAge = $_POST['edAge'];
    $EdEmail = $_POST['edEmail'];
    $EdPosition = $_POST['edPosition'];
    $EdDepartment = $_POST['edDepartment'];
    $EdCreated = $_POST['edCreated'];
    $EdUpdated = $_POST['edUpdated'];
}

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $department = $_POST['department'];
    $created = $_POST['created'];
    $updated = $_POST['updated'];

    $update = "UPDATE employees SET name='$name', age=$age, email='$email', position='$position', department='$department' WHERE id=$id";
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_back" />
    <title>Update Data</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #EAE6E0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        form label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        form input[type="text"],
        form input[type="number"],
        form select {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form input[type="submit"],
        form button[type="button"] {
            width: 100%;
            padding: 0.75rem;
            background-color: #6FD404;
            color: #1C1C1C;
            border: none;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 1rem;
        }

        form input[type="submit"]:hover,
        form button[type="button"]:hover {
            background-color: #218838;
        }

        form button[type="button"] {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #007bff;
        }

        form button[type="button"]:hover {
            background-color: #0056b3;
        }

        form button[type="button"] .material-symbols-outlined {
            margin-right: 5px;
            color: #1C1C1C;
        }
    </style>
</head>
<body>
    <main>
        <form action="update.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?= $EdName ?>" required><br>

            <label for="age">Age</label>
            <input type="number" name="age" id="age" value="<?= $EdAge ?>" required><br>
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?= $EdEmail ?>" required><br>

            <label for="position">Position</label>
            <select name="position" id="position" required>
                <option value="" disabled>Choose</option>
                <option value="Software Engineer" <?= $EdPosition == 'Software Engineer' ? 'selected' : '' ?>>Software Engineer</option>
                <option value="Product Manager" <?= $EdPosition == 'Product Manager' ? 'selected' : '' ?>>Product Manager</option>
                <option value="Data Analyst" <?= $EdPosition == 'Data Analyst' ? 'selected' : '' ?>>Data Analyst</option>
                <option value="UX/UI Designer" <?= $EdPosition == 'UX/UI Designer' ? 'selected' : '' ?>>UX/UI Designer</option>
                <option value="DevOps Engineer" <?= $EdPosition == 'DevOps Engineer' ? 'selected' : '' ?>>DevOps Engineer</option>
                <option value="System Administrator" <?= $EdPosition == 'System Administrator' ? 'selected' : '' ?>>System Administrator</option>
            </select><br>

            <label for="department">Department</label>
            <select name="department" id="department" required>
                <option value="" disabled>Choose</option>
                <option value="Engineering/IT" <?= $EdDepartment == 'Engineering/IT' ? 'selected' : '' ?>>Engineering/IT</option>
                <option value="Product Management" <?= $EdDepartment == 'Product Management' ? 'selected' : '' ?>>Product Management</option>
                <option value="Data & Analytics" <?= $EdDepartment == 'Data & Analytics' ? 'selected' : '' ?>>Data & Analytics</option>
                <option value="Design" <?= $EdDepartment == 'Design' ? 'selected' : '' ?>>Design</option>
                <option value="IT Support" <?= $EdDepartment == 'IT Support' ? 'selected' : '' ?>>IT Support</option>
            </select><br>

            <input type="hidden" name="id" id="id" value="<?= $EdId ?>">
            
            <input type="submit" name="submit" id="submit" value="Update"><br>
            <button type="button" onclick="window.location.href='index.php'"><span class="material-symbols-outlined">arrow_back</span>Back</button>
        </form>
    </main>
</body>
</html>