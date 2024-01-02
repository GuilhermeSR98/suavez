<x-wrapper title="Sua Vez">
    <form action="{{ route('atendente.store') }}" method="POST">
        @csrf
        <div class="my-5 d-flex justify-content-center">
            <div class="card">
                <div class="card-body d-flex justify-content-center flex-column rounded" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: box-shadow 0.3s ease-in-out;">
                    <label for="name" class="form-label">Nome do Atendente: </label>
                    <input autofocus type="text" class="form-control" id="nome" name="nome">
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-primary" href="{{ route('atendente.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                            </svg>
                        </a>
                        <button type="submit" class="btn btn-success ms-3">Cadastrar</button>
                    </div>
                </div>
            </div>
        </div>

    </form>

</x-wrapper>