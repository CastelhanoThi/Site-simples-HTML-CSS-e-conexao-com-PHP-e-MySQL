<html lang="pt">
    <head>
        <body>
            <meta charset="utf-8">
            <title>Minha pagina em HTML</title>
            <link rel="stylesheet" type="text/css" href="Cuidador/cuidadorStyle.css">
            <script>
                   function mascarar_cpf(){
                var cpf = document.getElementById('cpf')
                if(cpf.value.length == 3 || cpf.value.length == 7){
                   cpf.value += "."
                }else if(cpf.value.length == 11){
                    cpf.value += "-"
                }
            }
            </script>
            <!--Menu-->
            <div id="Menu">
                <p class="auto">TITULO DO SITE</p>
                <p class="medio">COLOCA O QUE QUIZER</p>
                <p class="baixo">SEJA BEM VINDO</p>
            </div>
            <!--cabecalho-->
            <div id="cabecalho">
                <img src="Imagem/pg.png" width="200">
                <p class="novo">Home Care</p>
                <ul>
                    <a href="index.html">HOME</a>
                    <a href="cadastro.php">CADASTRO</a>
                    <a href="cuidador.php">CUIDADOR</a>
                    <a href="index.html">WEB</a>
                    <a href="index.html">GRAVADORA</a>
                </ul>
            </div>
            <!--botao-->
            <div id="botao">
                <p class="doe">DOE</p>
            </div>
            <!--buscar-->
            <div id="divBusca">
                <input type="text" id="txtBusca"  alt="Buscar..." name="pesquisar" placeholder="Buscar..."/>
                <button id="btnBusca">Buscar</button>
            </div>
            <!--imagem-->
            <div id="imagem">
               <form name="signs" method="post" action="cadastrondoUsuario.php">
                   Nome :<input type="text" name="nome" size="20" placeholder="Digite seu nome" required="required" maxlength="30"><br>
                   Endereço :<input type="text" name="endereco" size="20" placeholder="Digite seu endereco" required="required" maxlength="30"><br>
                   Email :<input type="email" name="email" size="20" placeholder="Digite seu email" required="required" maxlength="30"><br>
                   Cidade :<input type="text" name="cidade" size="20" placeholder="Digite seu cidade" required="required" maxlength="30"><br>
                   Login :<input type="text" name="login" size="20" placeholder="Digite seu Login" required="required" maxlength="30"><br>
                   Senha :<input type="text" name="senha" size="20" placeholder="Digite sua senha" required="required" maxlength="30"><br>
                   Bairro :<input type="text" name="bairro" size="20" placeholder="Digite seu bairro" required="required" maxlength="30"><br>
                   CPF :<input type="text" id="cpf" name="cpf" size="16" autocomplete="off" placeholder="Digite seu cpf" required="required" maxlength="16" onkeypress="mascarar_cpf()"><br>
                   <p class="cadastrar">
                        <input type="submit" value="Cadastrar">
                   </p>
                    <div id="Cadastro">
                    <?php
                        if(isset($_GET['sucess'])){
                            echo "Gravado com sucesso";
                        }else{
                            echo "";
                        }
                    ?>
                </div>
               </form>
            </div>
            <!--direita-->
            <div id="direita">
                
            </div>
          
            <!--rodape-->
            <div id="rodape">
                
            </div>
        </body>
    </head>
</html>
