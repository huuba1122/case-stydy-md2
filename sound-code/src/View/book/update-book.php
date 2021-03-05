
<body>
<form method="post" enctype="multipart/form-data">
    <input type="hidden" name="book_id" value="<?php echo $product[0]['book_id'] ?>"><br>
    isbn:
    <input type="text" name="isbn" value="<?php echo $product[0]['isbn'] ?>"><br>
    ten sach:
    <input type="text" name="book_name" value="<?php echo $product[0]['book_name'] ?>"><br>
    mo ta:
    <textarea name="description" cols="30" rows="10" ><?php echo $product[0]['description'] ?></textarea><br>
    so trang
    <input type="number" name="page_number" value="<?php echo $product[0]['page_number'] ?>"><br>
    tac gia:
    <select name="author_id" >
        <?php foreach ($authors as $author): ?>
            <option <?php if ($author['author_name'] ==$product[0]['author_name']): ?> selected <?php endif; ?> value="<?php echo $author['author_id']?>"><?php echo $author['author_name'] ?></option>
        <?php endforeach; ?>
    </select><br>
    <!--    <input type="text" name="author_name" value="--><?php //echo $product[0]['author_name'] ?><!--"><br>-->
    the loai:
    <select name="category_id" >
        <?php foreach ($categories as $category): ?>
            <option <?php if ($category['category_name'] ==$product[0]['category_name']): ?> selected <?php endif; ?> value="<?php echo $category['category_id']?>"><?php echo $category['category_name'] ?></option>
        <?php endforeach; ?>
    </select><br>
    nha xuat ban:
    <select name="publisher_id" >
        <?php foreach ($publishers as $publisher): ?>
            <option <?php if ($publisher['publisher_name'] ==$product[0]['publisher_name']): ?> selected <?php endif; ?> value="<?php echo $publisher['publisher_id']?>"><?php echo $publisher['publisher_name'] ?></option>
        <?php endforeach; ?>
    </select><br>
    so luong sach:
    <input type="number" name="quantity" value="<?php echo $product[0]['quantity'] ?>"><br>
    gia ban:
    <input type="number" name="price_sale" value="<?php echo $product[0]['price_sale'] ?>"><br>
    nam xuat ban:
    <input type="date" name="year_of_publication" value="<?php echo $product[0]['year_of_publication'] ?>"><br>
    ngay update:
    <input type="date" name="update_date" value="<?php echo $product[0]['update_date'] ?>" required ><br>
    hinh anh:
    <input type="file" name="image" ><br>
    <input type="hidden" name="old_image" value="<?php echo $product[0]['image'] ?>">
<!--    <input type="" name="category_name" value="--><?php //echo $product[0]['category_name'] ?><!--"><br>-->
<!--    <input type="" name="publisher_name" value="--><?php //echo $product[0]['publisher_name'] ?><!--"><br>-->

    <button type="submit">update</button>
</form>
</body>
