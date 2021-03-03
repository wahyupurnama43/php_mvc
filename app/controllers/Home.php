<?php 


class Home extends Controller
{
    public function index()
    {
        $data['product'] = $this->model('M_Home')->getProductData();
        $data['blog'] = $this->model('M_Home')->getBlogData();
        $data['banner'] = $this->model('M_Home')->getAll();
        $data['review'] = $this->model('M_Home')->getReview();
        $this->view('template/homepage/header');
        $this->view('hompage/home',$data);
        $this->view('template/homepage/footer');
    }
    
}