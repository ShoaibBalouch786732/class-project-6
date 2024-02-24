<?php
include "connection.php";

if(isset($_REQUEST['submit'])) {
    $id = $_REQUEST['id'];
    $cnic = $_REQUEST['cnic'];
    $name = $_REQUEST['name'];
    $cell_phone = $_REQUEST['cell_phone'];
    $disease = $_REQUEST['disease'];
    $day = $_REQUEST['day'];
    $time = $_REQUEST['time'];
    $priority = $_REQUEST['priority'];

    $old_image = $_REQUEST['Old_image'];
    $filename = $_FILES['my_file']['name'];
    $filesize = $_FILES['my_file']['size'];
    $filetype = $_FILES['my_file']['type'];
    $temp_name = $_FILES['my_file']['tmp_name'];
    $filename_separated = explode('.', $filename);
    $file_extension = strtolower(end($filename_separated));
    $extension = array('jpg', 'jpeg', 'png', 'gif');

    if ($_FILES['my_file']['name'] == "") {
        $upload_image = $old_image;
        $sql = "UPDATE products 
                SET cnic = '$cnic', name = '$name', cell_phone = '$cell_phone', 
                    disease = '$disease', day = '$day', time = '$time', priority = '$priority', my_file = '$upload_image'
                WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("location: showproducts.php");
        }
    } else {
        $filename = rand(100, 10000) . $filename;
        $upload_image = 'images/' . $filename;

        if (in_array($file_extension, $extension)) {
            if ($filesize < 512000) {
                $sql = "UPDATE products 
                        SET cnic = '$cnic', name = '$name', cell_phone = '$cell_phone', 
                            disease = '$disease', day = '$day', time = '$time', priority = '$priority', my_file = '$upload_image'
                        WHERE id = $id";

                $result = mysqli_query($conn, $sql);

                if ($result) {
                    move_uploaded_file($temp_name, $upload_image);
                    unlink("images/" . $old_image);
                    header("location: showproducts.php");
                } else {
                    header("location: updateproducts.php?error=Some Error");
                }
            } else {
                header("location: updateproducts.php?error=Please upload file less than 1 MB");
            }
        } else {
            header("location: updateproducts.php?error=Please upload image in correct format");
        }
    }
}
?>
