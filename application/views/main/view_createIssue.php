<style>
.select2-container--default .select2-selection--single .select2-selection__rendered{
    color: #444;
    line-height: 37px;
}
.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px;
    height: 39px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow b {
    border-color: #888 transparent transparent transparent;
    border-style: solid;
    border-width: 5px 4px 0 4px;
    height: 0;
    left: 50%;
    margin-left: -4px;
    margin-top: 4px;
    position: absolute;
    top: 50%;
    width: 0;
}
</style>
<div class="container-fluid">
    <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-5">
        <div class="card-body pb-0 pt-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8"><i class="ti-file"></i> Form input location stock</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="<?php echo base_url('Dashboard/dashboard'); ?>">Home</a>
                            </li>
                            <li class=" breadcrumb-item" aria-current="page">Inventory
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>
    <form enctype="multipart/form-data">
        <div class="form-group row mb-2" style="padding: 0px 10px;padding-bottom: 20px;margin: 10px 0px;">
            <div class="col-lg-3">
                <label for="edtMainMenu" class="form-label">Document Number</label>
                <input type="text" id="inpAddDoc" class="form-control" placeholder="Enter Document Number">
            </div>
            <div class="col-lg-3">
                <label for="edtMainIcon" class="form-label">Document Date</label>
                <input type="date" id="inpAddDocDate" class="form-control">
            </div>
          </div>
        </form>
    <h4 class="fw-semibold mb-8"><i class="ti-file"></i> List Product</h4>
    <div class="form-group row mb-3 mt-3" style="padding: 0px 10px;padding-bottom: 20px;margin: 10px 0px;">
        <div class="table-responsive text-nowrap">
            <div class="card-datatable table-responsive pt-0">
                <button type="button" class="btn btn-primary mb-3" style="float:right" id="btnAddProduct" data-bs-toggle="modal" data-bs-target="#mldAddProduct"><b><i class="ti-plus"></i> Add Product</b></button>
                <table id="tblProductDetail" class="table card-table border" style="width:100%" >
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">PRODUCT</th>
                            <th class="text-center">BRAND</th>
                            <th class="text-center">MODEL</th>
                            <th class="text-center">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-center">PRICE/UNIT</th>
                            <!-- <th class="text-center">AMOUNT</th> -->
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
                <button type="button" class="btn btn-success float-end" id="btnSave">Submit</button>

            </div>
        </div>
    </div>
    
    <div class="modal fade" id="mldAddProduct" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl" style="width:1200px" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" style="padding: 0px 10px;margin: 10px 0px;font-weight: 600;"><i class="ti-pencil-alt mr-3"></i> Add Product</h3>
                    <button type="button" class="btn-close me-2 mb-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form enctype="multipart/form-data">
                        <div class="form-group row mb-2" style="padding: 0px 10px;padding-bottom: 20px;margin: 10px 0px;">
                            <div class="col-lg-12 mb-3">
                                <label class="col-form-label">
                                    <h4 style="font-weight: 600;"><i class="ti-file" style="padding-right: 7px;"></i>Form input product</h4>
                                </label>
                            </div>
                            <div class="col-lg-3">
                                <label for="edtMainMenu" class="form-label">Product Number</label>
                                <select name="selAddProductCode" id="selAddProductCode" class="form-control">
                                    <option value="">- Product Code -</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label for="edtMainMenu" class="form-label">Index Number</label>
                                <Select id="selAddIndexNo" class="form-control">
                                    <option value="">Select</option>
                                </Select>
                            </div>
                        </div>
                        <div class="form-group row mb-2" style="padding: 0px 10px;padding-bottom: 20px;margin: 10px 0px;">
                            <div class="col-lg-3">
                                <label for="edtMainIcon" class="form-label">Brand</label>
                                <Select id="selAddBrand" class="form-control">
                                    <option value="">Select</option>
                                </Select>
                            </div>
                            <div class="col-lg-3">
                                <label for="edtOrderNo" class="form-label">Model</label>
                                <input type="text" id="selAddModel" class="form-control">
                            </div>
                            <div class="col-lg-3">
                                <label for="edtOrderNo" class="form-label">Qaulity</label>
                                <input type="text" id="inpAddQaulity" class="form-control" placeholder="Enter Qaulity">
                            </div>
                            <div class="col-lg-3">
                                <label for="edtOrderNo" class="form-label">Price /Unit </label>
                                <input type="text" id="inpAddPriceUnit" class="form-control" placeholder="Enter Price /Unit ">
                            </div>
                        </div>
                        <div class="form-group row mb-2" style="padding: 0px 10px;padding-bottom: 20px;margin: 10px 0px;">
                            <div class="col-lg-6">
                                <label for="edtOrderNo" class="form-label">Discription </label>
                                <textarea name="" id="inpAddDiscription" cols="30" rows="5" class="form-control" placeholder="Enter Discription..."></textarea>
                            </div>
                        </div>
                    </form>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btnSaveAdd">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
 