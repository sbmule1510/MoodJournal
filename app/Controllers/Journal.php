<?php
namespace App\Controllers;
use App\Models\MoodModel;
class Journal extends BaseController
{
    public function timeline()
    {
        $moodModel = new MoodModel();
        $data['moods'] = $moodModel
            ->where('user_id', session()->get('user_id'))
            ->orderBy('id', 'DESC')
            ->findAll();
        return view('history', $data);
    }
}