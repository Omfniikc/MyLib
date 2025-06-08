<?php
include "./templates/header.php";
?>

        <!-- Основное содержимое -->
        <main class="main-content">
            <div class="container">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Редактирование книги: book_name</h2>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="php_edit.php">

                            <input type="hidden" name="old_cover">
                            <input type="hidden" name="id_book">

                            <div class="form-row">
                                <div class="form-group ">
                                    <label >Название книги*</label>
                                    <input type="text" name="book-title"  placeholder="Введите название книги">
                                    <span class="error-message">error</span>
                                </div>
                                <div class="form-group">
                                    <label >Автор*</label>
                                    <input type="text" name="book-author"  placeholder="Введите автора">
                                    <span class="error-message"></span>
                                </div>
                            </div>
    
                            <div class="form-row">
                                <div class="form-group">
                                    <label >Жанр*</label>
                                    <select name="book-genre" >
                                        <option value="1">фантастика</option>
                                        <option value="2">фантастика</option>
                                        <option value="3">фантастика</option>
                                    </select>
                                    <span class="error-message"></span>
                                </div>
                                <div class="form-group">
                                    <label >Год издания*</label>
                                    <input type="number" name="book-year" value="year" placeholder="Год издания">
                                    <span class="error-message"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="book-description">Описание</label>
                                <textarea id="book-description" name="book-description" rows="4" class="" placeholder="Краткое описание книги (до 500 символов)">description</textarea>
                                <span class="error-message"></span>
                            </div>
    
                            <div class="form-group">
                                <label >Обложка книги</label>
                                <div class="cover-upload">
                                    <div class="cover-preview">
                                        <img id="cover-preview" src="img/test.jpg" alt="Предпросмотр обложки" >
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