<?php
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Translation Demo</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body class="light">
<div class="container">
    <h1>Translation Demo</h1>
    <button id="themeToggle">Toggle Theme</button>
    <div>
        <label>From
            <select id="from">
                <option value="zh">Chinese</option>
                <option value="ug">Uyghur</option>
                <option value="kk">Kazakh</option>
            </select>
        </label>
        <label>To
            <select id="to">
                <option value="ug">Uyghur</option>
                <option value="kk">Kazakh</option>
                <option value="zh">Chinese</option>
            </select>
        </label>
    </div>
    <textarea id="text" placeholder="Enter text here"></textarea>
    <pre id="result"></pre>
</div>
<script src="assets/script.js"></script>
</body>
</html>
