<?php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpFoundation\Request;
    

    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


    class PageController extends Controller {
        /**
        * @Route("/")
        */
        public function index(){
            return $this->render('pages/index.html.twig');
            // return new Response('<html>hello</html>');
        }
    }
