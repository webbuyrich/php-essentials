<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>PHP Says Hello</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-6" style="margin-top: 30px;">
    <form method="POST" action="sayhello.php">
        <div class="form-group row">
            <label for="user" class="col-md-2 col-form-label">Username</label>
            <div class="col-md-10" style="padding-left: 0px;">
            <input type="text" name="user" class="form-control" id="user" aria-describedby="emailHelp" placeholder="Enter username">
            </div>     
        </div>
        <div class="form-group row">                
            <button type="submit" class="btn btn-primary col-md-2 offset-md-2">Say Hello</button>
        </div>
    </form>
</div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>