<html>
    <head>
        <title>Adicionar Filme</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="title"> Adicionar Filme </h1>
            <form class="card card-sm" id="adicionarFilme" name="adicionarFilme" method="POST">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input class="form-control" type="text" name="titulo" id="titulo"/>
                </div>
                <div class="form-group">
                    <label for="classificacao">Classificação</label>
                    <input class="form-control" type="text" name="classificacao" id="classificacao"/>
                </div>
                <div class="form-group">
                    <label for="premios">Prêmios</label>
                    <input class="form-control" type="text" name="premios" id="premios"/>
                </div>
                <div class="form-group">
                    <label for="duracao">Duração</label>
                    <input class="form-control" type="text" name="duracao" id="duracao"/>
                </div>
                <div class="form-group">
                    <label>Data de estreia</label>
                    <div class="row no-gutters">
                        <select class="form-control col-sm-4" name="dia">
                            <option value="">Dia</option>
                            <?php for ($i=1; $i < 32; $i++) { ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <select class="form-control col-sm-4" name="mes">
                            <option value="">Mês</option>
                            <?php for ($i=1; $i < 13; $i++) { ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <select class="form-control col-sm-4" name="ano">
                            <option value="">Ano</option>
                            <?php for ($i=1900; $i < 2017; $i++) { ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                    <input class="btn btn-success" type="submit" value="Adicionar Filme" name="submit"/>
                </div>
            </form>
        </div>
    </body>
</html>