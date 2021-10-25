
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastro de Imóveis</h1>
		
    </div>
	
	<div class="col-md-12">

		<form enctype="multipart/form-data" action="<?= base_url()?>listar/atualizar/<?= $edit['id'] ?>" method="post">

			<div class="col-md-6">
				<div class="form-group">
					
					<label for="imovel">Tipo do imóvel</label>
					<select class="form-select" aria-label="Default select example" name="tipo_propriedade" id= "imovel" required>
						<?php foreach($molde[0] as $m) : ?> 
							<option  <?php
									if($edit['tipo_propriedade'] == $m){
										 echo 'selected';
									}
								?> value = "<?= $m ?>"><?= $m ?></option>
						<?php endforeach ?>
					</select>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="form-group">
					<label for="dormitorios">Dormitórios</label>
					<select class="form-select" aria-label="Default select example" name="dormitorios" id= "dormitorios" required>
						<?php foreach($molde[1] as $m) : ?> 
							<option  <?php
									if($edit['dormitorios'] == $m){
										 echo 'selected';
									}
								?> value = "<?= $m ?>"><?= $m ?></option>
						<?php endforeach ?>
					</select>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="banheiros">Banheiros</label>
					<select class="form-select" aria-label="Default select example" name="banheiros" id= "banheiros" required>
						<?php foreach($molde[1] as $m) : ?> 
							<option  <?php
									if($edit['banheiros'] == $m){
										 echo 'selected';
									}
								?> value = "<?= $m ?>"><?= $m ?></option>
						<?php endforeach ?>
					</select>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="suites">Suítes</label>
					<select class="form-select" aria-label="Default select example" name="suites" id= "suites" required> 
						<?php foreach($molde[1] as $m) : ?> 
							<option  <?php
									if($edit['suites'] == $m){
										 echo 'selected';
									}
								?> value = "<?= $m ?>"><?= $m ?></option>
						<?php endforeach ?>
					</select>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="endereco">Endereço</label>
					<textarea name="endereco" id="endereco" rows="5" class="form-control" required> <?= isset($edit) ? $edit["endereco"] : "" ?> </textarea>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="preco">Preço</label>
					<input type="text" class="form-control" name="preco" id="preco" placeholder="Preço" required value="<?= isset($edit) ? $edit["preco"] : "" ?>" >
					
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="imagem">Imagem</label>
					<input type="file" class="form-control" name="imagem" id="imagem" >
				</div>
			</div>

			<div class="col-md-6">
				<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Salvar</button>
				<a href="<?= base_url()?>listar" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancelar</a>			
			</div>
			


		</form>
		
	</div>
</main>

