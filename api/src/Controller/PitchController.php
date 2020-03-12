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
 * Class PitchController
 * @package App\Controller
 * @Route("/pitches")
 */
class PitchController extends AbstractController
{

    /**
     * @Route("/")
     * @Template
     */
	public function indexAction()
    {	
    	return [];
    }

    /**
     * @Route("/pitch")
     * @Template
     */
	public function pitchAction()
    {
    	return [];
    }

    /**
     * @Route("/pitch/pitch1")
     * @Template
     */
    public function pitch1Action()
    {
        return [];
    }

    /**
     * @Route("/pitch/pitch2")
     * @Template
     */
    public function pitch2Action()
    {
        return [];
    }

    /**
     * @Route("/pitch/pitch3")
     * @Template
     */
    public function pitch3Action()
    {
        return [];
    }





}






