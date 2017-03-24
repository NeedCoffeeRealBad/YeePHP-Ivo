<?php
use Yee\Yee;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;

class HomeController extends \Yee\Managers\Controller\Controller
{


    /**
     * @Route('/(home)')
     * @Name('home.index')
     */
    public function index()
    {
        $app = $this->getYee();
        $app->render('home/home.twig', $data = array(
            
        ));
    }


}