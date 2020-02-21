<?php

namespace App\Controller;
use App\Entity\Items;
use App\Entity\Users;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    private function getItems() {
        $repository = $this->getDoctrine()->getRepository(Items::class);
        $stuff = $repository->findAll();

        return ($stuff);
    }

    private function getUsers() {
        $repository = $this->getDoctrine()->getManager();
        $stuff = $repository->getRepository(Users::class)->findAll();

        return ($stuff);
    }

    public function index()
    {
        $items = $this->getItems();
        $users = $this->getUsers();
        $data = [$items, $users];
        return $this->render('default/index.html.twig', ['controller_name' => 'DefaultController',]);
    }
}
