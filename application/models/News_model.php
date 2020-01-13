<?php 
class News_model extends CI_Model{
    //Funcão que carrega as configurações para acesso ao banco de dados
    public function __construct(){
        $this->load->database();
    }
    
    //buscar listas de noticias
    public function get_news($uri = FALSE){
        //Verifica se uri é false senão traz a noticia específica
        if($uri === FALSE){
            //Buscando a lista de noticias
            $query = $this->db->get('news');
            return $query->result_array();
        } else {
            //Buscando uma única noticia
            $query = $this->db->get_where('news', array('uri'=>$uri));
            return $query->row_array();
        }
    }
}