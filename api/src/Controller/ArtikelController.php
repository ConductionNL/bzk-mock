<?php

// src/Controller/DashboardController.php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use App\Service\CommonGroundService;

/**
 * Class ArtikelenController
 * @package App\Controller
 * @Route("/articles")
 */
class ArtikelController extends AbstractController
{

    /**
     * @Route("/")
     * @Template
     */
	public function indexAction()
    {
        $artikelen = [];

        $artikel = [];
        $artikel['id'] = 1;
        $artikel['name'] = "Artikel";
        $artikel['description'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu faucibus odio, nec
                    molestie orci. Phasellus sollicitudin cursus ullamcorper. Nunc quis sapien non felis bibendum
                    tempor et id tortor. Mauris felis sapien, condimentum ullamcorper tincidunt sit amet, commodo sed
                    ex. Nam malesuada quis neque sit amet imperdiet. Ut nec est pharetra leo varius varius ac id
                    orci. Nulla euismod vestibulum eros eu sagittis.";

        $artikelen[] = $artikel;

        $artikel = [];
        $artikel['id'] = 2;
        $artikel['name'] = "Artikel";
        $artikel['description'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu faucibus odio, nec
                    molestie orci. Phasellus sollicitudin cursus ullamcorper. Nunc quis sapien non felis bibendum
                    tempor et id tortor. Mauris felis sapien, condimentum ullamcorper tincidunt sit amet, commodo sed
                    ex. Nam malesuada quis neque sit amet imperdiet. Ut nec est pharetra leo varius varius ac id
                    orci. Nulla euismod vestibulum eros eu sagittis.";

        $artikelen[] = $artikel;

    	return ["artikelen"=>$artikelen];
    }

    /**
     * @Route("/{id}")
     * @Template
     */
	public function viewAction()
    {
       $artikel = [];
       $artikel['name'] = "Artikel";
       $artikel['description'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu faucibus odio, nec
                    molestie orci. Phasellus sollicitudin cursus ullamcorper. Nunc quis sapien non felis bibendum
                    tempor et id tortor. Mauris felis sapien, condimentum ullamcorper tincidunt sit amet, commodo sed
                    ex. Nam malesuada quis neque sit amet imperdiet. Ut nec est pharetra leo varius varius ac id
                    orci. Nulla euismod vestibulum eros eu sagittis.";
       $artikel['writer'] = "John Doe";
       $artikel['createdAt'] = "20-1-2020";


    	return ["artikel"=>$artikel];
    }

}






