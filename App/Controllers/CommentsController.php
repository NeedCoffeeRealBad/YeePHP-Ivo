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

        //add to database

        $data = array(
            'name' => $name,
            'comment' => $comment
        );

        echo json_encode($data);
    }
}