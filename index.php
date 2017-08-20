<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<?php
include_once 'imdb.class.php';
$oIMDB = new IMDB('http://www.imdb.com/title/tt1648190/');
if ($oIMDB->isReady) {
	    $data =  $oIMDB->getAll();
	    $title = $oIMDB->getTitle($bForceLocal = false);
	    print_r($title);
        echo "reached";
    }
    else {
       echo "hi";
    }

?>
<div class="jumbotron">
	<div class="container">
		<form class="form-group">
			<input type="text" name="id" id="id" placeholder="Movie ID" class="form-control">
			<input type="text" name="name" placeholder="Movie Name Goes Here" class="form-control">
			<button type="submit" class="btn btn-dark">Submit</button>
			<button id="grab" class="btn btn-danger">Grab Details</button>
		</form> 
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</body>
</html>