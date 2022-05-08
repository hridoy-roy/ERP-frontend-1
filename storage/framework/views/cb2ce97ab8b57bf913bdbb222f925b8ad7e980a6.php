

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Starter_Page'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/select2/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(URL::asset('/assets/libs/datepicker/datepicker.min.css')); ?>">
    
    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- Responsive Table css -->
    <link href="<?php echo e(URL::asset('/assets/libs/rwd-table/rwd-table.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Utility <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Received Payment <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#receive_payment" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Receive Payment</span>    
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#received_payment_details" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Received Payment Details</span>    
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="receive_payment" role="tabpanel">
                            <!-- form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Project</label>
                                        <select class="form-control select2">
                                            <option>--Select--</option>
                                            <option value="1">Governing Office</option>
                                            <option value="2">Operations</option>
                                            <option value="3">Administration</option>
                                            <option value="4">Finance and Accounts Section</option>
                                            <option value="5">Procurement Section</option>
                                            <option value="6">Inventory Management</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Requested By</label>
                                        <select class="form-control select2">
                                            <option>--Select--</option>
                                            
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                            
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Date</label>
                                            <div class="input-group" id="datepicker1">
                                            <input type="text" class="form-control" value="" placeholder="dd M, yyyy"
                                            data-date-format="dd M, yyyy" data-date-container='#datepicker1' data-provide="datepicker">

                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Requisition Number</label>
                                        <input type="text" class="form-control" id="validationCustom02"
                                            placeholder="Enter Requisition Number here"  required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Requisition Name</label>
                                        <input type="text" class="form-control" id="validationCustom02"
                                            placeholder="Enter Requisition Name here"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Warehouses</label>
                                        <select class="form-control select2">
                                            <option value="">--Select--</option>
                                            <option value="35">Canteen Logistic Materials</option>
                                            <option value="25">Canteen Raw material</option>
                                            <option value="21">Office Outlet</option>
                                            <option value="22">Office Programme</option>
                                            <option value="26">Office Store</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- 6th row start  -->
                                            <div class="row py-3 bg-secondary text-light rounded-3 mb-4">
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input" class="col-4 text-end col-form-label"> Discount</label>
                                                        <div class="col-8">
                                                        <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input" class="col-4 text-end col-form-label"> Item</label>
                                                        <div class="col-8">
                                                            <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input" class="col-4 text-end col-form-label"> Cost</label>
                                                        <div class="col-8">
                                                            <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input" class="col-4 text-end col-form-label"> Paid</label>
                                                        <div class="col-8">
                                                            <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 6th row end  -->
                                            <h4 class="card-title mb-4">All product</h4>
                                            <form class="repeater" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-lg-2 p-0 pe-1">
                                                        <label for="name">SL</label>
                                                        <label for="name">Catagory</label>
                                                    </div>
                                                    <div class="col-lg-2 p-0 pe-1">
                                                        <label for="product">Product</label>
                                                    </div>
                                                    <div class="col-lg-2 p-0 pe-1">
                                                        <label for="product">Avlilable Quality </label>
                                                    </div>
                                                    <div class="col-lg-2 p-0 pe-1">
                                                        <label for="quality">Quality</label>
                                                    </div>
                                                    <div class="col-lg-1 p-0 pe-1">
                                                        <label for="total">Sub-total</label>
                                                    </div>
                                                    <div class="col-lg-1 p-0 pe-1">
                                                        <label for="discount">Price</label>
                                                    </div>
                                                    <div class="col-lg-2 p-0 pe-1">
                                                        <label for="subtotal">Discount</label>
                                                    </div>
                                                </div>
                                                <div data-repeater-list="group-a">
                                                    <div data-repeater-item class="row">

                                                        <div  class=" col-lg-2 d-flex p-0 pe-1 pb-1">
                                                            <span class="pe-2 pb-1">01</span>
                                                            <select id="formrow-inputState" class="form-select">
                                                                <option selected="">Select</option>
                                                                <option value="AK">Alaska</option>
                                                                <option value="HI">Hawaii</option>
                                                                <option value="CA">California</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="WA">Washington</option>
                                                            </select>
                                                        </div>
                                                        <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                            <input type="text" class="form-control"/>
                                                        </div>
                                                        <div  class=" col-lg-2 p-0 pe-1 pb-1">
                                                            <input type="text" class="form-control"/>
                                                        </div>

                                                        <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                            <input type="text"  class="form-control"/>
                                                        </div>

                                                        <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                            <input type="number"  class="form-control"/>
                                                        </div>
                                                        <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                            <input type="number" class="form-control"/>
                                                        </div>
                                                        <div class=" col-lg-2 p-0 pe-1 pb-1 d-flex">
                                                            <input type="text" class="form-control"/>
                                                            <button class="btn btn-danger ms-2">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"/>
                                            </form>
                                            <!-- 7th row start  -->
                                            <div class="row justify-content-center">
                                                
                                                <div class="col-lg-6">
                                                    <div class="row mb-2">
                                                        <label for="horizontal-firstname-input" class="col-3 text-end col-form-label">Note</label>
                                                        <div class="col-9">
                                                        <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Enter Note ">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 7th row end  -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <button class="btn btn-danger w-100">Reset</button>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-success w-100">Save as Draft</button>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-success w-100">Save</button>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <div class="tab-pane" id="received_payment_details" role="tabpanel">
                            <div class="row">
                                <div class="col p-0 table-responsive border-0">
                                    <table id="datatable-buttons" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Reg ID</th>
                                                <th>Name</th>
                                                <th>Posted By</th>
                                                <th>Project</th>
                                                <th>Date</th>
                                                <th>Items</th>
                                                <th>Total</th>
                                                <th>Cost</th>
                                                <th>Send for approve</th>
                                                <th>Is Approved</th>
                                                <th>Order IDs</th>
                                                <th>Log</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>1235</td>
                                                <td>puja</td>
                                                <td>Hridoy</td>
                                                <td>01</td>
                                                <td>12/03</td>
                                                <td>coffee</td>
                                                <td>1205</td>
                                                <td>459909</td>
                                                <td>ok</td>
                                                <td>yes</td>
                                                <td>12</td>
                                                <td>231</td>
                                                <td class="text-center">
                                                    <button type="button"
                                                        class="btn btn-sm btn-info btn-rounded waves-effect waves-light"> <i
                                                            class="fas fa-check"></i></button>
                                                    <button type="button"
                                                    class="btn btn-sm  m-1 btn-primary btn-rounded waves-effect waves-light"
                                                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-x"> <i
                                                        class="fas fa-eye"></i></button>
                                                    <button type="button"
                                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light"
                                                        data-bs-toggle="modal" data-bs-target=".journal-modal-xl-edit">
                                                        <i class="fas fa-pen"></i></button>
                                                    <button type="button"
                                                        class="btn btn-sm m-1 btn-danger btn-rounded waves-effect waves-light"> <i
                                                            class="fas fa-trash-alt"></i></button>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- form advanced init -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/form-advanced.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/select2/select2.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/datepicker/datepicker.min.js')); ?>"></script>

    <!-- form repeater js -->
    <script src="<?php echo e(URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('/assets/js/pages/form-repeater.int.js')); ?>"></script>

    

    <!-- Responsive Table js -->
    <script src="<?php echo e(URL::asset('/assets/libs/rwd-table/rwd-table.min.js')); ?>"></script>

    <!-- Init js -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/table-responsive.init.js')); ?>"></script>

    <!-- Table Editable plugin -->
    <script src="<?php echo e(URL::asset('/assets/libs/table-edits/table-edits.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('/assets/js/pages/table-editable.int.js')); ?>"></script>

    <!-- Required datatable js -->
    <script src="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/jszip/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>
    <!-- Datatable init js -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/datatables.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-bottom'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GITHUB\ERP-frontend-WID\resources\views/accounting/purchase/requisition.blade.php ENDPATH**/ ?>