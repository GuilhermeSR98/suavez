<x-wrapper title="Sua Vez">
    <div class="d-flex flex-column align-items-center vh-100 mt-5">
        <h1>Lista de atendentes</h1>
        <ul class="list-group w-25 mt-5 border border-light">
            <div class="elevation rounded" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transition: box-shadow 0.3s ease-in-out;">
                @foreach($atendentes as $atendente)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $atendente->nome }}
                    <div class="d-flex">
                        @if($atendentes->count() > 2)
                        <form action="{{ route('atendente.destroy', $atendente->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger d-flex p-2 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg>
                            </button>
                        </form>
                        @endif
                    </div>
                </li>
                @endforeach
            </div>
        </ul>
        <div class="d-flex mt-5">
            <a class="btn btn-primary me-2" href="{{ route('home') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                </svg>
            </a>
            <a class="btn btn-success" href="{{ route('atendente.create') }}">
                Cadastrar Novo
            </a>
        </div>
    </div>
</x-wrapper>