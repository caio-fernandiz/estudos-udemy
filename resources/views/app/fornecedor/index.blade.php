<h3>Fornecedores!!!!!!!</h3>

{{-- comentário --}}

{{ 'FomatoTXT1' }}
<?= 'FormatoTXT2' ?>
{!! 'FormatoTXT3' !!}

@php

    // if(){

    // } elseif(){

    // } else{

    // }
    

@endphp 



{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10 )
    <h3> Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) >= 10)
    <h3> Existem muitos fornecedores cadastrados</h3>
@else
    <h3> Não existem fornecedores cadastrados</h3>
@endif --}}


{{-- <br>
<br>
Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status:{{ $fornecedores[0]['status'] }}

@if( !($fornecedores[01]['status'] == 'S') )
    Fornecedor inativo
@endif    

@unless ($fornecedores[0]['status'] == 'S')
    Fornecedor inativo
@endunless --}}

<br>
<br>

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[2]['nome'] }}
    <br>
    Sta tus:{{ $fornecedores[2]['status'] }}
    <br>
    CNPJ:{{ $fornecedores[2]['cnpj'] ?? 'CNPJ não informado' }}
    <br>
    Telefone:({{ $fornecedores[1]['ddd'] ?? 'ddd não informado' }}) {{ $fornecedores[1]['telefone'] ?? 'telefone não informado' }}
    @switch($fornecedores[2]['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('47')
            Santa Catarina - SC
            @break
        @default
        Estado não identificado	
            
    @endswitch
@endisset

{{-- @isset($fornecedores)
Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status:{{ $fornecedores[0]['status'] }}
<br>
    @isset($fornecedores[0]['cnpj'])
    CNPJ:{{ $fornecedores[0]['cnpj'] }}
    @empty($fornecedores[0]['cnpj'])
        -cnpj vazio 
    @endempty
    @endisset
@endisset

<br>
<br>
@isset($fornecedores)
Fornecedor: {{ $fornecedores[1]['nome'] }}
<br>
Status:{{ $fornecedores[1]['status'] }}
<br>
    @isset($fornecedores[1]['cnpj'])
    CNPJ:{{ $fornecedores[1]['cnpj'] }}
    @empty($fornecedores[1]['cnpj'])
        -cnpj vazio 
    @endempty
    @endisset
@endisset --}}
