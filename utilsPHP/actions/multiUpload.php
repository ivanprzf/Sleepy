<?php
$target_dir = "uploadedImages/";
$imgName = DATE('Y-m-d_H-m-i').$file["name"];
$target_file = $target_dir . $imgName;
$uploadOk = 1;
// Check if image file is a actual image or fake image
$check = getimagesize($file["tmp_name"]);
if($check !== false) {
    $uploadOk = 1;
} else {
    echo "File is not an image.";
    $uploadOk = 0;
}
// Check file size
if ($file["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($check["mime"] != "image/jpg" && $check["mime"] != "image/png" && $check["mime"] != "image/jpeg"
    && $check["mime"] != "image/gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($file["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file. Your account has been created, try to upload your photo later.";
    }
}
