<?php

include "./templates/header.php"
?>

        <!-- Основное содержимое -->
        <main class="main-content">
            <div class="container">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Добавить новую книгу</h2>
                    </div>
                    <div class="modal-body">
                        <form id="book-form" method="post" action="">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="book-title">Название книги*</label>
                                    <input type="text" id="book-title" name="book-title" placeholder="Введите название книги">
                                    <span class="error-message"></span>
                                </div>
                                <div class="form-group">
                                    <label for="book-author">Автор*</label>
                                    <input type="text" id="book-author" name="book-author" placeholder="Введите автора">
                                    <span class="error-message"></span>
                                </div>
                            </div>
    
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="book-genre">Жанр*</label>
                                    <select id="book-genre" name="book-genre">
                                        <option value="0">Выберите жанр</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>                                        
                                    </select>
                                    <span class="error-message"></span>
                                </div>
                                <div class="form-group">
                                    <label for="book-year">Год издания*</label>
                                    <input type="number" id="book-year" name="book-year" placeholder="Год издания">
                                    <span class="error-message"></span>
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label for="book-description">Описание</label>
                                <textarea id="book-description" name="book-description" rows="4" placeholder="Краткое описание книги (до 500 символов)"></textarea>
                                <span class="error-message"></span>
                            </div>
    
                            <div class="form-group">
                                <label >Обложка книги</label>
                                <div class="cover-upload">
                                    <div class="cover-preview">
                                        <img id="cover-preview" src="img/test.jpg" alt="Предпросмотр обложки" >
                                    </div>
                                    <div class="upload-controls">
                                        
                                        <label class="btn btn-secondary"><i class="fas fa-upload"></i>
                                            <input type="file" id="book-cover" name="book-cover"> Загрузить изображение
                                            
                                            <span class="error-message"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-actions">
                                <button type="button" class="btn btn-secondary" id="cancel-btn">Отмена</button>
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <!-- Форма добавления/редактирования книги -->
        <div class="modal hidden" id="book-form-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Добавить новую книгу</h2>
                    <button class="btn btn-close" id="close-modal"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <form id="book-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="book-title">Название книги*</label>
                                <input type="text" id="book-title" placeholder="Введите название книги">
                                <span class="error-message">Поле обязательно для заполнения (макс. 100 символов)</span>
                            </div>
                            <div class="form-group">
                                <label for="book-author">Автор*</label>
                                <input type="text" id="book-author" placeholder="Введите автора">
                                <span class="error-message">Поле обязательно для заполнения (макс. 100 символов)</span>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="book-genre">Жанр*</label>
                                <select id="book-genre">
                                    <option value="">Выберите жанр</option>
                                    <option value="fantasy">Фантастика</option>
                                    <option value="classic">Классика</option>
                                    <option value="detective">Детектив</option>
                                    <option value="romance">Роман</option>
                                    <option value="science">Научная литература</option>
                                    <option value="biography">Биография</option>
                                </select>
                                <span class="error-message">Пожалуйста, выберите жанр</span>
                            </div>
                            <div class="form-group">
                                <label for="book-year">Год издания*</label>
                                <input type="number" id="book-year" placeholder="Год издания">
                                <span class="error-message">Введите корректный год (1800-текущий)</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="book-description">Описание</label>
                            <textarea id="book-description" rows="4" placeholder="Краткое описание книги (до 500 символов)"></textarea>
                            <span class="error-message">Максимальная длина описания 500 символов</span>
                        </div>

                        <div class="form-group">
                            <label for="book-cover">Обложка книги</label>
                            <div class="cover-upload">
                                <div class="cover-preview">
                                    <img id="cover-preview" src="#" alt="Предпросмотр обложки" style="display: none;">
                                    <div class="no-cover">
                                        <i class="fas fa-book"></i>
                                        <p>Обложка не выбрана</p>
                                    </div>
                                </div>
                                <div class="upload-controls">
                                    <input type="file" id="book-cover" accept="image/jpeg">
                                    <button type="button" class="btn btn-secondary" id="upload-btn"><i class="fas fa-upload"></i> Загрузить</button>
                                    <button type="button" class="btn btn-secondary hidden" id="crop-btn"><i class="fas fa-crop"></i> Обрезать</button>
                                </div>
                            </div>
                            <span class="error-message">Поддерживаются только JPG изображения</span>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn btn-secondary" id="cancel-btn">Отмена</button>
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Просмотр книги -->
        <div class="modal hidden" id="book-view-modal">
            <div class="modal-content book-view-content">
                <div class="modal-header">
                    <h2>Название книги</h2>
                    <button class="btn btn-close" id="close-view-modal"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <div class="book-view-container">
                        <div class="book-view-cover">
                            <img src="https://via.placeholder.com/300x450" alt="Обложка книги">
                        </div>
                        <div class="book-view-details">
                            <div class="book-view-meta">
                                <p><strong>Автор:</strong> <span id="view-author">Автор книги</span></p>
                                <p><strong>Жанр:</strong> <span id="view-genre">Фантастика</span></p>
                                <p><strong>Год издания:</strong> <span id="view-year">2020</span></p>
                                <p><strong>Добавлено:</strong> <span id="view-date">12.05.2023</span></p>
                            </div>
                            <div class="book-view-description">
                                <h3>Описание</h3>
                                <p id="view-description">Здесь будет подробное описание книги. Это может быть аннотация, краткое содержание или ваши личные заметки о прочитанном. Максимальная длина описания - 500 символов.</p>
                            </div>
                            <div class="book-view-actions">
                                <button class="btn btn-primary" id="edit-book-btn"><i class="fas fa-edit"></i> Редактировать</button>
                                <button class="btn btn-danger" id="delete-book-btn"><i class="fas fa-trash"></i> Удалить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Подтверждение удаления -->
        <div class="modal hidden" id="confirm-modal">
            <div class="modal-content confirm-content">
                <div class="modal-header">
                    <h2>Подтверждение удаления</h2>
                    <button class="btn btn-close" id="close-confirm-modal"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <p>Вы уверены, что хотите удалить эту книгу? Это действие нельзя отменить.</p>
                    <div class="confirm-actions">
                        <button class="btn btn-secondary" id="cancel-delete">Отмена</button>
                        <button class="btn btn-danger" id="confirm-delete">Удалить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>