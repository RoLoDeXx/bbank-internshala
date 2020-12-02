<?php 
    class Post_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_posts($slug = FALSE){
            if($slug === FALSE){

            $this->db->order_by('id','DESC');
             $query = $this->db->get('posts');
             return $query->result_array();
            }

            $query = $this->db->get_where('posts', array('slug' => $slug));
			return $query->row_array();

        }

        public function delete_post($id){
			$this->db->where('id', $id);
			$this->db->delete('posts');
			return true;
		}

        public function create_post(){
            $slug = url_title($this->input->post('donor_name'));

            $data = array(
                'title' => $this->input->post('donor_name'),
                'body' => $this->input->post('body'),
                'slug' => $slug,
                'type' => $this->input->post('bloodGroup'),
                'age' => $this->input->post('age'),
                'user_id' => $this->session->userdata('user_id')
                
            );

            return $this->db->insert('posts',$data);
        }
    }