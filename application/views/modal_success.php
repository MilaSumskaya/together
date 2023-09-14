<!-- Модальное окно загрузки файла и даты-->

<!-- Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      <form method="POST" action="admin/success" enctype="multipart/form-data">
  <div class="mb-3">
  <h3>Загрузите картинку</h3>
  <p>Загрузите изображение, подтверждающее решение заявки</p>
  <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
  <input type="file" class="form-file-input" id="after_photo" name="after_photo" accept="image/*" required>
    <p>Дата выполнения</p>
    <input type="date" name="completion_date" id="completion_date">


  <input type="hidden" name="id" id="id">
</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Подтвердить</button>
      </div>
</form>
    </div>
  </div>
</div>