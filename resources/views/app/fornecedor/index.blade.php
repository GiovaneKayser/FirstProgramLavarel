<h3>Fornecedor</h3>

@php
    // if(){

    // }elseif(){

    // }else{

    // }
@endphp

@dd($fornecedores)
@if(count($fornecedores) > 0 && count($fornecedores) < 10)
<h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
<h3>Existem varios fornecedores cadastrados</h3>
@else
<h3>Não existem fornecedores cadastrados</h3>
@endif
