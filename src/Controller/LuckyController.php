<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use App\DDD\Application\Service\find\CursoFinder;
use App\DDD\Application\Service\find\CursoFinderQuery;
use App\DDD\Domain\Exceptions\CannotFindCursoException;
use App\DDD\Infrastructure\CursoRepoORM;
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
        try {
            //retorna el nombre del curso 1
            return new JsonResponse(
                (new CursoFinder(
                    new CursoRepoORM($this->getDoctrine()->getRepository(\App\Entity\Curso::class))
//                    new CursoRepoFake()
                ))(new CursoFinderQuery(1))->nombreCurso()->value()
            );
        } catch (CannotFindCursoException $e) {
            return new JsonResponse($e->getMessage());
        } catch (\Exception $exception) {
            return new JsonResponse('unknown exception maikel');
        }
    }
}