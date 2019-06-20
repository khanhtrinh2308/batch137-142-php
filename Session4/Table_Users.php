<?php
include_once "Connect.php";
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                                <th class="cell100 column6"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = 'SELECT * FROM users';
                            $result = mysqli_query($conn, $sql);
                            while ($userEdit = $result->fetch_assoc()) {
                                echo "<tr class='row100 body' style='color: #999999'>
                                    <td class='cell100 column2'>".$userEdit['FullName']."</td>
                                    <td class='cell100 column2'>".$userEdit['Email']."</td>
                                    <td class='cell100 column3'>".$userEdit['Phone']."</td>
                                    <td class='cell100 column4'>".$userEdit['Gender']."</td>
                                    <td class='cell100 column5'>".$userEdit['Birthday']."</td>
                                    <td class='cell100 column6'><img src='uploads/".$userEdit['Avatar']."' class='img-thumbnail' width='80px'/></td>
                                    <td class='cell100 column6'>
                                        <button style='color : green' type='button'><span class='	glyphicon glyphicon-list-alt' onclick=\"location.href='Edit.php?id=".$userEdit['Id']."'\"> </span></button>
                                        <button style='color : red' type='button' onclick=\"location.href='Delete.php?id=".$userEdit['Id']."'\"><span class='glyphicon glyphicon-trash'> </span></button>
                                     </td>
                                </tr>";
                            }
                            mysqli_close($conn);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <input type="button" value="Register" class="btn btn-warning" style="cursor: pointer; margin-top: 10px" onclick="location.href='Form_Register.php'" />
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