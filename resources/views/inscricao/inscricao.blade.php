<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intermed Sertão - Inscrição</title>
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/style.css">
</head>
<body class="bg">

    <div class="content">
        <h1>Intermed Sertão - Inscrição</h1>
        <form action="/store" method="post" id="form" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="text" placeholder="Digite seu nome" name="name" class="inputs required" oninput="nameValidate()">
                <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>
            </div>
            <div>
                <input type="number" placeholder="Digite seu CPF" name="cpf" class="inputs required"  oninput="numberValidate()">
                <span class="span-required">Digite um CPF válido</span>
            </div>
            <div>
                <input type="date" placeholder="data" name="birthday" class="inputs required" oninput="dateValidate()">
                <span class="span-required">Digite sua data de nascimento</span>
            </div>
            <div>
                <input type="tel"  name="whatsapp" placeholder="Adicione seu telefone (whatsapp)" class="inputs required" oninput="telValidate()">
                <span class="span-required">Adicione um número válido</span>
            </div>
            <div>
                <input type="tel" name="emergency" placeholder="Adicione seu telefone de emergência" class="inputs required" pattern="\(\d{2,}\) \d{4,}\-\d{4}" oninput="telValidate()">
                <span class="span-required">Adicione um número válido</span>
            </div>
            <div>
                <input type="text" name="address" placeholder="Digite seu endereço" class="inputs required" oninput="nameValidate()">
                <span class="span-required">Digite seu endereço</span>
            </div>
            <div>
                <input type="text" name="instagram" placeholder="Digite seu Instagram" class="inputs required" oninput="nameValidate()">
                <span class="span-required">Digite seu Instagram</span>
            </div>
            <div>
                <p>Anexe sua matrícula</p><br>
                <input type="file" name="registration" placeholder="Anexe sua matrícula" class="inputs required" oninput="fileValidate()">
                <span class="span-required">Anexe sua matrícula</span>
            </div>
            <div>
                <p>Anexe sua foto</p><br>
                <input type="file" name="photo" placeholder="Anexe sua matrícula" class="inputs required" oninput="fileValidate()">
                <span class="span-required">Anexe sua foto</span>
            </div>
            <div>
                <label for="">Selecione sua Atlética:</label><br>
                <select name="athletic_id" id="estado">
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
        </div>
            
            <div class="box-select">
                <div>
                   
                </div>
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
                </div><div>
                    <input type="radio" name="type"  id="e" value="5">
                    <label for="e">Diretor</label>
                </div>
            </div>
            <p>Precisa de alojamento?</p>
            <div class="box-select">
                <div>
                    <input type="radio" id="s" value="s" name="accommodation">
                    <label for="s">Sim</label>
                </div>
                <div>
                    <input type="radio" id="n" value="n" name="accommodation">
                    <label for="n">Não</label>
                </div>
            <input type="submit" value="Enviar" />
            <!-- <a class="linkButton" href="login.html">Login</a> -->
        </form>
    </div>
</body>
</html>