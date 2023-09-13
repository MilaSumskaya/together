$(document).ready(function() {
    $('#applModal').on('show.bs.modal', function (event) {
        // кнопка, которая вызывает модаль
         var button = $(event.relatedTarget) 
        // получим  data-id_user атрибут
          var id = button.data('id') 
        // получим  data-fio атрибут
        //   var name = button.data('name');
           // Здесь изменяем содержимое модали
          var modal = $(this);
        //  modal.find('.modal-title').text('Вы действительно хотите удалить заявку '+name+' '+id);
         modal.find('.modal-body #id').val(id);
        })
        
});