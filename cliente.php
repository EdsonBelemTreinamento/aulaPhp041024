<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

</head>
<body>
    <fieldset style="width:300px;height:350px;font-size:14px; padding:10px;margin-left:20px;margin-top:20px;">
       <legend>Formulário Aluno</legend> 
    <!--  post, get-->
 <form method="post" name="form1" id="form1" action="server.php">
   
    *Nome do Aluno<br/>
    <input type="text" name="nome" id="nome" size="50" 
    placeholder="entre com nome"  required/>
    <br/>
    *Disciplina<br/>
    <input type="text" name="disciplina" id="disciplina" size="20"
       placeholder="entre com Disciplina" required/>
    <br/>
    
    *Nota1<br/>
    <input type="number" name="nota1" id="nota1" size="10"
        required/>
    <br/>
    *Nota2<br/>
    <input type="number" name="nota2" id="nota2" size="10"
        required/>
    <br/>
  <button type="submit">Enviar para Servidor</button>
  <button type="reset">Limpar os Dados</button><br/>
 </form>    
</fieldset>
</body>
</html>