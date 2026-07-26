<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body{
    background:linear-gradient(135deg,#dbeafe,#f3e8ff,#fef9c3);
    min-height:100vh;
    font-family:Arial, sans-serif;
}

.navbar{
    background:#4f46e5;
}

.card{
    border:none;
    border-radius:18px;
}

.action-btn{
width:100%;
margin-bottom:12px;
border-radius:12px;
font-weight:600;
transition:.3s;
}

.action-btn:hover{
transform:translateY(-3px);
}

.action-card{
position:sticky;
top:20px;
max-width:320px;
margin:auto;
}

meter{
    width:100%;
    height:25px;
}

canvas{
    width:100%;
    max-width:420px;
    height:180px;
    margin:auto;
    display:block;
}
</style>
</head>
<body>
<nav class="navbar navbar-dark">
<div class="container">
<a class="navbar-brand fw-bold" href="#">🧠 Mood Journal</a>
<span class="text-white">
Welcome, <?= session()->get('name'); ?>
</span>
</div>
</nav>
<div class="container mt-5">
<div class="row">
<div class="col-lg-8">
    <div class="card shadow p-4 mb-4">
        <h3>😊 Today's Mood</h3>
<?php if ($latestMood): ?>
    <h4 class="text-success mt-3">
        <?= $latestMood['mood']; ?>
    </h4>
    <p class="text-muted">
        Date: <?= $latestMood['mood_date']; ?>
    </p>
<?php else: ?>
    <p class="text-muted">
        No mood added yet.
    </p>
<?php endif; ?>
    </div>
    <div class="card shadow p-4 mb-4">
        <h3>📊 Mood Score</h3>
        <meter value="<?= $moodScore ?>" min="1" max="5"></meter>
        <p class="mt-3">
            Mood Score :
            <b><?= $moodScore ?> / 5</b>
        </p>
    </div>
    <div class="row mt-4">
<div class="col-md-8">
<div class="card shadow p-4 fade-card">
<h3>📈 Mood Trend Chart</h3>
<canvas id="moodChart" width="420" height="180"></canvas>
</div>
</div>
<div class="col-md-4">
<div class="card shadow p-4 fade-card h-100">
<h4>📅 Weekly Mood Summary</h4>
<p class="text-muted">
Total Mood Entries This Week
</p>
<h1 class="text-primary text-center">
    <?= $weeklyCount ?? 0; ?>
</h1>
</div>
</div>
</div>
</div>
<div class="col-lg-4">
    <div class="card shadow p-4 action-card">
        <h4 class="mb-3">⚡ Quick Actions</h4>
        <a href="<?= base_url('add-mood') ?>" class="btn btn-success action-btn">
            😊 Add Journal
        </a>
        <a href="<?= base_url('history') ?>" class="btn btn-primary action-btn">
            📖 Mood Timeline
        </a>
        <a href="<?= base_url('resources') ?>" class="btn btn-warning action-btn">
            📚 Wellness Resources
        </a>
        <a href="<?= base_url('logout') ?>" class="btn btn-danger action-btn">
            🚪 Logout
        </a>
    </div>
</div>
</div>
</div>
<script>
const canvas = document.getElementById("moodChart");
const ctx = canvas.getContext("2d");
const moods = <?= json_encode($chartData); ?>;
function getScore(mood){
    switch(mood){
        case "😊 Happy":
            return 5;

        case "🙂 Good":
            return 4;

        case "😐 Neutral":
            return 3;

        case "😔 Sad":
            return 2;

        case "😡 Angry":
            return 1;

        default:
            return 3;

    }
}
ctx.beginPath();
ctx.strokeStyle = "#4f46e5";
ctx.lineWidth = 3;
moods.forEach((item,index)=>{
    let x = 40 + (index * 70);
    let y = 220 - (getScore(item.mood) * 35);
    if(index==0){
        ctx.moveTo(x,y);
    }else{
        ctx.lineTo(x,y);
    }
    ctx.fillStyle="#4f46e5";
    ctx.beginPath();
    ctx.arc(x,y,4,0,Math.PI*2);
    ctx.fill();
    ctx.beginPath();
    ctx.moveTo(x,y);
});
ctx.beginPath();
moods.forEach((item,index)=>{
    let x = 40 + (index * 70);
    let y = 220 - (getScore(item.mood) * 35);
    if(index==0){
        ctx.moveTo(x,y);
    }else{
        ctx.lineTo(x,y);
    }
});
ctx.strokeStyle="#4f46e5";
ctx.lineWidth=3;
ctx.stroke();
</script>
</body>
</html>