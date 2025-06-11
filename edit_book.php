<?php
include "./conn/conn.php";

$book_id = $_GET["book_id"];
$user_id = $_SESSION["user_id"];
$sql = "SELECT * FROM `books` WHERE book_id = $book_id AND user_id = $user_id;"; 
$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));

$sql = "SELECT * FROM janrs";
$ganres = mysqli_fetch_all(mysqli_query($conn, $sql), MYSQLI_ASSOC);

include "./templates/header.php";
?>

        <!-- Основное содержимое -->
        <main class="main-content">
            <div class="container">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Редактирование книги: <?=$result["name"]?></h2>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="php_edit.php">

                            <input type="hidden" name="old_cover">
                            <input type="hidden" name="id_book">

                            <div class="form-row">
                                <div class="form-group ">
                                    <label >Название книги*</label>
                                    <input type="text" name="book-title"  placeholder="Введите название книги" value="<?=$result["name"]?>">
                                    <span class="error-message"></span>
                                </div>
                                <div class="form-group">
                                    <label >Автор*</label>
                                    <input type="text" name="book-author"  placeholder="Введите автора" value="<?=$result["author"]?>">
                                    <span class="error-message"></span>
                                </div>
                            </div>
    
                            <div class="form-row">
                                <div class="form-group">
                                    <label >Жанр*</label>
                                    <select name="book-genre" >
                                        <?php
                                        foreach ($ganres as $row) {
                                            $selected = ($row['janr_id'] == $result['janr_id']) ? 'selected' : '';
                                            echo "<option value=\"{$row['janr_id']}\" $selected>{$row['name']}</option>";
                                        }
                                        ?>
                                    </select>
                                    <span class="error-message"></span>
                                </div>
                                <div class="form-group">
                                    <label >Год издания*</label>
                                    <input type="number" name="book-year" placeholder="Год издания" value="<?=$result["year"]?>">
                                    <span class="error-message"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="book-description">Описание</label>
                                <textarea id="book-description" name="book-description" rows="4" class="" placeholder="Краткое описание книги (до 500 символов)"><?=$result["description"]?></textarea>
                                <span class="error-message"></span>
                            </div>
    
                            <div class="form-group">
                                <label >Обложка книги</label>
                                <div class="cover-upload">
                                    <div class="cover-preview">
                                        <img id="cover-preview" src="<?=$result["img"]?>" alt="Предпросмотр обложки" >
                                    </div>
                                    <div class="upload-controls">
                                        
                                        <label class="btn btn-secondary" ><i class="fas fa-upload"></i>
                                            <input type="file" id="book-cover" name="book-cover">  Загрузить изображение
                                            
                                            <span class="error-message"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-actions">
                                <a href="" class="btn btn-secondary">Отмена</a>
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

    </div>
</body>
</html>