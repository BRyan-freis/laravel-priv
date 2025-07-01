<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Conexus</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">

      {{-- Mensagem de sucesso --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Mensagens de erro de validação --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="form-container">
            <h1 class="logo">c<span class="logo-o">o</span>nexus</h1>
            <h2>Crie sua conta</h2>
            <p>Junte-se à nossa comunidade para compartilhar experiências.</p>
            <form action="{{ route('usuarios.store') }}" method="POST">
                 @csrf {{-- Diretiva do Blade para proteção CSRF - MUITO IMPORTANTE! --}}
                <div class="input-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
                    @error('nome')
                    <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf" inputmode="numeric" pattern="[0-9]{11}" title="Digite apenas os 11 números do seu CPF" placeholder="Apenas números" required>
                    @error('cpf')
                    <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" name="telefone" inputmode="numeric" pattern="[0-9]*" title="Digite apenas números" placeholder="Apenas números" required>
                    @error('telefone')
                    <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="seu.email@exemplo.com" required>
                    @error('email')
                    <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Crie uma senha segura" required>
                    @error('senha')
                    <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="termos" name="termos" required>
                    <label for="termos">Eu li e concordo com os <a href="/termos-de-servico" target="_blank">Termos de Serviço</a>.</label>
                </div>

                <button type="submit" class="submit-btn">Cadastrar</button>
            </form>
             <p class="login-link">Já tem uma conta? <a href="/login">Faça login</a></p>
        </div>
    </div>
</body>
</html>