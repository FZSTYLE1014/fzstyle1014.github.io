<?php
/*// check if form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        
        $target_dir = "pemohon\profile"; // specify the directory where the file will be uploaded
        $target_file = $target_dir . basename($_FILES["photo"]["name"]); // get the filename of the uploaded file
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // get the file extension

        // allow only certain file formats
        $allowed_types = array("png");
        if(in_array($imageFileType, $allowed_types)){
            
            // move the uploaded file to the specified directory
            if(move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)){
                
                // connect to the database
                
                require('db/db_connection.php');
                // check connection
                if(mysqli_connect_errno()){
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    exit();
                }

                // insert image path into database
                $image_path = $target_file;
                $sql = "INSERT INTO `maklumat_peribadi` (`gambar`) VALUES ('$image_path')";
                if(mysqli_query($conn, $sql)){
                    echo "File uploaded successfully.";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }

                // close database connection
                mysqli_close($conn);

            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "Invalid file type.";
        }
    } else {
        echo "Error uploading file.";
    }
}
?>
//<?php
// check if form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        
        $target_dir = "pemohon/profile"; // specify the directory where the file will be uploaded
        $target_file = $target_dir . basename($_FILES["photo"]["name"]); // get the filename of the uploaded file
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // get the file extension
        $image_path = $target_file;
        // allow only certain file formats
        $allowed_types = array("png");
        if(in_array($imageFileType, $allowed_types)){
            
            // move the uploaded file to the specified directory
            if(move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)){
                
                // connect to the database
                
                require('db/db_connection.php');
                // check connection
                if(mysqli_connect_errno()){
                    ?>
<script>
    alert("Failed to connect to MySQL: <?php echo mysqli_connect_error(); ?>");
</script>
<?php
                    exit();
                }

                // insert image path into database
                
                $sql = "INSERT INTO `maklumat_peribadi` (`gambar`) VALUES ('$image_path')";
                if(mysqli_query($conn, $sql)){
                    ?>
<script>
    alert("File uploaded successfully.");
</script>
<?php
                } else {
                    ?>
<script>
    alert("Error: <?php echo mysqli_error($conn); ?>");
</script>
<?php
                }

                // close database connection
                mysqli_close($conn);

            } else {
                ?>
<script>
    alert("Error uploading file.");
</script>
<?php
            }
        } else {
            ?>
<script>
    alert("Invalid file type.");
</script>
<?php
        }
    } else {
        ?>
<script>
    alert("Error uploading file.");
</script>
<?php
    }
}
?>*/

// check if form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

// check if file was uploaded without errors
if(isset($_FILES["gambar_pemohon"]) && $_FILES["gambar_pemohon"]["error"] == 0){

$target_dir = "pemohon/profile"; // specify the directory where the file will be uploaded
$target_file = $target_dir. '/' .basename($_FILES["gambar_pemohon"]["name"]); // get the filename of the uploaded file
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // get the file extension
$image_path = $target_file;

// allow only certain file formats
$allowed_types = array("png");
if(in_array($imageFileType, $allowed_types)){

// move the uploaded file to the specified directory
if(move_uploaded_file($_FILES["gambar_pemohon"]["tmp_name"], $target_file)){

// connect to the database

require('db/db_connection.php');
// check connection
if(mysqli_connect_errno()){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
exit();
}

// insert image path into database

$sql = "INSERT INTO `maklumat_peribadi` (`gambar`) VALUES ('$target_file')";
if(mysqli_query($conn, $sql)){
echo "File uploaded successfully.";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// close database connection
mysqli_close($conn);

} else {
echo "Error sangat uploading file.";
}
} else {
echo "Invalid file type.";
}
} else {
echo "Error uploading file.";
}
}
?>