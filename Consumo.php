<?php

class Consumo{

	//atributos
	private $distancia;
	private $consumo;

	//construtor
	public function __construct(){
		
	}

	//métodos get e set

	public function getDistancia(){
		return $this->distancia;
	}

	public function setDistancia($distancia){
		$this->distancia = $distancia;
	}

	public function getConsumo(){
		return $this->consumo;
	}

	public function setConsumo($consumo){
		$this->consumo = $consumo;
	}

	//Função retorna custo médio combustível
	public function consumoMedio(){
		return $this->distancia / $this->consumo;
	}

}