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
          </tr>
        ';
        if ($row['status'] == 0){
            echo '<td>Заявка на рассмотрении</td>
          <td>
            <a href="user/del?id_education='.$row['id_education'].'"><button type="button" class="btn btn-info">Отказаться</button></a>
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