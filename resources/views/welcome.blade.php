@extends('Layout.principal')
@section('conteudo')

<div class="title"> 
	<pre style="background:Black; color: white;"> 
	<blockquote><cite>{{ $versiculo->getPalavra() }}</cite></blockquote>
	{{$versiculo->getLivro() }} {{ $versiculo->getCapitulo()}}:{{ $versiculo->getVersiculo() }}
	</pre>
</div> 


@stop