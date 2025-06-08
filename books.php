<?php 
include "./conn/conn.php";
$user_id = $_SESSION["user_id"] ?? null;
echo $user_id;
$sql = "SELECT books.*, janrs.name as janr_name FROM `books` INNER JOIN janrs on books.janr_id = janrs.janr_id WHERE user_id = $user_id; ";
$result = mysqli_fetch_all(mysqli_query($conn, $sql), MYSQLI_ASSOC);

include "./templates/header.php";
?>


        <!-- Основное содержимое -->
        <main class="main-content">
            <div class="container">
                <!-- Панель управления -->
                <div class="control-panel">
                    <form action="#" method="post">
                        <div class="search-box">
                            <input type="hidden" name="action" value="search">
                            <input type="text" name="search" placeholder="Поиск по названию...">
                            <button type="submit" class="btn btn-search"><i class="fas fa-search"></i>Найти</button>
                        </div>
                    </form>
                    <div class="filters">
                        <form action="" class="row g-2" method="post">
                            <input type="hidden" name="action" value="filter">
                            <select class="form-control" name="genre-filter">
                                <option value="0">Все жанры</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="2">2</option>
                            </select>
                            <button class="btn btn-primary">Выбрать</button>
                        </form>
                        <form action="" class="row g-2" method="post">
                            <input type="hidden" name="action" value="sort">
                            <select class="form-control" name="sort-name">
                                <option >По названию (А-Я)</option>
                                <option >По названию (Я-А)</option>
                            </select>
                            <button class="btn btn-primary" >Сортировать</button>
                        </form>                        
                    </div>
                </div>
                <!-- Список книг -->
                <div class="book-list-wrap">
                    <div class="books-list">
                        <?php foreach ($result as $book){
                            include "./templates/book_card.php";
                        }
                            ?>
                    </div>
                </div>
                <!-- Пагинация -->
                <div class="pagination">
                    <button class="btn btn-pagination disabled"><i class="fas fa-chevron-left"></i></button>
                    <button class="btn btn-pagination btn-page active">1</button>
                    <button class="btn btn-pagination btn-page">2</button>
                    <button class="btn btn-pagination btn-page">3</button>
                    <button class="btn btn-pagination btn-page">4</button>
                    <button class="btn btn-pagination"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </main>
    </div>
</body>
</html>