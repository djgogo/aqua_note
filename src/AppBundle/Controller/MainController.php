<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 12.11.17
 * Time: 13:01
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }
}