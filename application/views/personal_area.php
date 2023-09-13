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
            echo '<td><button type="button" class="btn btn-info deleteButton"  data-id="'.$row['id'].'" data-name="'.$row['name'].'" data-bs-toggle="modal" data-bs-target="#applModal">Удалить</button>
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