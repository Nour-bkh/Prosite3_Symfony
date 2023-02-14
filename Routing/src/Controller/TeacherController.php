<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TeacherController extends AbstractController
{
    #[Route('/teacher/{name}')]
    public function showTeacher($name)
    {
        return $this->render('teacher/showTeacher.html.twig',['name'=> $name,]);
    }

    #[Route('/tostudent')]
    public function redirectToStudent(){
        return $this->redirectToRoute('welcome_student');
    }

    #[Route('/list', name: 'app_list')]
    public function list(): Response
    {
        $formations = array( array('ref' => 'f1', 'Titre' => 'Formation Symfony 4',
        'Description'=>'formation pratique','nb_participants'=>19) ,
         array('ref'=>'f2','Titre'=>'Formation SOA' ,
         'Description'=>'formation theorique','nb_participants'=>0), 
         array('ref'=>'f3','Titre'=>'Formation Angular' , 
         'Description'=>'formation theorique','nb_participants'=>12));

        return $this->render('club/list.html.twig', [
            'f'=>$formations
        ]);
    }

   
}

