<?php
namespace App\Controllers;
use App\Models\MoodModel;
class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }
        $moodModel = new MoodModel();
        $weeklyCount = $moodModel
            ->where('user_id', session()->get('user_id'))
            ->where("YEARWEEK(created_at,1)=YEARWEEK(CURDATE(),1)", null, false)
            ->countAllResults();
        $latestMood = $moodModel
            ->where('user_id', session()->get('user_id'))
            ->orderBy('created_at', 'DESC')
            ->first();
        $moodScore = 0;
        $chartData = $moodModel
    ->select('mood, mood_date')
    ->where('user_id', session()->get('user_id'))
    ->orderBy('mood_date', 'ASC')
    ->findAll();
if ($latestMood) {
    switch ($latestMood['mood']) {

    case '😊 Happy':
        $moodScore = 5;
        break;

    case '🤩 Excited':
        $moodScore = 4;
        break;

    case '😐 Neutral':
        $moodScore = 3;
        break;

    case '😔 Sad':
        $moodScore = 2;
        break;

    case '😡 Angry':
    case '😴 Tired':
        $moodScore = 1;
        break;
}

}
        $data = [
            'weeklyCount' => $weeklyCount,
            'latestMood'  => $latestMood,
            'moodScore'   => $moodScore,
            'chartData'   => $chartData
            ];
        return view('dashboard', $data);
    }
}