<?php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;

    use Symfony\Component\Routing\Annotation\Route;

    class PageController {
        /**
        * @Route("/")
        */
        public function index(){
            return new Response('<html>hello</html>');
        }
    }
