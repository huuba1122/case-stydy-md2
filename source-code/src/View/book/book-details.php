<body>
    <table>
        <tr>
            <th>book_id</th>
            <th>isbn</th>
            <th>book_name</th>
            <th>description</th>
            <th>page_number</th>
            <th>quantity</th>
            <th>price_sale</th>
            <th>update_date</th>
            <th>year_of_publication</th>
            <th>image</th>
            <th>author_name</th>
            <th>category_name</th>
            <th>publisher_name</th>
        </tr>
        <?php foreach ($products as $key => $product): ?>
        <tr>
            <td><?php echo $product['book_id'] ?></td>
            <td><?php echo $product['isbn'] ?></td>
            <td><?php echo $product['book_name'] ?></td>
            <td><?php echo $product['description'] ?></td>
            <td><?php echo $product['page_number'] ?></td>
            <td><?php echo $product['price_sale'] ?></td>
            <td><?php echo $product['quantity'] ?></td>
            <td><?php echo $product['update_date'] ?></td>
            <td><?php echo $product['year_of_publication'] ?></td>
            <td><img src="images/<?php echo $product['image'] ?>" style="width: 80px"></td>
            <td><?php echo $product['author_name'] ?></td>
            <td><?php echo $product['category_name'] ?></td>
            <td><?php echo $product['publisher_name'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
