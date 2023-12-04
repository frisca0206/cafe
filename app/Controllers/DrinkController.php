<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DrinkModel;


class DrinkController extends BaseController
{
    protected $DrinkModel;

    public function __construct()
    {
        $this->DrinkModel = new DrinkModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Drink Management',
            'page_title' => 'Drink List',
            'drinks' => $this->DrinkModel->findAll()
        ];
        return view('drink/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Drink Management',
            'page_title' => 'Drink List',
        ];

        return view('drink/create', $data);
    }

    public function store()
    {
        $drink_name = $this->request->getPost('drink_name');
        $price = $this->request->getPost('price');

        $new_drink = [
            'drink_name' => $drink_name,
            'price' => $price,
        ];

        $insert_drink = $this->DrinkModel->insert($new_drink);
        return redirect()->to('drink');
    }

    public function edit($drink_id)
    {
        $data = [
            'title' => 'Drink Management',
            'page_title' => 'Edit Drink',
            'drink' => $this->DrinkModel->find($drink_id)
        ];
        return view('drink/edit', $data);
    }

    public function update()
    {
        $drink_id = $this->request->getPost('drink_id');
        $drink_name = $this->request->getPost('drink_name');
        $price = $this->request->getPost('price');

        $edit_drink = [
            'drink_name' => $drink_name,
            'price' => $price,
        ];

        $update_drink = $this->DrinkModel->update($drink_id, $edit_drink);
        return redirect()->to('drink');
    }

    public function delete($drink_id)
    {
        $this->DrinkModel->delete($drink_id);
        return redirect()->to('drink');
    }
}