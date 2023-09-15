<div class="container">
    <div class="row">
    <div class="col-1">
    </div>
    <div class="col-10">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php
  foreach($app as $row) {
      echo '
  <div class="col">
    <div class="card">
    <img id="after_photo'.$row['id'].'" src="img/'.$row['after_photo'].'" class="card-img-top after_photo"  alt="Выполненная заявка '.$row['id'].'">
    <img id="before_photo'.$row['id'].'" src="img/'.$row['before_photo'].'" class="card-img-top before_photo"  alt="Выполненная заявка '.$row['id'].'">
      <div class="card-body">
      <h5 class="card-title">'.$row['app_name'].'</h5>
      <p class="card-text">'.$row['description'].'</p>
      <p class="card-text">Категория: '.$row['name'].'</p>
      <p class="card-text"><small class="text-muted"> От '.$row['submission_date'].' до '.$row['completion_date'].'</small></p>
      </div>
    </div>
  </div>
      ';} ?>
</div>
    </div>
    <div class="col-1">
    </div>
  </div>
</div>