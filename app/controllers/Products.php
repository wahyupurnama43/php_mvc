<?php 


class Products extends Controller
{
    public function index()
    {
        $data['product'] = $this->model('M_Product')->getProductData();
        $data['banner'] = $this->model('M_Product')->getBanner();
        $this->view('template/homepage/header');
        $this->view('products/index',$data);
        $this->view('template/homepage/footer');
    }
    
    public function detail($id)
    {
        $ID = Encripsi::encode('decrypt',$id);
        $data['product'] = $this->model('M_Product')->getProductIJ($ID);
        $data['gallery'] = $this->model('M_Product')->getByAllId('gallery',$ID,'id_product');
        $this->view('template/homepage/product/header');
        $this->view('products/detail',$data);
        $this->view('template/homepage/product/footer');
    }
}