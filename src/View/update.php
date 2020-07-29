
<form method="post">
    <div class="form-group" >
        <input type="text" name="id" placeholder="Product ID" value="<?php echo $product['id'] ?>" hidden>
        <label  class="">Product Name</label>
        <input type="text" class="form-control"   name="name" value="<?php echo $product['name'] ?>">
    </div>
    <div class="form-group" >
        <label  class="">Product Type</label>
        <select type="text" class="form-control"   name="type" value="<?php echo $product['type'] ?>">
                <option value="<?php echo $product['type'] ?>"><?php echo $product['type'] ?></option>

            </select>

        </select>
    </div>
    <div class="form-group" >
        <label  class="">Product Price</label>
        <input type="number" class="form-control"   name="price" value="<?php echo $product['price'] ?>">
    </div>
    <div class="form-group" >
        <label  class="">Product Quantity</label>
        <input type="number" class="form-control"   name="quantity" value="<?php echo $product['quantity'] ?>">
    </div>
    <div class="form-group" >
        <input type="date" class="form-control"   name="date" value="<?php echo $product['date'] ?>" hidden>
    </div>
    <div class="form-group" >
        <label  class="">Product Description</label>
        <textarea  class="form-control"   name="description"><?php echo $product['description'] ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <button onclick="window.history.go(-1); return false;" class="btn btn-secondary">CANCEL</button>
</form>