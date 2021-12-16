<?php

namespace App\Controller;

use App\Repository\TPContactRepository;
use App\Entity\TPContact;
use App\Form\AjoutContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TpController extends AbstractController
{

    private $tpContactRepository;
    public function __construct(TPContactRepository $tpContactRepository)
    {
        $this->tpContactRepository = $tpContactRepository;    
    }
    /**
     * @Route("/tp", name="tp")
     */
    public function tp(Request $request): Response
    {
        $tpcontact = new TPContact();
        $form = $this->createForm(AjoutContactType::class, $tpcontact);
        $form->handleRequest($request);

        dump($form->getViewData());

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($form->getData());
            $entityManager->flush();
            $TpContact = $form->getData();

            return $this->redirectToRoute('tpSendOk');

        }


        return $this->renderForm('tp/index.html.twig', [
            'controller_name' => 'TP - PHP Symfony',
            'form' => $form,
            'tpContacts' => $this->tpContactRepository->findAll()
        ]);
    }

    /**
     * @Route("/tp/sendOk", name="tpSendOk")
     */
    public function tpSendOk(): Response
    {
        return $this->render('tp/sendOK.html.twig', [
            'controller_name' => 'Validé'
        ]);
    }

    
    /**
     * @Route("/tp/detail/{id}", name="detailTpContact")
     */
    public function detailTpContact(Request $request, String $id = ""): Response
    {
        $detailContactId = $request->get('id');

        return $this->render('tp/DetailsTpContact.html.twig', [
            'controller_name' => 'Contact actuel : ',
            'detailContact' => $this->tpContactRepository->find($detailContactId)
        ]);
    }


    }

