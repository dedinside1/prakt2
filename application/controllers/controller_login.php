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


		if(isset($_POST['submitlogin'])) {
					$login = filter_var(trim($_POST['login'], FILTER_SANITIZE_STRING));
					$password = filter_var(trim($_POST['password'], FILTER_SANITIZE_STRING));
					if ($this->model->Login($login, $password)) {
						header('Location:'.'/');
					} else {
						echo 'Ошибка авторизации';
					}
				}

	$this->view->generate('login_view.php', 'template_view.php');

		}



	}
