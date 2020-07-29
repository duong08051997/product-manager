<div class="pt-3">
<form action="index.php?page=search-product" method="post">
    <input type="search" name="search" class="form-control mr-sm-2">
    <button type="submit" class="btn btn-outline-success">Search</button>
</form>
</div>

<div class="pt-3">
<a href="index.php?page=add-product" class="btn btn-success">ADD PRODUCT</a>
<a href="index.php?page=list-product" class="btn btn-secondary">LIST PRODUCT</a>
</div>
<div class="pt-3"></div>
<table class="table table-hover">
    <thead class="table-success">
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Type</th>
        <th>Action</th>

    </tr>
    </thead>
    <?php if (empty($products)): ?>
        <tr>
            <td>No data</td>
        </tr>
    <?php else: ?>
        <?php foreach ($products as $key => $product): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $product->getName() ?></td>
                <td><?php echo $product->getType() ?></td>
                <td>
                <a onclick="return confirm('are you sure')" href="index.php?page=delete-product&id=<?php echo $product->getId() ?>" class="btn btn-danger">Delete</a>
                <a href="index.php?page=update-product&id=<?php echo $product->getId() ?>" class="btn btn-primary">Update</a>
                </td>

            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>
</body>
</html>
