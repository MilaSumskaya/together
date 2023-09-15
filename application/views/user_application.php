<div class="container">
    <div class="row">
    <div class="col-1">
    </div>
    <div class="col-10">

        <div class="header-h1 header-h1-center">
        <h1>Заявки пользователей</h1>
</div>

        <div class = "table-responsive">
        <table class="table table-striped table-hover">
            <form>
        <thead>
        <tr scope="col">
          <th>Временная метка </th>
          <th>Название заявки </th>
          <th>Описание заявки </th>
          <th>Категория заявки </th>
          <th>Имя пользователя</th>
          <th>Статус</th>
          <th>Действия</th>
          </tr>
        </thead>
        <tbody>
<?php
  foreach($app as $row) {
        echo '
        <tr scope="row">
          <td>'.$row['submission_date'].'</td>
          <td>'.$row['app_name'].'</td>
          <td>'.$row['description'].'</td>
          <td>'.$row['name'].'</td>
          <td>'.$row['full_name'].'</td>
        ';
        if ($row['status'] == 0){
            echo '
          <td>Новая</td>
          <td><a href="admin/upd_app_two?id='.$row['id'].'"><button type="button" class="btn btn-success">✓</button></a>
            <button type="button" class="btn btn-danger"  data-id="'.$row['id'].'" data-bs-toggle="modal" data-bs-target="#reasonModal">✗</button></td>
          </tr>';
        } else if ($row['status'] == 1){
          echo '
        <td>Решена</td>
        <td>'.$row['completion_date'].'</td></tr>';
      } else if ($row['status'] == 2){
        echo '
      <td>Принята</td>
      <td><button type="button" class="btn btn-success"  data-id="'.$row['id'].'" data-bs-toggle="modal" data-bs-target="#successModal">Выполнена</button></td>
      </tr>';
    }   else if ($row['status'] == 3){
      echo '
    <td>Отклонена</td>
    <td>'.$row['completion_date'].'</td></tr>';
  };  
    }
    ?>
        </tbody>
    </form>
      </table>
          </div>

  </div>
    <div class="col-1">
    </div>
  </div>
</div>
