<?php

namespace App\Controller\Admin;

class AdminBaseController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    public static function renderDefault()
    {
        return [
            'title' => 'Изучение Symfony 5 - Панель'
        ];
    }
}