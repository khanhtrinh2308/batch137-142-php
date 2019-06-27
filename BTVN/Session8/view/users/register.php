<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="lib/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="lib/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="lib/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="lib/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="lib/css/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <?php $username = $password = $city = $gender = ''; ?>
        <div class="register-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group has-feedback">
                    <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $username ?>">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $password ?>">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="radio" name="gender" value="male" <?php echo ($gender == 'female') ? "checked" : '' ?>> Male
                    <input type="radio" name="gender" value="female" <?php echo ($gender == 'female') ? "checked" : '' ?>> Female
                </div>
                <div class="form-group">
                    <label>City</label>
                    <select class="form-control" name="city">
                        <option value="">Choose city</option>
                        <option value="quangtri" <?php echo ($city == 'quangtri') ? "selected" : '' ?>>Quang Tri</option>
                        <option value="hue" <?php echo ($city == 'hue') ? "selected" : '' ?>>Hue</option>
                        <option value="danang" <?php echo ($city == 'danang') ? "selected" : '' ?>>Da Nang</option>
                        <option value="quangnam" <?php echo ($city == 'quangnam') ? "selected" : '' ?>>Quang Nam</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Avatar</label>
                    <input type="file" id="exampleInputFile" name="avatar">
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" name="register" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery 3 -->
    <script src="lib/js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="lib/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="lib/js/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
</body>

</html>