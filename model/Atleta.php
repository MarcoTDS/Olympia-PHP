<?php

class Atleta{
    private $id;
    private $nome;
    private $idade;
    private $peso;
    private $altura;
    private $gorduraCorp;
    private $categoria;

    public function __construct($id=0, $nome='', $idade=0, $peso=0, $altura=0, $gorduraCorp=0, $categoria=''){
        $this->id = $id;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->gorduraCorp = $gorduraCorp;  
        $this->categoria = $categoria;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;

        return $this;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;

        return $this;
    }
 
    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;

        return $this;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of altura
     */ 
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     *
     * @return  self
     */ 
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get the value of gorduraCorp
     */ 
    public function getGorduraCorp()
    {
        return $this->gorduraCorp;
    }

    /**
     * Set the value of gorduraCorp
     *
     * @return  self
     */ 
    public function setGorduraCorp($gorduraCorp)
    {
        $this->gorduraCorp = $gorduraCorp;

        return $this;
    }

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }
}