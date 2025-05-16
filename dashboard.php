<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Board</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .board {
            display: flex;
            gap: 20px;
            overflow-x: auto;
            padding: 20px;
        }
        .list {
            background: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 300px;
            padding: 10px;
        }
        .task {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Your stupid Kanban Board</h1>
        <div class="board">
            <div class="list">
                <h3>To Do</h3>
                <div class="task">Task 1</div>
                <div class="task">Task 2</div>
            </div>
            <div class="list">
                <h3>In Progress</h3>
                <div class="task">Task 3</div>
            </div>
            <div class="list">
                <h3>Done</h3>
                <div class="task">Task 4</div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const lists = document.querySelectorAll('.list');
        lists.forEach(list => {
            new Sortable(list, {
                group: 'shared',
                animation: 150,
                // onEnd: function (evt) {
                //     console.log(`Moved task from ${evt.from} to ${evt.to}`);
                // }
            });
        });
    });
</script>
</html>