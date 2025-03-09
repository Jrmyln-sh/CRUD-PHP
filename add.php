<?php
    include('connect.php');

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = trim($_POST['name']);
        $age = trim($_POST['age']);
        $email = trim($_POST['email']);
        $position = trim($_POST['position']);
        $department = trim($_POST['department']);

        $insert = "INSERT INTO employees VALUES (NULL,'$name', $age, '$email', '$position', '$department', NULL, NULL)";
        $insertSQL = mysqli_query($connect, $insert);

        echo "<script>alert('Succeessfully Added!')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_back" />
    <title>Insert Data</title>
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

        form input[type="submit"] {
            width: 100%;
            padding: 0.75rem;
            background-color: #6FD404;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
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
        <form action="add.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required><br>
    
            <label for="age">Age</label>
            <input type="number" name="age" id="age" required><br>
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email" required><br>
    
            <label for="position">Position</label>
            <select name="position" id="position" required>
                <option value="" disabled selected>Choose</option>
                <option value="Software Engineer">Software Engineer</option>
                <option value="Product Manager">Product Manager</option>
                <option value="Data Analyst">Data Analyst</option>
                <option value="UX/UI Designer">UX/UI Designer</option>
                <option value="DevOps Engineer">DevOps Engineer</option>
                <option value="System Administrator">System Administrator</option>
            </select><br>
    
            <label for="department">Department</label>
            <select name="department" id="department" required>
                <option value="" disabled selected>Choose</option>
                <option value="Engineering/IT">Engineering/IT</option>
                <option value="Product Management">Product Management</option>
                <option value="Data & Analytics">Data & Analytics</option>
                <option value="Design">Design</option>
                <option value="IT Support">IT Support</option>
            </select><br>
            
            <input type="submit" name="submit" id="submit" value="Submit"><br>
            <button type="button" onclick="window.location.href='index.php'"><span class="material-symbols-outlined">arrow_back</span>Back</button>
        </form>
    </main>
</body>
</html>