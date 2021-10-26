
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div style="margin-top: 40px" class="border-bottom">
			<h1 class="h2">Cadastro de Imóveis</h1>
	</div>
	
	<div class="formulario">

		<form enctype="multipart/form-data" action="<?= base_url()?>listar/atualizar/<?= $edit['id'] ?>" method="post">

		<div class = "linha01">	

			<div class="form-group" style="margin-right: 10px;">
				<label for="imovel">Tipo do imóvel</label>
				<select class="form-select" aria-label="Default select example" name="tipo_propriedade" id= "imovel" required>
					<option value = "">Selecione</option>
					<?php foreach($molde[0] as $m) : ?> 
						<option  <?php
							if($edit['tipo_propriedade'] == $m){
								echo 'selected';
							}
						?> value = "<?= $m ?>"><?= $m ?></option>
					<?php endforeach ?>
				</select>
			</div>
				
			<div class="form-group" style="margin-right: 10px;">
				<label for="dormitorios">Dormitórios</label>
				<select class="form-select" aria-label="Default select example" name="dormitorios" id= "dormitorios" required>
					<option value = "">Selecione</option>
					<?php foreach($molde[1] as $m) : ?> 
						<option <?php
								if($edit['dormitorios'] == $m){
									echo 'selected';
								}
							?> value = "<?= $m ?>"><?= $m ?></option>
						<?php endforeach ?>
				</select>
			</div>
				
			<div class="form-group" style="margin-right: 10px;">
				<label for="banheiros">Banheiros</label>
				<select class="form-select" aria-label="Default select example" name="banheiros" id= "banheiros" required>
					<option value = "">Selecione</option>	
					<?php foreach($molde[1] as $m) : ?> 
						<option  <?php
								if($edit['banheiros'] == $m){
									echo 'selected';
								}
						?> value = "<?= $m ?>"><?= $m ?></option>
					<?php endforeach ?>
				</select>
			</div>
			

			
			<div class="form-group">
				<label for="suites">Suítes</label>
				<select class="form-select" aria-label="Default select example" name="suites" id= "suites" required> 
					<option value = "">Selecione</option>	
					<?php foreach($molde[1] as $m) : ?> 
						<option  <?php
							if($edit['suites'] == $m){
								echo 'selected';
							}
						?> value = "<?= $m ?>"><?= $m ?></option>
					<?php endforeach ?>
				</select>
			</div>

			<div class="form-group">
				<label for="preco">Preço</label>
				<input type="text" class="form-control" name="preco" id="preco" placeholder="Preço" required value="<?= isset($edit) ? $edit["preco"] : "" ?>" >
					
			</div>

		</div>

			
			<div class="form-group" style="width: 70%">
				<label for="endereco">Endereço</label>
				<textarea name="endereco" id="endereco" rows="5" class="form-control" required> <?= isset($edit) ? $edit["endereco"] : "" ?> </textarea>
			</div>
			
			<div class="form-group" style="width: 70%">
				<label for="imagem">Imagem</label>
				<input type="file" class="form-control" name="imagem" id="imagem" >
			</div>
			

			<div class="form-group containerbutton">
				<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Salvar</button>
				<a href="<?= base_url()?>listar" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancelar</a>			
			</div>
			
		</form>
		
	</div>
</main>

<style>
	.linha01{
		display: flex;
		flex-direction: row;
		margin-top: 20px;
		width: 70%;
	}
	.containerbutton{
		margin-bottom:20px; 
		margin-top: 10px;
		width: 70%; 
		display: flex; 
		justify-content: space-between;
	}
</style>