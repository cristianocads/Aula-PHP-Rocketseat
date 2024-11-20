<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP</title>
</head>
<body>
    <section>
        <h1>
            <?php
                echo "Aula PHP da Rocketseat"; // exemplo de aparecer na tela
            ?>

        <?php
            $variavel= "Variável"; //exemplo de composição de variável
            echo $variavel;
        ?>   
        </h1>
        <h1>
            <p>
                <?php
                echo "teste de parágrafo";
                ?>

            </p>
        </h1>
    </section> 
    <section>
        <?php // aula condicionais e booleanos
            $nome = "João";
            $saudacao = "olá!";
            $titulo = $saudacao . "website do" . $nome;
            $subtitulo = "Seja bem vindo ao meu website!";
            $ano = 2020;

        
            $projeto = "Meu Portifolio";
            $finalizado = 0; //booleano // true,1 or false,0
            $dataDoProjeto = "11-10-2024";
            $descricao = "Meu primeiro portifólio - Escrito em PHP e HTML";
            // Forma encurtada do 'echo' abaixo no div
        ?>
        <div>
            <div>
                <div
                    <?php if((2024 - $ano) > 2): // condicional if else
                    ?>
                        style = "color: blue;"
                    
                    <?php endif; ?>
                        
                >
                <h4><?php echo $ano;?></h4>
            </div>
                        
            <h2><?=$projeto?></h2>
            <p><?=$descricao?></p>
        </div>
        <div>
            <div><?=$dataDoProjeto?></div>
            <div>Projeto:
                <?php //booleano
                    // se caso a $finalizado for igual a 1  ou true
                    // ✅
                    // se não
                    // ⛔
                    if($finalizado) {
                        echo '<span style="color: green;">✅ Finalizado</span>';
                    } else {
                        echo '<span style="color: red;">⛔ Não finalizado</span>';
                    }
                    //versão resumida do if else
                    // <?php if($finalizado): 'fecha php' ✅ Finalizado <?php else: 'fecha php' ⛔ Não finalizado <?php endif; 'fecha php'
                ?>                
            </div>

        </div>

    </section>
        
    
    
</body>
</html>