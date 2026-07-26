<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Mood Journal</title>
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
            <a href="/login" class="btn btn-outline-light me-2">Login</a>
        </div>
    </div>
</nav>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded-4 p-4">
                <h2 class="text-center mb-4">Create Account</h2>
                <form action="<?= base_url('register') ?>" method="post" autocomplete="off">
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your name"  required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password" autocomplete="new-password" required>
                    </div>
                    <button type="submit" class="btn btn-warning w-100">
                        Register
                    </button>
                </form>
                <p class="text-center mt-3">
                    Already have an account?
                    <a href="/login">Login</a>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>