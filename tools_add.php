<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>php-id-w10</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="bootstrap/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="bootstrap/js/html5shiv.min.js"></script>
            <script src="bootstrap/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>        
        <div class="container">
            <div class="row"> 
                <div class="jumbotron" style="background-color: cornflowerblue;">
                    <?php include 'topbanner.php';?>
                </div>
            </div>
            <div class="row">
                <?php include 'menu.php';?>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <p>Login Area</p>
                </div>  
                <div class="col-sm-12 col-md-9 col-lg-9">
                <h4>เพิ่มเครื่องมือ</h4>    
                <?php
                    if(isset($_GET['submit'])){
                        $first_name = $_GET['first_name'];
                        $last_name = $_GET['last_name'];
                        $user_id = $_GET['user_id'];
                        $user_password = $_GET['user_password'];
                        $phone_number = $_GET['phone_number'];
                        $sql = "insert into person (first_name,last_name,user_id,user_password,phone_number) values ('$first_name','$last_name','$user_id','$user_password','$phone_number')";
                        include 'connectdb.php';
                        mysqli_query($conn,$sql);
                        mysqli_close($conn);
                        echo "คุณได้ทำการสมัคร  $first_name . $last_name เรียบร้อยแล้ว<br>";
                        echo '<a href="login.php">ไปหน้าล็อคอิน</a>';
                    }else{
                ?>
                    <form class="form-horizontal" role="form" name="person" action="<?php echo $_SERVER['PHP_SELF']?>">
                        <div class="form-group">
                            <label class="col-md-2 col-lg-2 control-label">ชื่อจริง</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="first_name" id="first_name" class="form-control">
                            </div>    
                        </div>
                            <label class="col-md-2 col-lg-2 control-label">นามสกุล</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="last_name" id="last_name" class="form-control">
                            </div>    
                        </div>
                            <label class="col-md-2 col-lg-2 control-label">userผู้ใช้</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="user_id" id="user_id" class="form-control">
                            </div>    
                        </div>
                            <label class="col-md-2 col-lg-2 control-label">รหัสผ่าน</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="user_password" id="user_password" class="form-control">
                            </div>    
                        </div>
                            <label class="col-md-2 col-lg-2 control-label">เบอร์โทรศัพท์</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="phone_number" id="phone_number" class="form-control">
                            </div>    
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-lg-10">
                                <input type="submit" name="submit" value="ตกลง" class="btn btn-default">
                            </div>    
                        </div>
                    </form>
                <?php
                    }
                ?>
                </div>    
            </div>
            <div class="row">
                <address>คณะวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ</address>
            </div>
        </div>    
    </body>
</html>