document.addEventListener('DOMContentLoaded', () => {
    const lists = document.querySelectorAll('.list');
    lists.forEach(list => {
        new Sortable(list, {
            group: 'shared',
            animation: 150,
            filter: 'h3, .add-card',
        });

        // Add delete buttons to all existing tasks
        list.querySelectorAll('.task').forEach(task => {
            ensureDeleteButton(task);
        });

        // Add card functionality
        const addBtn = list.querySelector('.add-card');
        if (addBtn) {
            addBtn.addEventListener('click', () => {
                const cardText = prompt('Enter card title:');
                if (cardText && cardText.trim() !== '') {
                    const newTask = document.createElement('div');
                    newTask.className = 'task';
                    newTask.append(document.createTextNode(cardText));
                    ensureDeleteButton(newTask);
                    list.insertBefore(newTask, addBtn);
                }
            });
        }
    });

    // Helper to add a delete button if not present
    function ensureDeleteButton(task) {
        if (!task.querySelector('.delete-card')) {
            const btn = document.createElement('button');
            btn.className = 'delete-card btn btn-sm btn-danger ms-2';
            btn.textContent = '×';
            btn.style.float = 'right';
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                task.remove();
            });
            task.appendChild(btn);
        }
    }
});