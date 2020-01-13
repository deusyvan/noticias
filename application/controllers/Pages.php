<?php 
defined('BASEPATH') OR exit('Não é permitido acesso direto ao script');
/* Classe carrega nossas páginas estáticas*/
class Pages extends CI_Controller {
    public function view($page = 'home'){
        //Verifica se a página existe
        if (!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }
        //Coloca a primeira letra em maiúscula e define o título
        $data['title'] = ucfirst($page);
        
        //Buscar a view:
        //Carrega o cabecalho do template
        $this->load->view('templates/header',$data);
        //Carrega o corpo da página
        $this->load->view('pages/'.$page, $data);
        //Carrega o rodapé do template
        $this->load->view('templates/footer', $data);
        
        
        
    }
}