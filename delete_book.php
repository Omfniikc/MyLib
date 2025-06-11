<?php
include "./conn/conn.php";
$book_id = $_GET["book_id"];

$sql = "SELECT books.*, janrs.name as janr_name FROM `books` INNER JOIN janrs on books.janr_id = janrs.janr_id WHERE book_id = $book_id;";
$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
include "./templates/header.php";

?>

        <!-- Основное содержимое -->
        <main class="main-content">
            <div class="container">
                <div class="modal-content confirm-content">
                    <div class="modal-header">
                        <h2>Подтверждение удаления</h2>
                    </div>
                    <div class="modal-body">
                        <p>Вы уверены, что хотите удалить эту книгу "<?=$result['name']?>"? Это действие нельзя отменить.</p>
                        <div class="confirm-actions">
                            <a href="book.php" class="btn btn-secondary">Отмена</a>
                            <a href="./functions/delete_f.php?book_id=<?=$book_id?>" class="btn btn-danger">Удалить</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>