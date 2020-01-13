<?php 
class News extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        //Carregando o model
        $this->load->model('news_model');
        //Carregar o helper
        $this->load->helper('url_helper');
        
    }

    public function index() {
        //Busca os dados através do model
        $data['news'] = $this->news_model->get_news();
        //carrega o titulo
        $data['title'] = 'Todas as notícias';
        
        //Carrega as views
        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer', $data);
    }
    
    public function view($uri){
        //Carrega o model
        $data['news_item'] = $this->news_model->get_news($uri);
        //Verifica se existe senão erro 404
        if(empty($data['news_item'])){
            show_404();
        }
        //Carrega o titulo da noticia
        $data['title'] = $data['news_item']['title'];
        
        //Carrega as views
        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer', $data);
        
    }
}