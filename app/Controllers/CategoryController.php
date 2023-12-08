<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;

class CategoryController extends BaseController
{
    protected $CategoryModel;

    public function __construct()
    {
        $this->CategoryModel = new CategoryModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Category Management',
            'page_title' => 'Category List',
            'categorys' => $this->CategoryModel->findAll()
        ];
        return view('category/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Category Management',
            'page_title' => 'Create Category',
        ];

        return view('category/create', $data);
    }

    public function store()
    {
        $category = $this->request->getPost('category');

        $new_category = [
            'category' => $category,
        ];

        $insert_category = $this->CategoryModel->insert($new_category);
        return redirect()->to('category');
    }

    public function edit($category_id)
    {
        $data = [
            'title' => 'Category Management',
            'page_title' => 'Edit Category',
            'category' => $this->CategoryModel->find($category_id)
        ];
        return view('category/edit', $data);
    }

    public function update()
    {
        $category_id = $this->request->getPost('category_id');
        $category = $this->request->getPost('category');

        $edit_category = [
            'category' => $category,
        ];

        $update_category = $this->CategoryModel->update($category_id, $edit_category);
        return redirect()->to('category');
    }

    public function delete($category_id)
    {
        $this->CategoryModel->delete($category_id);
        return redirect()->to('category');
    }
}