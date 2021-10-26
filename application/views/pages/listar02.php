<script src="https://kit.fontawesome.com/2a33fe9a00.js" crossorigin="anonymous"></script>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">


<div style="margin-top: 40px" class="border-bottom">
        <h1 class="h2">Imóveis</h1>
</div>

<div class = "resultados">
	
	<?php foreach($list as $d) : ?>
        <div class = "containerimoveis">
            <div class = "imagem">
                <img src="<?= base_url("assets/images/" . $d['imagem']) ?>" />
            </div>   
            
            <div class= "imoveldados">
                    
                <div class = "linha01">
                    <span class="title">
                    <?= $d['tipo_propriedade'] ?>
                    </span>	
                    <a href="<?= base_url() ?>listar/editar/<?=$d['id'] ?>" class = "btn btn-sm btn-warning" style="margin-right: 6px">
                        <i class="fas fa-pencil-alt fa-fw" ></i>
                    </a>

                    <a href="javascript:goDelete(<?=$d['id'] ?>)" class = "btn btn-sm btn-danger" >
                        <i class="fas fa-trash-alt fa-fw"></i>
                    </a>  
                </div>

                <div class = "linha02">
                    <i class="fas fa-map-marker-alt " style="margin-right: 4px; color: black"></i>
                    <span>
                        <?= $d['endereco'] ?>
                    </span>	
                </div>	

                <div class = "linha03">
                    <span>
                        <?= $d['dormitorios'] ?>
                        QUARTO(S) |
                    </span>	
                    <span>
                        <?= $d['banheiros'] ?>
                        BANHEIRO(S) |
                    </span>	
                    <span>
                        <?= $d['suites'] ?>
                        SUÍTE(S)
                    </span>	
                </div>	

                <div class = "linha04">
                    <i class="fas fa-tag" style="margin-right: 6px;color: gray"></i>
                    <span>
                        <span>R$</span> <?= $d['preco'] ?>
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
        .imoveldados{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content:center;
            margin: 10px;
        }
        .linha01{
            display: flex;
            flex-direction: row;
            align-items: center; 
            font-size: 25px;
            width: 100%;
        }
        .linha02{
            display: flex;
            flex-direction: row;
            align-items: center; 
            width: 100%;
            font-size: 15px;
           
        }
        .linha03{
            display: flex;
            flex-direction: row;
            align-items: center; 
            width: 100%;
            font-size: 12px;
            margin: 2px;
            
        }
        .linha04{
            display:flex;
            font-size: 35px;
            width: 100%;
            align-items: center;
        }
        .icon{
            display: flex;
            flex-direction: row;
            margin: 5px;  
        }
        .title{
            color: green; 
            margin-right: 5px;
        }
        .imagem img{
            margin: 5px;
            width: 300px;
            height: auto;
        }
        .containerimoveis{
            display:flex;
            flex-direction: row;
            margin: 5px;
        }
</style>