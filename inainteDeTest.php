<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button id = "butt">Click me</button>
    <p id = "text">habar n-am</p>
    <script>
        document.addEventListener(DOMcontentLoaded, function() {
        const button = document.getElementById('butt');
        const text = document.getElementById('text');
        button.addEventListener('click', function() {
            text.textContent = 'Ai dat click an plm';
        });
    </script>
</body>
</html>