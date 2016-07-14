<?php
/********************************************************
** GERADOR DE BIBLIA V 1.0 POR LEANDRO CUBAS DE MACEDO **
**	02 DE JULHO DE 2016								   **
**    												   **
** "SE DEUS É POR NÓS QUEM SERÁ CONTRA NÓS"            **
********************************************************/

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use Illuminate\Http\ProdutosRequest;
use Illuminate\Support\Facades\Validator;
use App\Classes\Biblia; // IMPORTAR A CLASSE BIBLIA PARA UTILIZARMOS

class WelcomeController extends Controller
{
	private $arquivo = "../resources/bibliaJson/teste.json";
	private $lendo; //SALVO O CONTEUDO DA BIBLIA JSON NESTA VARIAVEL
	private $book; // LIVRO DA BIBLIA SORTEADO JUNTAMENTE COM TODOS SEUS CAPITULOS
	private $capitulo; // CAPITULO JUNTAMENTE COM SEUS VERSICULOS
	private $versiculo; // VERSICULO SORTEADO
	private $biblia; // OBJETO DA CLASSE BIBLIA QUE CONTERÁ O NUMERO DOS CAPITULOS E VERSICULOS E A PALAVRA.

    private function geraBiblia(){
    	$info = file_get_contents($this->arquivo);
		$this->lendo = json_decode($info);
	 	$this->biblia = new Biblia('','','');
	 	$this->geraLivro(); //DOU INICIO AO METODO QUE DESENCADEARA A PALAVRA FINAL
 		}

//METODO QUE INICIA VINDO DAS ROTAS
 	public function mostra(){
 		$this->geraBiblia(); //CHAMO A FUNCAO PARA GERAR A BIBLIA TODA
 		 return view('welcome')->with('versiculo', $this->biblia);
	}

	public function geraLivro(){
			$rand=rand(0,65); // SORTEIO UM LIVRO ENTRE 0 E 60
			if(isset($this->lendo->biblia[$rand]->book) or $this->lendo->biblia[$rand]->book <> null){//LIVRO EXISTE
				$this->book= $this->lendo->biblia[$rand]; // SALVRO O LIVRO INTEIRO NA VARIAVEL GLOBAL
				$this->biblia->setLivro($this->lendo->biblia[$rand]->book);//SALVO O LIVRO NO OBJETO BIBLIA
				$this->geraCapitulo(); // CHAMAMOS O METODO PARA GERAR O CAPITULO JA QUE ATE AQUI DEU TUDO OK
			}else // SE O LIVRO NAO EXISTE EU SORTEIO OUTRO RECURSIVAMENTE
			$this->geraLivro();
	}

	public function geraCapitulo(){
		$rand= rand(0,150); // SORTEIO UM CAPITULO ENTRE 0 E 150
		$c=$rand+1; // PRECISO ADICIONAR MAIS UM NO CAPITULO SORTEADO PARA PEGAR O CONTEUDO DENTRO DELE POIS É UM ARRAY
			if(isset($this->book->chapters[$rand]->$c)){// VALIDO SE NO LIVRO EXISTE O CAPITULO SORTEADO
				$this->capitulo= $this->book->chapters[$rand]->$c; // SALVO O CAPITULO TODO NA VARIAVEL GLOBAL
				$this->biblia->setCapitulo($rand+1); // SALVO O NUMERO DO CAPITULO NO OBJETO BIBLIA
				$this->geraVersiculo(); // SE ATE AQUI DEU TUDO CERTO, ENTAO VAMOS GERAR O VERSICULO
			}else
				$this->geraCapitulo();// SE O CAPITULO GERADO NAO EXISTIR NESTE LIVRO DA BIBLIA, SORTEIO OUTRO RECURSIVAMENTE
	}

	public function geraVersiculo(){
		$rand = rand(0,176);// SORTEIO DO VERSICULO ENTRE 0 E 176 POIS O CAPITULO QUE CONTEM MAIS VERSICULOS POSSUI 176
		if (isset($this->capitulo->$rand)) { // SE O VERSICULO EXISTIR NESTE CAPITULO PROSSEGUIMOS
			$this->biblia->setVersiculo($rand); // SALVAMOS O VERSICULO NO OBJETO BIBLIA
			$this->versiculo=$this->capitulo->$rand; // SALVAMOS O VERSICULO NA VARIAVEL GLOBAL
			$this->biblia->setPalavra($this->capitulo->$rand); // SALVAMOS A PALAVRA DO VERSICULO NO OBJETO BIBLIA
			return; // RETORNAMOS A FUNCAO PARA O ESCOPO ONDE FOI CHAMADA O GERALIVRO()
		}else
		$this->geraVersiculo(); // CASO O VERSICULO SORTEADO NÃO EXISTA, ENTAO GERAREMOS OUTRO RECURSIVAMENTE.
	}


}
