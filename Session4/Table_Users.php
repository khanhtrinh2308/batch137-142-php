<?php
$host = "localhost";
$user = "sa";
$password = "123456";
$database = "session4";
$conn = mysqli_connect($host, $user, $password, $database);
$fullname = $email = $gender = $phone = $avatar = $birthday = '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Table Users</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Lib_Table/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Lib_Table/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Lib_Table/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Lib_Table/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Lib_Table/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Lib_Table/css/util.css">
    <link rel="stylesheet" type="text/css" href="Lib_Table/css/main.css">
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100" style="margin-bottom: 10px">
                <div class="table100 ver1">
                    <table>
                        <thead>
                            <tr class="row100 head">
                                <th class="cell100 column2">FullName</th>
                                <th class="cell100 column2">Email</th>
                                <th class="cell100 column3">Phone</th>
                                <th class="cell100 column4">Gender</th>
                                <th class="cell100 column5">Birthday</th>
                                <th class="cell100 column6">Avatar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = 'SELECT fullname, email, phone, gender, birthday, avatar FROM USERS';
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $fullname = $row["fullname"];
                                $email = $row["email"];
                                $phone = $row["phone"];
                                $gender = $row["gender"];
                                $birthday = $row["birthday"];
                                $avatar = $row["avatar"];
                                echo "<tr class='row100 body' style='color: #999999'>
                                    <td class='cell100 column2'>$fullname</td>
                                    <td class='cell100 column2'>$email</td>
                                    <td class='cell100 column3'>$phone</td>
                                    <td class='cell100 column4'>$gender</td>
                                    <td class='cell100 column5'>$birthday</td>
                                    <td class='cell100 column6'><img src='uploads/$avatar' class='img-thumbnail' width='80px'/></td>
                                </tr>";
                            }
                            mysqli_close($conn);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <input type="button" value="Register" class="btn btn-warning" style="cursor: pointer; margin-top: 10px" onclick="location.href='/batch137-142-php/Session4/Form_Register.php'" />
        </div>
    </div>


    <!--===============================================================================================-->
    <script src="Lib_Table/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="Lib_Table/vendor/bootstrap/js/popper.js"></script>
    <script src="Lib_Table/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="Lib_Table/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="Lib_Table/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function() {
            var ps = new PerfectScrollbar(this);

            $(window).on('resize', function() {
                ps.update();
            })

            $(this).on('ps-x-reach-start', function() {
                $(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
            });

            $(this).on('ps-scroll-x', function() {
                $(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
            });

        });
    </script>
    <!--===============================================================================================-->
    <script src="Lib_Table/js/main.js"></script>

</body>

</html>