<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Wellness Resources</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body{
    background:linear-gradient(135deg,#dbeafe,#f3e8ff,#fef9c3);
    font-family:Arial,sans-serif;
}

.title{
    text-align:center;
    font-size:36px;
    font-weight:bold;
    margin:35px 0;
    color:#4f46e5;
}

.card{
    border:none;
    border-radius:18px;
    padding:10px;
    max-width:290px;
    margin:auto;
    transition:all .35s ease;
    cursor:pointer;
}

.card:hover{
    transform:translateY(-8px) scale(1.02);
    box-shadow:0 12px 25px rgba(0,0,0,.18);
}

.emoji{
    font-size:42px;
    transition:.35s;
}

.card:hover .emoji{
    transform:scale(1.15) rotate(8deg);
}

h4{
    font-size:22px;
    font-weight:bold;
    color:#4f46e5;
    margin-top:10px;
}

.card ul{
    padding-left:18px;
    font-size:14px;
    margin-top:10px;
}

.card ul li{
    margin-bottom:6px;
}

.back-btn{
    display:flex;
    justify-content:center;
    margin:35px 0;
}

.back-btn .btn{
    border-radius:12px;
    padding:10px 25px;
    transition:.3s;
}

.back-btn .btn:hover{
    transform:translateY(-3px);
}

</style>
</head>
<body>
<div class="container">
<h1 class="title">🧠 Wellness Resources</h1>
<div class="row g-4">
    <div class="col-md-4">
        <div class="card shadow p-4 h-100 bg-warning-subtle">
            <div class="emoji text-center">😊</div>
            <h4 class="text-center mt-2">Happy</h4>
            <ul>
                <li>Keep smiling every day.</li>
                <li>Spend time with family and friends.</li>
                <li>Continue your healthy routine.</li>
            </ul>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow p-4 h-100 bg-light">
            <div class="emoji text-center">😐</div>
            <h4 class="text-center mt-2">Neutral</h4>
            <ul>
                <li>Take a short walk.</li>
                <li>Listen to relaxing music.</li>
                <li>Read a book or try a hobby.</li>
            </ul>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow p-4 h-100 bg-info-subtle">
            <div class="emoji text-center">😔</div>
            <h4 class="text-center mt-2">Sad</h4>
            <ul>
                <li>Practice deep breathing.</li>
                <li>Talk to someone you trust.</li>
                <li>Remember better days are coming.</li>
            </ul>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow p-4 h-100" style="background:#f3e8ff;">
            <div class="emoji text-center">🤩</div>
            <h4 class="text-center mt-2">Excited</h4>
            <ul>
                <li>Celebrate your achievements.</li>
                <li>Stay focused on your goals.</li>
                <li>Learn something new today.</li>
            </ul>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow p-4 h-100 bg-danger-subtle">
            <div class="emoji text-center">😡</div>
            <h4 class="text-center mt-2">Angry</h4>
            <ul>
                <li>Count slowly from 1 to 10.</li>
                <li>Take deep breaths.</li>
                <li>Drink water and relax.</li>
            </ul>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow p-4 h-100 bg-success-subtle">
            <div class="emoji text-center">😴</div>
            <h4 class="text-center mt-2">Tired</h4>
            <ul>
                <li>Take enough rest.</li>
                <li>Stay hydrated.</li>
                <li>Sleep for 7–8 hours.</li>
            </ul>
        </div>
    </div>
</div>
<div class="back-btn">
<a href="<?= base_url('dashboard') ?>" class="btn btn-primary btn-lg">
← Back to Dashboard
</a>
</div>
</div>
</body>
</html>