<x-app-layout>

    <h5>Novo Cliente</h5>

    <form action="/cliente" method="POST">
        @CSRF
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o Cliente:</label>
                <input type="text" name="nome" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="email" class="form-label">Informe o e-mail do Cliente:</label>
                <input type="text" name="email" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="telefone" class="form-label">Informe o telefone Cliente:</label>
                <input type="text" name="telefone" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Salvar
                </button>
            </div>
        </div>
    </form>

</x-app-layout>