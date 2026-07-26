<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mood Timeline</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body{
    background:linear-gradient(135deg,#dbeafe,#f3e8ff,#fef9c3);
    font-family:Arial, sans-serif;
}

h2{
    font-weight:bold;
    color:#4f46e5;
}

.timeline{
    position:relative;
    margin-top:40px;
    padding-left:35px;
    border-left:4px solid #4f46e5;
}

.timeline-item{
    position:relative;
    background:#fff;
    padding:20px;
    margin-bottom:25px;
    border-radius:15px;
    box-shadow:0 6px 15px rgba(0,0,0,.1);
}

.timeline-item::before{
    content:"";
    position:absolute;
    left:-45px;
    top:28px;
    width:18px;
    height:18px;
    background:#4f46e5;
    border-radius:50%;
}

.mood{
    font-size:22px;
    font-weight:bold;
}

.date{
    color:gray;
    font-size:14px;
}

.back-btn{
    margin-top:20px;
}

</style>
</head>
<body>
<div class="container py-5">
<h2 class="text-center mb-5">📖 Mood Timeline</h2>
<div class="timeline">
<?php if(!empty($moods)): ?>
<?php foreach($moods as $mood): ?>
<div class="timeline-item">
<div class="mood">
<?= $mood['mood']; ?>
</div>
<p class="mt-3">
<?= $mood['journal']; ?>
</p>
<div class="date">
📅 <?= $mood['mood_date']; ?>
</div>
</div>
<?php endforeach; ?>
<?php else: ?>
<div class="alert alert-info">
No mood entries found.
</div>
<?php endif; ?>
</div>
<div class="text-center">
<a href="<?= base_url('dashboard'); ?>" class="btn btn-primary back-btn">
⬅ Back to Dashboard
</a>
</div>
</div>
</body>
</html>