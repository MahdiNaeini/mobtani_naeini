<?php
include('functions.php');
include('settings.php');
include('DB.php');

$dbc = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
if( isset( $_POST['submit'] ) ){
$db = new DB();
	  $contact = array(
        "fname" => "{$_POST['fname']}",
        "lname" => "{$_POST['lname']}",
        "email" => "{$_POST['email']}",
        "comment" => "{$_POST['comment']}",
        

    );
	  contact::add($contact);
    unset($db);

 
    $alerts = alerts();
}

?>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">*/
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
		
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="contact.css">


    
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
		<?php
				if( isset($alerts) )
					echo $alerts;
			?>
<div class="container contact">
    <div class="row">
        <div class="col-md-3">
            <div class="contact-info">
                <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                <h2>???????????? ???? ????</h2>
                <h4>???? ???????????? ?????????? ?????????? ?????? ?????????? !</h4>
            </div>
        </div>
        <div class="col-md-9">
            <div class="contact-form">
                <div class="form-group">
                    <form method="post" action="">
                    <label class="control-label col-sm-2" for="fname">??????:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fname" placeholder="?????? ?????? ???? ???????? ????????" name="fname">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="lname">?????? ????????????????:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lname" placeholder="?????? ???????????????? ?????? ???? ???????? ????????" name="lname">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">???????? ??????????:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="?????????? ?????? ???? ???????? ????????" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="comment">?????????? ??????:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default" name="submit">??????????</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>