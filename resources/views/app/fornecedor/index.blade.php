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
{{-- 
@isset($fornecedores)
    @for($i = 0; isset($fornecedores[$i]); $i++)    
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status:{{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ:{{ $fornecedores[$i]['cnpj'] ?? 'CNPJ não informado' }}
        <br>
        Telefone:({{ $fornecedores[$i]['ddd'] ?? 'ddd não informado' }}) {{ $fornecedores[$i]['telefone'] ?? 'telefone não informado' }}
        @switch($fornecedores[$i]['ddd'])
            @case('11')
                São Paulo - SP
                @break
            @case('47')
                Santa Catarina - SC
                @break
            @default
            Estado não identificado	
        @endswitch

        <hr>
    @endfor
@endisset --}}

{{-- @isset($fornecedores)
    @php $i = 0 @endphp
    @while (isset($fornecedores[$i]))
        
        
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status:{{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ:{{ $fornecedores[$i]['cnpj'] ?? 'CNPJ não informado' }}
        <br>
        Telefone:({{ $fornecedores[$i]['ddd'] ?? 'ddd não informado' }}) {{ $fornecedores[$i]['telefone'] ?? 'telefone não informado' }}
        @switch($fornecedores[$i]['ddd'])
            @case('11')
                São Paulo - SP
                @break
            @case('47')
                Santa Catarina - SC
                @break
            @default
            Estado não identificado	
        @endswitch

        <hr>
        @php $i++ @endphp
    @endwhile
@endisset
 --}}
{{-- 
 @isset($fornecedores)
        
    @foreach ($fornecedores as $i => $fornecedor)
        
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status:{{ $fornecedor['status'] }}
        <br>
        CNPJ:{{ $fornecedor['cnpj'] ?? 'CNPJ não informado' }}
        <br>
        Telefone:({{ $fornecedor['ddd'] ?? 'ddd não informado' }}) {{ $fornecedor['telefone'] ?? 'telefone não informado' }}
        @switch($fornecedor['ddd'])
            @case('11')
                São Paulo - SP
                @break
            @case('47')
                Santa Catarina - SC
                @break
            @default
            Estado não identificado	
        @endswitch

        <hr>
    @endforeach 
@endisset --}}

@isset($fornecedores)
        
    @forelse ($fornecedores as $i => $fornecedor)
        
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status:{{ $fornecedor['status'] }}
        <br>
        CNPJ:{{ $fornecedor['cnpj'] ?? 'CNPJ não informado' }}
        <br>
        Telefone:({{ $fornecedor['ddd'] ?? 'ddd não informado' }}) {{ $fornecedor['telefone'] ?? 'telefone não informado' }}
        @switch($fornecedor['ddd'])
            @case('11')
                São Paulo - SP
                @break
            @case('47')
                Santa Catarina - SC
                @break
            @default
            Estado não identificado	
        @endswitch

        <hr>
        @empty
        Não existem fornecedores cadastrados
        
    @endforelse
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
