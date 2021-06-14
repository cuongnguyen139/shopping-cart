<div class="panel panel-primary">
    <div class="panel-body mb-3">
        <form action="/cakephp/products/add" id="frm-add-product" method="post">
            <div class="row custom-padding">
                <div class="col-sm-6">
                    <label>Name</label>
                    <input type="text" required class="form-control" name="name">
                </div>
            </div>
    </div>
    <div class="row custom-padding mb-3">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Code</label>
                <input type="text" required class="form-control" name="code">
            </div>
        </div>
    </div>
    <div class="row custom-padding mb-3">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Price</label>
                <input type="number" required class="form-control" name="price">
            </div>
        </div>
    </div>
    <div class="row custom-padding mb-3">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Image</label>
                <input type="text" required class="form-control" name="image">
            </div>
        </div>
    </div>
    <div class="row custom-padding">
        <div class="col-sm-6">
            <div class="form-group">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
    </form>
</div>
</div>