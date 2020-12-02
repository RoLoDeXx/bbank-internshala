<?php
class Posts extends CI_Controller{
    public function index(){
        $data['title'] = 'Sample Requests';

        $data['posts'] = $this->post_model->get_posts();

        $this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }

    public function create(){

        $data['title'] = 'Create Request';
        $this->form_validation->set_rules('donor_name','Name','required');
        $this->form_validation->set_rules('body','Body','required');


        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('posts/create', $data);
            $this->load->view('templates/footer');
        }
        else{
            $this->post_model->create_post();
            $this->session->set_flashdata("post_created","Your post has been added");
            redirect('posts');
        }

    }

    public function delete($id){
        if(!$this->session->userdata('logged_in')){
            redirect('users/login');
        }

        $this->post_model->delete_post($id);
        $this->session->set_flashdata('post_deleted', 'Your post has been deleted');
        redirect('posts');
    }

    public function view($slug = NULL){
        $data['post'] = $this->post_model->get_posts($slug);
        $post_id = $data['post']['id'];
        $data['comments'] = $this->comment_model->get_comments($post_id);
        $data['group'] = $data['post']['type'];

        if(empty($data['post'])){
            show_404();
        }

        $data['title'] = $data['post']['title'];


        $this->load->view('templates/header');
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer');
    }
}
?>