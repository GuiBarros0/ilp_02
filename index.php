<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="style.css">
    <title>Home do curso</title>
</head>
<body>
    <header>
        <nav class="navbar"> 
            <a class="nav-link" href="#desafios">Desafios</a> 
            <span>
                <input type="checkbox" name="" id="check">
                <img id="icon-dark" src="icon/icon-light.png" alt="lua branca">
            </span>
        </nav>
    </header>
    <main>
        <section class="conteiner" id="desafios">
            <div class="title">
                <h1>Desafios</h1>
            </div>
                <div class="card-item">
                    <a href="../lab_eng/adivinha_01/adivinha.html" target="_blank"><img class="projeto-img" src="../lab_eng/adivinha_01/img/adivinha.png" alt="desafio Mensagem"></a>
                    <div class="card-info">
                        <a class="codigo-github" id="codigo-github" href="https://github.com/jhonatasv/javascript/tree/master/desafios/d001" rel="author" target="_blank">
                            <p>Adivinha</p>
                        </a>
                    </div>
                </div>
                <div class="card-item">
                    <a href="../lab_eng/relogio_02/relogio.html" target="_blank"><img class="projeto-img" src="../lab_eng/relogio_02/img/relogio.png" alt="desafio Boas vidas"></a>
                    <div class="card-info">
                        <a class="codigo-github" id="codigo-github" href="https://github.com/jhonatasv/javascript/tree/master/desafios/d002" rel="author" target="_blank">
                            <p>Relogio digital</p>
                        </a>
                    </div>
                </div>
                <div class="card-item">
                    <a href="../lab_eng/palindromo_03/img/palindromo.png" target="_blank"><img class="projeto-img" src="../lab_eng/palindromo_03/img/palindromo.png" alt="desafio antes e depois"></a>
                    <div class="card-info">
                        <a class="codigo-github" id="codigo-github" href="https://github.com/jhonatasv/javascript/tree/master/desafios/d003" rel="author" target="_blank">
                            <p>Palindrómo</p>
                        </a>
                    </div>
                </div>
                <div class="card-item">
                    <a href="../lab_eng/array_04/projeto04_aula04.html" target="_blank"><img class="projeto-img" src="../lab_eng/array_04/img/array.png" alt="Calculando o troco"></a>
                    <div class="card-info">
                        <a class="codigo-github" id="codigo-github" href="https://github.com/jhonatasv/javascript/tree/master/desafios/d004" rel="author" target="_blank">
                            <p>Array</p>
                        </a>
                    </div>
                </div>
                <div class="card-item">
                    <a href="../lab_eng/letreiro_05/atividade05_aula05.html" target="_blank"><img class="projeto-img" src="../lab_eng/letreiro_05/img/letreiro.png" alt="Conversor de Medidas"></a>
                    <div class="card-info">
                        <a class="codigo-github" id="codigo-github" href="https://github.com/jhonatasv/javascript/tree/master/desafios/d005" rel="author" target="_blank">
                            <p>Letreiro</p>
                        </a>
                    </div>
                </div>

        </section>
        <span id="button-top" class="button-top">^</span>
    </main>
    <footer>
        <p>&copy; <a href="https://github.com/GuiBarros0" target="_blank" rel="author">Guibarros0</a></p>
    </footer>
    <script>
        const input = document.querySelector('#check')
        const modoDarkHtml = document.querySelector('html')
        const btn = document.querySelector('#button-top') 

        btn.addEventListener('click', () => {
            window.scrollTo(0,0)
        })

        function ocultar() {
            if(window.scrollY > 390) {
                btn.style.display = 'flex'
            } else {
                btn.style.display = 'none'
            }
        }
        ocultar()

        document.addEventListener('scroll', ocultar)

        input.addEventListener('change', () => {
            
            modoDarkHtml.classList.toggle('dark-mode')
        })


    
    </script>
</body>
</html>