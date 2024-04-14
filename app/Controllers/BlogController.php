<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BlogModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;

class BlogController extends BaseController
{
    use ResponseTrait;
    
    private $blogObj;

    public function __construct()
    {
        $this->blogObj = new BlogModel();
    }
    public function createBlog()
    {
        $rules = [
            'blog_title' => 'required|string',
            'blog_description' => 'required'
        ];
        if (!$this->validate($rules)){
            return $this->respond([
                'message' => 'error',
                'data' => []
            ],200);
        }else{
            $blog = ([
                'blog_title' => $this->request->getVar('blog_title'),
                'blog_description' => $this->request->getVar('blog_description'),
            ]);
            $this->blogObj->insert($blog);
            return $this->respond([
                'message' => 'success',
                'data' => $blog
            ],200);
        }
    }
    public function showBlogs()
    {
        $blogs = $this->blogObj->findAll();
        return $this->response->setJSON($blogs);
    }
    public function showblog($id){
        $blogs = $this->blogObj->find($id);
        return $this->response->setJSON($blogs);
    }
}
