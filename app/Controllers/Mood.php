<?php
namespace App\Controllers;
use App\Models\MoodModel;
class Mood extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }
        return view('add_mood');
    }
    public function save()
    {
        $moodModel = new MoodModel();
        $moodModel->insert([
    'user_id' => session()->get('user_id'),
    'mood' => $this->request->getPost('mood'),
    'journal' => $this->request->getPost('journal'),
    'mood_date' => date('Y-m-d'),
    'mood_score' => 5
]);
        return redirect()->to('/dashboard');
    }
    public function history()
{
    $moodModel = new \App\Models\MoodModel();

    $data['moods'] = $moodModel
        ->where('user_id', session()->get('user_id'))
        ->orderBy('id', 'DESC')
        ->findAll();
    return view('history', $data);
}
}