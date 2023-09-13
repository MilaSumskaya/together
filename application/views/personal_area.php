<!-- Блок с данными пользователя -->
<!-- <div class="container mt-4">
    <h3>Данные пользователя</h3>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Имя пользователя: [Имя пользователя из базы данных]</h5>
            <p class="card-text">Email: [Email пользователя из базы данных]</p>
            <p class="card-text">Статус: [Статус пользователя из базы данных]</p>
        </div>
    </div>
</div> -->
<div class="container">
    <div class="row">
    <div class="col-1">
    </div>
    <div class="col-10">

        <div class="header-h1 header-h1-center">
        <h1>Ваши заявки</h1>
</div>

        <table class="table table-striped table-hover">
            <form>
        <thead>
        <tr scope="col">
          <th>Временная метка </th>
          <th>Название заявки </th>
          <th>Описание заявки </th>
          <th>Категория заявки </th>
          <th>Статус заявки </th>
          <th>Удалить</th>
          </tr>
        </thead>
        <tbody>
<?php
  foreach($appl as $row) {
        echo '
        <tr scope="row">
          <td>'.$row['submission_date'].'</td>
          <td>'.$row['app_name'].'</td>
          <td>'.$row['description'].'</td>
          <td>'.$row['name'].'</td>
          <td>'.$row['status'].'</td>
        ';
        if ($row['status'] == 0){
            echo '<td><button type="button" class="btn btn-info deleteButton"  data-id="'.$row['id'].'" data-bs-toggle="modal" data-bs-target="#applModal">Удалить</button>
            </td>
          </tr>';
            }
    }
    ?>
        </tbody>
    </form>
      </table>

  </div>
    <div class="col-1">
    </div>
  </div>
</div>
<!-- Модальное окно подтверждения удаления -->

<!-- Modal -->
<div class="modal fade" id="applModal" tabindex="-1" aria-labelledby="applLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="kursLabel">Удаление заявок</h5>

      </div>
      <div class="modal-body">
      <form method="POST" action="user/del">
  <div class="mb-3">
    <input type='hidden' name='id' id='id'>
  <h3>Подтверждение удаления</h3>
  <p>Вы уверены, что хотите удалить эту заявку?</p>
</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Удалить заявку</button>
      </div>
</form>
    </div>
  </div>
</div>