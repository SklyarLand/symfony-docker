<?php

namespace App\Controller\Main;

class BaseController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    public static function renderDefault()
    {
        return [
            'title' => 'Изучение Symfony 5'
        ];
    }
}