
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Header-Blue.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/styles.css') }}>
</head><style>
  .small-btn {
    font-size: 12px;
    padding: 5px 10px;
  }
</style>
@extends('layouts.apps')

@section('content')
    <div class="col-sm-12 text-left ">
    <h1 class="border-bottom border-bot pt-3 text-2xl font-bold">Blotters Record</h1>
    </div>
    <div class="main-wrapper col-sm-12 text-left h-100  pr-0 pl-0 " >
        <div class="col-sm-12 pl-0 pr-0 search-bars" >
   <div class="topnav navbar navbar">
   <button class="btn btn-success text-white " href="#home" data-toggle="modal" data-target="#blottermodal" id="createNewBlotter">New Blotter Record <i class="fa fa-plus"></i></button>

   <div class="modal fade" id="blottermodal" name="blottermodal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="modelHeading"></h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">

                        <div class="tab-nav " style="background: rgb(67, 0, 155);">
                           <button class="tablinks btn btn-info" onclick="schedules(event, 'inci_detail')">Incident Detail and Narrative</button>
                        </div>

                        <form id="blotterform"  name="blotterform" class="modal-input">
                           {{ csrf_field() }}
                        <div id="inci_detail" class="tabcontent">

                              <input type="hidden" name="blotter_id" id="blotter_id">
                              {{-- <input type="hidden" name="person_id" id="person_id"> --}}
                              <!-- Dropdown for Complainants -->
                              <div class="col-sm-6">
                              <label class="block">Complainants</label>
                              <div class="relative flex items-center">
                                 <select class="form-control resident-dropdown mr-4" id="complainantsDropdown" name="complainantsDropdown">
                                    <option value="0">Choose Complainant</option>
                                    <!-- Use a loop to generate the options dynamically -->
                                    @foreach ($residents as $resident)
                                       <option value="{{ $resident->firstname.' '.$resident->lastname  }}">{{ $resident->firstname }} {{ $resident->lastname }}</option>
                                    @endforeach
                                 </select>
                                 <input type="text" class="form-control non-resident-input hidden block mb-2 mr-2 text-sm font-medium text-gray-900 dark:text-black" id="complainantsInput" name="complainantsInput" placeholder="Enter Complainant's Name">
                                 <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" id="complainantsNonResident">
                                 <label class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-600" for="complainantsNonResident">Non-Resident</label>
                              </div>
                              <span class="text-red-500 error-text complainants_error"></span>
                           </div>

                           <div class="col-sm-6">
                              <label class="block">Respondents</label>
                              <div class="relative flex items-center">
                                 <select class="form-control resident-dropdown mr-4" id="respondentsDropdown" name="respondentsDropdown">
                                    <option value="0">Choose Respondent</option>
                                    <!-- Use a loop to generate the options dynamically -->
                                    @foreach ($residents as $resident)
                                       <option value="{{ $resident->firstname.' '.$resident->lastname   }}">{{ $resident->firstname }} {{ $resident->lastname }}</option>
                                    @endforeach
                                 </select>
                                 <input type="text" class="form-control non-resident-input hidden  block mb-2 mr-2 text-sm font-medium text-gray-900 dark:text-black" id="respondentsInput" name="respondentsInput" placeholder="Enter Respondent's Name">
                                 <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" id="respondentsNonResident">
                                 <label class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-600" for="respondentsNonResident">Non-Resident</label>
                              </div>
                              <span class="text-red-500 error-text respondents_error"></span>
                           </div>

                           <div class="col-sm-6">
                              <label class="block">Attackers</label>
                              <div class="relative flex items-center">
                                 <select class="form-control resident-dropdown mr-4" id="attackersDropdown" name="attackersDropdown">
                                    <option value="0">Choose Attacker</option>
                                    <!-- Use a loop to generate the options dynamically -->
                                    @foreach ($residents as $resident)
                                       <option value="{{  $resident->firstname.' '.$resident->lastname  }}">{{ $resident->firstname }} {{ $resident->lastname }}</option>
                                    @endforeach
                                 </select>
                                 <input type="text" class="form-control non-resident-input hidden  block mb-2 mr-2 text-sm font-medium text-gray-900 dark:text-black" id="attackersInput"  name="attackersInput"  placeholder="Enter Attacker's Name">
                                 <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" id="attackersNonResident">
                                 <label class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-600" for="attackersNonResident">Non-Resident</label>
                              </div>
                              <span class="text-red-500 error-text attackers_error"></span>
                           </div>

                           <div class="col-sm-6">
                              <label class="block">Victims</label>
                              <div class="relative flex items-center">
                                 <select class="form-control resident-dropdown mr-4" id="victimsDropdown" name="victimsDropdown">
                                    <option value="0">Choose Victim</option>
                                    <!-- Use a loop to generate the options dynamically -->
                                    @foreach ($residents as $resident)
                                       <option value="{{  $resident->firstname.' '.$resident->lastname   }}">{{ $resident->firstname }} {{ $resident->lastname }}</option>
                                    @endforeach
                                 </select>
                                 <input type="text" class="form-control non-resident-input hidden  block mb-2 mr-2 text-sm font-medium text-gray-900 dark:text-black" id="victimsInput" name="victimsInput" placeholder="Enter Victim's Name">
                                 <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" id="victimsNonResident">
                                 <label class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-600" for="victimsNonResident">Non-Resident</label>
                              </div>
                              <span class="text-red-500 error-text victims_error"></span>
                           </div>

                              <div class="row" style="margin-left: 0px;margin-right: 0px;">
                                 <div class="col-sm-6" >
                                 <label >Incident Location</label>
                                 <input type="text" id="incident_location" name="incident_location" required="required" class="form-control ">
                                 <span class="text-danger error-text incident_location_error"></span>
                                 </div>
                                 <div class="col-sm-6" >
                                    <label >Incident type</label> 
                                    <input type="text" id="incident_type" name="incident_type" required="required" class="form-control ">
                                    <span class="text-danger error-text incident_type_error"></span>
                                 </div>
                              </div>

                              <div class="row" style="margin-left: 0px;margin-right: 0px;">
                                 <div class="col-sm-6" >
                                 <label >Date of Incident</label>
                                 <input type="date" id="date_incident" name="date_incident" required="required" class="form-control ">
                                 <span class="text-danger error-text date_incident_error"></span>

                                 </div>
                                 <div class="col-sm-6" >
                                    <label >Time of Incident</label>
                                    <input type="time" id="time_incident" name="time_incident" required="required" class="form-control ">
                                    <span class="text-danger error-text time_incident_error"></span>
                                 </div>
                              </div>

                              <div class="row" style="margin-left: 0px;margin-right: 0px; margin-top:1rem;">
                                 <div class="col-sm-6" >
                                 <label >Date Reported</label>
                                 <input type="date" id="date_reported" name="date_reported" required="required" class="form-control ">
                                 <span class="text-danger error-text date_reported_error"></span>
                                 </div>
                                 <div class="col-sm-6" >
                                    <label >Time Reported</label>
                                    <input type="time" id="time_reported" name="time_reported" required="required" class="form-control ">
                                    <span class="text-danger error-text time_reported_error"></span>
                                 </div>
                              </div>

                              <div class="row" style="margin-left: 0px;margin-right: 0px; margin-top:1rem;">
                                 <div class="col-sm-6" >
                                 <label >Date Schedule</label>
                                 <input type="date" id="schedule_date" name="schedule_date" required="required" class="form-control ">
                                 <input type="text" id="schedule" name="schedule" hidden>

                                 </div>

                              </div>

                              <div class="row" style="margin-left: 0px;margin-right: 0px; margin-top:1rem;">

                                 <div class="col-sm-6" >
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Status
                                    </label>

                                    <div class="col-md-12 col-sm-12 ">
                                       <input type="radio" name="status" value="Ongoing">
                                       <label for="ongoing">Ongoing</label><br>
                                       <input type="radio" name="status" value="Settled">
                                       <label for="settled">Settled</label><br>
                                       <span class="text-danger error-text status_error"></span>
                                    </div>
                                 </div>
                              </div>

                              

                              <div class="item form-group" style="margin-top:1rem;>
                                 <label for="incident_narrative">Incident Narrative</label>
                                 <div class="col-md-12 col-sm-12 ">
                                    <textarea name="incident_narrative" id="incident_narrative" rows="10" style="width: 100%"></textarea>
                                    <span class="text-danger error-text incident_narrative_error"></span>
                                 </div>
                              </div>
                        </div>

                        <div class="item form-group" style="margin-top: 1rem;">
                           <div class="col-md-12 col-sm-12 offset-md-4">
                              <button type="submit" id="saveBtn" class="btn bg-blue-500 hover:bg-blue-300">Save New Blotters</button>
                              <a class="btn bg-red-500 hover:bg-red-300 text-white" type="button" data-dismiss="modal" style="margin-left: 4px;" >Cancel</a>
                              <input class="btn bg-green-500 hover:bg-green-300" type="reset" value="Reset">
                           </div>
                        </div>

                     </form>

            </div>

            <div class="modal-footer text-white">
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="viewblottermodal" name="viewblottermodal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="viewmodelHeading"></h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>

            <div class="modal-body">
    <table class="bulk_action dataTables_info table datatable-element table-striped jambo_table bulk_action text-center border no-footer">
        <thead>
            <tr class="headings">
                <th class="column-title">Blotter Id</th>
                <th class="column-title">Status</th>
                <th class="column-title">Complainants</th>
                <th class="column-title">Respondents</th>
                <th class="column-title">Attackers</th>
                <th class="column-title">Victims</th>
                <th class="column-title">Incident Location</th>
                <th class="column-title">Incident Type</th>
                <th class="column-title">Incident Date</th>
                <th class="column-title">Incident Time</th>
                <th class="column-title">Schedule Date</th>
                <!-- <th class="column-title">Residency</th> -->
                {{-- <th class="column-title">Schedule Time</th> --}}
            </tr>
        </thead>
        <tbody>
            <tr>
                <td id="viewblotter_id" class="py-4"></td>
                <td id="status" class="py-4"></td>
                <td id="viewcomplainants" class="py-4"></td>
                <td id="viewrespondents" class="py-4"></td>
                <td id="viewattackers" class="py-4"></td>
                <td id="viewvictims" class="py-4"></td>
                <td id="viewincident_location" class="py-4"></td>
                <td id="viewincident_type" class="py-4"></td>
                <td id="viewdate_incident" class="py-4"></td>
                <td id="viewtimeof_incident" class="py-4"></td>
                <td id="viewschedule_date" class="py-4"></td>
                <!-- <td id="viewresidency" class="py-4"></td> -->
                {{-- <td id="viewschedule_time" class="py-4"></td> --}}
            </tr>
        </tbody>
    </table>
    <hr>
               <h4>Incident Narrative</h4>
               <textarea name="viewincident_narrative" id="viewincident_narrative" rows="10" style="width: 100%; border:none;" disabled></textarea>
               {{-- <form id="blotterform"  name="blotterform" class="modal-input">
               </form> --}}
            </div>



            <div class="modal-footer text-white">
            </div>
         </div>
      </div>
   </div>



   <div class="search-container">
      {{-- <form action="/action_page.php"> --}}
         <input class="global_filter" type="text" id="global_filter" placeholder="Search..." name="search">
         <button type="submit"><i class="fa fa-search"></i></button>
      {{-- </form> --}}
   </div>
   </div>



   <div class=" col-sm-12 text-left h-100  pr-0 pl-0 pt-2 pb-2 text-white" >
      <div class="row pl-4 pr-4   ">
         <div class="col-sm-12 border border-bot ">
         </div>
      </div>
      <div class="row pt-4 pl-4 pr-4">
         <div class="col-sm-12 overflow-auto display-nones ">




         <table id="blotter-table" class="bulk_action dataTables_info table datatable-element resident table-striped jambo_table bulk_action text-center border dataTable no-footer data-table">
        <thead  class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="column-title">Action</th>
                <th class="column-title">Blotter Id</th>
                <th class="column-title">Complainants</th>
                <th class="column-title">Incident Type</th>
                <th class="column-title">Blotter Status</th>
                <th class="column-title">Date Recorded</th>
                <th class="column-title">Time Recorded</th>
                <th class="column-title">Incident Date</th>
                <th class="column-title">Incident Time</th>
                <th class="bulk-actions" hidden colspan="7">
                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                </th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

            <script type="text/javascript">

               $(function () {
                     $.ajaxSetup({
                        headers: {
                           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                  });

               // PersonInvolves
               // JavaScript code to handle the selection of dropdowns and set their values
               $(document).ready(function() {
                  $('#complainants, #respondents, #attackers, #victims').change(function() {
                     var selectedOption = $(this).children("option:selected").text();
                     $(this).prev().val(selectedOption);
                  });
               });

               // Adding Complainants
               var complainants_table = $('.complainants-table').DataTable({
                  processing: true,
                  serverSide: true,
                  ajax: "{{ route('personinvolves.index') }}",
                  columns: [
                     {data: 'add_complainant', name: 'add_complainant', orderable: false, searchable: false},
                     {data: 'fullname', name: 'fullname', orderable: false, searchable: false},
                     { data: 'alias', name: 'alias'},
                     { data: 'firstname', name: 'firstname', visible: false},
                     { data: 'middlename', name: 'middlename', visible: false},
                     { data: 'lastname', name: 'lastname', visible: false}
                  ]

               });

               $('body').on('click', '.addComplainant', function(){
                  var resident_id = $(this).data('id');
                  $.get("{{ route('personinvolves.index') }}" +'/' + resident_id +'/edit', function (data) {
                     $('.addComplainant' + data.resident_id).trigger('click');
                  })
               });

               // Adding Complainants End

               // Adding Respondents
               var respondents_table = $('.respondents-table').DataTable({
                  processing: true,
                  serverSide: true,
                  ajax: "{{ route('personinvolves.index') }}",
                  columns: [
                     {data: 'add_respondent', name: 'add_respondent', orderable: false, searchable: false},
                     {data: 'fullname', name: 'fullname', orderable: false, searchable: false},
                     { data: 'alias', name: 'alias'},
                     { data: 'firstname', name: 'firstname', visible: false},
                     { data: 'middlename', name: 'middlename', visible: false},
                     { data: 'lastname', name: 'lastname', visible: false}
                  ]

               });

               $('body').on('click', '.addRespondent', function(){
                  var resident_id = $(this).data('id');
                  $.get("{{ route('personinvolves.index') }}" +'/' + resident_id +'/edit', function (data) {
                     $('.addRespondent' + data.resident_id).trigger('click');
                  })
               });
               // Adding Respondents End

               // Adding Victims
               var victims_table = $('.victims-table').DataTable({
                  processing: true,
                  serverSide: true,
                  ajax: "{{ route('personinvolves.index') }}",
                  columns: [
                     {data: 'add_victim', name: 'add_victim', orderable: false, searchable: false},
                     {data: 'fullname', name: 'fullname', orderable: false, searchable: false},
                     { data: 'alias', name: 'alias'},
                     { data: 'firstname', name: 'firstname', visible: false},
                     { data: 'middlename', name: 'middlename', visible: false},
                     { data: 'lastname', name: 'lastname', visible: false}
                  ]

               });

               $('body').on('click', '.addVictim', function(){
                  var resident_id = $(this).data('id');
                  $.get("{{ route('personinvolves.index') }}" +'/' + resident_id +'/edit', function (data) {
                     $('.addVictim' + data.resident_id).trigger('click');
                  })
               });

               // Adding Victims End

               // Adding Attackers
               var attackers_table = $('.attackers-table').DataTable({
                  processing: true,
                  serverSide: true,
                  ajax: "{{ route('personinvolves.index') }}",
                  columns: [
                     {data: 'add_attacker', name: 'add_attacker', orderable: false, searchable: false},
                     {data: 'fullname', name: 'fullname', orderable: false, searchable: false},
                     { data: 'alias', name: 'alias'},
                     { data: 'firstname', name: 'firstname', visible: false},
                     { data: 'middlename', name: 'middlename', visible: false},
                     { data: 'lastname', name: 'lastname', visible: false}
                  ]

               });

               $('body').on('click', '.addAttacker', function(){
                  var resident_id = $(this).data('id');
                  $.get("{{ route('personinvolves.index') }}" +'/' + resident_id +'/edit', function (data) {
                     $('.addAttacker' + data.resident_id).trigger('click');
                  })
               });

               // Adding Attackers End

               // PersonInvolves End

               // Blotter and Narrative Report
               var table = $('.data-table').DataTable({
                  processing: true,
                  dom: 'lrtip',
                  serverSide: true,
                  ajax: "{{ route('blotters.index') }}",
                  columns: [
                     {data: 'action', name: 'action', orderable: false, searchable: false, render: function(data, type, row) {
               // Render the action icons with Font Awesome
               return `
                  <a href="#" class="btn btn-sm btn-primary viewBlotter" data-id="${row.blotter_id}">
                     <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-info editBlotter" data-id="${row.blotter_id}">
                     <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger deleteBlotter" data-id="${row.blotter_id}">
                     <i class="fas fa-trash"></i>
                  </a>
               `;
            }},
                     { data: 'blotter_id',
                       name: 'blotter_id',
                       render: function (data, type, row) {
                        // Create a hyperlink for the blotter_id
                        return '<a class="text-blue-500" href="' + "{{ route('blotters.index') }}" + '/' + data + '">' + data + '</a>';
                     }},
                     {data: 'complainants', name: 'complainants'},
                     {   data: 'incident_type', name: 'incident_type'},
                     {data: 'status', name: 'status'},
                     {   data: 'date_reported', name: 'date_reported'},
                     {  data: 'time_reported', name: 'time_reported'},
                     
                     {     data: 'date_incident', name: 'date_incident'},
                     { data: 'time_incident', name: 'time_incident'},
                     // { data: 'residency', name: 'residency'}
                  ]

               });
               function toggleResidentSelection(sectionId) {
                  const checkbox = document.getElementById(`${sectionId}NonResident`);
                  const dropdown = document.getElementById(`${sectionId}Dropdown`);
                  const input = document.getElementById(`${sectionId}Input`);

                  if (checkbox.checked) {
                     dropdown.style.display = "none";
                     input.style.display = "block";
                  } else {
                     dropdown.style.display = "block";
                     input.style.display = "none";
                  }
               }

   // Attach event listeners to each "non-resident" checkbox
   const sectionIds = ['complainants', 'respondents', 'attackers', 'victims'];
   sectionIds.forEach((sectionId) => {
      const checkbox = document.getElementById(`${sectionId}NonResident`);
      checkbox.addEventListener('change', () => toggleResidentSelection(sectionId));
   });

               $('#createNewBlotter').click(function () {
                  $("#saveBtn").attr("disabled", false);
                  $('#saveBtn').val("create-blotter");
                  $('#blotter_id').val('');
                  $('#blotterform').trigger("reset");
                  $('#modelHeading').html("Create New Blotter");
                  $(document).find('span.error-text').text('');
                  $('#blottermodal').modal('show');
               });

               $('body').on('click', '.viewBlotter', function(){
                  var blotter_id = $(this).data('id');
                  $.get("{{ route('blotters.index') }}" +'/' + blotter_id +'/edit', function (data) {
                     $('#viewmodelHeading').html("View Blotter");
                     $('#status').html(data[0].status);
                     $('#viewcomplainants').html(data[0].complainants);
                     $('#viewrespondents').html(data[0].respondents);
                     $('#viewattackers').html(data[0].attackers);
                     $('#viewvictims').html(data[0].victims);
                     $('#viewblottermodal').modal('show');
                     $('#viewblotter_id').html(data[0].blotter_id);
                     $('#viewincident_location').html(data[0].incident_location);
                     $('#viewincident_type').html(data[0].incident_type);
                     $('#viewdate_incident').html(data[0].date_incident);
                     $('#viewtimeof_incident').html(data[0].time_incident);


                     $('#viewschedule_date').html(data[0].schedule_date);
                     $('#viewincident_narrative').val(data[0].incident_narrative);

                  })
               });

               $('body').on('click', '.editBlotter', function () {
                  var blotter_id = $(this).data('id');
                  $(document).find('span.error-text').text('');
                  $("#saveBtn").attr("disabled", false);
                  $('#blotterform').trigger("reset");
                  $.get("{{ route('blotters.index') }}" +'/' + blotter_id +'/edit', function (data) {
                     $('#modelHeading').html("Edit Blotter");
                     $('#saveBtn').val("edit-blotter");
                     $('#blottermodal').modal('show');
                     $('#blotter_id').val(data[0].blotter_id);
                     $('#complainants').val(data[0].complainants);
                     $('#respondents').val(data[0].respondents);
                     $('#attackers').val(data[0].attackers);
                     $('#victims').val(data[0].victims);
                     $('#incident_location').val(data[0].incident_location);
                     $('#incident_type').val(data[0].incident_type);
                     $('#date_incident').val(data[0].date_incident);
                     $('#time_incident').val(data[0].time_incident);
                     $('#date_reported').val(data[0].date_reported);
                     $('#time_reported').val(data[0].time_reported);
                     $('#schedule_date').val(data[0].schedule_date);
                     $('input[name^="status"][value="'+data[0].status+'"').prop('checked',true);
                     $('#incident_narrative').val(data[0].incident_narrative);

                  })
               });

               $('#saveBtn').click(function (e) {

                  e.preventDefault();
                  $(this).attr("disabled", true);
                  $.ajax({
                     data: $('#blotterform').serialize(),
                     url: "{{ route('blotters.store') }}",
                     type: "POST",
                     dataType: 'json',
                     beforeSend:function(){
                        $(document).find('span.error-text').text('');
                     },
                     success: function (data) {
                        if(data.status == 0){
                           // $('.incident_location_error').html("The incident location is required.");
                           $.each(data.error, function(prefix, val){
                              $('span.'+prefix+'_error').text(val[0]);
                           });
                           $('#saveBtn').attr("disabled", false);
                        }
                        else{
                        $(document).find('span.error-text').text('');
                        $('#blotterform').trigger("reset");
                        $('#blottermodal').modal('hide');
                        $('.error-msgg').html("");
                        table.draw();
                        }
                     },
                     error: function (data) {
                        console.log('Error:', data);
                        $('#saveBtn').html('Save Changes');
                     }
               });
               });

               $('body').on('click', '.deleteBlotter', function () {

               var blotter_id = $(this).data("id");
               if(confirm("Are You sure want to delete !")){
                  $.ajax({
                     type: "DELETE",
                     url: "{{ route('blotters.store') }}"+'/'+blotter_id,
                     success: function (data) {
                        table.draw();
                     },
                     error: function (data) {
                        console.log('Error:', data);
                     }
               });
               }


            });
            });

            </script>

         </div>
         </div>
      </div>
   </div>

   @endsection


