@extends("admin.layouts.principal")

@section("conteudo-principal")


    <section class="section">

        <table class="highlight">

            <thead>

                <tr>
                    <th>Cidades</th>
                    <th class="right-light">Opções</th>
                </tr>

            </thead>

            <tbody>
                @forelse ($cidades as $cidade)
                   <tr>
                        <td>{{$cidade->nome}}</td>
                        <td class="right-align">Excluir - Remover </td>

                @empty
                <tr>
                    <td colspan="2">Não existem cidades cadastradas</td>
                </tr>

                @endforelse

            </tbody>

        </table>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{route('admin.cidades.create')}}">
                <i class="large material-icons">add</i>
            </a>
        </div>

    </section>

@endsection


