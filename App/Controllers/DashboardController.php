<?php
use Yee\Yee;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\AddCommentModel;


class DashboardController extends \Yee\Managers\Controller\Controller
{


    /**
     * @Route('/(dashboard)')
     * @Name('dashboard.index')
     */
    public function index()
    {
        $app = $this->getYee();
        $app->render('dashboard/dashboard.twig', $data = array(
            
        ));
    }

    /**
     * @Route('/dashboard')
     * @Name('dashboard.post')
     * @Method('POST')
     */

    public function post()
    {
        $app = $this->getYee();

        $name = $app->request->post('name');
        $comment = $app->request->post('comment');

        $AddCommentModel = new AddCommentModel($name, $comment);

        if($AddCommentModel->comment() == true)
        {
            $AddCommentModel->insertCommentsInDb();
            $app->render('dashboard/dashboard.twig', $data = array());
        }
        else
        {
            $data = array(
                "error"
                );
        }
    
    }   

}