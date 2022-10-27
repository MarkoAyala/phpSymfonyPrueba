<?php
namespace App\Controller;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
class LibraryController extends AbstractController{
    /**
     * @Route("/library/list", name="library_list")
     */
    public function list(LoggerInterface $logger){
       $response = new JsonResponse();
       $logger->info('List action called');
       $response->setData([
        'prop1' => true,
        'data' => [
            [
                'id' => 1,
                'title' => 'titulo1'
            ],
            [
                'id' =>2,
                'title'=>'titulo2'
            ]
        ]
       ]);
       return $response;
    }
}

?>