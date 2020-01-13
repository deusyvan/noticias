<?php 
class News_model extends CI_Model{
    //Funcão que carrega as configurações para acesso ao banco de dados
    public function __construct(){
        $this->load->database();
    }
    
    //buscar listas de noticias
    public function get_news($uri = false){
        //Verifica se uri é false senão traz a noticia específica
        if($uri === false){
            //Buscando a lista de noticias
            $query = $this->db->get('news');
            return $query->result_array();
        } else {
            //Buscando uma única noticia
            $query = $this->db->get_where('news', array('uri'=>$uri));
            return $query->row_array();
        }
    }
    
    public function set_news(){
        //Adiciona o ajudador helper
        $this->load->helper('url');
        //Cria a uri com o ajudador POST(title) dash = separador TRUE todas minisculas
        $uri = url_title($this->input->post('title'), 'dash', TRUE);
        //Cria o array data
        $data = array(
            'title'=> $this->input->post('title'),
            'uri' => $uri,
            'text' => $this->input->post('text')
        );
        //Inserir no bano de dados na tabela news
        $this->db->insert('news', $data);
    }
}