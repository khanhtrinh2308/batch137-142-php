<!DOCTYPE html>
<header>
    <title>Tinh Tien Dien</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</header>

<body>
    <h1>Hoa Don Tinh Tien Dien</h1>
    <?php
    $errHoten = $errNgayDau = $errNgayCuoi = $errSoDau = $errSoCuoi = $errAvatar = $mesage = '';
    $tienDien = 0;
    $soDien = 0;
    $checkTinhTien = true;
    if (isset($_POST['total'])) {
        $hoten    = $_POST['hoten'];
        $ngaydau  = $_POST['ngaydau'];
        $ngaycuoi = $_POST['ngaycuoi'];
        $sodau    = $_POST['sodau'];
        $socuoi   = $_POST['socuoi'];
        if ($hoten == '') {
            $errHoten = 'Vui long dien ho va ten';
            $checkTinhTien = false;
        }
        if ($ngaydau == '') {
            $errNgayDau = 'Vui long dien ngay dau ky';
            $checkTinhTien = false;
        }
        if ($ngaycuoi == '') {
            $errNgayCuoi = 'Vui long dien ngay cuoi ky';
            $checkTinhTien = false;
        }
        if ($sodau == '') {
            $errSoDau = 'Vui long dien so dau ky';
            $checkTinhTien = false;
        }
        if ($socuoi == '') {
            $errSoCuoi = 'Vui long dien so cuoi ky';
            $checkTinhTien = false;
        }
        if ($sodau > $socuoi) {
            $errSoDau = 'So dau ky phai nho hon hoac bang so cuoi ky';
            $checkTinhTien = false;
        }
        if ($ngaydau > $ngaycuoi) {
            $errNgayDau = 'Ngay dau ky phai nho hon hoac bang ngay cuoi ky';
            $checkTinhTien = false;
        }
        $soDien = $socuoi - $sodau;
        if ($soDien <= 100) {
            $tienDien = $soDien * 1500;
        }
        if ($soDien > 100 && $soDien <= 300) {
            $tienDien = 100 * 1500 + ($soDien - 100) * 2000;
        }
        if ($soDien > 300) {
            $tienDien = 100 * 1500 + 200 * 2000 + ($soDien - 300) * 3500;
        }
        if ($_FILES['avatar']['error'] == 0) {
            $errAvatar = '';
        } else {
            $errAvatar = 'Chon anh dinh kem';
            $checkTinhTien = false;
        }
        if ($checkTinhTien) {
            $randomName = uniqid();
            $avatarName = $randomName."_". $_FILES['avatar']['name'];
            move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/' . $avatarName);
            echo "<p>Anh dinh kem: <img src='uploads/$avatarName' width='5%'</p>" ; 
            echo "<p>Phieu tinh tien dien cua gia dinh: " . $hoten . "</p>";
            echo "<p>Tien dien tinh tu ngay: " . $ngaydau . " den ngay " . $ngaycuoi . "</p>";
            echo "<p>So tien dien can thanh toan la: " . number_format($tienDien) . " VND";
            $mesage = "Register success !!";
        }
    }
    ?>
    <div class="container-fluid">
        <form style="width: 30%" action="#" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="fullname">Ho Ten :</label>
                <input type="text" class="form-control" name="hoten" id="fullname">
                <p class="error"><?php echo $errHoten; ?></p>
            </div>
            <div class="form-group">
                <label for="sddk">So dien dau ky :</label>
                <input type="number" class="form-control" name="sodau" id="sddk">
                <p class="error"><?php echo $errSoDau; ?></p>
            </div>
            <div class="form-group">
                <label for="sdck">So dien cuoi ky :</label>
                <input type="number" class="form-control" name="socuoi" id="sddk">
                <p class="error"><?php echo $errSoCuoi; ?></p>
            </div>
            <div class="form-group">
                <label for="ndk">Ngay dau ky :</label>
                <input type="date" class="form-control" name="ngaydau" id="ndk">
                <p class="error"><?php echo $errNgayDau; ?></p>
            </div>
            <div class="form-group">
                <label for="nck">Ngay cuoi ky :</label>
                <input type="date" class="form-control" name="ngaycuoi" id="nck">
                <p class="error"><?php echo $errNgayCuoi; ?></p>
            </div>
            <div class="form-group">
                <label for="nck">Anh Dinh Kem :</label>
                <input type="file" class="form-control" name="avatar" id="nck">
                <p class="error"><?php echo $errNgayCuoi; ?></p>
            </div>
            <button type="submit" name="total" class="btn btn-default">Check Out</button>
            <p class="text-success" style="margin-top: 10px"><?php echo $mesage; ?></p>
        </form>
    </div>
</body>