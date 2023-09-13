<body>
    <div class="container">
    <h3>Форма заявки</h3>
    <form action="/user/new_app" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="app_name" class="form-label">Название</label>
            <input type="text" class="form-control" id="app_name" name="app_name" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>

        <div class="mb-3">
            <label for="before_photo" class="form-label">Фото проблемы</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
            <input type="file" class="form-control" id="before_photo" name="before_photo" accept="image/*" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Категория</label>
            <select class="form-control" id="category" name="category" required>
                <?php foreach ($categories as $row) {
                    echo '<option value="'.$row['id_category'].'">'.$row['name'].'</option>
                    ';
                }
                    ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Отправить заявку</button>
    </form>
    </div>
</body>