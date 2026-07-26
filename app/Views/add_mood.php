<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Mood</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/">🧠 Mood Journal</a>
        <div>
            <a href="<?= base_url('dashboard') ?>" class="btn btn-outline-light">Dashboard</a>
        </div>
    </div>
</nav>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-lg border-0 rounded-4 p-4">
                <h2 class="text-center mb-4">😊 Add Your Mood</h2>
                <form action="<?= base_url('add-mood') ?>" method="post">
                    <div class="mb-3">
                        <label class="form-label">Select Mood</label>
                        <select name="mood" class="form-select" required>
                            <option value="">Choose Mood</option>
                            <option>😊 Happy</option>
                            <option>😐 Neutral</option>
                            <option>😢 Sad</option>
                            <option>😍 Excited</option>
                            <option>😡 Angry</option>
                            <option>😴 Tired</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Today's Journal</label>
                        <textarea name="journal" class="form-control" rows="5"
                        placeholder="Write about your day..."></textarea>
                    </div>
                    <button class="btn btn-warning w-100">
                        Save Mood
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>