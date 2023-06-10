<div class="d-flex align-items-center justify-content-center m-3">
    <h1 style="color: #00bf63;" class="fonteIBM"> <strong> Gerenciar pacientes </strong></h1>
</div>

<div class="container justify-content-center">
    <div class="row ">
        <form action="pacientes/pacienteOptions" method="post">
            <button type="button" class="btn btn-outline-primary botao me-2 mb-4 verdeEscuro">Adicionar Paciente</button>
        </form>
    </div>
    <div class="row">
        <!-- Montar essa página com as informações do Banco, cada coluna será uma pessoa -->
        <?php foreach ($data['pacientes'] as $key => $value) { ?>
            <div class="col-4 mb-4">
                <div class="card shadow-lg" style="width: 18rem;">
                    <div class="card-body">
                        <h4 id="name" class="card-title verdeEscuro fonteIBM" data-att="<?= $value['id'] ?>"><?= empty($value['nome']) ? "Não apresenta nome" : $value['nome'] ?></h6>
                        <h6 class="card-subtitle mb-2 text-muted fonteDosis">Objetivo : Emagrecimento</h5>
                        <h4 class="card-title verdeEscuro fonteIBM">Assinatura</h5>
                        <h6 class="card-subtitle mb-2 text-muted fonteDosis">Data início : 10/02/23</h4>
                        <h6 class="card-subtitle mb-2 text-muted fonteDosis">Data vencimento : 10/08/23</h4>
                        <form action="pacientes/pacienteOptions" method="post">
                            <div class="btn-group">
                                <input type="text" value="<?= $value['id'] ?>" name="id" hidden>
                                <input type="submit" class="btn btn-outline-primary botao me-2 verdeEscuro fonteDosis" value="Visualizar" name="visualizar"/>
                            </div>
                            <div class="btn-group">
                                <input type="submit" class="btn btn-outline-danger me-2 fonteDosis" value="Remover" name="remover"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>