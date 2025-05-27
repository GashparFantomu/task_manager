document.addEventListener('DOMContentLoaded', () => {
    const lists = document.querySelectorAll('.list');
    lists.forEach(list => {
        new Sortable(list, {
            group: 'shared',
            animation: 150,
            filter: 'h3, .add-card',
        });
    });
    const addBtn = document.querySelectorAll('.add-card');
    addBtn.forEach(button =>{
        button.addEventListener('click', ()=>{
            const taskName = prompt("baga ceva");
            const newTask = document.createElement('div');
            newTask.classList.add('task')
            const textNode = document.createTextNode(taskName);
            newTask.append(textNode);
            const list = button.parentElement;
            
            //toata porcaria asta pentru a adauga un card...333333333333333333333333333333333333333333333333333we                        
            
            const delBtn = document.createElement('button');
            delBtn.classList.add('delete-card');
            delBtn.textContent = 'x';
            delBtn.style.float = 'right';
            //am adaugat butonul de delete

            delBtn.addEventListener('click', ()=>{
                newTask.remove();
            });
            newTask.appendChild(delBtn);
            list.appendChild(newTask);
        })
    })
});