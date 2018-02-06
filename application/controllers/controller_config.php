<?php
class Controller_Config extends Controller
{
    function action_index()
    {
        $this->view->generate('config_view.php', 'template_view.php');
    }
}

?>