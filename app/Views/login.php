<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mood Journal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/">🧠 MoodJournal</a>
        <div>
            <a href="/" class="btn btn-outline-light me-2">Home</a>
            <a href="/about" class="btn btn-outline-light me-2">About</a>
            <a href="/register" class="btn btn-outline-light">Register</a>
        </div>
    </div>
</nav>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded-4 p-4">

                <h2 class="text-center mb-4">Login</h2>
                <?php if(session()->getFlashdata('error')): ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error'); ?>
    </div>
<?php endif; ?>
                <form action="<?= base_url('login') ?>" method="post" autocomplete="off">
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password" autocomplete="current-password" required>
                    </div>
                    <button class="btn btn-warning w-100">
                        Login
                    </button>
                </form>
                <p class="text-center mt-3">
                    Don't have an account?
                    <a href="/register">Register</a>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>