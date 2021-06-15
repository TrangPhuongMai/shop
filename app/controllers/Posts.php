<?php
  class Posts extends Controller {
    public function __construct(){
    $this->PostsModel = $this->model('Post');
    }

    public function index(){
    $products = $this->PostsModel->getproduct();

    $data = ['products' => $products];

      $this->view('posts/index', $data);
    }

    public function add(){


        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
              'name' => trim($_POST['name']),
              'catid' => trim($_POST['catid']),
              'price' => trim($_POST['price']),
              'descripton' => trim($_POST['descripton']),

            ];

        if(empty($data['title_err']) && empty($data['body_err'])){
          // Validated
          if($this->PostsModel->addproduct($data)){
            flash('post_message', 'Post Added');
            redirect('posts');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('posts/add', $data);
        }


        }
        else {

        $data = ['name' => '',
                'catid' => '',
                'price' => '',
                'descripton' => '',
                ];


        $this->view('posts/add', $data);
        }
    }

    public function show($id){
      $product = $this->PostsModel->getProductsById($id);

      $data = [
        'product' => $product,
      ];

      $this->view('posts/show', $data);
    }


    public function edit($id){


        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'name' => trim($_POST['name']),
                'catid' => trim($_POST['catid']),
                'price' => trim($_POST['price']),
                'descripton' => trim($_POST['descripton']),

            ];

            if(empty($data['title_err']) && empty($data['body_err'])){
                    echo '=======================================================';
                if($this->PostsModel->updateproduct($data)){
                flash('post_message', 'Post edited');
                redirect('posts');
                } else {
                die('Something went wrong');
                }
            } else {
                 echo '=======================================================';
                // Load view with errors
                $this->view('posts/edit', $data);
            }


            }
        else {
        echo '//////////=========================ELSE==========';
            $product =  $this->PostsModel->getProductsById($id);


            $data = ['id' => $id,
                    'name' => $product->name,
                    'catid' => $product->catid,
                    'price' => $product->price,
                    'descripton' => $product->descripton,
                    ];


            $this->view('posts/edit', $data);
        }
    }

    public function delete($id){
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            if($this->PostsModel->deleteproduct($id)){
                flash('post_message', 'Post deleted');
                //redirect('posts/delete.php');
            } else {
                die('Something went wrong');
         }}
        else{
            //redirect('posts');
        }
    }
  }
?>
