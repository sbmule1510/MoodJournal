<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About - Mood Journal</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body{
    background:linear-gradient(135deg,#eef2ff,#f5f3ff,#fef9c3);
    font-family:'Segoe UI',sans-serif;
    min-height:100vh;
}

.navbar{
    background:linear-gradient(90deg,#5B86E5,#7F7FD5);
    padding:16px 0;
    box-shadow:0 4px 12px rgba(0,0,0,.12);
}

.navbar-brand{
    font-size:34px;
    font-weight:800;
}

.nav-btn{
    border-radius:30px;
    padding:10px 22px;
    transition:.3s;
}

.nav-btn:hover{
    transform:translateY(-2px);
}

.hero{
    text-align:center;
    padding:70px 0 40px;
}

.hero h1{
    font-size:64px;
    font-weight:800;
    color:#1f2937;
    margin-bottom:18px;
}

.hero p{
    font-size:22px;
    color:#6b7280;
    max-width:760px;
    margin:auto;
    line-height:1.7;
}

.hero .btn{
    margin-top:28px;
    border-radius:30px;
    padding:14px 34px;
    font-weight:600;
}

.feature-card{
    background:#fff;
    border:none;
    border-radius:26px;
    padding:34px 28px;
    text-align:center;
    height:100%;
    box-shadow:0 12px 30px rgba(79,70,229,.08);
    transition:all .4s ease;
    animation:fadeUp .8s ease;
}

.feature-card:hover{
    transform:translateY(-12px) scale(1.02);
    box-shadow:0 22px 40px rgba(79,70,229,.18);
}

.icon-circle{
    width:82px;
    height:82px;
    border-radius:50%;
    background:linear-gradient(135deg,#6366f1,#8b5cf6);
    display:flex;
    align-items:center;
    justify-content:center;
    color:#fff;
    font-size:40px;
    margin:0 auto 20px;
    transition:.4s;
}

.feature-card:hover .icon-circle{
    transform:rotate(10deg) scale(1.1);
}

.feature-card h3{
    font-weight:700;
    color:#111827;
    margin-bottom:16px;
}

.feature-card p{
    color:#6b7280;
    line-height:1.7;
    font-size:16px;
}

.section-title{
    text-align:center;
    font-size:36px;
    font-weight:800;
    color:#1f2937;
    margin:70px 0 40px;
}

.small-feature{
    background:#fff;
    border-radius:20px;
    padding:26px;
    text-align:center;
    box-shadow:0 8px 20px rgba(0,0,0,.06);
    transition:.3s;
}

.small-feature:hover{
    transform:translateY(-6px);
}

@keyframes fadeUp{
from{opacity:0;transform:translateY(30px);}
to{opacity:1;transform:translateY(0);}
}

@media(max-width:768px){
    .hero h1{font-size:44px;}
    .hero p{font-size:18px;}
}

</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
<div class="container">
<a class="navbar-brand" href="/">🧠 MoodJournal</a>
<div class="d-flex gap-2">
    <a href="/" class="btn btn-outline-light nav-btn">Home</a>
    <a href="/login" class="btn btn-outline-light nav-btn">Login</a>
    <a href="/register" class="btn btn-warning nav-btn">Register</a>
</div>
</div>
</nav>
<section class="hero container">
    <h1>About Mood Journal</h1>
    <p>
        Track your daily emotions, write your thoughts, and improve your mental wellness
        with a simple and supportive journaling experience.
    </p>
    <a href="/register" class="btn btn-warning btn-lg">🚀 Get Started</a>
</section>
<div class="container">
<div class="row g-4">
    <div class="col-lg-4 col-md-6">
        <div class="feature-card">
            <div class="icon-circle">🎯</div>
            <h3>Our Mission</h3>
            <p>
                Help people track their daily mood and improve their mental well-being.
            </p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="feature-card">
            <div class="icon-circle">👀</div>
            <h3>Our Vision</h3>
            <p>
                Encourage healthy habits through simple daily mood tracking.
            </p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mx-auto">
        <div class="feature-card">
            <div class="icon-circle">💡</div>
            <h3>Why Mood Journal?</h3>
            <p>
                Record moods, write daily notes, and understand your emotions better.
            </p>
        </div>
    </div>
</div>
<h2 class="section-title">✨ Key Features</h2>
<div class="row g-4">
    <div class="col-md-3 col-6">
        <div class="small-feature">
            <div class="fs-2 mb-2">😊</div>
            <h6>Track Mood</h6>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="small-feature">
            <div class="fs-2 mb-2">📝</div>
            <h6>Write Journal</h6>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="small-feature">
            <div class="fs-2 mb-2">📈</div>
            <h6>Mood Analytics</h6>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="small-feature">
            <div class="fs-2 mb-2">💜</div>
            <h6>Wellness Tips</h6>
        </div>
    </div>
</div>
</div>
</body>
</html>