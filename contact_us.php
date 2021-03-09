<?php
include('functions.php');
include('settings.php');
include('DB.php');

$dbc = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
if( isset( $_POST['submit'] ) ){
$sql = "INSERT INTO users(fname, lname,email,comment)
		VALUES('{$_POST['fname']}', '{$_POST['lname']}','{$_POST['email']}','{$_POST['comment']}')";

$db = new DB();

$result = $db -> execute( $sql );
unset( $db );
if( $result ){	
	$alert = alert('با موفقیت ثبت شد!', 'success');


}else{
	$alert= alert('Unfortunately, the new record was not set','danger') . $sql . "<br>" . $dbc->error;
}
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
				if( isset($alert) )
					echo $alert;
			?>
<div class="container contact">
    <div class="row">
        <div class="col-md-3">
            <div class="contact-info">
                <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                <h2>ارتباط با ما</h2>
                <h4>بی صبرانه منتظر نظرات شما هستیم !</h4>
            </div>
        </div>
        <div class="col-md-9">
            <div class="contact-form">
                <div class="form-group">
                    <form method="post" action="">
                    <label class="control-label col-sm-2" for="fname">نام:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fname" placeholder="نام خود را وارد کنید" name="fname">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="lname">نام خانوادگی:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lname" placeholder="نام خانوادگی خود را وارد کنید" name="lname">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">آدرس ایمیل:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="ایمیل خود را وارد کنید" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="comment">نظرات شما:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default" name="submit">تایید</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>