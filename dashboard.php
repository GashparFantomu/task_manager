<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Board</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/dashboardStyle.css">

</head>
<script type="module" src="assets/script/dashboardScript.js"></script>

<body>

    <div class="container mt-5">
        <h1>Your stupid Kanban Board</h1>
        <div class="board">
            <div class="list">
                <h3>To Do</h3>
                <div class="task">Task 1</div>
                <div class="task">Task 2</div>
                <button class = "add-card">Add Card</button>
            </div>
            <div class="list">
                <h3>In Progress</h3>
                <div class="task">Task 3</div>
                <button class = "add-card">Add Card</button>
            </div>
            <div class="list">
                <h3>Done</h3>
                <div class="task">Task 4</div> 
                <button class = "add-card">Add Card</button>
            </div>
        </div>
    </div>
    <script type="module" src="assets/script/dashboardScript.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>

</html>