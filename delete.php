<?php
include('connection.php');

if(isset($_POST['delete'])){
    $id = $_POST['rmID'];

    $delete = "DELETE FROM mobile_phones WHERE id=$id";
    $sqlDel = mysqli_query($connect, $delete);

    echo "<script>alert('Successfully Deleted!')</script>";
    echo "<script>window.location.href='index.php'</script>";
}
?>
