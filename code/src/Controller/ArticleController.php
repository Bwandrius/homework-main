<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleFormTYpe;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/article/{id}/edit', name: 'article_edit')]
    public function edit(Article $article, Request $request, EntityManagerInterface $em): Response
    {
//        $repository = $em->getRepository(Article::class);
//        $article = $repository->find($id);
//        dd($article);

        $form = $this->createForm(ArticleFormTYpe::class, $article);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            /** @var Article $article */
            $article = $form->getData();

            $em->persist($article);
            $em->flush();

            $this->addFlash('success', 'Success');
            return $this->redirectToRoute('home');
        }
        return $this->render('pages/article_edit.html.twig', [
            'articleForm' => $form->createView()
        ]);
    }
}
