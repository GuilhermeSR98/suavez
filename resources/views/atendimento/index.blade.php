<x-wrapper title="Sua Vez">
    <div class="general-content d-flex flex-column align-items-center vh-100 mt-5">
        <div class="header d-flex flex-column align-items-center mb-5">
            <img src="{{ URL('storage/assets/images/logo.svg') }}" alt="Logo cabeçalho Adoorei">
            <h1>Sua vez</h1>
        </div>
        <div class="proximoAtendimento">
            <span>{{$atendentes[$controleAtendente->indice_proximo]->nome}} será o próximo a pegar o chat</span>
            <span>Último chat pego por {{$atendentes[$controleAtendente->indice_atual]->nome}} às {{$controleAtendente->updated_at}}</span>
        </div>
        <div class="btn">
            <a class="btn btn-primary m-3" href="{{ route('atendente.peguei') }}">Peguei</a>
            <a class="btn btn-primary m-3" href="{{ route('atendente.index') }}">Atendentes</a>
        </div>
    </div>
</x-wrapper>