

<body>
    <form method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>them sach o day</legend>
            isbn: <input type="text" name="isbn" placeholder="ma isbn"><br>
            <label style="color: " for="formGroupExampleInput">Image</label>
            <input type="file" name="image"> <br>
            ten sach: <input type="text" name="book_name" placeholder="ten sach"><br>
            tac gia:
            <select name="author_id" >
                <option value="">chon tac gia</option>
                <?php foreach ($authors as $author): ?>
                    <option value="<?php echo $author['author_id']?>"><?php echo $author['author_name'] ?></option>
                <?php endforeach; ?>
            </select><br>
            the loai:
            <select name="category_id" >
                <option value="">chon the loai</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?php echo $category['category_id']?>"><?php echo $category['category_name'] ?></option>
                <?php endforeach; ?>
            </select><br>
            nha xuat ban:
            <select name="publisher_id" >
                <option value="">chon nxb</option>
                <?php foreach ($publishers as $publisher): ?>
                    <option value="<?php echo $publisher['publisher_id']?>"><?php echo $publisher['publisher_name'] ?></option>
                <?php endforeach; ?>
            </select><br>
<!--            id tac gia: <input type="number" name="author_id" placeholder="id tac gia"><br>-->
<!--            id the loai: <input type="number" name="category_id" placeholder="id the loai"><br>-->
<!--            id nha xuat ban: <input type="number" name="publisher_id" placeholder="id nha xuat ban"><br>-->
            so luong: <input type="number" name="quantity" placeholder="so luong"><br>
            ngay xuat ban: <input type="date" name="date_of_publication" placeholder="ngay xuat ban"><br>
            gia ban: <input type="number" name="price_sale" placeholder="gia ban"><br>
        </fieldset>
        <button type="submit">add</button>
    </form>
</body>
