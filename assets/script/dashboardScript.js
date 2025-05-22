document.addEventListener('DOMContentLoaded', () => {
    const lists = document.querySelectorAll('.list');
    lists.forEach(list => {
        new Sortable(list, {
            group: 'shared', // allows drag between lists
            animation: 150,
            filter: 'h3, .add-card', // don't drag titles or add buttons
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
                    // Add delete button
                    const delBtn = document.createElement('button');
                    delBtn.className = 'delete-card btn btn-sm btn-danger ms-2';
                    delBtn.textContent = '×';
                    delBtn.style.float = 'right';
                    delBtn.addEventListener('click', (e) => {
                        e.stopPropagation();
                        newTask.remove();
                    });
                    newTask.appendChild(delBtn);
                    list.insertBefore(newTask, addBtn);
                }
            });
        }
        // Add delete button to existing tasks
        list.querySelectorAll('.task').forEach(task => {
            if (!task.querySelector('.delete-card')) {
                const delBtn = document.createElement('button');
                delBtn.className = 'delete-card btn btn-sm btn-danger ms-2';
                delBtn.textContent = '×';
                delBtn.style.float = 'right';
                delBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    task.remove();
                });
                task.appendChild(delBtn);
            }
        });
    });
});