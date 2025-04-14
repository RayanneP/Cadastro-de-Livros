<?php

require_once 'Livro.php';
require_once 'livrosView.php';

class LivroController {
    private $model;

    public function __construct() {
        $this->model = new Livro();
    }

    public function listarLivros() {
        $livros = $this->model->listarLivros();
        exibirLivros($livros);
    }
}
?>
