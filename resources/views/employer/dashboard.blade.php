@extends('layouts.employer')

@section('content')
<div class="content employee-content-page" style="margin-top:0px;">
  <div class="col-md-12 col-12 mr-auto ml-auto">
	<!--      Wizard container        -->
	<div class="wizard-container">
	  <div class="card card-wizard active" data-color="rose" id="wizardProfile">
		<form action="" method="" novalidate="novalidate">
		  <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
		  <div class="card-header text-center">
			<div class="card-header card-header-primary card-header-icon">
			  <!-- <div class="card-icon"> <i class="material-icons">assignment_ind</i> </div> -->
			  <h4 class="card-title">Company</h4>
			  <a href="#0" class="cd-btn js-cd-panel-trigger btn btn-round btn-rose timesheet-btn add-invoice-btn cd-btn js-cd-panel-trigger" data-panel="main"><i class="material-icons">add</i> Add Company
			  <div class="ripple-container">
				<div class="ripple-decorator ripple-on ripple-out" style="left: 1204px; top: 139px; background-color: rgb(255, 255, 255); transform: scale(18.8574);"></div>
			  </div>
			  </a> </div>
		  </div>
		  <div class="wizard-navigation wizard-navigation invoice-cnt">
			<!--<ul class="nav nav-pills">
			<li class="nav-item" style="width: 25%;"> <a class="nav-link active" href="#about" data-toggle="tab" role="tab">open</a> </li>
			<li class="nav-item" style="width: 25%;"> <a class="nav-link" href="#account" data-toggle="tab" role="tab">Due</a> </li>
			<li class="nav-item" style="width: 25%;"> <a class="nav-link" href="#address" data-toggle="tab" role="tab">Paid</a> </li>
			<li class="nav-item" style="width: 25%;"> <a class="nav-link" href="#timeline" data-toggle="tab" role="tab"> Rejeted </a> </li>
		  </ul>-->
			&nbsp; </div>
		  <div class="card-body invoice-card-cnt">
			<div class="tab-content" style="padding: 0px 0px;">
			  <div class="tab-pane active" id="about">
				<div class="card last-box" style="margin-top: 0px;">
				  <div class="card-header">
					<div class="card-body attooney-body">
					  <ul class="nav nav-pills nav-pills-warning" role="tablist">
						<li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#link1" role="tablist">Active</a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#link2" role="tablist">Inactive</a></li>
					  </ul>
					  <div class="tab-content tab-space" style="padding: 0px 0px;">
						<div class="tab-pane  active show" id="link1">
						  <div class="table-wrapper vendor-table">
							<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
							  <thead>
								<tr style="background-color: #f1f1f1; color: #000;">
								  <th colspan="6" align="center" class="table-showlist" style="padding:0px 5px !important; background-color: #f1f1f1; ">Show <span>
									<select>
									  <option value="volvo">10</option>
									  <option value="saab">20</option>
									  <option value="opel">30</option>
									  <option value="audi">40</option>
									</select>
									</span>entries</th>
								  <th style="padding:0px 5px !important; background-color: #f1f1f1; "> <div class="form-group bmd-form-group" >
									  <label for="exampleEmail" class="bmd-label-floating">Search</label>
									  <input type="text" class="form-control" id="" style="margin-bottom: 0px; padding: 14px 0px 3px 0px !important; height:34px">
									</div></th>
								  <th style="padding:0px 5px !important; background-color: #f1f1f1; "><ul class="navbar-nav">
									  <li class="nav-item dropdown"> <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons more-links">more_horiz</i>
										<p class="d-lg-none d-md-block"> Account </p>
										</a>
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile"> <a class="dropdown-item" href="#">Profile</a> <a class="dropdown-item" href="#">Settings</a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item" href="#">Log out</a> </div>
									  </li>
									</ul></th>
								</tr>
								<tr>
								  <th align="center" style="background-color: #e7e7e7; color: #000;"> <div class="form-check form-check-inline" style="margin-top: 15px; margin-bottom: .0rem;">
									  <label class="form-check-label" style="padding-right: 0px; padding-left: 19px;">
									  <input class="form-check-input" type="checkbox" value="">
									  <span class="form-check-sign" style="padding-right: 0px;"> <span class="check" style=" top: 0px; left: 6px;"></span> </span> </label>
									</div>
									 </th>
								  <th style="background-color: #e7e7e7; color: #000;">Company Id &nbsp;&nbsp;&nbsp;</th>
								  <th style="background-color: #e7e7e7; color: #000;">Name</th>
								  <th style="background-color: #e7e7e7; color: #000;">Phone &nbsp;&nbsp;&nbsp;</th>
								  <th style="background-color: #e7e7e7; color: #000;">Email &nbsp;&nbsp;&nbsp;</th>
								  <th style="background-color: #e7e7e7; color: #000;">Active Cases</th>
								  <th style="background-color: #e7e7e7; color: #000;">Total Cases</th>
								  <th class="disabled-sorting text-center" style="padding-right: 15px !important; background-color: #e7e7e7;">Actions &nbsp; &nbsp;</th>
								</tr>
							  </thead>
							  <tbody>
								<tr >
								  <td><div class="form-check form-check-inline" style="margin-top: 15px; margin-bottom: .0rem;">
									  <label class="form-check-label" style="padding-right: 0px; padding-left: 19px;">
									  <input class="form-check-input" type="checkbox" value="">
									  <span class="form-check-sign" style="padding-right: 0px;"> <span class="check" style=" top: 0px; left: 6px;"></span> </span> </label>
									</div></td>
								  <td style=" text-align:left; line-height: 16px;">01234</td>
								  <td style=" text-align:left; line-height: 16px;">Paradigm Technology</td>
								  <td style=" text-align:left; line-height: 16px;">8125858490</td>
								  <td style=" text-align:left; line-height: 16px;">ramesh@aakrutisolutions.com</td>
								  <td style=" text-align:left; line-height: 16px;">Active</td>
								  <td style=" text-align:left;">10</td>
								  <td align="left" style="padding: 0px 5px !important;text-align: center;"><a href="attorney-employers-view.html" class="btn btn-link btn-warning btn-just-icon edit custom-edit-icon view-color view-color22"><i class="material-icons small-icon-view" style="text-align: center;">visibility</i></a> <a href="#" class="edit delecte-icon22" data-toggle="modal"><i class="fa fa-times" style="margin-top: 15px;"></i></a> </td>
								</tr>
								<tr >
								  <td><div class="form-check form-check-inline" style="margin-top: 15px; margin-bottom: .0rem;">
									  <label class="form-check-label" style="padding-right: 0px; padding-left: 19px;">
									  <input class="form-check-input" type="checkbox" value="">
									  <span class="form-check-sign" style="padding-right: 0px;"> <span class="check" style=" top: 0px; left: 6px;"></span> </span> </label>
									</div></td>
								  <td style=" text-align:left; line-height: 16px;">01234</td>
								  <td style=" text-align:left; line-height: 16px;">Paradigm Technology</td>
								  <td style=" text-align:left; line-height: 16px;">8125858490</td>
								  <td style=" text-align:left; line-height: 16px;">ramesh@aakrutisolutions.com</td>
								  <td style=" text-align:left; line-height: 16px;">Active</td>
								  <td style=" text-align:left;">10</td>
								  <td align="left" style="padding: 0px 5px !important;text-align: center;"><a href="attorney-employers-view.html" class="btn btn-link btn-warning btn-just-icon edit custom-edit-icon view-color view-color22"><i class="material-icons small-icon-view" style="text-align: center;">visibility</i></a> <a href="#" class="edit delecte-icon22" data-toggle="modal"><i class="fa fa-times" style="margin-top: 15px;"></i></a> </td>
								</tr>
								<tr >
								  <td><div class="form-check form-check-inline" style="margin-top: 15px; margin-bottom: .0rem;">
									  <label class="form-check-label" style="padding-right: 0px; padding-left: 19px;">
									  <input class="form-check-input" type="checkbox" value="">
									  <span class="form-check-sign" style="padding-right: 0px;"> <span class="check" style=" top: 0px; left: 6px;"></span> </span> </label>
									</div></td>
								  <td style=" text-align:left; line-height: 16px;">01234</td>
								  <td style=" text-align:left; line-height: 16px;">Paradigm Technology</td>
								  <td style=" text-align:left; line-height: 16px;">8125858490</td>
								  <td style=" text-align:left; line-height: 16px;">ramesh@aakrutisolutions.com</td>
								  <td style=" text-align:left; line-height: 16px;">Active</td>
								  <td style=" text-align:left;">10</td>
								  <td align="left" style="padding: 0px 5px !important;text-align: center;"><a href="attorney-employers-view.html" class="btn btn-link btn-warning btn-just-icon edit custom-edit-icon view-color view-color22"><i class="material-icons small-icon-view" style="text-align: center;">visibility</i></a> <a href="#" class="edit delecte-icon22" data-toggle="modal"><i class="fa fa-times" style="margin-top: 15px;"></i></a> </td>
								</tr>
								<tr >
								  <td><div class="form-check form-check-inline" style="margin-top: 15px; margin-bottom: .0rem;">
									  <label class="form-check-label" style="padding-right: 0px; padding-left: 19px;">
									  <input class="form-check-input" type="checkbox" value="">
									  <span class="form-check-sign" style="padding-right: 0px;"> <span class="check" style=" top: 0px; left: 6px;"></span> </span> </label>
									</div></td>
								  <td style=" text-align:left; line-height: 16px;">01234</td>
								  <td style=" text-align:left; line-height: 16px;">Paradigm Technology</td>
								  <td style=" text-align:left; line-height: 16px;">8125858490</td>
								  <td style=" text-align:left; line-height: 16px;">ramesh@aakrutisolutions.com</td>
								  <td style=" text-align:left; line-height: 16px;">Active</td>
								  <td style=" text-align:left;">10</td>
								  <td align="left" style="padding: 0px 5px !important;text-align: center;"><a href="attorney-employers-view.html" class="btn btn-link btn-warning btn-just-icon edit custom-edit-icon view-color view-color22"><i class="material-icons small-icon-view" style="text-align: center;">visibility</i></a> <a href="#" class="edit delecte-icon22" data-toggle="modal"><i class="fa fa-times" style="margin-top: 15px;"></i></a> </td>
								</tr>
								<tr >
								  <td><div class="form-check form-check-inline" style="margin-top: 15px; margin-bottom: .0rem;">
									  <label class="form-check-label" style="padding-right: 0px; padding-left: 19px;">
									  <input class="form-check-input" type="checkbox" value="">
									  <span class="form-check-sign" style="padding-right: 0px;"> <span class="check" style=" top: 0px; left: 6px;"></span> </span> </label>
									</div></td>
								  <td style=" text-align:left; line-height: 16px;">01234</td>
								  <td style=" text-align:left; line-height: 16px;">Paradigm Technology</td>
								  <td style=" text-align:left; line-height: 16px;">8125858490</td>
								  <td style=" text-align:left; line-height: 16px;">ramesh@aakrutisolutions.com</td>
								  <td style=" text-align:left; line-height: 16px;">Active</td>
								  <td style=" text-align:left;">10</td>
								  <td align="left" style="padding: 0px 5px !important;text-align: center;"><a href="attorney-employers-view.html" class="btn btn-link btn-warning btn-just-icon edit custom-edit-icon view-color view-color22"><i class="material-icons small-icon-view" style="text-align: center;">visibility</i></a> <a href="#" class="edit delecte-icon22" data-toggle="modal"><i class="fa fa-times" style="margin-top: 15px;"></i></a> </td>
								</tr>
								<tr >
								  <td><div class="form-check form-check-inline" style="margin-top: 15px; margin-bottom: .0rem;">
									  <label class="form-check-label" style="padding-right: 0px; padding-left: 19px;">
									  <input class="form-check-input" type="checkbox" value="">
									  <span class="form-check-sign" style="padding-right: 0px;"> <span class="check" style=" top: 0px; left: 6px;"></span> </span> </label>
									</div></td>
								  <td style=" text-align:left; line-height: 16px;">01234</td>
								  <td style=" text-align:left; line-height: 16px;">Paradigm Technology</td>
								  <td style=" text-align:left; line-height: 16px;">8125858490</td>
								  <td style=" text-align:left; line-height: 16px;">ramesh@aakrutisolutions.com</td>
								  <td style=" text-align:left; line-height: 16px;">Active</td>
								  <td style=" text-align:left;">10</td>
								  <td align="left" style="padding: 0px 5px !important;text-align: center;"><a href="attorney-employers-view.html" class="btn btn-link btn-warning btn-just-icon edit custom-edit-icon view-color view-color22"><i class="material-icons small-icon-view" style="text-align: center;">visibility</i></a> <a href="#" class="edit delecte-icon22" data-toggle="modal"><i class="fa fa-times" style="margin-top: 15px;"></i></a> </td>
								</tr>
								<tr >
								  <td><div class="form-check form-check-inline" style="margin-top: 15px; margin-bottom: .0rem;">
									  <label class="form-check-label" style="padding-right: 0px; padding-left: 19px;">
									  <input class="form-check-input" type="checkbox" value="">
									  <span class="form-check-sign" style="padding-right: 0px;"> <span class="check" style=" top: 0px; left: 6px;"></span> </span> </label>
									</div></td>
								  <td style=" text-align:left; line-height: 16px;">01234</td>
								  <td style=" text-align:left; line-height: 16px;">Paradigm Technology</td>
								  <td style=" text-align:left; line-height: 16px;">8125858490</td>
								  <td style=" text-align:left; line-height: 16px;">ramesh@aakrutisolutions.com</td>
								  <td style=" text-align:left; line-height: 16px;">Active</td>
								  <td style=" text-align:left;">10</td>
								  <td align="left" style="padding: 0px 5px !important;text-align: center;"><a href="attorney-employers-view.html" class="btn btn-link btn-warning btn-just-icon edit custom-edit-icon view-color view-color22"><i class="material-icons small-icon-view" style="text-align: center;">visibility</i></a> <a href="#" class="edit delecte-icon22" data-toggle="modal"><i class="fa fa-times" style="margin-top: 15px;"></i></a> </td>
								</tr>
							  </tbody>
							</table>
						  </div>
						</div>
						<div class="tab-pane" id="link2">
						  <div class="table-wrapper vendor-table">
							<table id="datatables2" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
							  <thead>
								<tr style="background-color: #f1f1f1; color: #000;">
								  <th colspan="6" align="center" class="table-showlist" style="padding:0px 5px !important; background-color: #f1f1f1; ">Show <span>
									<select>
									  <option value="volvo">10</option>
									  <option value="saab">20</option>
									  <option value="opel">30</option>
									  <option value="audi">40</option>
									</select>
									</span>entries</th>
								  <th style="padding:0px 5px !important; background-color: #f1f1f1; "> <div class="form-group bmd-form-group" >
									  <label for="exampleEmail" class="bmd-label-floating">Search</label>
									  <input type="text" class="form-control" id="" style="margin-bottom: 0px; padding: 14px 0px 3px 0px !important; height:34px">
									</div></th>
								  <th style="padding:0px 5px !important; background-color: #f1f1f1; "><ul class="navbar-nav">
									  <li class="nav-item dropdown"> <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons more-links">more_horiz</i>
										<p class="d-lg-none d-md-block"> Account </p>
										</a>
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile"> <a class="dropdown-item" href="#">Profile</a> <a class="dropdown-item" href="#">Settings</a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item" href="#">Log out</a> </div>
									  </li>
									</ul></th>
								</tr>
								<tr>
								  <th align="center" style="background-color: #e7e7e7; color: #000;"> <div class="form-check form-check-inline" style="margin-top: 15px; margin-bottom: .0rem;">
									  <label class="form-check-label" style="padding-right: 0px; padding-left: 19px;">
									  <input class="form-check-input" type="checkbox" value="">
									  <span class="form-check-sign" style="padding-right: 0px;"> <span class="check" style=" top: 0px; left: 6px;"></span> </span> </label>
									</div>
									 </th>
								  <th style="background-color: #e7e7e7; color: #000;">Company Id &nbsp;&nbsp;&nbsp;</th>
								  <th style="background-color: #e7e7e7; color: #000;">Name</th>
								  <th style="background-color: #e7e7e7; color: #000;">Phone &nbsp;&nbsp;&nbsp;</th>
								  <th style="background-color: #e7e7e7; color: #000;">Email &nbsp;&nbsp;&nbsp;</th>
								  <th style="background-color: #e7e7e7; color: #000;">Active Cases</th>
								  <th style="background-color: #e7e7e7; color: #000;">Total Cases</th>
								  <th class="disabled-sorting text-center" style="padding-right: 15px !important; background-color: #e7e7e7;">Actions &nbsp; &nbsp;</th>
								</tr>
							  </thead>
							  <tbody>
								<tr >
								  <td><div class="form-check form-check-inline" style="margin-top: 15px; margin-bottom: .0rem;">
									  <label class="form-check-label" style="padding-right: 0px; padding-left: 19px;">
									  <input class="form-check-input" type="checkbox" value="">
									  <span class="form-check-sign" style="padding-right: 0px;"> <span class="check" style=" top: 0px; left: 6px;"></span> </span> </label>
									</div></td>
								  <td style=" text-align:left; line-height: 16px;">01234</td>
								  <td style=" text-align:left; line-height: 16px;">Paradigm Technology</td>
								  <td style=" text-align:left; line-height: 16px;">8125858490</td>
								  <td style=" text-align:left; line-height: 16px;">ramesh@aakrutisolutions.com</td>
								  <td style=" text-align:left; line-height: 16px;">Active</td>
								  <td style=" text-align:left;">10</td>
								  <td align="left" style="padding: 0px 5px !important;text-align: center;"><a href="attorney-employers-view.html" class="btn btn-link btn-warning btn-just-icon edit custom-edit-icon view-color view-color22"><i class="material-icons small-icon-view" style="text-align: center;">visibility</i></a> <a href="#" class="edit delecte-icon22" data-toggle="modal"><i class="fa fa-times" style="margin-top: 15px;"></i></a> </td>
								</tr>
								<tr >
								  <td><div class="form-check form-check-inline" style="margin-top: 15px; margin-bottom: .0rem;">
									  <label class="form-check-label" style="padding-right: 0px; padding-left: 19px;">
									  <input class="form-check-input" type="checkbox" value="">
									  <span class="form-check-sign" style="padding-right: 0px;"> <span class="check" style=" top: 0px; left: 6px;"></span> </span> </label>
									</div></td>
								  <td style=" text-align:left; line-height: 16px;">01234</td>
								  <td style=" text-align:left; line-height: 16px;">Paradigm Technology</td>
								  <td style=" text-align:left; line-height: 16px;">8125858490</td>
								  <td style=" text-align:left; line-height: 16px;">ramesh@aakrutisolutions.com</td>
								  <td style=" text-align:left; line-height: 16px;">Active</td>
								  <td style=" text-align:left;">10</td>
								  <td align="left" style="padding: 0px 5px !important;text-align: center;"><a href="attorney-employers-view.html" class="btn btn-link btn-warning btn-just-icon edit custom-edit-icon view-color view-color22"><i class="material-icons small-icon-view" style="text-align: center;">visibility</i></a> <a href="#" class="edit delecte-icon22" data-toggle="modal"><i class="fa fa-times" style="margin-top: 15px;"></i></a> </td>
								</tr>
								<tr >
								  <td><div class="form-check form-check-inline" style="margin-top: 15px; margin-bottom: .0rem;">
									  <label class="form-check-label" style="padding-right: 0px; padding-left: 19px;">
									  <input class="form-check-input" type="checkbox" value="">
									  <span class="form-check-sign" style="padding-right: 0px;"> <span class="check" style=" top: 0px; left: 6px;"></span> </span> </label>
									</div></td>
								  <td style=" text-align:left; line-height: 16px;">01234</td>
								  <td style=" text-align:left; line-height: 16px;">Paradigm Technology</td>
								  <td style=" text-align:left; line-height: 16px;">8125858490</td>
								  <td style=" text-align:left; line-height: 16px;">ramesh@aakrutisolutions.com</td>
								  <td style=" text-align:left; line-height: 16px;">Active</td>
								  <td style=" text-align:left;">10</td>
								  <td align="left" style="padding: 0px 5px !important;text-align: center;"><a href="attorney-employers-view.html" class="btn btn-link btn-warning btn-just-icon edit custom-edit-icon view-color view-color22"><i class="material-icons small-icon-view" style="text-align: center;">visibility</i></a> <a href="#" class="edit delecte-icon22" data-toggle="modal"><i class="fa fa-times" style="margin-top: 15px;"></i></a> </td>
								</tr>
								<tr >
								  <td><div class="form-check form-check-inline" style="margin-top: 15px; margin-bottom: .0rem;">
									  <label class="form-check-label" style="padding-right: 0px; padding-left: 19px;">
									  <input class="form-check-input" type="checkbox" value="">
									  <span class="form-check-sign" style="padding-right: 0px;"> <span class="check" style=" top: 0px; left: 6px;"></span> </span> </label>
									</div></td>
								  <td style=" text-align:left; line-height: 16px;">01234</td>
								  <td style=" text-align:left; line-height: 16px;">Paradigm Technology</td>
								  <td style=" text-align:left; line-height: 16px;">8125858490</td>
								  <td style=" text-align:left; line-height: 16px;">ramesh@aakrutisolutions.com</td>
								  <td style=" text-align:left; line-height: 16px;">Active</td>
								  <td style=" text-align:left;">10</td>
								  <td align="left" style="padding: 0px 5px !important;text-align: center;"><a href="attorney-employers-view.html" class="btn btn-link btn-warning btn-just-icon edit custom-edit-icon view-color view-color22"><i class="material-icons small-icon-view" style="text-align: center;">visibility</i></a> <a href="#" class="edit delecte-icon22" data-toggle="modal"><i class="fa fa-times" style="margin-top: 15px;"></i></a> </td>
								</tr>
								<tr >
								  <td><div class="form-check form-check-inline" style="margin-top: 15px; margin-bottom: .0rem;">
									  <label class="form-check-label" style="padding-right: 0px; padding-left: 19px;">
									  <input class="form-check-input" type="checkbox" value="">
									  <span class="form-check-sign" style="padding-right: 0px;"> <span class="check" style=" top: 0px; left: 6px;"></span> </span> </label>
									</div></td>
								  <td style=" text-align:left; line-height: 16px;">01234</td>
								  <td style=" text-align:left; line-height: 16px;">Paradigm Technology</td>
								  <td style=" text-align:left; line-height: 16px;">8125858490</td>
								  <td style=" text-align:left; line-height: 16px;">ramesh@aakrutisolutions.com</td>
								  <td style=" text-align:left; line-height: 16px;">Active</td>
								  <td style=" text-align:left;">10</td>
								  <td align="left" style="padding: 0px 5px !important;text-align: center;"><a href="attorney-employers-view.html" class="btn btn-link btn-warning btn-just-icon edit custom-edit-icon view-color view-color22"><i class="material-icons small-icon-view" style="text-align: center;">visibility</i></a> <a href="#" class="edit delecte-icon22" data-toggle="modal"><i class="fa fa-times" style="margin-top: 15px;"></i></a> </td>
								</tr>
								<tr >
								  <td><div class="form-check form-check-inline" style="margin-top: 15px; margin-bottom: .0rem;">
									  <label class="form-check-label" style="padding-right: 0px; padding-left: 19px;">
									  <input class="form-check-input" type="checkbox" value="">
									  <span class="form-check-sign" style="padding-right: 0px;"> <span class="check" style=" top: 0px; left: 6px;"></span> </span> </label>
									</div></td>
								  <td style=" text-align:left; line-height: 16px;">01234</td>
								  <td style=" text-align:left; line-height: 16px;">Paradigm Technology</td>
								  <td style=" text-align:left; line-height: 16px;">8125858490</td>
								  <td style=" text-align:left; line-height: 16px;">ramesh@aakrutisolutions.com</td>
								  <td style=" text-align:left; line-height: 16px;">Active</td>
								  <td style=" text-align:left;">10</td>
								  <td align="left" style="padding: 0px 5px !important;text-align: center;"><a href="attorney-employers-view.html" class="btn btn-link btn-warning btn-just-icon edit custom-edit-icon view-color view-color22"><i class="material-icons small-icon-view" style="text-align: center;">visibility</i></a> <a href="#" class="edit delecte-icon22" data-toggle="modal"><i class="fa fa-times" style="margin-top: 15px;"></i></a> </td>
								</tr>
								<tr >
								  <td><div class="form-check form-check-inline" style="margin-top: 15px; margin-bottom: .0rem;">
									  <label class="form-check-label" style="padding-right: 0px; padding-left: 19px;">
									  <input class="form-check-input" type="checkbox" value="">
									  <span class="form-check-sign" style="padding-right: 0px;"> <span class="check" style=" top: 0px; left: 6px;"></span> </span> </label>
									</div></td>
								  <td style=" text-align:left; line-height: 16px;">01234</td>
								  <td style=" text-align:left; line-height: 16px;">Paradigm Technology</td>
								  <td style=" text-align:left; line-height: 16px;">8125858490</td>
								  <td style=" text-align:left; line-height: 16px;">ramesh@aakrutisolutions.com</td>
								  <td style=" text-align:left; line-height: 16px;">Active</td>
								  <td style=" text-align:left;">10</td>
								  <td align="left" style="padding: 0px 5px !important;text-align: center;"><a href="attorney-employers-view.html" class="btn btn-link btn-warning btn-just-icon edit custom-edit-icon view-color view-color22"><i class="material-icons small-icon-view" style="text-align: center;">visibility</i></a> <a href="#" class="edit delecte-icon22" data-toggle="modal"><i class="fa fa-times" style="margin-top: 15px;"></i></a> </td>
								</tr>
							  </tbody>
							</table>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="clearfix"></div>
			</div>
		  </div>
		</form>
	  </div>
	</div>
	<!-- wizard container -->
  </div>
</div>
<div class="cd-panel cd-panel--from-right js-cd-panel-main">
  <header class="cd-panel__header">
    <h1 style="font-size: 18px; margin:15px 0px 0px 0px; color: #30bbbb; font-weight: 500;">Add Company</h1>
    <a href="#0" class="cd-panel__close js-cd-close">Close</a> </header>
  <div class="cd-panel__container">
    <div class="cd-panel__content">
      <div class="row">
        <div class="col-md-11" style="margin:0px auto;">
          <div class="form-group bmd-form-group">
            <label for="exampleEmail" class="bmd-label-floating">Clients Business Name</label>
            <input type="text" class="form-control" id="exampleEmail">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-11" style="margin:0px auto;">
          <div class="form-group bmd-form-group">
            <label for="exampleEmail" class="bmd-label-floating">Email</label>
            <input type="text" class="form-control" id="exampleEmail">
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <a href="#" class="btn btn-round btn-rose timesheet-btn add-invoice-btn add-invoice-btn38">Save</a> </div>
    <!-- cd-panel__content -->
  </div>
  <!-- cd-panel__container -->
</div>
<!-- cd-panel -->
@endsection
