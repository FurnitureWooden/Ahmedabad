<html>
<head>
<title>Demo Image Upload</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <h1 class="text-white bg-dark text-center mt-5">
  Image Upload
 </h1>
</div>
<div class="col-8 m-auto d-block">
<form action="index.php" method="post" enctype="multipart/form-data">
 <div class="form-group">
  <label for="file">Image Pic :</label>
  <input type="file" name="file" id="file" class="form-control">
  </div>
  <input type="submit" name="submit" value="Submit" class="btn btn-success">
</form>
</div>
</body>
</html>