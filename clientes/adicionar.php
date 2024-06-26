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
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="nome@provedor.com">
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="xxx.xxx.xxx-xx">
                </div>
                <div class="mb-3">
                    <label for="data" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="data" name="data">
                </div>
                <div class="mb-3">
                    <label for="sexo" class="form-label">Sexo</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <h6>Masculino</h6>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            <h6>Feminino</h6>
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="obs" class="form-label">Observação</label>
                    <textarea class="form-control" id="obs" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Gravar</button>
                <a href="./" class="btn btn-outline-primary">Voltar</a>
            </div>
        </div>
    </div>

    <?php include '../includes/javascript.php' ?>
</body>
</html>