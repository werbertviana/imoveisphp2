<?php

class Login_model extends CI_Model {

    public function guardar($email, $senha)
    {
        $this->db->where('email', $email);
        $this->db->where('senha', $senha);
        $usuario = $this->db->get('usuarios')->row_array();
        return $usuario;
    }
}