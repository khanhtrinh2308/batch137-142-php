<?php
include 'model/user_model.php';
class UsersController
{
    public function handleRequest()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : 'home';
        switch ($action) {
            case 'home':
                $gender = array(
                    'male' => 'Male',
                    'female' => 'Female',
                    'other' => 'Other',
                );
                $city = array(
                    'quangtri' => 'Quang Tri',
                    'hue' => 'Hue',
                    'danang' => 'Da Nang',
                    'quangnam' => 'Quang Nam'
                );
                $home = UsersModel::getHome();
                include 'view/users/index.php';

                break;
            case 'delete_user':
                $idUser = $_GET['id'];
                UsersModel::deleteUser($idUser);

                break;
            case 'register':
                UsersModel::register();
                include 'view/users/register.php';

                break;
            case 'edit_user':
                $idUser = $_GET['id'];
                $userEdit = UsersModel::getUserById($idUser);
                include 'view/users/edit_user.php';
                UsersModel::editUser($idUser);

                break;
            default:
                # code...
                break;
        }
    }
}
?>