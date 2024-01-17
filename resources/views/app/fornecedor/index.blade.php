<h3>Fornecedor</h3>

<p>Isso aqui @< ?php echo 'teste' ; ?>
        é a mesma coisa que isso aqui @{{ echo 'teste' }}</p>

@php
    // Fica aqui o PHP
@endphp

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif (count($fornecedores) > 10)
    <h3>Existem muitos fornecedores cadastrados</h3>
@else
    <h3>Não existem fornecedores cadastrados</h3>
@endif
