<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

    <title>Greensigth Test</title>
  
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="ajax.js"></script>

</head>

<body>
	<div class="text-center" >
	<h1>Fill in the following fields to register </h1>
    <form method="post" id="ajax_form" action="" >
        <input type="text" name="name" placeholder="Name" /><br>
		<input type="text" name="surname" placeholder="Surname" /><br>
		<input type="text" name="email" placeholder="Email" /><br>
		<input type="text" name="password" placeholder="Password" /><br>
        <input type="text" name="repeat_password" placeholder="Repeat password" /><br>
        <input type="button" id="btn" value="Send" />
    </form>

    <br>

    <div class = "text-danger" id="result_form"></div> 
	</div>
</body>
</html>