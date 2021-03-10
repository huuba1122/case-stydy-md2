<div class="menu sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Trang chủ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Quản lý sách
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="index.php?page=book-list" class="list-group-item list-group-item-action list-group-item-primary">Danh mục sách</a></li>
                            <li><a href="index.php?page=add-book" class="list-group-item list-group-item-action list-group-item-secondary">Thêm sách mới</a></li>
                            <li><a href="index.php?page=publishers" class="list-group-item list-group-item-action list-group-item-info">Nhà xuất bản</a></li>
                            <li><a class="list-group-item list-group-item-action list-group-item-info" href="index.php?page=authors">Tác giả</a></li>
                            <li><a class="list-group-item list-group-item-action list-group-item-info" href="index.php?page=categories">Thể loại</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Tác giả
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="index.php?page=authors" class="list-group-item list-group-item-action list-group-item-primary">Danh sách</a></li>
                            <li><a href="index.php?page=add-author" class="list-group-item list-group-item-action list-group-item-secondary">Thêm tác giả</a></li>
<!--                            <li><a class="list-group-item list-group-item-action list-group-item-info" href="index.php?page=authors">Tác giả</a></li>-->
<!--                            <li><a class="list-group-item list-group-item-action list-group-item-info" href="index.php?page=categories">Thể loại</a></li>-->
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Quản lý hóa đơn
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="#" class="list-group-item list-group-item-action list-group-item-primary">Phiếu nhập</a></li>
                            <li><a href="index.php?page=hoa-don" class="list-group-item list-group-item-action list-group-item-secondary">Hóa đơn bán hàng</a></li>
                            <li><a href="#" class="list-group-item list-group-item-action list-group-item-success">Khách hàng</a></li>
                            <li><a href="#" class="list-group-item list-group-item-action list-group-item-danger">Nhân viên</a></li>
                            <li><a href="#" class="list-group-item list-group-item-action list-group-item-warning">Nhà cung cấp</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" action="index.php" method="post">
                    <input class="form-control me-2" type="search" placeholder="ten sach hoac ten tac gia" aria-label="Search" name="search_name">
                    <button class="btn btn-outline-success text-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</div>