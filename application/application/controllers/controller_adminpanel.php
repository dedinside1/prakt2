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
}
