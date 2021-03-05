<style>
    table, th, td{
        border: 1px solid;
        padding: 5px;
        font-size: 16px;
    }
</style>

<table>
    <tr>
        <th>STT</th>
        <th>book_id</th>
        <th>isbn</th>
        <th>book_name</th>
        <th>author_name</th>
        <th>price_sale</th>
        <th>image</th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($products as $key => $product) : ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><a href="index.php?page=book-details&id=<?php echo $product['book_id'] ?>">
                <?php echo "book-".$product['book_id'] ?>
            </a>
        </td>
        <td><?php echo $product['isbn'] ?></td>
        <td><?php echo $product['book_name'] ?></td>
        <td><?php echo $product['author_name'] ?></td>
        <td><?php echo $product['price_sale'] ?></td>
        <td><img src="images/<?php echo $product['image'] ?>" style="width: 100px"></td>
        <td><button><a onclick="return confirm('may co muon xoa dau sach <?php echo $product['book_name'] ?> ko?')" href="index.php?page=delete-book&id=<?php echo $product['book_id'] ?>">delete</a></button></td>
        <td><button><a href="index.php?page=update-book&id=<?php echo $product['book_id'] ?>">update</a></button></td>
    </tr>
    <?php endforeach; ?>
</table>
<button><a href="index.php?page=add-book">them sach</a></button>
