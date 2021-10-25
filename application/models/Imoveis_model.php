<?php

class Imoveis_model extends CI_model {
    
    public function listar() {
        return $this->db->get('imovel')->result_array();
    }

	public function guardar($imovel, $imagem)
	{
		$data = array(
			"tipo_propriedade" => $imovel['tipo_propriedade'],
			"dormitorios" => $imovel['dormitorios'],
			"banheiros" => $imovel['banheiros'],
			"suites" => $imovel['suites'],
			"endereco" => $imovel['endereco'],
			"preco" => $imovel['preco'],
			"imagem" => $imagem
		);

		$this->db->insert('imovel', $data);
	}

	public function editar($id)
	{
		return $this->db->get_where('imovel', array(
			'id'=> $id	
		))->row_array();
	}

	public function atualizar($id, $imovel, $imagem)
	{
		if($imagem == ""){
			$data = array(
				"tipo_propriedade" => $imovel['tipo_propriedade'],
				"dormitorios" => $imovel['dormitorios'],
				"banheiros" => $imovel['banheiros'],
				"suites" => $imovel['suites'],
				"endereco" => $imovel['endereco'],
				"preco" => $imovel['preco'],
			);
			
		}else{
			$data = array(
				"tipo_propriedade" => $imovel['tipo_propriedade'],
				"dormitorios" => $imovel['dormitorios'],
				"banheiros" => $imovel['banheiros'],
				"suites" => $imovel['suites'],
				"endereco" => $imovel['endereco'],
				"preco" => $imovel['preco'],
				"imagem" => $imagem
			);
			
		};
	
		$this->db->where('id', $id);
		return $this->db->update('imovel', $data);
	}

	public function deletar($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('imovel');
	}
}
