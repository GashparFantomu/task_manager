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

            // Get the status from the parent list's <h3>
            const listElement = button.closest('.list');
            const status = listElement.querySelector('h3').textContent.trim();

            // Send to server
            fetch('save_cards.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `task=${encodeURIComponent(taskName)}&status=${encodeURIComponent(status)}`
            })
            .then(response => {
                if (response.ok) {
                    // Optionally, reload the page to show the new card from DB
                    location.reload();
                } else {
                    alert('Eroare la salvarea taskului!');
                }
            });
        });
    });


    document.body.addEventListener('click', function(e) {
        if (e.target.classList.contains('delete-card')) {
            const taskDiv = e.target.closest('.task');
            const taskId = taskDiv.getAttribute('data-id');
            if (confirm('Are you sure you want to delete this card?')) {
                fetch('delete_card.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: `id=${encodeURIComponent(taskId)}`
                })
                .then(response => response.text())
                .then(result => {
                    if (result.trim() === "success") {
                        taskDiv.remove();
                    } else {
                        alert('Failed to delete card!');
                    }
                });
            }
        }
    });
});