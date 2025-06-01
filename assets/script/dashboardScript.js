document.addEventListener('DOMContentLoaded', () => {
    const lists = document.querySelectorAll('.list-tasks');
    lists.forEach(list => {
        new Sortable(list, {
            group: 'shared',
            animation: 150,
        });
    });

    const addBtn = document.querySelectorAll('.add-card');
    addBtn.forEach(button => {
        button.addEventListener('click', () => {
            const taskName = prompt("baga ceva");
            if (!taskName) return;
            const newTask = document.createElement('div');
            newTask.classList.add('task');
            const textNode = document.createTextNode(taskName);
            newTask.append(textNode);

            const delBtn = document.createElement('button');
            delBtn.classList.add('delete-card');
            delBtn.textContent = 'x';
            delBtn.style.float = 'right';
            delBtn.addEventListener('click', () => {
                newTask.remove();
            });
            newTask.appendChild(delBtn);


            const listTasks = button.parentElement.querySelector('.list-tasks');
            listTasks.appendChild(newTask);
        });
    });
});