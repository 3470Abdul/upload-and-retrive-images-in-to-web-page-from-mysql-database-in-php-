<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>
<body>
    <form action="retrive-images.php" method="post" enctype="multipart/form-data">

    <label for="">Upload Image : </label>
    <input type="file" name="imageUpload">
    <br>
    <br>
    <input type="submit" name="UploadBtn" value="Upload">
    </form>
</body>
</html>