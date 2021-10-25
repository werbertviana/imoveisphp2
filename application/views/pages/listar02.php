
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Imóveis</h1>
</div>
<div>
    <form action="" method="post">
        <input class="form-control form-control-dark" type="text" name="busca" id="busca" placeholder="Pesquisar" aria-label="Search" value="">
    </form>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tipo do imóvel</th>
                <th>Dormitórios</th>
                <th>Banheiros</th>
                <th>Suítes</th>
                <th>Endereço</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($list as $d) : ?>
                <tr>
                    <td> <?= $d['id'] ?> </td>
                    <td> <?= $d['tipo_propriedade'] ?> </td>
                    <td> <?= $d['dormitorios'] ?> </td>
                    <td> <?= $d['banheiros'] ?> </td>
                    <td> <?= $d['suites'] ?> </td>
                    <td> <?= $d['endereco'] ?> </td>
                    <td> <?= $d['preco'] ?> </td>
                    <td>
                        <a href="<?= base_url() ?>listar/editar/<?=$d['id'] ?>" class = "btn btn-sm btn-warning">
                            <i class = 'fas fa-pencil-alt'></i>
                        </a>
                        <a href="javascript:goDelete(<?=$d['id'] ?>)" class = "btn btn-sm btn-danger">
                            <i class = 'fas fa-trash-alt'></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>
</div>
</main>

<script>
function goDelete(id) {
    var myurl = 'listar/deletar/' + id;
    if(confirm('Deseja realmente apagar este registro?')){
        window.location.href = myurl;
    } else {
        alert("Registro não alterado!");
        return false;
    }
}
</script>
