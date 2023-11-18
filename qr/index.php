<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>QR Code Generator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1 class="text-center">QR Code Generator</h1>
    
<div class="container-fluid">
  <div class="text-center">
      
    <img src="qr.png"
         class="qr-code img-thumbnail img-responsive">
  </div>
  <div class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="content">Content:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="content" placeholder="Enter content">
      </div>
    </div>
    <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" class="btn btn-default" id="generate">Generate</button>
        <button class="btn btn-default" onclick="document.location='scanner/index.php'">QR Scanner</button>

      </div>
    </div>
  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script><script  src="./script.js"></script>
</body>
</html>
