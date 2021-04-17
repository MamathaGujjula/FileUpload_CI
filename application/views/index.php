<html>
<head>
        <title>uploading file</title>
</head>
<body>
<h1>File uploading</h1>
<form action="index.php/reduce/upload" method="post" enctype="multipart/form-data">

        Upload a File:
        <input type="file" name="the_file" id="fileToUpload">
        <input type="submit" name="submit" value="Upload">

</form>
<!-- <img src="<?= base_url() ?>uploads/business.jpg"> -->
</body>
</html>