<?php
include('connect.php');

if(isset($_POST['delete'])){
    $delID = $_POST['delID'];

    $delete = "DELETE FROM employees WHERE id=$delID";
    $sqlDel = mysqli_query($connect, $delete);

    echo "<script>alert('Successfully Deleted!')</script>";
    echo "<script>window.location.href='index.php'</script>";
}
?>
