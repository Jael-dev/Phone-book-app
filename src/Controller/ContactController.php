<?php
// To make a controller we cann use the command symfony console make:controller controllerName
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{

    // Route for the list of contacts
     //
    // The default here is an empty array of contacts if the list is empty
    #[Route('/contact', name: 'app_contact', defaults: [])]
    public function index(): Response
    {
        $contacts = ['an array of contacts'];
        return $this->render('contact/index.html.twig', array(
            'contacts' => $contacts
        ));
    }

     // Route for a particular contact
     // Note: Never use the same name for two endpoints
     #[Route('/contact/{id}', name: 'individual_contact',methods:['GET','HEAD'])]
     public function singleContact($id): Response
     {
     // Change the rendering
         return $this->render('contact/index.html.twig', [
             'controller_name' => 'ContactController',
             'name' => $id
         ]);
     }

     // Todo: Make the create, the update and the delete
}
