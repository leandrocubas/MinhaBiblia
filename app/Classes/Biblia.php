<?php

namespace App\Classes;
/**
*
*/
class Biblia
{
	private $capitulo;
	private $versiculo;
	private $livro;
	private $palavra;
	private $teste;



	function __construct($c, $v, $l)
	{
		$this->capitulo=$c;
		$this->versiculo=$v;
		$this->livro=$l;
	}


		// Getter and setter for $this->versiculo
	public function getVersiculo()
	{
	    return $this->versiculo;
	}
	public function setVersiculo($versiculo)
	{
	    $this->versiculo = $versiculo;
	    return $this;
	}

	// Getter and setter for $this->capitulo
	public function getCapitulo()
	{
	    return $this->capitulo;
	}
	public function setCapitulo($capitulo)
	{
	    $this->capitulo = $capitulo;
	    return $this;
	}

	// Getter and setter for $this->livro
	public function getLivro()
	{
	    return $this->livro;
	}
	public function setLivro($livro)
	{
	    $this->livro = $livro;
	    return $this;
	}

	// Getter and setter for $this->palavra
	public function getPalavra()
	{
	    return $this->palavra;
	}
	public function setPalavra($palavra)
	{
	    $this->palavra = $palavra;
	    return $this;
	}


}
