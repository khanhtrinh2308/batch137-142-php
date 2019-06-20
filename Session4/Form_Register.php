<?php
include_once "Connect.php";
$fullName = $birthday = $gender = $phone = $email = $avatarName = '';

$checkRegister = true;
if (isset($_POST['submit'])) {
    $fullName =  $_POST['full_name'];
    $birthday =  $_POST['birthday'];
    $gender   =  isset($_POST['gender']) ? $_POST['gender'] : "";// toan tu ? 
    $phone     =  $_POST['phone_number'];
    $email     =  $_POST['email'];
    if ($fullName == '') {
        $checkRegister = false;
    }
    if ($birthday == '') {
        $checkRegister = false;
    }
    if ($gender == NULL) {
        $checkRegister = false;
    }
    if ($phone == '') {
        $checkRegister = false;
    }
    if ($email == '' ) {
        $checkRegister = false;
    }
    $sql = "SELECT Email FROM users WHERE Email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 0) {
        $checkRegister = true;
    }else{
        $checkRegister = false;
    }
    if ($_FILES['avatar']['error'] == 0) {
        $errAvatar = '';
    } else {
        $avatarName = 'default.jpg';
    }
    if ($checkRegister) {
        if($_FILES['avatar']['error'] == 0){
            $randomName = uniqid();
            $avatarName = $randomName . "_" . $_FILES['avatar']['name'];
            move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/' . $avatarName);
        }
        $sql = "INSERT INTO users (FullName, Email, Phone, Gender, Birthday, Avatar) VALUES ('$fullName', '$email', '$phone', '$gender', '$birthday', '$avatarName')";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        $fullName  =  '';
        $birthday  =  '';
        $phone     =  '';
        $email     =  '';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="Lib_Form_Register/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="Lib_Form_Register/vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="Lib_Form_Register/css/style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="Lib_Form_Register/images/form-img.jpg" alt="">
                    <div class="signup-img-content">
                        <h2>Register now </h2>
                        <p>while seats are available !</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="regis-form" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="full_name" class="required">Full name</label>
                                    <input type="text" name="full_name" id="full_name" value="<?php echo $fullName ?>" />
                                </div>
                                <div class="form-input">
                                    <label for="birthday" class="required">Birthday</label>
                                    <input type="date" name="birthday" id="birthday" value="<?php echo $birthday ?>" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" value="<?php echo $email ?>" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Phone number</label>
                                    <input type="text" name="phone_number" id="phone_number" value="<?php echo $phone ?>" />
                                </div>
                                <div class="form-input">
                                    <label for="avatar" class="required">Avatar</label>
                                    <input type="file" name="avatar" id="avatar" />
                                </div>
                                <div class="form-radio">
                                    <div class="label-flex">
                                        <label for="gender">Gender</label>
                                    </div>
                                    <div class="form-radio-group">
                                        <div class="form-radio-item">
                                            <input type="radio" name="gender" id="male" value="Male" checked>
                                            <label for="male">Male</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="gender" id="female" value="Female">
                                            <label for="female">Female</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="gender" id="other" value="Other">
                                            <label for="other">Other</label>
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="Register" class="submit" id="submit" name="submit" />
                                <input type="button" value="Show List Users" class="submit" id="reset" name="reset" onclick="location.href='Table_Users.php'" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="Lib_Form_Register/vendor/jquery/jquery.min.js"></script>
    <script src="Lib_Form_Register/vendor/nouislider/nouislider.min.js"></script>
    <script src="Lib_Form_Register/vendor/wnumb/wNumb.js"></script>
    <script src="Lib_Form_Register/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="Lib_Form_Register/vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="Lib_Form_Register/js/main.js"></script>
</body>

</html>
<script>
    $('#regis-form').validate({
        rules: {
            full_name: {
                required: true
            },
            birthday: {
                required: true,
                date: true
            },
            // avatar: {
            //     required: true
            // },
            email: {
                required: true,
                email: true
            },
            phone_number: {
                required: true,
            }
        },
        messages: {
            full_name: "<p style='text-align: right; color: red'>Please input your fullname</p>",
            birthday: "<p style='text-align: right; color: red'>Please input your birthday</p>",
            avatar: "<p style='text-align: right; color: red'>Please choose your avatar</p>",
            email: "<p style='text-align: right; color: red'>Please input your email</p>",
            phone_number: "<p style='text-align: right; color: red'>Please input your phone</p>",
        },
        onfocusout: function(element) {
            $(element).valid();
        },
    });

    $('#submit').on('click', function() {
        $('#regis-form').reset();
    });
</script>