<?php

namespace App\Controller;

use App\Entity\Todo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TodoController extends AbstractController {
    #[Route('/', name: 'home')]
    public function index(): Response {
        return $this->render('todo/index.html.twig', [
            'controller_name' => 'TodoController',
        ]);
    }

    #[Route('/todos', name: 'todos')]
    public function todos(): Response {
        return $this->render('todo/todos.html.twig', [
            'controller_name' => 'TodoController',
            'todos' => Todo::createTodo()
        ]);
    }

    #[Route('/todos/{id}', name: 'todo')]
    public function todo($id): Response {
        Todo::createTodo();
        return $this->render('todo/todo.html.twig', [
            'controller_name' => 'TodoController',
            'todo' => Todo::getTodo($id)
        ]);
    }
}
