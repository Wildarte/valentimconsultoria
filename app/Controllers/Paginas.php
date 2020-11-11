<?php

class Paginas extends Controller {

    public function index(){
        $dados = [
            'tituloPagina' => 'Página Inicial'
        ];

        $this->view('paginas/home', $dados);
    }

    public function sobre(){
        $dados = [
            'tituloPagina' => APP_NOME
        ];

        $this->view('paginas/sobre', $dados);
    }

    public function empresa(){
        $this->view('paginas/empresa');
    }

    public function servicos(){
        $this->view('paginas/servicos');
    }
    
    public function blog(){
        $this->view('paginas/blog');
    }

    public function cursos(){
        $this->view('paginas/cursos');
    }

    public function links(){
        $this->view('paginas/links');
    }

    public function contato(){
        $this->view('paginas/contato');
    }
}