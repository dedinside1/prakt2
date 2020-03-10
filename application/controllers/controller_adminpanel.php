<?php
class Controller_Adminpanel extends Controller
{
    function __construct()
    {
        $this->model = new Model_Adminpanel();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('adminpanel_view.php', 'template_view.php', $data);
    }
    function action_add()
    {
      if(isset($_POST['year']) && isset($_POST['site']) && isset($_POST['description'])) {
        $year = filter_var(trim($_POST['year'], FILTER_SANITIZE_STRING));
        $site = filter_var(trim($_POST['site'], FILTER_SANITIZE_STRING));
        $description = filter_var(trim($_POST['description'], FILTER_SANITIZE_STRING));
        $this->model->add($year, $site, $description);
        header('Location:/adminpanel');
      }
    }
    function action_delete()
    {
      if (isset($_POST['id'])) {
			$id=filter_var(trim($_POST['id'], FILTER_SANITIZE_STRING));
			$this->model->delete($id);
			header('Location:/adminpanel');
    }
    }

  function action_redaction(){
    if ((isset($_POST['year']) || isset($_POST['site']) || isset($_POST['description']) || isset($_POST['id'])) && isset($_POST['upsubmit'])) {
      $id=filter_var(trim($_POST['id'], FILTER_SANITIZE_STRING));
      $year =filter_var(trim($_POST['Year'], FILTER_SANITIZE_STRING));
      $site =filter_var(trim($_POST['Site'], FILTER_SANITIZE_STRING));
      $description =filter_var(trim($_POST['Description'], FILTER_SANITIZE_STRING));
      $this->model->redactionInfo($id, $year, $site, $description);
      header('Location:/adminpanel');
    }
  }
}
