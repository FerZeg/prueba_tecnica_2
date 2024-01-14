<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SeriesController extends AbstractController
{

    #[Route('/series', name: 'app_series', methods: ['GET'])]
    public function index(Request $request): JsonResponse
    {
        $año = $request->query->get('año');
        $creador = $request->query->get('creador');
        // $repository = código para obtener el repositorio
        // $series = $repository->findBy(['año' => $año, 'creador' => $creador]);
        $series = ["serie1", "serie2", "serie3"];
        return $this->json(["filtro" => ["año" => $año, "creador" => $creador], "series" => $series]);
    }
}
