<?php
use Yee\Yee;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\RegisterModel;

class RegisterController extends \Yee\Managers\Controller\Controller
{


    /**
     * @Route('/register')
     * @Name('register.index')
     */
    public function index()
    {
        $app = $this->getYee();
            $app->render('register/register.twig', $data = array(

            ));
    }

    /**
     * @Route('/register')
     * @Name('register.post')
     * @Method('POST')
     */
    public function post()
    {

        $app = $this->getYee();
        $email = $app->request->post('email');
        $password = $app->request->post('pwd');
        $repeat_password = $app->request->post('repwd');


        $registerModel = new RegisterModel($email, $password, $repeat_password);

        if($registerModel->register() == true)
        {
            $registerModel->insertInDb();
            $app->render('login/login.twig', $data = array());
        }
        else
        {
            $data = array(
                "error" => "Fill the damn fields! Make sure your email is valid and the password is between 8 and 20 digits and contains a number !"
                );
            $app->render('register/register.twig', $data);
        }
    }
    
}