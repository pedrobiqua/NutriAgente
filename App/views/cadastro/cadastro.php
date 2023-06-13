<div class="d-flex align-items-center justify-content-center m-3">
    <h1 style="color: #00bf63;" class="fonteIBM">Cadastro</h1>
</div>
<section class="w-100 p-4 d-flex justify-content-center pb-4">
    <form method="post" action="cadastro">

        <!-- Nome input -->
        <div class="form-outline mb-4">
            <input type="text" id="form2Example1" class="form-control" name="nome"/>
            <label class="form-label fonteDosis" for="form2Example1">Nome</label>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" id="form2Example1" class="form-control" name="email"/>
            <label class="form-label fonteDosis" for="form2Example1">Email</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" name="password"/>
            <label class="form-label fonteDosis" for="form2Example2">Senha</label>
        </div>

        <div class="form-outline mb-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="C" id="flexCheck" name="cliente">
            <label class="form-check-label fonteDosis" for="flexCheck">Cliente</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="N" id="flexCheck" name="nutricionista">
            <label class="form-check-label fonteDosis" for="flexCheckChecked">Nutricionista</label>
        </div>    
            
        </div>

        <!-- Submit button -->
        <input type="submit" class="btn btn-outline-primary botao me-2 mb-4 verdeEscuro" name="submit" value="Cadastre-se" />

        <!-- Register buttons -->
        <div class="text-center">
            <p>Já possui uma conta? <a href="login" class="verdeEscuro">Entre</a></p>
        </div>
    </form>
</section>