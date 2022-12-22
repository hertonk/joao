<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intermed Sertão - Inscrição</title>
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/style.css">
</head>
<body class="bg-login">
    <div class="content">
        <h1>Intermed Sertão<p> Login Administrativo</p>
        </h1>
        <form method="POST" id="form" action="{{ route('login') }}">
            @csrf
            <div>
            <input id="email" type="email" placeholder="Digite seu email" class="inputs required @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <span class="span-required">Digite um Email válido</span>
                </span>
            @enderror
            </div>
            <div>
                <input id="password" type="password" placeholder="Digite sua senha" class="inputs required @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <span class="span-required">senha incorreta</span>
                </span>
            @enderror
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    Lembrar de mim
                </label>
            </div>
            <div>
            </div>
            <button type="submit">LOGIN</button>
        </form>
    </div>

</div>
</body>
</html>
