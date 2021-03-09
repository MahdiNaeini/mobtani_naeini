<?php
include('functions.php');
include('settings.php');
include('DB.php');

$dbc = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
if( isset( $_POST['submit'] ) ){
$sql = "INSERT INTO pro (name, last_name, Gender, email, number, exp) 
	VALUES('{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['gender']}', '{$_POST['email']}', '{$_POST['phone']}', '{$_POST['explain']}')";

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
<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		.shadow-textarea textarea.form-control::placeholder {
    font-weight: 300;
}
.shadow-textarea textarea.form-control {
    padding-left: 0.8rem;
}
		.alert-success{
			text-align: center;
			margin-bottom: 0;
		}
	</style>
    <!-- Required meta tags-->
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
		
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	
	
	
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
	<?php
				if( isset($alert) )
					echo $alert;
			?>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">فرم آموزش شما</h2>
                    <form method="POST" action="">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">نام</label>
                                    <input class="input--style-4" type="text" name="first_name" id="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">نام خانوادگی</label>
                                    <input class="input--style-4" type="text" name="last_name" id="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
<!--
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">تاریخ درج</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="date" id="date">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
-->
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">جنسیت</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">مرد
                                            <input type="radio" checked="checked" name="gender" id="gender" value="man_مرد">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">زن
                                            <input type="radio" name="gender" id="gender" value="woman_زن">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">نامه الکترونیکی</label>
                                    <input class="input--style-4" type="email" name="email" id="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">شماره تلفن </label>
                                    <input class="input--style-4" type="text" name="phone" id="phone">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label"></label>
                            <div class="rs-select2 js-select-simple select--no-search">
                               <div class="form-group shadow-textarea">
  <label class="label">متن خود را وارد کنید</label>
  <textarea class="form-control z-depth-1" id="explain" rows="3" placeholder="متن آموزش خود را وارد کنید" name="explain"></textarea>
</div>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="submit">تایید</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
												 