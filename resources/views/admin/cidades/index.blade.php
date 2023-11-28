    @extends("admin.layouts.principal")

@section("conteudo-principal")


    <section class="section">

        <table class="highlight">

            <thead>

                <tr>
                    <th>Cidades</th>
                    <th class="right-align">Opções</th>
                </tr>

            </thead>

            <tbody>
                @forelse($cidades as $cidade)
                    <tr>
                        <td>{{$cidade->nome}}</td>
                        <td class="right-align">

                        <a href="{{route('admin.cidades.formEditar' , $cidade->id)}}">
                            
                                <span>
                                    <i class="material-icons green-text text-lighten-1">edit</i>
                                </span>
                            </button>

                            <form action="{{ route('admin.cidades.deletar', $cidade->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')

                                <button style="border:0;background:transparent" type="submit">
                                    <span>
                                        <i class="material-icons red-text text-accent-3">delete_forever</i>
                                    </span>
                                </button>
                            </form>

                        </td>
                    </tr>
                @empty

                    <tr>
                        <td colspan="2">Não existem cidades cadastradas</td>
                    </tr>

                @endforelse

            </tbody>

        </table>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{route('admin.cidades.form')}}">
                <i class="large material-icons">add</i>
            </a>
        </div>

     
    </section>

@endsection


