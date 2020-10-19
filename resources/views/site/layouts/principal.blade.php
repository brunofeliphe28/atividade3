@include('site.layouts.header')

@include('site.layouts.menu')

<div class="container">

    <div class="mt-3">
        <h3>
            @yield('titulo')
            <small class="text-muted">@yield('acao')</small>
        </h3>
    </div>

    {{-- Abaixo vamos colocar a parte principal que mudará para cada view --}}
    {{-- O yeild define uma área onde será inserido uma seção com conteudo dinamico --}}
    @yield('conteudo-principal')


</div> {{-- Container --}}

@include('site.layouts.footer')
