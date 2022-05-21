@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title')Courses @endslot
    @endcomponent
    {{-- code  --}}

 
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end pb-5">
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".course-add-or-edit">Add</button>
                    </div>

                    <table id="datatable" class="table table-bordered dt-responsive w-100">
                        <thead>
                            <tr>
                                <th>Course / Service Name</th>
                                <th>Duration</th>
                                <th>Cash Account</th>
                                <th>Log</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Consultation Fees</td>
                                <td>1</td>
                                <td>1010 :: Cash Operating Account</td>
                                <td><small>Create: Nusrat Jahan @ 2019-06-09 22:22:54 There is no update record.</small></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".Courses-view">
                                    <i class="mdi mdi-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i class="fas fa-check"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i class="fas fa-check"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                        <i class="mdi mdi-pencil"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                        <i class="bx bx-dollar"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                    <i class="fas fa-trash-alt"></i>
                                    </button> 
                                </td>
                            </tr>
                            <tr>
                                <td>Pre-Vocational Course</td>
                                <td>12</td>
                                <td>1010 :: Cash Operating Account</td>
                                <td>Create: Shonod Digital @ <br> 2018-08-30 22:46:52 <br>
                                    Update: Shonod Digital @ <br> 2018-09-06 17:06:46</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".Courses-view">
                                        <i class="mdi mdi-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i class="fas fa-check"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i class="fas fa-check"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="mdi mdi-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="bx bx-dollar"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="fas fa-arrow-circle-right"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                        <i class="fas fa-trash-alt"></i>
                                        </button> 
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

<!-- Add And Edit -->
<div class="modal fade course-add-or-edit" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Course Create</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="card p-0 m-0">
                    <div class="card-body">
                        <div class="row pb-3">
                            <div class="col-6">
                                <label class="col-form-label">Course / Service Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-6">
                                <label class="col-form-label">Duration</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-6">
                                <label class="col-form-label">Cash Acc:</label>
                                <select class="form-select">
                                    <option>--Select--</option>
                                    <option> 6205 :: 1st January New Year event </option>
                                    <option> 8560 :: Accounting /Tally/ Audit/Legal expenses /option>
                                    <option> 1200 :: Accounts Receivable </option>
                                    <option> 7550002 :: Accounts Staff Salary  </option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="col-form-label">Description:</label>
                                <textarea class="form-control" name="" id="" rows="1"></textarea>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4"><label for="name" class="">Fee Heading</label></div>
                                            <div class="col-md-4"><label for="name" class="">Acc No</label></div>
                                            <div class="col-md-4"><label for="name" class="">Amount</label></div>
                                        </div>
                                        <form class="repeater" enctype="multipart/form-data">
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item class="row mb-1">
                                                    <div class=" col-lg-4">   
                                                         <input type="text" id="name" name="untyped-input" class="form-control " placeholder="Enter Your Name" />
                                                    </div>
                                                    <div class=" col-lg-4 px-1">
                                                        <select class="form-select">
                                                            <option>--Select--</option>
                                                            <option>1000 :: Current Assets</option>
                                                            <option>1010 :: Cash Operating Account </option>
                                                            <option>1020 :: Cash Debitors </option>
                                                            <option>1030 :: Petty Cash </option>
                                                        </select>
                                                    </div>                                                                  
                                                    <div class=" col-lg-4">
                                                        <input type="number" class="form-control"/>
                                                    </div>                                                                  
                                                </div>
                                            </div>
                                            <input data-repeater-create type="button" class="btn btn-success m-1 mt-lg-0" value="Add" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- view -->
<div class="modal fade Courses-view" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Course View</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="card p-0 m-0">
                    <div class="card-body">
                        <div class="row pb-3">
                            <div class="col-6">
                                <label class="col-form-label">Course / Service Name</label>
                                <input type="text" readonly class="form-control">
                            </div>
                            <div class="col-6">
                                <label class="col-form-label">Duration</label>
                                <input type="text" readonly class="form-control">
                            </div>
                            <div class="col-6">
                                <label class="col-form-label">Cash Acc:</label>
                                <p class="form-control" >6205 :: 1st January New Year event</p>
                            </div>
                            <div class="col-6">
                                <label class="col-form-label">Description:</label>
                                <textarea class="form-control" readonly name="" id="" rows="1"></textarea>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="repeater" enctype="multipart/form-data">
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item class="row mb-1">
                                                    <div class=" col-lg-4">   
                                                         <input type="text" readonly id="name" name="untyped-input" class="form-control" />
                                                    </div>
                                                    <div class=" col-lg-4 px-1">
                                                        <input type="text" readonly id="name" name="untyped-input" class="form-control" />
                                                    </div>                                                                  
                                                    <div class=" col-lg-4">
                                                        <input type="text" readonly id="name" name="untyped-input" class="form-control" />
                                                    </div>                                                                  
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection
@section('script')
<!-- Required datatable js -->
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
<script>
    $(document).ready(function(){
        $(".hide").hide();
      $("#container").click(function(){
        $(".hide").toggle();
      });
    });
</script>

<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection