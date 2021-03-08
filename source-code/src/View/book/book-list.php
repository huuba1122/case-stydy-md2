
<?php foreach ($products as $key => $product) : ?>
<div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
        <a href="index.php?page=book-details&id=<?php echo $product['book_id'] ?>"><img class="card-img-top img-fluid" src="images/<?php echo $product['image'] ?>" alt=""></a>

        <div class="card-body">
            <h5 class="card-title card-book"><?php echo $product['book_name'] ?></h5>
            <h6 class="card-title card-book"><?php echo $product['author_name'] ?></h6>
            <h6 class="card-title card-book card-book-price"><?php echo $product['price_sale'].' VND' ?></h6>
        </div>
        <div class="card-footer">
            <a href="#" class="btn btn-primary d-grid gap-2">Mua</a>
        </div>
    </div>
</div>
<?php endforeach; ?>