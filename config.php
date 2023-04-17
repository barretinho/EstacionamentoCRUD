<?php 
session_start();
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'dbestacionamento');

$conn = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar ao banco');

//CRUD Funcionário
function Login($email, $password){
    $hash = md5($password);
    $query = 'SELECT * FROM funcionario WHERE email_funcionario = "'.$email.'" AND senha_funcionario = "'.$hash.'"';
    $res = $GLOBALS['conn']->query($query);
    $row = mysqli_num_rows($res);
    if($row == 1){
        header('Location: home.php');
    }else{
        $_SESSION['erro-login'] = true;
    }
}

function ListarView($cd) {
    $sql = 'SELECT * FROM vwcliente';
        if($cd != "") {
            $sql.= 'WHERE cd='.$cd;
        }
    $res = $GLOBALS['conn']->query($sql);
    return $res;
}

function ListarVagas($cd) {
       $sql = 'SELECT * FROM vaga';
        if($cd != "") {
            $sql.= 'WHERE cd='.$cd;
        }
    $res = $GLOBALS['conn']->query($sql);
    return $res; 
}

function ListarFuncionários($cd) {
       $sql = 'SELECT * FROM funcionario';
        if($cd != "") {
            $sql.= 'WHERE cd='.$cd;
        }
    $res = $GLOBALS['conn']->query($sql);
    return $res; 
}

function ListarVeiculos($cd) {
       $sql = 'SELECT * FROM vwcliente';
        if($cd != "") {
            $sql.= 'WHERE cd='.$cd;
        }
    $res = $GLOBALS['conn']->query($sql);
    return $res; 
}

function ListarCarro($cd) {
       $sql = 'SELECT * FROM veiculo';
        if($cd != "") {
            $sql.= 'WHERE cd='.$cd;
        }
    $res = $GLOBALS['conn']->query($sql);
    return $res; 
}

function ExibitQtdFuncionarios() {
    $sql = 'SELECT COUNT(cd) AS qtd_funcionario FROM funcionario';
    $res = $GLOBALS['conn']->prepare($sql);
    $res->execute();

    $dados = $res->get_result()->fetch_assoc();
    echo '<p>Total: '.$dados['qtd_funcionario'].'</p>';
}

function ExibitQtdVeiculos() {
    $sql = 'SELECT COUNT(cd) AS qtd_veiculos FROM veiculo';
    $res = $GLOBALS['conn']->prepare($sql);
    $res->execute();

    $dados = $res->get_result()->fetch_assoc();
    echo '<p>Total: '.$dados['qtd_veiculos'].'</p>';
}

function ExibitQtdClientes() {
    $sql = 'SELECT COUNT(cd) AS qtd_clientes FROM vwCliente';
    $res = $GLOBALS['conn']->prepare($sql);
    $res->execute();

    $dados = $res->get_result()->fetch_assoc();
    echo '<p>Total: '.$dados['qtd_clientes'].'</p>';
}

function TipoDeVagas() {
    $sql = 'SELECT COUNT(cd) AS qtd_tp_vagas FROM vaga';
    $res = $GLOBALS['conn']->prepare($sql);
    $res->execute();

    $dados = $res->get_result()->fetch_assoc();
    echo '<p>Total: '.$dados['qtd_tp_vagas'].'</p>';
}
