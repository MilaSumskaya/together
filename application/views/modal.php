<!-- Модальное окно подтверждения удаления -->

<!-- Modal -->
<div class="modal fade" id="applModal" tabindex="-1" aria-labelledby="applLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      <form method="GET" action="user/del">
  <div class="mb-3">
  <h3>Подтверждение удаления</h3>
  <p>Вы уверены, что хотите удалить эту заявку?</p>
  <input type="hidden" name="id" id="id">
</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Удалить заявку</button>
      </div>
</form>
    </div>
  </div>
</div>