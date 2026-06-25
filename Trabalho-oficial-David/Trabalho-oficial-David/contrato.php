<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/contrato.css">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = isset($_GET["nome"]) ? $_GET["nome"] : 0;
    $endereco = isset($_GET["endere"]) ? $_GET["endere"] : 0;
    $cidade = isset($_GET["cid"]) ? $_GET["cid"] : 0;
    $estadado = isset($_GET["estad"]) ? $_GET["estad"] : 0;
    $CEP = isset($_GET["cep"]) ? $_GET["cep"] : 0;
    $emai = isset($_GET["emai"]) ? $_GET["emai"] : 0;
    $rg = isset($_GET["rg"]) ? $_GET["rg"] : 0;
    $cpf = isset($_GET["cpf"]) ? $_GET["cpf"] : 0;
    $nascimento = isset($_GET["dat"]) ? $_GET["dat"] : 0;
    $mae = isset($_GET["mae"]) ? $_GET["mae"] : 0;
    $Pai = isset($_GET["Pai"]) ? $_GET["Pai"] : 0;
    $RendaMensal  = isset($_GET["men"]) ? $_GET["men"] : 0;
    $valordsolict = isset($_GET["men2"]) ? $_GET["men2"] : 0;
    $numDparce = isset($_GET["nump"]) ? $_GET["nump"] : 0;
    $valparce12 = isset($_GET["valp2"]) ? $_GET["valp2"] : 0;

    echo "<h2>Contrato do Aluno</h2>";

   echo" <p>
    Pelo presente instrumento particular, de um lado a Instituição de Ensino ESC (Escola),
    inscrita no CNPJ nº 12350-923, com sede em Brasília, e de outro lado o(a) estudante
    <strong>$nome</strong>, e-mail: <strong>$emai</strong>, portador(a) do CPF nº <strong>$cpf</strong>
    e RG nº <strong>$rg</strong>, residente em <strong>$cidade</strong>, no estado de
    <strong>$estadado</strong>, celebram o presente Contrato de Compromisso Estudantil.
    </p>
    
    <p>
    O(a) estudante compromete-se a frequentar regularmente as aulas e atividades acadêmicas,
    cumprir as normas e regulamentos internos da instituição, realizar avaliações, trabalhos
    e demais atividades exigidas, zelar pelo patrimônio e pelos recursos disponibilizados e
    manter seus dados cadastrais atualizados.
    </p>
    
    <p>
    A Instituição compromete-se a oferecer os serviços educacionais previstos, disponibilizar
    professores e recursos adequados ao ensino, fornecer informações acadêmicas necessárias
    ao desenvolvimento dos estudos e avaliar o desempenho do(a) estudante de acordo com os
    critérios estabelecidos.
    </p>
    
    <p>
    Este contrato terá vigência de 11/06/2026 até 15/09/2029, podendo ser renovado mediante
    acordo entre as partes. O presente contrato poderá ser rescindido por iniciativa de
    qualquer das partes mediante comunicação prévia ou em caso de descumprimento das
    obrigações aqui estabelecidas.
    </p>
    
    <p>
    As partes declaram ter lido, compreendido e aceitado todas as condições previstas neste
    contrato, comprometendo-se a cumpri-las integralmente.
    </p>
    
    <p>
    Responsáveis: <strong>$mae</strong> e <strong>$Pai</strong>.<br>
    Data de nascimento do estudante: <strong>$nascimento</strong>.
    </p>
    
    <p>
    Por meio deste instrumento, declara-se que a matrícula do(a) estudante $nome foi devidamente
    efetivada junto à Instituição de Ensino ESC, passando este(a) a usufruir de todos os
    direitos e deveres previstos no regulamento escolar e neste contrato.
    </p>";
    ?>
 
        

        

</div>
</body>
</html>