<?php
namespace App\Controllers;
use App\Models\UserModel;
class Auth extends BaseController
{
    public function register()
    {
        return view('register');
    }
    public function saveRegister()
{
    $userModel = new UserModel();
    $data = [
        'name' => $this->request->getPost('name'),
        'email' => $this->request->getPost('email'),
        'password' => password_hash(
            $this->request->getPost('password'),
            PASSWORD_DEFAULT
        )
    ];
    $userModel->insert($data);
    return redirect()->to('/login');
}
    public function logout()
{
    session()->destroy();
    return redirect()->to('/login');
}
    public function login()
    {
        return view('login');
    }
    public function checkLogin()
{
    $userModel = new UserModel();
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');
    $user = $userModel->where('email', $email)->first();
    if ($user && password_verify($password, $user['password'])) {
        session()->set([
            'user_id'   => $user['id'],
            'name'      => $user['name'],
            'logged_in' => true
        ]);
        return redirect()->to('/dashboard');
    }
    return redirect()->to('/login')->with('error', 'Invalid Email or Password');
}
}