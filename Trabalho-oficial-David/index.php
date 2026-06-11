<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <h2> Cadastro Escolar</h2><hr>
    
     <img src="image/logo.png " alt="Logo" width="100" height="50" >
    <form method="get" action=""  >
        <p>Dados Pessoais</p>
        <label>Nome:</label>
            <input type="text" name="nome" size="102" required><br><br>
        <label>Endereço</label>
            <input type="text" name="endere" size="100" required><br><br>
        <label>Cidade</label>
            <input type="text" name="cid" size="30" required>
        <label>Estado</label>
        <select name="estad" value="Estados">
                <option value="AC">Acre</option>
                <option value="AL">Alagoas </option>
                <option value="AP">Amapá </option>
                <option value="AM">Amazonas </option>
                <option value="BA">Bahia </option>
                <option value="CE">Ceará </option>
                <option value="DF">Distrito Federal </option>
                <option value="ES">Espírito Santo </option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão </option>
                <option value="MT">Mato Grosso </option>
                <option value="MS">Mato Grosso do Sul </option>
                <option value="MG">Minas Gerais </option>
                <option value="PA">Pará </option>
                <option value="PB">Paraíba </option>
                <option value="PR">Paraná </option>
                <option value="PE">Pernambuco </option>
                <option value="PI">Piauí </option>
                <option value="RJ">Rio de Janeiro </option>
                <option value="RN">Rio Grande do Norte </option>
                <option value="RS">Rio Grande do Sul </option>
                <option value="RO">Rondônia </option>
                <option value="RR">Roraima </option>
                <option value="SC">Santa Catarina </option>
                <option value="SP">São Paulo </option>
                <option value="SE">Sergipe </option>
                <option value="TO">Tocantins </option>
        </select>
        
        <label >CEP</label>
            <input type="number" name="cep" size="20" placeholder="(00)00000-0000" required><br><br>
        <label >E-mail</label>
            <input type="email" name="emai" size="40" required><br><br>
        <label >RG</label>
            <input type="text" name="rg" required size="20">
        <label >CPF</label>
            <input type="number" name="cpf"  size="20" required>
        <label >Data de Nascimento</label>
            <input type="date" name="dat" required><hr>

        <p>FILIAÇÃO:</p>
        <label >Mae</label>
            <input type="text" name="mae" required><br><br>
        <label >Pai</label>
            <input type="text" name="Pai" required><hr>

        <p>Solicitaçao:</p>
        <label >Renda Mensal R$</label>
            <input type="number" name="men" required>
        <label >Valor Solicitado R$</label>
        <input type="number" name="men2" required><br><br>
            <label >Número de parcelas</label>
            <input type="number" name="nump" min="1" max="48" step="1" required>
        <label >valor das Parcelas</label>
        <input type="number" name="valp2" value="parcelas"><br><br>
        <input type="submit" value="Calcular"><br>
    <p><input type="checkbox">Declaro que li e aceito os termos e condiçoes da condiçoes das clausulas da concentraçao de credito pessoal perante essa instituiçao financeira</p>  
        <input type="submit" value="Enviar">
        <hr>
    </form>
    
</body>
</html>