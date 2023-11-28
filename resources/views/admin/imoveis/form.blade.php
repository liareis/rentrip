@extends ('admin.layouts.principal')

@section ('conteudo-principal')

<section class="section">

    <form action='{{$action}}' method="POST">
    @csrf

        {{--TITULO--}}

    <div class="input-field">

            <input type="text" name="titulo" id="titulo"/>
            <label for="titulo">Título</label>
           
    </div>

      {{--CIDADE--}}

      <div class="input-field">

            <input type="text" name="cidade" id="cidade">
            <select name="cidade_id" id="">
                <option value="" disabled>Selecione uma cidade</option>
            </select>
<           

        </div>


    </form>
</section>


@endsection