<?php
namespace App\Controllers;
use App\Models\ResourceModel;
class Resource extends BaseController
{
    public function index()
    {
        $model = new ResourceModel();
        $data['resources'] = $model->findAll();
        return view('resources', $data);
    }
}