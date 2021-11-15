<?php

namespace App\Controller\Admin\Client;

use App\Entity\Client;
use App\Entity\ExternalApiConfig;
use App\Form\ExternalApiConfigType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientApiEditController extends AbstractController
{
    #[Route('/admin/client/{client}/api/edit', name: 'admin_client_api_edit')]
    public function show(
        Client $client,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $externalApiConfig = $client->getExternalApiConfig()
            ? $client->getExternalApiConfig()
            : (new ExternalApiConfig())->setClient($client);
        $externalApiConfigForm = $this->createForm(ExternalApiConfigType::class, $externalApiConfig);
        $externalApiConfigForm->handleRequest($request);

        if ($externalApiConfigForm->isSubmitted() && $externalApiConfigForm->isValid()) {
            $em->persist($externalApiConfig);
            $em->flush();

            return $this->redirectToRoute('admin_client_show', ['client' => $client->getId()]);
        }

        return $this->render('admin/client/api_edit.html.twig', [
            'client' => $client,
            'externalApiConfigFormView' => $externalApiConfigForm->createView(),
        ]);
    }
}