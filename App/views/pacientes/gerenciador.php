<div class="d-flex align-items-center justify-content-center m-3">
    <h1 style="color: #00bf63;" class="fonteIBM"> <strong> Gerenciar pacientes </strong></h1>
</div>

<div class="container justify-content-center">
    <div class="row">
        <div class="col-12">
            <form action="pacientes" method="post" class="w-100">
                <div class="input-group">
                    <input type="text" value="<?= $data['pacientes'][0]['nutricionista_id'] ?>" name="nutricionista_id" hidden>
                    <button type="submit" class="btn btn-outline-primary botao me-2 mb-4 verdeEscuro w-100" name="adicionar">Adicionar Paciente</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <!-- Montar essa página com as informações do Banco, cada coluna será uma pessoa -->
        <?php foreach ($data['pacientes'] as $key => $value) { ?>
            <div class="col-4 mb-4">
                <div class="card shadow-lg" style="width: 18rem;">
                    <div class="card-body">
                        <h4 id="name" class="card-title verdeEscuro fonteIBM" data-att="<?= $value['id'] ?>"><?= empty($value['nome']) ? "Não apresenta nome" : $value['nome'] ?></h6>
                        <h6 class="card-subtitle mb-2 text-muted fonteDosis">Objetivo : <?= empty($value['objetivo']) ? "Inexistente" : $value['objetivo'] ?></h5>
                        <h4 class="card-title verdeEscuro fonteIBM">Assinatura</h5>
                        <h6 class="card-subtitle mb-2 text-muted fonteDosis">Data início : <?= empty($value['data_inicio']) ? "Inexistente" : date('d/m/Y', strtotime($value['data_inicio'])) ?></h4>
                        <h6 class="card-subtitle mb-2 text-muted fonteDosis">Data vencimento : <?= empty($value['data_final']) ? "Inexistente" : date('d/m/Y', strtotime($value['data_final'])) ?></h4>
                        <form action="pacientes" method="post">
                            <div class="btn-group mt-1">
                                <input type="text" value="<?= $value['nome'] ?>" name="nome" hidden>
                                <input type="submit" class="btn btn-outline-primary botao verdeEscuro fonteDosis" value="Editar" name="editar"/>
                                <input type="submit" class="btn btn-outline-primary botao verdeEscuro fonteDosis" value="Visualizar" name="visualizar"/>
                            </div>
                        </form>
                        <form action="pacientes/pacienteOptions" method="post">
                            <div class="btn-group">
                                <input type="text" value="<?= $value['id'] ?>" name="id" hidden>
                            </div>
                            <div class="btn-group mt-1">
                                <input type="submit" class="btn btn-outline-danger fonteDosis" value="Remover" name="remover"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>