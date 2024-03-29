<div class="d-flex align-items-center justify-content-center m-3">
    <h1 style="color: #00bf63;" class="fonteIBM">Login</h1>
</div>
<section class="w-100 p-4 d-flex justify-content-center pb-4 fonteDosis">
    <form method="post" action="login" name="formulario">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" id="form2Example1" class="form-control" name="login" />
            <label class="form-label fonteDosis" for="form2Example1">Email</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" name="senha" />
            <label class="form-label fonteDosis" for="form2Example2">Senha</label>
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
            <div class="col">
                <!-- Simple link -->
                <a href="#!" class="verdeEscuro fonteDosis">Esqueceu a senha?</a>
            </div>
        </div>

        <!-- Submit button -->
        <input type="submit" class="btn btn-outline-primary botao me-2 mb-4 verdeEscuro" name="submit" value="Entrar" />

        <!-- Register buttons -->
        <div class="text-center fonteDosis">
            <p>Ainda não é um membro? <a href="cadastro" class="verdeEscuro">Cadastre-se</a></p>
        </div>
    </form>
</section>