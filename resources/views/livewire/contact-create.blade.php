    <div class="posicao">
        <div class="box-formulario">
            <div class="titulo">
                <h1>Criar Contato</h1>
            </div>
            <div class="formulario">
                <form wire:submit.prevent="create" method="post">
                    <div class="div-input">
                        <div class="posicao-formulario">
                            <label for="">Nome</label>
                            <input type="text" wire:model="name" />
                        </div>
                        <div class="error-message">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="div-input">
                        <div class="posicao-formulario">
                            <label for="">E-mail</label>
                            <input type="email" wire:model="email" />
                        </div>
                        <div class="error-message">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="div-input">
                        <div class="posicao-formulario">
                            <label for="">Telefone</label>
                            <input type="text" wire:model="phone" />
                        </div>
                        <div class="error-message">
                            @error('phone')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="botao">
                        <button type="submit">
                            Adicionar Contato
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
