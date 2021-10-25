<?php

function permissao(){
    $ci = get_instance();
    $logado = $ci->session->userdata("logado");
    if(!$logado){
        $ci->session->set_flashdata("danger", "Você precisa estar logado para acessar esta página");
        redirect("login");
    }
    return $logado;
}