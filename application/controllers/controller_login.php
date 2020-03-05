<?php
class Controller_Login extends Controller
{



    function __construct()
    {
        $this->model = new Model_Login();
        $this->view = new View();
    }

    function action_index()
    {
        if(isset($_POST['sumbitlogin'])){
            $login = $_POST['login'];
            $password=$_POST['password'];
            if ($this->model->Login($login,$password)){
                header('Location:'.'/');
            }else{
                $message='Ошибка ваторизации';
            }

        }
        $this->view->generate('login_view.php', 'template_view.php');
    }
}
