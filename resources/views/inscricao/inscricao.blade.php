<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intermed Sertão - Inscrição</title>
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/style.css">
</head>
<body class="bg">
<div class="container-center" >
    <div class="content">
        <h1>Intermed Sertão - Inscrição</h1>
        <form action="/store" method="post" id="form" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="text" placeholder="Digite seu nome" name="name" class="inputs required" oninput="nameValidate()">
                {{-- <span class="span-required">Nome deve ter no mínimo 3 caracteres</span> --}}
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <span class="span-required">{{ $message }}</span>
                </span>
            @enderror
            </div>
            <div>
                <input type="text" placeholder="Digite seu CPF" name="cpf"  id='cpf' class="inputs required"  oninput="numberValidate()">
                @error('cpf')
                <span class="invalid-feedback" role="alert">
                    <span class="span-required">{{ $message }}</span>
                </span>
            @enderror
            </div>
            <div>
                <input type="date" placeholder="data" name="birthday" class="inputs required" oninput="dateValidate()">
                @error('birthday')
                <span class="invalid-feedback" role="alert">
                    <span class="span-required">{{ $message }}</span>
                </span>
            @enderror
            </div>
            <div>
                <input type="tel"  name="whatsapp" id="whatsapp" placeholder="Adicione seu telefone (whatsapp)" class="inputs required" oninput="telValidate()">
                @error('whatsapp')
                <span class="invalid-feedback" role="alert">
                    <span class="span-required">{{ $message }}</span>
                </span>
            @enderror
            </div>
            <div>
                <input type="tel" name="emergency" placeholder="Adicione seu telefone de emergência" class="inputs required" pattern="\(\d{2,}\) \d{4,}\-\d{4}" oninput="telValidate()">
                @error('emergency')
                <span class="invalid-feedback" role="alert">
                    <span class="span-required">{{ $message }}</span>
                </span>
            @enderror
            </div>
            <div>
                <input type="text" name="address" placeholder="Digite seu endereço" class="inputs required" oninput="nameValidate()">
                @error('address')
                <span class="invalid-feedback" role="alert">
                    <span class="span-required">{{ $message }}</span>
                </span>
            @enderror
            </div>
            <div>
                <input type="text" name="instagram" placeholder="Digite seu Instagram" class="inputs required" oninput="nameValidate()">
                @error('instagram')
                <span class="invalid-feedback" role="alert">
                    <span class="span-required">{{ $message }}</span>
                </span>
            @enderror
            </div>
            <div class="d-flex-files">
                <div>
                    <p>Anexe sua matrícula</p><br>
                        <input type="file" name="registration" placeholder="Anexe sua matrícula" class="inputs required" oninput="fileValidate()">
                        @error('registration')
                        <span class="invalid-feedback" role="alert">
                            <span class="span-required">{{ $message }}</span>
                        </span>
                    @enderror
                </div>
                <div>
                    <p>Anexe sua foto</p><br>
                        <input type="file" name="photo" placeholder="Anexe sua foto" class="inputs required" oninput="fileValidate()">
                        @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <span class="span-required">{{ $message }}</span>
                        </span>
                    @enderror
                </div>

            </div>
            <div class="d-flex-files">
                <div>
                    <p>Anexe um Documento (Cpf, RG ou CNH)</p><br>
                        <input type="file" name="document" placeholder="Anexe um documento" class="inputs required" oninput="fileValidate()">
                        @error('document')
                        <span class="invalid-feedback" role="alert">
                            <span class="span-required">{{ $message }}</span>
                        </span>
                    @enderror
                </div>

            </div>
            <div>
                <label for="">Selecione sua Atlética:</label><br>
                <select name="athletic_id" id="estado" class="standard-select">
                    <option value="carranca">Selecione</option>
                    <option value="carranca">CARRANCAS</option>
                    <option value="crocos">CROCOS</option>
                    <option value="emboscada">EMBOSCADA</option>
                    <option value="trovoada">TROVOADA</option>
                    <option value="lobo">LOBO CHAPADÃO</option>
                    <option value="impetuosa">IMPETUOSA</option>
                    <option value="mafiosa">MAFIOSA</option>
                    <option value="insana">INSANA</option>
                    <option value="calango">CALANGO</option>
                    <option value="clandestina">CLANDESTINA</option>
                    <option value="silibrina">SILIBRINA</option>
                    <option value="ducabrunco">DUCABRUNCO</option>
                    <option value="realeza">REALEZA</option>
                    <option value="carango">CARANGO</option>
                    <option value="bodao">BODÃO</option>
                </select>
                @error('athletic_id')
                <span class="invalid-feedback" role="alert">
                    <span class="span-required">{{ $message }}</span>
                </span>
            @enderror
        </div>

            <p>Tipo de inscrição:</p>
            <div class="box-select">
                <div>
                    <input type="radio" name="type" id="a" value="1">
                    <label for="a">Acadêmico</label>
                </div>
                <div>
                    <input type="radio" name="type"  id="c" value="2">
                    <label for="c">Convidado</label>
                </div>
                <div>
                    <input type="radio" name="type"  id="m" value="3">
                    <label for="m">Treinador</label>
                </div>
                <div>
                    <input type="radio" name="type"  id="e" value="4">
                    <label for="e">Egresso</label>
                </div>

            </div>
            @error('type')
                <span class="invalid-feedback" role="alert">
                    <span class="span-required">{{ $message }}</span>
                </span>
            @enderror
            <p>Precisa de alojamento?</p>
            <div class="d-flex-files">
                <div>
                    <input type="radio" id="s" value="s" name="accommodation">
                    <label for="s">Sim</label>
                </div>
                <div>
                    <input type="radio" id="n" value="n" name="accommodation">
                    <label for="n">Não</label>
                </div>

            </div>
            @error('accommodation')
                <span class="invalid-feedback" role="alert">
                    <span class="span-required">{{ $message }}</span>
                </span>
            @enderror
            <div class="d-flex-files">
                <button class="linkButton" type="submit" >Enviar </button>
                <a class="linkButton" href="{{ URL::to('/') }}/login">Login</a>
            </div>

        </form>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ URL::to('js/jquery.mask.min.js') }}" crossorigin="anonymous"></script>
<script>
    $("#whatsapp").mask('(00) 00000-0000');
    $("#cpf").mask('999.999.999-99');
 </script>
</body>

</html>
