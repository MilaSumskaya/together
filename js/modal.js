$(document).ready(function() {
    $('.delete-button').click(function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        
        $('#confirmDeleteModal').modal('show');
        
        $('#deleteButton').click(function() {
            window.location.href = url;
        });
    });
});
$(document).ready(function() {
    $('.deleteButton').click(function() {
        var zayavkaId = $(this).data('id');
        $('#deleteModal').modal('show');
        
        $('#confirmDelete').click(function() {
            // Отправка AJAX-запроса на удаление заявки
            $.ajax({
                url: 'user/del',
                type: 'POST',
                data: {id: zayavkaId},
                success: function(response) {
                    // Вывести сообщение об успешном удалении или обработать другие действия
                    alert('Заявка успешно удалена');
                }
            });
            
            // Закрыть модальное окно после удаления
            $('#deleteModal').closeModal();
        });
        
        $('#cancelDelete').click(function() {
            // Закрыть модальное окно без удаления заявки
            $('#deleteModal').closeModal();
        });
    });
});