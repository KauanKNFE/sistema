<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <?php  include '../includes/head.php' ?>
    </head>
<body>

<div class="container">
        <h3 class="titulo">Sistema da Empresa</h3>
        
        <div class="row tudo">
            <?php include '../includes/menu.php' ?>
            <div class="dados col-8">
                <h4>Lista de Clientes</h4>
                
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Kauan</td>
                            <td>kauan.faria@estudante.iftm.edu.br</td>
                            <td>
                                <a href="#" class="btn btn-outline-primary">Editar</a>
                                <a href="#" class="btn btn-outline-danger">Excluir</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Denis</td>
                            <td>denislima@iftm.edu.br</td>
                            <td>
                                <a href="#" class="btn btn-outline-primary">Editar</a>
                                <a href="#" class="btn btn-outline-danger">Excluir</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Bruna</td>
                            <td>bruna.rs@estudante.iftm.edu.br</td>
                            <td>
                                <a href="#" class="btn btn-outline-primary">Editar</a>
                                <a href="#" class="btn btn-outline-danger">Excluir</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="adicionar.php" class="btn btn-success mb-2">Cadastrar</a>
            </div>
        </div>
    </div>

    <?php include '../includes/javascript.php' ?>
</body>
</html>