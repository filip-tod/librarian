<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\BorrowingRepository;

class ReportController extends AbstractController
{
    #[Route('/most-popular-books', name: 'most_popular_books')]
    public function index(BorrowingRepository $repository): Response
    {

        $books = $repository->findMostPopularBooks();

        return $this->render('report/index.html.twig', [
            'books' => $books,
        ]);
    }
}
