$(document).ready(function() {
    $('#successModal').on('show.bs.modal', function (event) {
        // кнопка, которая вызывает модаль
        var button = $(event.relatedTarget) 
        // получим  data-id атрибут
        var id = button.data('id') 
        // Здесь изменяем содержимое модели
        var modal = $(this);
        modal.find('.modal-body #id').val(id);
          });
});