<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.google.com/specimen/Oswald?selection.family=Oswald:wght@200;300;400;500;600;700">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice de Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Básico</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">
                                Olá PHP!
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">
                                Integração HTML
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">
                                Integração CSS
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">
                                Comentários PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio">
                                Desafio
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Tipos</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=int">
                                Tipo Inteiro
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=float">
                                Tipo Float
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=aritmeticas">
                                Operações Aritméticas
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_precedencia">
                                Desafio Precedência
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=string">
                                Tipo String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_string">
                                Desafio String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=booleano">
                                Tipo Booleano
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=conversoes">
                                Conversões
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Variáveis</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=basico">
                                Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_equacao">
                                Desafio Equação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=atribuicoes">
                                Atribuições
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=interpolacao">
                                Interpolação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">
                                Variáveis Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_variaveis">
                                Desafio Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=valor_referencia">
                                Valor vs Referência
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=constantes">
                                Constantes
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>