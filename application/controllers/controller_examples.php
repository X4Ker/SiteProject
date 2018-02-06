<?php
class Controller_Examples extends Controller
{
    function action_index()
    {
        $this->view->generate('examples_view.php', 'template_view.php');
    }
}

?>