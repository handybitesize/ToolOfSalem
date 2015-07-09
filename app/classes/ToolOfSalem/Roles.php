<?php

namespace ToolOfSalem;

class Roles
{
    public function view()
    {
        $template=new \Template;
        echo $template->render('roles.html');
    }
}
