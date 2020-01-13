<?php 
defined('BASEPATH') OR exit('Não é permitido acesso direto ao script');

class Pages extends CI_Controller {
    public function view($page = 'home'){
        echo 'Essa página '.$page;
    }
}