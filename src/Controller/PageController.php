<?php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;

    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class PageController extends Controller {
        /**
        * @Route("/")
        */
        public function index(){
            return $this->render('pages/index.html.twig');
            // return new Response('<html>hello</html>');
        }
    }
