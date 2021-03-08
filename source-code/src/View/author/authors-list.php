<style>
    table, th, td{
        border: 1px solid;
        padding: 5px;
    }
</style>
<body>
<table>
    <tr>
        <th>ten tac gia</th>
        <th>website</th>
        <th>description</th>
    </tr>
    <?php foreach ($authors as $author): ?>
    <tr>
        <td><a href="index.php?page=author-books&id=<?php echo $author['author_id'] ?>"><?php echo $author['author_name'] ?></a></td>
        <td><?php echo $author['website'] ?></td>
        <td><?php echo $author['description'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>