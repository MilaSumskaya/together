<!-- Модальное окно загрузки причины-->

<!-- Modal -->
<div class="modal fade" id="reasonModal" tabindex="-1" aria-labelledby="reasonModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      <form method="POST" action="admin/reason" enctype="multipart/form-data">
  <div class="mb-3">
  <h3>Подтверждение</h3>
  <p>Расскажите, почему заявка недействительна</p>
  <input type="text" class="form-control"  name="rejection_reason" id="rejection_reason" required>


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