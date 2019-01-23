<section class="container">
    <H2>Cadastro de User</H2>
    <form action="./controller/user.php" method="POST">
        <label> Nome </label>
        <input type="text" name="nome" class="form-control">

        <label> E-mail </label>
        <input type="email" name="email" class="form-control">

        <label> Senha </label>
        <input type="password" name="pws" class="form-control">

        <button  class="btn btn-primary">Salvar</button>
    </form>
</section>