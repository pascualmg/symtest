<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use App\DDD\Application\Service\create\CursoCreator;
use App\DDD\Application\Service\create\CursoCreatorCmd;
use App\DDD\Application\Service\find\CursoFinder;
use App\DDD\Application\Service\find\CursoFinderQuery;
use App\DDD\Infrastructure\doctrineCursoRepo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;


class LuckyController extends AbstractController
{
    public function number(): Response
    {
        try {
            $number = random_int(0, 100);
        } catch (\Exception $e) {
            $number = 42;
        }

        return new Response(
            '<html lang="es"><body>Lucky number: ' . $number . '</body></html>'
        );
    }

    public function foo(): JsonResponse
    {
            (new CursoCreator(
                new doctrineCursoRepo($this->getDoctrine())
            ))(new CursoCreatorCmd('cursete'));


            //retorna el nombre del curso 1
            return new JsonResponse(
                (new CursoFinder(
                    new doctrineCursoRepo($this->getDoctrine())
//                    new CursoRepoFake()
                ))(new CursoFinderQuery(1))->nombreCurso()->value()
            );
        }
}