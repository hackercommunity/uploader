<?php
$target_dir = "uploads/exe";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual exe or fake exe
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an exe - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an exe.";
        $uploadOk = 0;
    }
}
?>
