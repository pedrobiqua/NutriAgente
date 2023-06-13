<style>
    .input-group-append {
        cursor: pointer;
    }
</style>

<div class="d-flex align-items-center justify-content-center m-3">
    <h1 style="color: #00bf63;" class="fonteIBM"> <strong> Adicionar Paciente </strong></h1>
</div>

<div class="container">
    <form method="post" action="pacientes/pacienteOptions">
        
        <input type="text" value="<?= $_GLOBALS['nutri_id'] ?>" name="nutricionista_id" hidden>
        
        <!-- Text input -->
        <div class="form-outline mb-4">
            <input type="text" id="form6Example3" class="form-control" placeholder="Ex: João" name="nome_busca"/>
            <label class="form-label" for="form6Example3">Nome do paciente</label>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <input type="text" id="form6Example3" class="form-control" placeholder="Ex: Emagrecimento" name="objetivo"/>
            <label class="form-label" for="form6Example3">Objetivo</label>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <input type="text" id="form6Example3" class="form-control" placeholder="Ex: 78.00" name="peso"/>
            <label class="form-label" for="form6Example3">Peso</label>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <input type="text" id="form6Example3" class="form-control" placeholder="Ex: 1.70" name="altura"/>
            <label class="form-label" for="form6Example3">Altura</label>
        </div>

        <!-- Date input -->
        <div class="form-outline mb-4">
            <input type="date" id="form6Example3" class="form-control" placeholder="Ex: Emagrecimento" name="data_inicial"/>
            <label class="form-label" for="form6Example3">Data inicial</label>
        </div>

        <!-- Date input -->
        <div class="form-outline mb-4">
            <input type="date" id="form6Example3" class="form-control" placeholder="Ex: Emagrecimento" name="data_final" />
            <label class="form-label" for="form6Example3">Data final</label>
        </div>

        
        <!-- Submit button -->
        <button type="submit" class="btn btn-outline-primary botao me-2 mb-4 verdeEscuro mb-4" name="adicionar">Adicionar</button>
    </form>
</div>
<script>
  var loginButton = document.getElementById("login_button");
  loginButton.textContent = "Sair"
</script>