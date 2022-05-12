<?php

class Pessoa{

    //atributos
    private $nome;
    private $idade;
    private $sexo;
    private $estado;
    private $cidade;
    

    //métodos
    public function correr(){
        return "está correndo";
    }

    public function andar(){
        if (strtoupper($this->nome[0])=="V") {
            return $this->nome . "vc pode correr";
        }else{
            return $this->nome . "vc não pode correr";

        }
    }

    // protecao de atributos na classe com GET/SET
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
   

}

$p1 = new Pessoa();
$p1->setNome("Lenito");
$p1->setIdade(23);
$p1->setSexo("M");
$p1->setCidade("Caxias");
$p1->setEstado("RJ");
echo $p1->getNome() ."<br />". $p1->getIdade() ."<br />". $p1->getSexo() ."<br />". $p1->getCidade() ."<br />". $p1->getEstado()."<br />";
echo $p1->andar();

//comando muito usado no debug
//    $var1 = 'lenito';
//    echo $var1;
//    echo "<br />";
//    die("die");

?>