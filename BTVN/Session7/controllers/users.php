<?php
include_once '../models/connect.php';
class Users 
{
    
    public static function checkExistUsername($username)
    {
        $connect = Database::Connect();
        $sql = "SELECT username FROM users WHERE username = '$username'";
        $result = mysqli_query($connect, $sql);
        return $result->num_rows;
    }

    public static function addNewUsers($username, $password, $city, $gender, $avatarName)
    {
        $connect = Database::Connect();
        if (
            $username != '' && $password != '' && $city != ''
            && $gender != '' && !self::checkExistUsername($username, $connect)
        ) {
            if ($_FILES['avatar']['error'] == 0) {
                $avatar   = $_FILES['avatar'];
                $avatarName = uniqid() . '_' . $avatar['name'];
                move_uploaded_file($avatar['tmp_name'], '../uploads/avatar/' . $avatarName);
            }

            $sql = "INSERT INTO users(username, password, city, gender, avatar)
        VALUES('$username', '$password', '$city', '$gender', '$avatarName')";
            if (mysqli_query($connect, $sql) === TRUE) {
                header("Location: ../views/list_user.php");
            }
        }
    }

    public static function showListUsers()
    {
        $connect = Database::Connect();
        $sql = "SELECT * FROM users";
        $result = mysqli_query($connect, $sql);
        return $result;
    }

    public static function getUserById($id)
    {
        $connect = Database::Connect();
        $sql = "SELECT * FROM users WHERE id = $id";
        $result = mysqli_query($connect, $sql);
        $userEdit = $result->fetch_assoc();
        return $userEdit;
    }

    public static function editUsers($id, $username, $city, $gender, $avatarName, $userEdit)
    {
        $connect = Database::Connect();
        if (
            $username != '' && $city != ''
            && $gender != ''
        ) {
            if ($_FILES['avatar']['error'] == 0) {
                $avatar   = $_FILES['avatar'];
                if($avatarName != "default.png"){
                    unlink("../uploads/avatar/" . $userEdit['avatar']);
                }
                $avatarName = uniqid() . '_' . $avatar['name'];
                move_uploaded_file($avatar['tmp_name'], '../uploads/avatar/' . $avatarName);
            }
            $sql = "UPDATE users SET username = '$username', city = '$city', gender = '$gender', avatar = '$avatarName' WHERE id = $id";

            if (mysqli_query($connect, $sql) === TRUE) {
                header("Location: ../views/list_user.php");
            }
        }
    }

    public static function deleteUsers($id)
    {
        $connect = Database::Connect();
        $sql = "DELETE FROM users WHERE id = $id";
        if (mysqli_query($connect, $sql) === TRUE) {
            header("Location: ../views/list_user.php");
        }
    }

    
    public static function showPage()
    {
        header("Location: views/register.php");
    }

}
?>
