@extends ('admin.layouts.principal')

@section ('conteudo-principal')

<section class="section">

    <form action='{{$action}}' method="POST">
    @csrf

    
    {{-- Titulo --}}

        <div class="input-field">

            <input type="text" name="titulo" id="titulo"/>
            <label for="titulo">Título</label>

        </div>

        {{-- Cidade --}}

        <div class="input-field">

            <select name='cidade_id' id='cidade_id'>
                <option value="" disabled selected>Selecione uma cidade</option>
            
                @foreach ($cidade as $cidade)
                <option value="{{$cidade->id}}">{{$cidade->nome}} </option>
                @endforeach

            </select>

            ><label for="cidade_id">Cidade</label>

        </div>
        

    </form>

</section>

@endsection