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

        .container .dashboard-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            width: 70%;  
            min-height: 40vh;
            padding: 0.4rem;
            margin-bottom: 4rem;
            margin-top: 4rem;
        }

        .dashboard-card {
            padding: 2rem 2rem;
            height: 10rem;
            width: 25rem;
            border-radius: 1rem;
            background: #fff;
                box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2); 
        }

        .dashboard-card i {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #000;  
        }

        .dashboard-card h2 {
            color: #000; 
        }

        .dashboard-card p {
             color: rgba(0, 0, 0, 0.7); 
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
            <h2>Dashboard</h2>
            <span>Visualização geral do estacionamento</span>
        </div>

        <div class="dashboard-container">
            <div class="dashboard-card">
                <i class="uil uil-clipboard"></i>
                <h2>Funcionários Cadastrados</h2>
                    <?php
                        ExibitQtdFuncionarios();
                    ?>
            </div>

            <div class="dashboard-card">
                <i class="uil uil-car-sideview"></i>
                <h2>Veiculos Estacionados</h2>
                    <?php
                        ExibitQtdVeiculos();
                    ?>
            </div>

            <div class="dashboard-card">
                <i class="uil uil-user"></i>
                <h2>Clientes Cadastrados</h2>
                    <?php
                        ExibitQtdClientes();
                    ?>
            </div>

            <div class="dashboard-card">
                <i class="uil uil-columns"></i>
                <h2>Tipos de Vagas</h2>
                    <?php
                        TipoDeVagas();
                    ?>
            </div>

            <div class="dashboard-card">
                <i class="uil uil-exclamation-circle"></i>
                <h2>Vagas Preenchidas</h2>
                    <?php
                        ExibitQtdVeiculos();
                    ?>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-link">
            <i class="uil uil-github"></i>
            <a href="https://github.com/devgamon">© 2023 Gabriel Gamon</a>
        </div>
    </footer>
</body>