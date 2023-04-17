<?php
    include('config.php');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <style>
        * {
          padding: 0;
          margin: 0;
          -webkit-box-sizing: border-box;
                  box-sizing: border-box;
          font-family: 'Roboto', sans-serif;
          border: none;
          outline: none;
          text-decoration: none;
          -webkit-transition: .2s linear;
          transition: .2s linear;
        }

        body {
            min-height: 100vh;
            width: 100%;
            background: #f0f0f0;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.5rem 7%;
            width: 100%;
            background: #323232;
        }

        .header .navbar a {
            font-size: 1rem;
            color: #fff;
            padding: 6px 15px;
        }

        .header #logout {
            font-size: 1rem;
            color: #fff;
            padding: 6px 15px;
            border: 1px solid #fff;
            border-radius: 0.4rem;
        }

        .container {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }

        .container .title-box {
            width: 100%;
            padding-left: 10%;
            margin-top: 4rem;
        }

        .container .title-box span {
            color: rgba(0, 0, 0, 0.7);
            font-weight: 100;
            font-style: italic;
        }

        .container .search-box {
            display: flex;
            align-items: center;
            justify-content: center;
            background: red;
            margin-top: 4rem;
            margin-bottom: 4rem;
            background: #fff;
            border-radius: 1rem;
            padding: 0.4rem;
            width: 40%;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .container .search-box input {
            width: 100%;
            height: 100%;
            padding: 0.7rem;
        }

        .container .search-box button {
            width: 10%;
            height: 100%;
            padding: 0.7rem;
            background: none;
            cursor: pointer;
        }

        .container .cards-box {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            width: 100%;  
            min-height: 40vh;
            padding: 0.4rem;
            margin-bottom: 4rem;
        }

        .container .cards-box .card {
            height: 17rem;
            width: 24rem;
            background: #fff;
            padding: 1rem;
            border-radius: 20px;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .container .cards-box .card .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 0.4rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .container .cards-box .card .card-header h2 {
            font-size: 1.3rem;
        }

        .container .cards-box .card .card-info {
            padding-top: 0.4rem;
        }

        .container .cards-box .card .card-info span {
            font-size: 0.6rem;
        }

        .container .cards-box .card .card-info p {
            font-size: 0.9rem;
            padding-bottom: 5px;
        }

        footer {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem 7%;
            width: 100%;
            background: #323232;
        }

        .footer-link {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            font-size: 3rem;
            color: #fff;
            padding: 6px 15px;
        }

        .footer-link a {
            font-size: 0.8rem;
            color: #fff;
            margin-top: 4px;
        }

    </style>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <a href="dashboard.php">Dashboard</a>
            <a href="home.php">Clientes</a>
            <a href="vaga.php">Vagas</a>
            <a href="funcionario.php">Funcionários</a>
            <a href="veiculo.php">Veiculos</a>
        </nav>
            <a href="" id="logout">Log Out</a>
    </header>

    <div class="container">
        <div class="title-box">
            <h2>Clientes Cadastrados</h2>
            <span>Fichas de todos os clientes cadastrados no estacionamento.</span>
        </div>
        <div class="search-box">
            <input type="search" name="textSearch" id="textSearch" placeholder="Search">
            <button name="search"><i class="uil uil-search"></i></button>
        </div>
        <div class="cards-box">
            <?php
                $todos = ListarView("");
                while ($view = $todos->fetch_object()) {
                    echo '
                        <div class="card">
                            <div class="card-header">
                                <h2>Ficha de Cadastro</h2>
                                <h2>'.$view->cd.'</h2>
                            </div>
                            <div class="card-info">
                                <span>Nome Completo: </span>
                                <p>'.$view->nome.'</p>
                                <span>Email:</span>
                                <p>'.$view->email.'</p>
                                <span>CPF:</span>
                                <p>'.$view->cpf.'</p>
                                <span>Data de Cadastro:</span>
                                <p>'.$view->data_cadastro.'</p>
                                <span>Tipo de Vaga:</span>
                                <p>'.$view->tipo_vaga.'</p>
                                <span>Modelo de Carro:</span>
                                <p>'.$view->modelo_veiculo.'</p>
                            </div>
                        </div>
                    ';
                }
            ?>         
        </div>
    </div>

    <footer>
        <div class="footer-link">
            <i class="uil uil-github"></i>
            <a href="https://github.com/devgamon">© 2023 Gabriel Gamon</a>
        </div>
    </footer>
</body>