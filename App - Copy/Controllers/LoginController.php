<?php
use Yee\Yee;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\LoginModel;

class LoginController extends \Yee\Managers\Controller\Controller
{


    /**
     * @Route('/login')
     * @Name('login.index')
     */
    public function index()
    {
        $app = $this->getYee();
        $app->render('login/login.twig', $data = array(
        ));
    }
  
     /**
     * @Route('/login')
     * @Name('login.post')
     * @Method('POST')
     */
    public function postAction()
    {
        $app = $this->getYee();
        $email = $app->request->post('email_login');
        $password = $app->request->post('pwd_login');

       
        $loginModel = new LoginModel($email, $password);
     
        if($loginModel->login() == true)
        {
            $_SESSION['isLoggedin'] = true;

            $app->redirect('/home');
        }    
        else
        {
            $data = array(
            "error_login" => "Please make sure that your email and password are correct");

            $app->render('login/login.twig', $data);
        }
      
    }
}