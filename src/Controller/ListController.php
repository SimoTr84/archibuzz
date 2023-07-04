<?php

	namespace App\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing\Annotation\Route;
	use function Symfony\Component\String\u;

	class ListController extends AbstractController
	{
		#[Route('/')]
		public function homepage(): Response
		{
//			return new Response('New Content');
			return $this->render('list/homepage.html.twig', [

			]);
		}

//		#[Route('/list-item/{slug}')]
//		public function listItem($slug): Response
//		{
//			return new Response('Genre: '.$slug);
//		}
	}