<?php

class Livro {
    private $livros;

    public function __construct() {
        $this->livros = [
            ['titulo' => 'Dom Casmurro', 'autor' => 'Machado de Assis', 'ano' => 1899],
            ['titulo' => 'O Pequeno Príncipe', 'autor' => 'Antoine de Saint-Exupéry', 'ano' => 1943],
            ['titulo' => 'O amor não é óbvio', 'autor' => 'Elayne Baeta', 'ano' => 2019],
            ['titulo' => 'Crime e Castigo', 'autor' => 'Fiódor Dostoiévski', 'ano' => 1866],
            ['titulo' => 'Metamorfose', 'autor' => 'Franz Kafka', 'ano' => 1915],
        ];
    }

    public function listarLivros() {
        return $this->livros;
    }
}
?>
