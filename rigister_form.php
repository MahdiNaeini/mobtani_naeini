<?php
include('functions.php');
include('settings.php');
include('DB.php');

$dbc = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
if( isset( $_POST['submit'] ) ){
$db = new DB();
	  $rigister = array(
        "fname" => "{$_POST['fname']}",
        "lname" => "{$_POST['lname']}",
        "password" => "{$_POST['password']}",
        "gender" => "{$_POST['gender']}",
        "email" => "{$_POST['email']}",
        "phone" => "{$_POST['phone']}",
        

    );
	  rigister::add($rigister);
    unset($db);

 
    $alerts = alerts();
}

?>





<html>
	<head>
		<title>صفحه ثبت نام</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
		
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
		
		
		<link rel="stylesheet" type="text/css" href="rigister.css">
<!------ Include the above in your HEAD tag ---------->
	</head>
	<body>
		<?php
				if( isset($alerts) )
					echo $alerts;
			?>
		
		
		<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>خوش آمدید</h3>
                        <p>شما فقط 30 ثانیه تا رسیدن به دنیای یادگیری فاصله دارید</p>
                        <input type="submit" name="" value="ثبت نام شما"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">کاربر</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">  ثبت نام به عنوان کاربر جدید</h3>
								
								<form action="" class="register-user" method="post">
								
								                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="نام *" value="" name="fname" id="fname" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="نام خانوادگی *" value="" name="lname" id="lname" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="گذر واژه شما *" value="" name="password" id="password" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked id="gender">
                                                    <span> مرد </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female" id="gender">
                                                    <span>زن </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="آدرس ایمیل شما *" value="" name="email" id="email" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" id="phone" placeholder="شماره تلفن شما *" value="" />
                                        </div>
                                       
											<!--
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>یکی از سوال های امنیتی زیر را انتخاب کنید</option>
                                                <option>تاریخ تولد شما چه زمانی است</option>
                                                <option>پسر عمه شما چند سال از شما بزرگ تر است</option>
                                                <option>شغل مورد علاقه خود در آینده</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="جواب خود را وارد کنید *" value="" />
                                        </div>
										-->
                                        <button type="submit" class="btnRegister" name="submit">تایید</button>
                                    </div>
                                </div>
								</form>

                            </div>     
	</body>
</html>