<?php

namespace App\controllers;

use App\Controllers\BaseController;
use App\Models\OrderModel;
use App\Models\DrinkModel;
use App\Models\FoodModel;

class OrderController extends BaseController
{
    protected $OrderModel;

    public function __construct()
    {
        $this->OrderModel = new OrderModel();
        $this->DrinkModel = new DrinkModel();
        $this->FoodModel = new FoodModel();
    }

    public function index()
    {
        $orders = $this->OrderModel->select('order.*,drink.drink_name,food.food_name')
        ->join('drink', 'drink.id = order.drink_name_id')
        ->join('food', 'food.id = order.food_name_id')->findAll();

        foreach ($orders as $key => $order)
        {
            $orders[$key]['total_price'] = $this->rupiah($order['total_price']);
            $orders[$key]['total_paid'] = $this->rupiah($order['total_paid']);
            $orders[$key]['total_return'] = $this->rupiah($order['total_return']);
        }

        $data = [
            'title' => 'Order Management',
            'page_title' => 'Order List',
            'orders' => $orders
        ];
        return view('order/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Order Management',
            'page_title' => 'Create Order',
            'orders' => $this->OrderModel->findAll(),
            'drinks' => $this->DrinkModel->findAll(),
            'foods' => $this->FoodModel->findAll(),
        ];

        return view('order/create', $data);
    }

    public function store()
    {
        $drink_name = $this->request->getPost('drink_name');
        $food_name = $this->request->getPost('food_name');
        $date = $this->request->getPost('date');
        $total_price = $this->request->getPost('total_price');
        $total_paid = $this->request->getPost('total_paid');
        $total_return = $this->request->getPost('total_return');

        $new_order = [
            'drink_name_id' => $drink_name,
            'food_name_id' => $food_name,
            'date' => $date,
            'items' => 1,
            'total_price' => $total_price,
            'total_paid' => $total_paid,
            'total_return' => $total_return,
        ];

        $insert_order = $this->OrderModel->insert($new_order);
        return redirect()->to('order');
    }

    public function edit($order_id)
    {
        $data = [
            'title' => 'Order Management',
            'page_title' => 'Edit Order',
            'order' => $this->OrderModel->find($order_id),
            'drinks' => $this->DrinkModel->findAll(),
            'foods' => $this->FoodModel->findAll(),
        ];
        return view('order/edit', $data);
    }

    public function update()
    {
        $order_id = $this->request->getPost('order_id');
        $drink_name = $this->request->getPost('drink_name');
        $food_name = $this->request->getPost('food_name');
        $date = $this->request->getPost('date');
        $total_price = $this->request->getPost('total_price');
        $total_paid = $this->request->getPost('total_paid');
        $total_return = $this->request->getPost('total_return');

        $edit_order = [
            'drink_name_id' => $drink_name,
            'food_name_id' =>$food_name,
            'date' => $date,
            'total_price' => $total_price,
            'total_paid' => $total_paid,
            'total_return' => $total_return,
        ];

        $update_order = $this->OrderModel->update($order_id, $edit_order);
        return redirect()->to('order');
    }

    public function delete($order_id)
    {
        $this->OrderModel->delete($order_id);
        return redirect()->to('order');
    }

    public function rupiah($angka)
    {
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
    }
}