@extends('fas.layout.mainlayout')

@section('content')
<!--start content-->
<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dasboard</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item active" aria-current="page">Add Work Order</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-12 col-lg-6">
                            <div class="card shadow-none bg-light border">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label class="form-label">Work Order Date</label>
                                            <input type="text" class="form-control form-select-sm" id="workorderdate">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">JCE Number</label>
                                            <input type="text" class="form-control form-select-sm" id="jcenumber">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Job Summary</label>
                                            <textarea class="form-control form-select-sm" rows="5" cols="4" id="jobsummary"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Technician Name</label>
                                            <input type="text" class="form-control form-select-sm" id="techname">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Model</label>
                                            <input type="text" class="form-control form-select-sm" id="model" disabled>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Serial Number</label>
                                            <input type="text" class="form-control form-select-sm" id="serialnumber" disabled>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Engine Number</label>
                                            <input type="text" class="form-control form-select-sm" id="enginenumber" disabled>
                                        </div>
                                        <div class="col-12" style="padding-bottom: .4em;">
                                            <label class="form-label">Complaint</label>
                                            <textarea class="form-control form-select-sm" rows="4" cols="4" id="complaint"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="card shadow-none bg-light border">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label class="form-label">Work Order Status</label>
                                            <input type="text" class="form-control form-select-sm" id="workorderstatus">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Incident Date</label>
                                            <input type="text" class="form-control form-select-sm" id="incidentdate" disabled>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Customer Name</label>
                                            <input type="text" class="form-control form-select-sm" id="customername" disabled>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Contact Person</label>
                                            <input type="text" class="form-control form-select-sm" id="contactperson" disabled>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Tel No.</label>
                                            <input type="text" class="form-control form-select-sm" id="telno" disabled>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Jobsite</label>
                                            <input type="text" class="form-control form-select-sm" id="jobsite" disabled>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Dispatch Date</label>
                                            <input type="text" class="form-control form-select-sm" id="dispatchdate" disabled>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">SRT</label>
                                            <input type="text" class="form-control form-select-sm" id="SRT" disabled>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Component</label>
                                            <input type="text" class="form-control form-select-sm" id="component" disabled>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Type of Issue</label>
                                            <input type="text" class="form-control form-select-sm" id="typeofissue" disabled>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-12 col-lg-12">
                            <div class="card shadow-none bg-light border">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Repair Start Date/time</label>
                                            <input type="datetime-local" class="form-control form-select-sm" id="repairstart">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Repair End Date/time</label>
                                            <input type="datetime-local" class="form-control form-select-sm" id="repairend">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">Service Report NO.</label>
                                            <input type="text" class="form-control form-select-sm" id="serviceno">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">SMR</label>
                                            <input type="text" class="form-control form-select-sm" id="smr">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">Machine Status</label>
                                            <input type="text" class="form-control form-select-sm" id="repairend">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">Service Model</label>
                                            <input type="text" class="form-control form-select-sm" id="serviceno">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">Arrived Date/Time</label>
                                            <input type="text" class="form-control form-select-sm" id="arrived">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">Plate No.</label>
                                            <input type="text" class="form-control form-select-sm" id="plateno">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Remarks</label>
                                            <input type="text" class="form-control form-select-sm" id="remarks">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Special Instruction</label>
                                            <textarea class="form-control form-select-sm" rows="2" cols="3" id="specialins"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Customer Name</label>
                                            <input type="text" class="form-control form-select-sm" id="customername">
                                        </div>

                                        <div class="col col-lg-12 mx-auto">
                                            <div class="card">
                                                <div class="card-body">
                                                    <ul class="nav nav-tabs nav-primary" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link active" data-bs-toggle="tab" href="#primaryfirst" role="tab" aria-selected="true">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="tab-title">Service Repair Details</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#primarysecond" role="tab" aria-selected="false">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="tab-title">Parts and Consumables</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#primarythird" role="tab" aria-selected="false">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="tab-title">Technician Activity</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content py-3">
                                                        <div class="tab-pane fade show active" id="primaryfirst" role="tabpanel">
                                                            <div class="row g-3">
                                                                <div class="col-12 col-lg-6">
                                                                    <label class="form-label">Defect Code</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewjcenumber">
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <label class="form-label">Failure Code</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewincidentdatetime">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Customer Request / Complaint</label>
                                                                    <input type="text" class="form-control form-select-sm " id="viewcustomername">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Cause / Findings</label>
                                                                    <input type="text" class="form-control form-select-sm t" id="viewcustomername">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Service Repair / Job Done</label>
                                                                    <input type="text" class="form-control form-select-sm " id="viewcustomername">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Recommendation</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewcustomername">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="primarysecond" role="tabpanel">
                                                            <div class="table-responsive mt-3">
                                                                <table class="table align-middle table-sm">
                                                                    <thead class="table-secondary">
                                                                        <tr>
                                                                            <th>Parts Code</th>
                                                                            <th>Description</th>
                                                                            <th>Quantity</th>
                                                                            <th>Price</th>
                                                                            <th>Total</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="partbody">
                                                                        <tr>
                                                                            <td class="col-md-3">
                                                                                <select class="form-select form-select-sm selectpart" id="partsno" style="min-height: 0rem; padding:0rem; padding-left:.5rem;" aria-label=".form-select-sm example">
                                                                                    <option value=""></option>
                                                                                </select>
                                                                            </td>
                                                                            <td class="col-md-4"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem;" id="partscode"></td>
                                                                            <td class="col-md-1"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:center;" id="partsdes" disabled></td>
                                                                            <td class="col-md-1"><input type="text" class="form-control form-control-sm numberonly" style="min-height: 0rem; padding:0rem; text-align:center;" id="partqty"></td>
                                                                            <td class="col-md-2"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:right;" id="parttotal" disabled></td>
                                                                            <td><strong><a href="javascript:;" id="addparts" class="text-success" style="font-size: 20px;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add"><i class="bi bi-plus-square-fill"></i></a></strong></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="primarythird" role="tabpanel">
                                                            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
</main>
<!--end page main-->
@endsection