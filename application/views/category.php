<body>
    <div class="container">
    <h3>Категории</h3>
    <form action="/admin/ins_cat" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Название</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <button type="submit" class="btn btn-primary">Добавить категорию</button>
    </form>
    <form action="/admin/del_cat" method="POST">
        <div class="mb-3">
            <label for="category" class="form-label">Категория</label>
            <select class="form-control" id="id_category" name="id_category" required>
                <?php foreach ($category as $row) {
                    echo '<option value="'.$row['id_category'].'">'.$row['name'].'</option>
                    ';
                }
                    ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Удалить категорию</button>
    </form>
    </div>
</body>