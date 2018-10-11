<?php

namespace Ecommerce\EcommerceBundle\Controller;
use Ecommerce\EcommerceBundle\Form\RechercheType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Produits;
use Ecommerce\EcommerceBundle\Entity\Categories;
use Ecommerce\EcommerceBundle\Form\ProduitsType;
use Symfony\Component\HttpFoundation\Request;
use Ecommerce\EcommerceBundle\Form\CategoriesType;
class DefaultController extends Controller
{
    
    
        public function indexAction()
        {
          return $this->render('EcommerceEcommerceBundle:Default:index.html.twig');
        }

    
    
    
    public function createpAction()
    {
        $request = $this->get('request');
        $entity = new Produits();
        $form = $this->createForm(new ProduitsType, $entity);


       $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('new_product'));
        }

        return $this->render('EcommerceEcommerceBundle:Default:addnew.html.twig', array(
                    'form' => $form->createView()
        ));
    }
    
    
    
    public function createcAction()
    {
        $request = $this->get('request');
        $entity = new Categories();
        $form = $this->createForm(new CategoriesType, $entity);


       $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('new_categorie'));
        }

        return $this->render('EcommerceEcommerceBundle:Default:newCategorie.html.twig', array(
                    'form' => $form->createView()
        ));
    }
    
    
     public function showAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcommerceEcommerceBundle:Produits')->findAll();

        return $this->render('EcommerceEcommerceBundle:Default:show.html.twig', array(
            'entities' => $entities,
        ));
        
 
    }
    
    
    
    
         public function showcAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcommerceEcommerceBundle:Categories')->findAll();

        return $this->render('EcommerceEcommerceBundle:Default:showc.html.twig', array(
            'entities' => $entities,
        ));
        
 
    }
    
    
             public function showcatAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcommerceEcommerceBundle:Categories')->findAll();

        return $this->render('EcommerceEcommerceBundle:Default:listca.html.twig', array(
            'entities' => $entities,
        ));
        
 
    }
    
            public function prodshowAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:Produits')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produits entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcommerceBundle:Ecommerce:default/showone.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }
    
    
                public function categorieidAction($categorie)
    {
                $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcommerceEcommerceBundle:Produits')->byCategorie($categorie);

        return $this->render('EcommerceEcommerceBundle:Default:list.html.twig', array(
            'entities' => $entities,
        ));
    }
    
        public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('EcommerceBundle:Categories')->findAll();
        
        return $this->render('EcommerceEcommerceBundle::layout.html.twig', array('categories' => $categories));
    }
    
     
    
    public function rechercheAction() 
    {
        $form = $this->createForm(new RechercheType());
        return $this->render('EcommerceEcommerceBundle:Default:recherche.html.twig', array('form' => $form->createView()));
    }
    
    public function rechercheTraitementAction() 
    {
        $form = $this->createForm(new RechercheType());
        
        if ($this->get('request')->getMethod() == 'POST')
        {
            $form->bind($this->get('request'));
            $em = $this->getDoctrine()->getManager();
            $entities = $em->getRepository('EcommerceEcommerceBundle:Produits')->recherche($form['recherche']->getData());
        } else {
            throw $this->createNotFoundException('La page n\'existe pas.');
        }
        
        return $this->render('EcommerceEcommerceBundle:Default:list.html.twig', array('entities' => $entities));
    }
    
    public function modifierpAction(Request $request, $id) 
    {
         $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceEcommerceBundle:Produits')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produits entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('modifierProduits', array('id' => $id)));
        }

        return $this->render('EcommerceEcommerceBundle:Default:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
        
    }
    
    

    
   private function createEditForm(Produits $entity)
    {
        $form = $this->createForm(new ProduitsType(), $entity);

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('deletep', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
        public function deletepAction($id)
    {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcommerceEcommerceBundle:Produits')->find($id);


            $em->remove($entity);
            $em->flush();
        

        return $this->redirect($this->generateUrl('list_admin'));
    }
            public function deletecAction($id)
    {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcommerceEcommerceBundle:Categories')->find($id);


            $em->remove($entity);
            $em->flush();
        

        return $this->redirect($this->generateUrl('list_adminc'));
    }
    
    
    
    
     public function listpaAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcommerceEcommerceBundle:Produits')->findAll();

        return $this->render('EcommerceEcommerceBundle:Default:listpa.html.twig', array(
            'entities' => $entities,
        ));
        
 
    }
    
    
    
    public function recherchepAction() 
    {
        $form = $this->createForm(new RechercheType());
        return $this->render('EcommerceEcommerceBundle:Default:listpa.html.twig', array('form' => $form->createView()));
    }
    
    public function rechercheTraitementpAction() 
    {
        $form = $this->createForm(new RechercheType());
        
        if ($this->get('request')->getMethod() == 'POST')
        {
            $form->bind($this->get('request'));
            $em = $this->getDoctrine()->getManager();
            $entities = $em->getRepository('EcommerceEcommerceBundle:Produits')->recherche($form['recherche']->getData());
        } else {
            throw $this->createNotFoundException('La page n\'existe pas.');
        }
        
        return $this->render('EcommerceEcommerceBundle:Default:listpa.html.twig', array('entities' => $entities));
    }
    
        public function contactAction() 
    {
   
         return $this->render('EcommerceEcommerceBundle:Default:contact.html.twig');
    }
        public function aboutusAction() 
    {
   
         return $this->render('EcommerceEcommerceBundle:Default:aboutus.html.twig');
    }
      public function adminpAction() 
    {
   
         return $this->render('EcommerceEcommerceBundle:Default:login.html.twig');
    }
      public function topventeacAction($id) 
    {
         $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcommerceEcommerceBundle:Produits')->find($id);
            
        $entity->setTopvente(1);
            $em->persist($entity);
            $em->flush();
        return $this->redirect($this->generateUrl('list_admin'));
    }
    
    
    
          public function topventedecAction($id) 
    {
        $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcommerceEcommerceBundle:Produits')->find($id);
            
        $entity->setTopvente(0);
            $em->persist($entity);
            $em->flush();
        return $this->redirect($this->generateUrl('list_admin'));
    }
    
    
     public function newprodAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcommerceEcommerceBundle:Produits')->findBy(array(), null, 4, null);;

        return $this->render('EcommerceEcommerceBundle:Default:one_prod_home.html.twig', array(
            'entities' => $entities,
        ));
        
 
    }
    
    
         public function topventeAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcommerceEcommerceBundle:Produits')->byTopvente();

        return $this->render('EcommerceEcommerceBundle:Default:one_prod_home.html.twig', array(
            'entities' => $entities,
        ));
        
 
    }
    
    
    
    
       }
    


    
    
    
    
    
    
    
    
    
    
