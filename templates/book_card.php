
<div class="book-card">
    <div class="book-cover">
        <img src="<?= $book['img'] ?>" alt="Обложка книги">
        <a href="book.php"></a>
    </div>
    <div class="book-info">
        <h3 class="book-title"><a href="book.php"><?= $book['name'] ?></a></h3>
        <p class="book-author"><?= $book['author'] ?></p>
        <div class="book-meta">
            <span class="book-year"><i class="fas fa-calendar-alt"></i><?= $book['year'] ?></span>
            <span class="book-genre"><i class="fas fa-tag"></i><?= $book['janr_name'] ?></span>
        </div>
        <div class="book-actions">
            <a href="book.php?book_id=<?=$book["book_id"]?>" class="btn btn-view"><i class="fas fa-eye"></i></a>
            <a href="edit_book.php?book_id=<?=$book["book_id"]?>" class="btn btn-edit"><i class="fas fa-edit"></i></a>
            <a href="delete_book.php?book_id=<?=$book["book_id"]?>" class="btn btn-delete"><i class="fas fa-trash"></i></a>
        </div>
    </div>
</div>
