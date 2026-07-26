<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mood Journal</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
<div class="container">
<a class="navbar-brand fw-bold" href="#">
🧠 MoodJournal
</a>
<div>
<a href="/about" class="btn btn-outline-light me-2">About</a>
<a href="/login" class="btn btn-outline-light me-2">Login</a>
<a href="/register" class="btn btn-warning">Register</a>
</div>
</div>
</nav>
<section class="hero">
<div class="container">
<div class="row align-items-center">
<div class="col-md-6">
<h1>Track Your Mood,
Transform Your Life</h1>
<p>
Record your daily mood, write journals,
and monitor your mental wellness in one place.
</p>
<a href="/register" class="btn btn-warning btn-lg mt-3">
Get Started
</a>
<p class="mt-3 text-secondary">
    ✔ Track Mood &nbsp;&nbsp;
    ✔ Daily Journal &nbsp;&nbsp;
    ✔ Weekly Report
</p>
</div>
<div class="col-md-6 text-center">
<img src="<?= base_url('images/home.png'); ?>" class="img-fluid hero-img" alt="Mood Journal">
</div>
</div>
</div>
</section>
<section class="container my-5">
<h2 class="text-center mb-5">
Why Choose MoodJournal?
</h2>
<div class="row">
<div class="col-md-4">
<div class="card feature-card">
<div class="card-body text-center">
<i class="bi bi-heart-pulse display-4" style="color:#6C63FF;"></i>
<h4 class="mt-3">Mood Tracking</h4>
<p>Track your daily emotions easily.</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card feature-card">
<div class="card-body text-center">
<i class="bi bi-journal-text display-4" style="color:#00C897;"></i>
<h4 class="mt-3">Journal</h4>
<p>Write your daily thoughts.</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card feature-card">
<div class="card-body text-center">
<i class="bi bi-bar-chart display-4" style="color:#FF6B6B;"></i>
<h4 class="mt-3">Reports</h4>
<p>View your weekly mood reports.</p>
</div>
</div>
</div>
</div>
</section>
</body>
</html>