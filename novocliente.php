<h1>Novo Usuário</h1>
<form action="?page=salvar-cliente" method="POST" value="cadastrar">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3" >
        <label>Nome</label>
        <input type="text" name="nome"class = "form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email"class = "form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha"class = "form-control">
    </div>
    <div class="mb-3">
        <label>Data de nascimento</label>
        <input type="date" name="data_nasc"class = "form-control">
    </div>
    <div class="mb-3">
    <button type="submit" class="btn btn-outline-success">Cadastrar</button>
    </div>
</form>