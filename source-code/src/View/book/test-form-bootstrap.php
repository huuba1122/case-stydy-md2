<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="CSS/main.css">
    <title>Document</title>
</head>
<body>
<div class="table-responsive add-book">
    <h2>Nhap thong tin sach</h2>
    <form method="post" enctype="multipart/form-data">
        <table class="table table-striped">
            <tbody>
            <tr>
                <th><label for="input-isbn" class="input-group-text">isbn</label></th>
                <td><input type="text" aria-label="Last name" class="form-control" name="isbn" value="<?php echo rand(1000000000000,9999999999999) ?>"></td>

            </tr>
            <tr>
                <th><label for="input-name" class="input-group-text">Ten sach</label></th>
                <td><input type="text" class="form-control" name="book_name" id="input-name"></td>
            </tr>
            <tr>
                <th><label class="input-group-text" for="input-Author" >Tac gia</label></th>
                <td >
                    <select class="form-select" id="input-Author" name="author_id">
                        <option selected>Tac gia</option>
                        <?php foreach ($authors as $author): ?>
                            <option value="<?php echo $author['author_id']?>"><?php echo $author['author_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th><label for="input-category" class="input-group-text">The loai</label></th>
                <td>
                    <select class="form-select" id="input-category" name="category_id">
                        <option selected>The loai</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?php echo $category['category_id']?>"><?php echo $category['category_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th><label for="input-publisher" class="input-group-text">nha xuat ban</label></th>
                <td>
                    <select class="form-select" id="input-publisher" name="publisher_id">
                        <option selected>nha xuat ban</option>
                        <?php foreach ($publishers as $publisher): ?>
                            <option value="<?php echo $publisher['publisher_id']?>"><?php echo $publisher['publisher_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th><label for="input-price" class="input-group-text">Gia ban (VND)</label></th>
                <td>
                    <input type="number" class="form-control" id="input-price" name="price_sale">
                </td>
            </tr>
            <tr>
                <th><label for="input-quantity" class="input-group-text">So luong (cuon)</label></th>
                <td>
                    <input type="number" class="form-control"  name="quantity" id="input-quantity">
                </td>
            </tr>
            <tr>
                <th><label for="input-page-number" class="input-group-text">So trang</label></th>
                <td>
                    <input type="number" class="form-control"  name="page_number" id="input-page-number">
                </td>
            </tr>
            <tr>
                <th><label for="input-date-publication" class="input-group-text">Ngay xuat ban</label></th>
                <td>
                    <input type="date" class="form-control"  name="date_of_publication" id="input-date-publication">
                </td>
            </tr>
            <tr>
                <th><label for="input-update-date" class="input-group-text">Ngay them</label></th>
                <td>
                    <input type="date" class="form-control"  name="update_date" id="input-update-date">
                </td>
            </tr>
            <tr>
                <th><label for="input-des" class="input-group-text">Mo ta sach</label></th>
                <td><textarea id="input-des" class="form-control" aria-label="With textarea" name="description" placeholder="gioi thieu noi dung"></textarea></td>
            </tr>
            <tr>
                <th><label for="input-image" class="input-group-text">Anh bia</label></th>
                <td><input type="file" class="form-control" id="input-image" name="image"></td>
            </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2"><button type="submit" class="btn btn-primary">them sach</button></td>
                </tr>
            </tfoot>
        </table>
    </form>
</div>
<!--<div class="add-book">-->
<!--    <form method="post" enctype="multipart/form-data">-->
<!--        <h3>Nhap thong tin sach</h3>-->
<!--        <div class="input-group">-->
<!--            <span class="input-group-text">First and last name</span>-->
<!--            <input type="text" aria-label="First name" class="form-control" name="book_name">-->
<!--            <span class="input-group-text">isbn</span>-->
<!--            <input type="text" aria-label="Last name" class="form-control" name="isbn">-->
<!--        </div>-->
<!--        <div class="input-group mb-3">-->
<!--            <span class="input-group-text" id="inputGroup-sizing-default">Ngay xuat ban</span>-->
<!--            <input name="date_of_publication" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">-->
<!--        </div>-->

<!--        <div class="input-group mb-3">-->
<!--            <label class="input-group-text" for="inputAuthor" >Tac gia</label>-->
<!--            <select class="form-select" id="inputAuthor" name="author_id">-->
<!--                <option selected>Tac gia</option>-->
<!--                <option value="1">One</option>-->
<!--                <option value="2">Two</option>-->
<!--                <option value="3">Three</option>-->
<!--            </select>-->
<!--        </div>-->
<!--        <div class="input-group mb-3">-->
<!--            <label class="input-group-text" for="inputCategory">The loai</label>-->
<!--            <select class="form-select" id="inputCategory" name="category_id">-->
<!--                <option selected>The loai</option>-->
<!--                <option value="1">One</option>-->
<!--                <option value="2">Two</option>-->
<!--                <option value="3">Three</option>-->
<!--            </select>-->
<!--        </div>-->
<!--        <div class="input-group mb-3">-->
<!--            <label class="input-group-text" for="inputPublisher">Options</label>-->
<!--            <select class="form-select" id="inputPublisher" name="publisher_id">-->
<!--                <option selected>nha xuat ban</option>-->
<!--                <option value="1">One</option>-->
<!--                <option value="2">Two</option>-->
<!--                <option value="3">Three</option>-->
<!--            </select>-->
<!--        </div>-->
<!--        <div class="input-group mb-3">-->
<!--            <span class="input-group-text">Gia ban</span>-->
<!--            <input type="number" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" name="price_sale">-->
<!--            <span class="input-group-text">VND</span>-->
<!--        </div>-->
<!--        <div class="input-group mb-3">-->
<!--            <span class="input-group-text">So luong</span>-->
<!--            <input type="number" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" name="quantity">-->
<!--            <span class="input-group-text">Cuon</span>-->
<!--        </div>-->
<!--        <div class="input-group">-->
<!--            <span class="input-group-text">Mo ta sach</span>-->
<!--            <textarea class="form-control" aria-label="With textarea" name="description"></textarea>-->
<!--        </div>-->

<!--        <div class="input-group mb-3">-->
<!--            <label class="input-group-text" for="inputImage">Image</label>-->
<!--            <input type="file" class="form-control" id="inputImage" name="image">-->
<!--        </div>-->
<!--        <button type="button" class="btn btn-primary">Them sach</button>-->
<!---->
<!--    </form>-->
<!--</div>-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>

