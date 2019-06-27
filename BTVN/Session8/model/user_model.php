<?php
include 'config/database.php';
class UsersModel extends Connect
{
    public function getHome()
    {
        $sql = "SELECT * FROM users";
        $result = mysqli_query(self::connectDB(), $sql);
        return $result;
    }
    public function deleteUser($idUser)
    {
        $sql = "DELETE FROM users WHERE id=$idUser";
        $result = mysqli_query(self::connectDB(), $sql);
        if ($result === true) {
            header("location: index.php");
        }
    }
    public function checkExistUsername($username, $connect)
    {
        $sql = "SELECT username FROM users WHERE username = '$username'";

        $result = mysqli_query($connect, $sql);
        return $result->num_rows;
    }
    public function register()
    {
        $username = $password = $city = $gender = '';
        if (isset($_POST['register'])) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $city     = $_POST['city'];
            $gender   = isset($_POST['gender']) ? $_POST['gender'] : NULL;
            $avatarName = 'default.png';

            if (
                $username != '' && $password != '' && $city != ''
                && $gender != '' && !self::checkExistUsername($username, self::connectDB())
            ) {
                if ($_FILES['avatar']['error'] == 0) {
                    $avatar   = $_FILES['avatar'];
                    $avatarName = uniqid() . '_' . $avatar['name'];
                    move_uploaded_file($avatar['tmp_name'], 'uploads/avatar/' . $avatarName);
                }

                $sql = "INSERT INTO users(username, password, city, gender, avatar)
        VALUES('$username', '$password', '$city', '$gender', '$avatarName')";
                if (mysqli_query(self::connectDB(), $sql) === TRUE) {
                    header("Location: index.php");
                }
            }
        }
    }
    public function getUserById($idUser)
    {
        $sql = "SELECT * FROM users WHERE id = $idUser";
        $result = mysqli_query(self::connectDB(), $sql);
        $userEdit = $result->fetch_assoc();
        return $userEdit;
    }
    public function editUser($idUser)
    {
        $userEdit = self::getUserById($idUser);
        $avatarName = $userEdit['avatar'];
        if (isset($_POST['edit'])) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $city     = $_POST['city'];
            $gender   = isset($_POST['gender']) ? $_POST['gender'] : NULL;


            if ($_FILES['avatar']['error'] == 0) {
                $avatar   = $_FILES['avatar'];
                if ($avatarName != "default.png") {
                    unlink("../uploads/avatar/" . $userEdit['avatar']);
                }
                $avatarName = uniqid() . '_' . $avatar['name'];
                move_uploaded_file($avatar['tmp_name'], 'uploads/avatar/' . $avatarName);
            }
            $sql = "UPDATE users SET username = '$username', city = '$city', gender = '$gender', avatar = '$avatarName' WHERE id = $idUser";

            if (mysqli_query(self::connectDB(), $sql) === TRUE) {
                header("Location: index.php");
            }
        }
    }
}
?>