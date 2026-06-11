<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    echo "<h2>CONTRATO / SOLICITADO DE EMPREESTIMO PESSOAL</h2>";

    
    echo  "NOME : $nome. <br>" ; 
    echo " ENDEREÇO : $endereco  <br>";
    echo " CIDADE : $cidade <br>";
    echo " ESTADO: $estadado <br>";
    echo " CEP : $CEP. <br>"; 
    echo " E-mail :  $emai. <br>";
    echo " RG : $rg. <br>";
    echo " CPF :$cpf. <br>";
    echo " Data de Nascimento :$nascimento. <br>";
    echo " MÃE : $mae <br>";
    echo " PAI :$Pai <br>";
    echo " RENDA MENSAL : $RendaMensal <br>";
    echo " VALOR SOLICITADO :$valordsolict <br>";
    echo " NUMERO DE PARCELAS $numDparce <br>";
    echo " VALOR DAS PARCELAS :  $valparce12 <br>";

    ?>
    <div><br><hr width="90%">
        

        

</div>
</body>
</html>