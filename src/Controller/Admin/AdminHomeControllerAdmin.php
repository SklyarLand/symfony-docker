<?php

namespace App\Controller\Admin;

use Symfony\Component\Routing\Annotation\Route;

class AdminHomeControllerAdmin extends AdminBaseController
{
    /**
     * @Route ("/admin", name="admin_home")
     */
    public function index()
    {
        $forRender = parent::renderDefault();
        return $this->render('admin/index.html.twig', $forRender);
    }
}