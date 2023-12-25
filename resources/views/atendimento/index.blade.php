<x-wrapper title="Sua Vez">
    <div class="general-content d-flex flex-column align-items-center vh-100 mt-5">
        <div class="header d-flex flex-column align-items-center mb-5">
            <div class="border border-dark border-3 rounded-circle p-4">
                <img src="{{ URL('storage/assets/images/logo.svg') }}" alt="Logo cabeçalho Adoorei">
            </div>
            <h1 class="mt-4">Sua vez!</h1>
        </div>
        <div class="registro-atendimento p-4 w-50 rounded d-flex flex-column align-items-center border border-light" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transition: box-shadow 0.3s ease-in-out;">
            <div class="proximo-atendente">
                <h2>Próximo a pegar o chat: <strong>{{$atendentes[$controleAtendente->indice_proximo]->nome}}</strong></h2>
            </div>
            <div class="ultimo-atendente mt-3">
                <span class="text-muted">
                    Último chat pego por {{$atendentes[$controleAtendente->indice_atual]->nome}} às {{ $controleAtendente->updated_at->setTimezone('America/Sao_Paulo')->toTimeString() }}
                </span>

            </div>
        </div>
        <div class="mt-3">
            <a class="btn btn-primary m-3" href="{{ route('atendente.peguei') }}">Peguei</a>
            <a class="btn btn-secondary m-3" href="{{ route('atendente.index') }}">Atendentes</a>
        </div>
    </div>
</x-wrapper>