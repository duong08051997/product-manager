
<form method="post">
    <div class="form-group" >
        <label  class="">Product Name</label>
        <input type="text" class="form-control"   name="name" placeholder="Product Name">
    </div>
    <div class="form-group" >
        <label  class="">Product Type</label>
        <select type="text" class="form-control"   name="type" placeholder="Product Type">
            <option value="dien thoai">dien thoai</option>
            <option value="ti vi">ti vi</option>
            <option value="tu lanh">tu lanh</option>
            <option value=" may giat">may giat</option>
        </select>
    </div>
    <div class="form-group" >
        <label  class="">Product Price</label>
        <input type="number" class="form-control"   name="price" placeholder="Product Price">
    </div>
    <div class="form-group" >
        <label  class="">Product Quantity</label>
        <input type="number" class="form-control"   name="quantity" placeholder="Product Quantity">
    </div>
    <div class="form-group" >
        <label  class="">Product Date</label>
        <input type="date" class="form-control"   name="date" placeholder="Product Date">
    </div>
    <div class="form-group" >
        <label  class="">Product Description</label>
        <textarea  class="form-control"   name="description" placeholder="Product Description"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">ADD</button>
    <button onclick="window.history.go(-1); return false;" class="btn btn-secondary">CANCEL</button>
</form>