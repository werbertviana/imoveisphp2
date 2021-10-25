<?php

class Usuarios_model extends CI_model {
    
    public function guardar($usuario) 
    {
        $this->db->insert('usuarios', $usuario);
    }
}