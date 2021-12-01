<?php

namespace App\Controller;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\File;//for FileUploader
use Symfony\Component\Form\Extension\Core\Type\FileType;//for FileUploader
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Todo;
use App\Entity\Status;

use App\Service\FileUploader;//for FileUploader

class TodoController extends AbstractController
{
    #[Route('/todo', name: 'todo')]
    public function index(): Response
    {
        $todos = $this->getDoctrine()->getRepository('App:Todo')->findAll();
        return $this->render('todo/index.html.twig', array('todos'=>$todos));
    }
    
    #[Route("/create", name:"todo_create")]
        public function create(Request $request, FileUploader $fileUploader): Response
    {

         // Here we create an object from the class that we 
         $todo = new Todo;

         /* Here we will build a form using createFormBuilder and inside this function we will put our object and then we write add then we select the input type then an array to add an attribute that we want in our input field */
         
                $form = $this->createFormBuilder($todo)->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
                ->add('category', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
                ->add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
                ->add('priority', ChoiceType::class, array('choices'=>array('Low'=>'Low', 'Normal'=>'Normal', 'High'=>'High'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
                ->add('due_date', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
                ->add('fk_status', EntityType::class, [
                    'class' => Status::class,

                    'choice_label' => 'name',

                ])

                ->add('pictureUrl', FileType::class, [
                    'label' => 'Upload Picture',
                //unmapped means that is not associated to any entity property
                    'mapped' => false,
                //not mandatory to have a file
                    'required' => false,
                //in the associated entity, so you can use the PHP constraint classes as validators
                    'constraints' => [
                        new File([
                            'maxSize' => '1024k',
                            'mimeTypes' => [
                                'image/png',
                                'image/jpeg',
                                'image/jpg',
                            ],
                            'mimeTypesMessage' => 'Please upload a valid image file' ,
                        ])
                    ],
                ])

                ->add('save', SubmitType::class, array('label'=> 'Create Todo', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-bottom:15px')))

                ->getForm();

                //form handle request
                 $form->handleRequest($request);

                 /* Here we have an if statement, if we click submit and if  the form is valid we will take the values from the form and we will save them in the new variables */
         
                 if($form->isSubmitted() && $form->isValid()){
                     //fetching data
         
                     // taking the data from the inputs by the name of the inputs then getData() function
         
                    $name = $form['name']->getData();
                    $category = $form['category']->getData();
                    $description = $form['description']->getData();
                    $priority = $form['priority']->getData();
                    $due_date = $form['due_date']->getData();
                    // $fk_status = $form['fk_status']->getData();

                    // Here we will get the current date
                    $now = new \DateTime('now');

                    $pictureFile = $form->get('pictureUrl')->getData();
                    //THIS IS A PICTURE VALIDATION: pictureUrl is the name given to the input field
                    if ($pictureFile) {
                        $pictureFileName = $fileUploader->upload($pictureFile);
                        $todo->setPictureUrl($pictureFileName);
                    }

                    /* these functions we bring from our entities, every column have a set function and we put the value that we get from the form */
         
                     $todo->setName($name);
                     $todo->setCategory($category);
                     $todo->setDescription($description);
                     $todo->setPriority($priority);
                     $todo->setDueDate($due_date);
                    //  $todo->setFkStatus($fk_status);
                     $todo->setCreateDate($now);
         
                     $em = $this->getDoctrine()->getManager();
                     $em->persist($todo);
                     $em->flush();
         
                     $this->addFlash(
                             'notice',       
                             'Todo Added'        
                             );
         
                     return $this->redirectToRoute('todo');
         
                 }
         
          /* now to make the form we will add this line form->createView() and now you can see the form in create.html.twig file  */
         
                 return $this->render('todo/create.html.twig', array('form' => $form->createView()));

    }


   
    #[Route("/edit/{id}", name:"todo_edit")]
   public function edit(Request $request, FileUploader $fileUploader, $id): Response
   {
       /* Here we have a variable todo and it will save the result of this search and it will be one result because we search based on a specific id */
       $todo = $this->getDoctrine()->getRepository('App:Todo')->find($id);
       $now = new \DateTime('now');

        /* Now when you type createFormBuilder and you will put the variable todo the form will be filled of the data that you already set it */
        $form = $this->createFormBuilder($todo)->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
           ->add('category', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
           ->add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
           ->add('priority', ChoiceType::class, array('choices'=>array('Low'=>'Low', 'Normal'=>'Normal', 'High'=>'High'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
            ->add('due_date', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
            ->add('fk_status', EntityType::class, [
                'class' => Status::class,
                'choice_label' => 'name',
            ])
            
            
            ->add('pictureUrl', FileType::class, [
                'label' => 'Upload Picture',
            //unmapped means that is not associated to any entity property
                'mapped' => false,
            //not mandatory to have a file
                'required' => false,
            //in the associated entity, so you can use the PHP constraint classes as validators
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/png',
                            'image/jpeg',
                            'image/jpg',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image file' ,
                    ])
                ],
            ])


            ->add('save', SubmitType::class, array('label'=> 'Update Todo', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-botton:15px')))
            ->getForm();
       $form->handleRequest($request);


       if($form->isSubmitted() && $form->isValid()){
           //fetching data
           $name = $form['name']->getData();
           $category = $form['category']->getData();
           $description = $form['description']->getData();
           $priority = $form['priority']->getData();
           $due_date = $form['due_date']->getData();
           $now = new \DateTime('now');

           $pictureFile = $form->get('pictureUrl')->getData();
           //THIS IS A PICTURE VALIDATION: pictureUrl is the name given to the input field
           if ($pictureFile) {
               $pictureFileName = $fileUploader->upload($pictureFile);
               $todo->setPictureUrl($pictureFileName);
           }


           $em = $this->getDoctrine()->getManager();
           $todo = $em->getRepository('App:Todo')->find($id);
           $todo->setName($name);
           $todo->setCategory($category);
           $todo->setDescription($description);
           $todo->setPriority($priority);
           $todo->setDueDate($due_date);
           $todo->setCreateDate($now);
           
           $em->flush();
           $this->addFlash(
                   'notice',
                   'Todo Updated'
                   );
           return $this->redirectToRoute('todo');
       }
       return $this->render('todo/edit.html.twig', array('todo' => $todo, 'form' => $form->createView()));  
   }
    #[Route("/details/{id}", name:"todo_details")]
    public function details(Request $request, $id): Response
    {
        $todo = $this->getDoctrine()->getRepository('App:Todo')->find($id);
        return $this->render('todo/details.html.twig', array('todo' => $todo));
    }

    #[Route("/delete/{id}", name:"todo_delete")]
    public function delete($id){

        $em = $this->getDoctrine()->getManager();

        $todo = $em->getRepository('App:Todo')->find($id);

        $em->remove($todo);

       

        $em->flush();

        $this->addFlash(

            'notice',

            'Todo Removed'

        );

       

        return $this->redirectToRoute('todo');

    }
    }
