<script src="https://kit.fontawesome.com/2a33fe9a00.js" crossorigin="anonymous"></script>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

<div style="margin-top: 40px" class="border-bottom">
        <h1 class="h2">Imóveis</h1>
</div>

<div class = "resultados">
	
	<?php foreach($list as $d) : ?>
        <div class = "containerimage">
            <div class = "imagem">
                <img src="<?= base_url("assets/images/" . $d['imagem']) ?>" />
            </div>   
            
            <div class= "imovel">
                    
                <div class = "linha01">
            
                    <span class="title">
                    <?= $d['tipo_propriedade'] ?>
                    </span>	
                    <a href="<?= base_url() ?>listar/editar/<?=$d['id'] ?>" class = "btn btn-sm btn-warning icon ">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    <a href="javascript:goDelete(<?=$d['id'] ?>)" class = "btn btn-sm btn-danger icon">
                        <i class="fas fa-trash-alt"></i>
                    </a>  
                </div>

                <div class = "linha02">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>
                        <?= $d['endereco'] ?>
                    </span>	
                </div>	

                <div class = "linha03">
                    <span>
                        <span class="money">R$</span> <?= $d['preco'] ?>
                    </span>	
                </div>	
            </div> 
        </div>       		
	<?php endforeach ?>

</div>

</main>

<script>
function goDelete(id) {
    var myurl = 'listar/deletar/' + id;
    if(confirm('Deseja realmente apagar este registro?')){
        window.location.href = myurl;
    } else {
        alert("Registro não alterado!");
    }
}
</script>

<style>
        .resultados{
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            
        }
        .imovel{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 5px;
            
        }
        .linha01{
            display: flex;
            flex-direction: row;
            align-items: center; 
            font-size: 25px;
            max-width: 200px;
        }
        .linha02{
            display: flex;
            flex-direction: row;
            align-items: center; 
        }
        .linha03{
            font-size: 50px;
        }
        .money{
            font-size: 30px;
            color: green;
        }
        .icon{
            display: flex;
            flex-direction: row;
            margin: 5px;  
        }
        .title{
            color: green; 
            margin: 5px;
        }
        .imagem img{
            margin: 5px;
            width: 300px;
            height: auto;
        }
        .containerimage{
            display:flex;
            flex-direction: row;
            margin: 5px;
        }
</style>