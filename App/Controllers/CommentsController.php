<?php
use Yee\Yee;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\DisplayCommentsModel;

class CommentsController extends \Yee\Managers\Controller\Controller
{


    /**
     * @Route('/dashboard')
     * @Name('dashboard.index')
     */
    public function index()
    {
        $app = $this->getYee();
        $newDisplayCommentsModel = new DisplayCommentsModel();
        $comments = $newDisplayCommentsModel->printComments();
        $data = array(
            'comments' => $comments
        );
        $app->render('dashboard/dashboard.twig', $data);
    }
}