
<!DOCTYPE html>
<html lang="en" style="position: relative;min-height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Clearance</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Contact-Form-Clean.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Footer-Clean.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Header-Blue.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/styles.css') }}>
</head>

@extends('layouts.apps')
@section('content')






<div class="col-sm-12 text-left ">
   <h1 class="border-bottom border-bot pt-3">Barangay Setting</h1>
</div>
<div class="main-wrapper col-sm-12 text-left h-100  pr-0 pl-0 " >
<div class="col-sm-12 pl-0 pr-0 search-bars" >
<!----------------
   EDIT HERE
   ---------------->

<div class="tab-nav ">
   <button class="tablinks active" onclick="schedules(event, 'schedule') ">Barangay Details</button>
   <button class="tablinks" onclick="schedules(event, 'barangay')">Official Committe</button>
   <button class="tablinks" onclick="schedules(event, 'purok')">Region/Area</button>

</div>



<div id="barangay" class="tabcontent">
    <button id="createbrgy" class="btn btn-success btn-xs ml-3 pr-4 pl-4 pt-2 mt-2" data-toggle="modal" data-target="#brgymodal"> <i class="fa fa-plus fa-lg"></i></button>

   <div class="row">
      <div class="col-sm-12">
         <div class="col-sm-12 overflow-auto pt-3 ">
            <table id="official" class="dataTables_info table datatable-element  resident table-striped jambo_table bulk_action text-center border">
               <thead>
                  <tr class="headings">

                     <th class="column-title">Name </th>
                     <th class="column-title">Position </th>
                     <th class="column-title">Official Committe </th>

                     <th class="column-title" > Year of Service    </th>
                      <th class="column-title">Action</th>

                  </tr>
               </thead>



            </table>
         </div>
      </div>
   </div>
</div>




<div class="modal fade" id="brgymodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="brgyform" name="brgyform" class="form-horizontal">
                   <input type="hidden" name="official_id" id="official_id">
                   <div id="print-error-msg" class="alert alert-danger print-error-msg" style="display:none">

                    <ul></ul>

                </div>
                   <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
                            <span id="name_err"  class="text-danger error-text name_err"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Position</label>
                        <div class="col-sm-12">

                            <select name="position" id="position" style="height:38px; width: 100%">
                            <option value="">-Select Position Status-</option>
                            <option value="Punong Barangay">Punong Barangay</option>
                            <option value="SK Chairman">SK Chairman</option>
                            <option value="Barangay Secretary">Barangay Secretary</option>
                            <option value="Barangay Treasurer">Barangay Treasurer</option>
                            <option value="Kagawad">Kagawad</option>
                          </select>
                          <span id="position_err" class="text-danger error-text position_err"></span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-6 control-label">Official Committee</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="official_committe" name="official_committe" placeholder="Enter Official Committee" value="" maxlength="50" required="">
                            <span id="official_committe_err" class="text-danger error-text official_committe_err"></span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">Year of Service</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="year_of_service" name="year_of_service" placeholder="Enter Year of Service" value="" maxlength="50" required="">
                            <span id="year_of_service_err" class="text-danger error-text year_of_service_err"></span>
                        </div>
                    </div>


                    <div class="flex justify-center">
                    <button class="bg-green-500 text-white px-8 py-3 rounded-lg font-semibold text-lg" type="submit">Submit</button>
                    </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>








<div id="schedule" class="tabcontent">
   <div class="row">
      <div class="col-sm-6">
         <div class="col-sm-12 overflow-auto pt-3 ">
            <div class="row">
               <div class="col-md-12 order-md-1  pt-4" >
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                </div>
                @endif

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                  <form class="needs-validation" novalidate="" action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input hidden id="barangay_id" name="barangay_id" value="{{ $Barangayimage->barangay_id ?? '' }}">
                    <div class="mb-3">
                        <label for="email">Barangay Logo Dimension: MAX:300px</label>
                        <input id="profile_image" type="file" class="form-control" class="text-center" value="{{ $Barangayimage->image ?? '' }}"  name="image" style="padding: 0px !important">
                        <div class="invalid-feedback">
                           Invalid Logo or no image
                        </div>
                     </div>


                     <div class="mb-3">
                        <label for="brgy">Barangay Name <span class="text-muted">(Optional)</span></label>
                        <input  class="form-control" id="name" name="barangay_name" value="{{ $Barangayimage->barangay_name ?? '' }}" placeholder="Ex: Barangay San Guillermo">
                        <div class="invalid-feedback">
                           Input Field Required
                        </div>
                     </div>
                     <div class="mb-3">
                        <label for="city">City </label>
                        <input type="text" class="form-control" id="city" name="city" value="{{ $Barangayimage->city ?? '' }}"placeholder="Ex: Morong" required="">
                        <div class="invalid-feedback">
                           Input Field Required
                        </div>
                     </div>
                     <div class="mb-3">
                        <label for="Province">Province </label>
                        <input type="text" class="form-control" id="province" value="{{ $Barangayimage->province ?? '' }}" name="province" placeholder="Ex: Rizal" required="">
                        <div class="invalid-feedback">
                           Input Field Required
                        </div>
                     </div>

                     <div class="flex justify-center">
                        <button class="bg-green-500 text-white hover:text-black hover:bg-gray-300 px-8 py-3 rounded-lg font-semibold text-lg" type="submit">Submit</button>
                    </div>

                  </form>





               </div>
            </div>
         </div>
      </div>
   </div>










</div>



<div id="purok" class="tabcontent">
    <button id="createarea" class="btn btn-success btn-xs ml-3 pr-4 pl-4 pt-2 mt-2" data-toggle="modal" data-target="#areamodal"> <i class="fa fa-plus fa-lg"></i></button>
   <div class="row">
      <div class="col-sm-12">
         <div class="col-sm-12 overflow-auto pt-3 ">
            <table id="region" class="dataTables_info table datatable-element  resident table-striped jambo_table bulk_action text-center border">
               <thead>
                  <tr class="headings">
                    <th class="column-title">Action</th>
                     <th class="column-title">Area </th>
                     <th class="column-title">Population </th>

                  </tr>
               </thead>

            </table>
         </div>
      </div>
   </div>





</div>

























<div class="modal fade" id="areamodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" >Create Area/Purok</h4>
            </div>
            <div class="modal-body">
                <form id="areaform" name="areaform" class="form-horizontal">
                    <div class="alert alert-danger print-error-msg" style="display:none">

                        <ul></ul>

                    </div>
                   <input type="hidden" name="area_id" id="area_id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Area</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="area" name="area" placeholder="Enter Area/Purok" value="" maxlength="50" required="">
                            <span id="area_err" class="text-danger error-text area_err"></span>

                        </div>
                    </div>



                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="regionsave" value="create">Save changes
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!--
<div class="modal fade" id="brgymodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" >Create Area/Purok</h4>
            </div>
            <div class="modal-body">
                <form id="brgyform" name="brgyform" class="form-horizontal">
                   <input type="hidden" name="area_id" id="area_id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Area</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="area" name="area" placeholder="Enter Area/Purok" value="" maxlength="50" required="">
                        </div>
                    </div>



                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="brgysave" value="create">Save changes
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

-->














</div>

</div>
@endsection
