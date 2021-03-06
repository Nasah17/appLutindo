<?php $this->load->view('dashboard/header'); ?>
<!-- .page-inner -->
<div class="page-inner">
    <!-- .page-section -->
    <div class="page-section">
        <!-- .section-block -->
        <div class="section-block">
            <!-- metric row -->
            <div class="metric-row">
                <!-- metric column -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- .metric -->
                    <div class="card-metric">
                        <div class="metric">
                            <p class="metric-value h3">
                                <sub><i class="oi oi-people"></i></sub> <span class="value">12</span>
                            </p>
                            <h2 class="metric-label"> Teams </h2>
                        </div>
                    </div><!-- /.metric -->
                </div><!-- /metric column -->
                <!-- metric column -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- .metric -->
                    <div class="card-metric">
                        <div class="metric">
                            <p class="metric-value h3">
                                <sub><i class="oi oi-fork"></i></sub> <span class="value">47</span>
                            </p>
                            <h2 class="metric-label"> Projects </h2>
                        </div>
                    </div><!-- /.metric -->
                </div><!-- /metric column -->
                <!-- metric column -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- .metric -->
                    <div class="card-metric">
                        <div class="metric">
                            <p class="metric-value h3">
                                <sub><i class="fa fa-tasks"></i></sub> <span class="value">64</span>
                            </p>
                            <h2 class="metric-label"> Active Tasks </h2>
                        </div>
                    </div><!-- /.metric -->
                </div><!-- /metric column -->
                <!-- metric column -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- .metric -->
                    <div class="card-metric">
                        <div class="metric">
                            <p class="metric-value h3">
                                <sub><i class="oi oi-timer"></i></sub> <span class="value">8</span>
                            </p>
                            <h2 class="metric-label"> Ongoing Tasks </h2>
                        </div>
                    </div><!-- /.metric -->
                </div><!-- /metric column -->
            </div><!-- /metric row -->
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="section-title mb-0"> Achievement </h1><!-- .dropdown -->
                <div class="dropdown">
                    <button class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>This Month</span> <i class="fa fa-fw fa-caret-down"></i></button> <!-- .dropdown-menu -->
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-md stop-propagation">
                        <div class="dropdown-arrow"></div><!-- .custom-control -->
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="dpToday" name="dpFilter" value="0"> <label class="custom-control-label d-flex justify-content-between" for="dpToday"><span>Today</span> <span class="text-muted">Mar 27</span></label>
                        </div><!-- /.custom-control -->
                        <!-- .custom-control -->
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="dpYesterday" name="dpFilter" value="1"> <label class="custom-control-label d-flex justify-content-between" for="dpYesterday"><span>Yesterday</span> <span class="text-muted">Mar 26</span></label>
                        </div><!-- /.custom-control -->
                        <!-- .custom-control -->
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="dpWeek" name="dpFilter" value="2"> <label class="custom-control-label d-flex justify-content-between" for="dpWeek"><span>This Week</span> <span class="text-muted">Mar 21-27</span></label>
                        </div><!-- /.custom-control -->
                        <!-- .custom-control -->
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="dpMonth" name="dpFilter" value="3" checked> <label class="custom-control-label d-flex justify-content-between" for="dpMonth"><span>This Month</span> <span class="text-muted">Mar 1-31</span></label>
                        </div><!-- /.custom-control -->
                        <!-- .custom-control -->
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="dpYear" name="dpFilter" value="4"> <label class="custom-control-label d-flex justify-content-between" for="dpYear"><span>This Year</span> <span class="text-muted">2019</span></label>
                        </div><!-- /.custom-control -->
                        <!-- .custom-control -->
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="dpCustom" name="dpFilter" value="5"> <label class="custom-control-label" for="dpCustom">Custom</label>
                            <div class="custom-control-hint my-1">
                                <!-- datepicker:range -->
                                <input type="text" class="form-control" data-toggle="flatpickr" data-mode="range" data-date-format="Y-m-d"> <!-- /datepicker:range -->
                            </div>
                        </div><!-- /.custom-control -->
                    </div><!-- /.dropdown-menu -->
                </div><!-- /.dropdown -->
            </div>
        </div><!-- /.section-block -->
        <!-- grid row -->
        <div class="row">
            <!-- grid column -->
            <div class="col-xl-8">
                <!-- .card -->
                <div class="card card-body card-fluid">
                    <!-- legend -->
                    <ul class="list-inline small">
                        <li class="list-inline-item">
                            <i class="fa fa-fw fa-circle text-teal"></i> Assigned tasks </li>
                        <li class="list-inline-item">
                            <i class="fa fa-fw fa-circle text-purple"></i> Completed tasks </li>
                    </ul><!-- /legend -->
                    <div class="chartjs" style="height: 253px">
                        <canvas id="canvas-achievement"></canvas>
                    </div>
                </div><!-- /.card -->
            </div><!-- /grid column -->
            <!-- grid column -->
            <div class="col-xl-4">
                <!-- .card -->
                <div class="card card-fluid">
                    <!-- .card-header -->
                    <div class="card-header"> Overview </div><!-- /.card-header -->
                    <!-- .card-body -->
                    <div class="card-body">
                        <dl class="d-flex justify-content-between">
                            <dt class="text-left">
                                <span class="mr-2">Revenue</span> <small class="text-success"><i class="fa fa-caret-up"></i> 87%</small>
                            </dt>
                            <dd class="text-right mb-0">
                                <strong>17,400</strong> <small class="text-muted">USD</small>
                            </dd>
                        </dl>
                        <dl class="d-flex justify-content-between mb-0">
                            <dt class="text-left">
                                <span class="mr-2">Projects</span> <small class="text-success"><i class="fa fa-caret-up"></i> 24%</small>
                            </dt>
                            <dd class="text-right mb-0">
                                <strong>5</strong>
                            </dd>
                        </dl>
                    </div><!-- /.card-body -->
                    <!-- .card-body -->
                    <div class="card-body border-top">
                        <dl class="d-flex justify-content-between">
                            <dt class="text-left">
                                <span class="mr-2">Expenses</span> <small class="text-danger"><i class="fa fa-caret-down"></i> 12%</small>
                            </dt>
                            <dd class="text-right mb-0">
                                <strong>1,600</strong> <small class="text-muted">USD</small>
                            </dd>
                        </dl>
                    </div><!-- /.card-body -->
                    <!-- .card-body -->
                    <div class="card-body border-top">
                        <div class="summary">
                            <p class="text-left">
                                <strong class="mr-2">Earnings</strong> <small class="text-success"><i class="fa fa-caret-up"></i> 24%</small>
                            </p>
                            <p class="text-center">
                                <strong class="h3">15,800</strong> <span class="text-muted">USD</span>
                            </p>
                        </div>
                    </div><!-- /.card-body -->
                </div><!-- /.card -->
            </div><!-- /grid column -->
        </div><!-- /grid row -->
        <!-- grid row -->
        <div class="row">
            <!-- grid column -->
            <div class="col-xl-6">
                <!-- .card -->
                <div class="card card-fluid">
                    <!-- .card-header -->
                    <div class="card-header border-0">
                        <!-- .d-flex -->
                        <div class="d-flex align-items-center">
                            <span class="mr-auto">Time Spent: Projects</span> <!-- .card-header-control -->
                            <div class="card-header-control">
                                <!-- .dropdown -->
                                <div class="dropdown">
                                    <button type="button" class="btn btn-icon btn-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-arrow"></div><a href="#" class="dropdown-item">Actions</a> <a href="#" class="dropdown-item">Goes here</a> <a href="#" class="dropdown-item">Remove</a>
                                    </div>
                                </div><!-- /.dropdown -->
                            </div><!-- /.card-header-control -->
                        </div><!-- /.d-flex -->
                    </div><!-- /.card-header -->
                    <!-- .table-responsive -->
                    <div class="table-responsive">
                        <!-- .table -->
                        <table class="table">
                            <!-- thead -->
                            <thead>
                                <tr>
                                    <th style="min-width:260px"> Project </th>
                                    <th class="text-center"> Progress </th>
                                    <th class="text-right" style="min-width:142px"> Hours Spent </th>
                                </tr>
                            </thead><!-- /thead -->
                            <!-- tbody -->
                            <tbody>
                                <!-- tr -->
                                <tr>
                                    <td class="align-middle text-truncate">
                                        <a href="#" class="tile bg-blue text-white mr-2">BA</a> <a href="#">Booking App</a>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="badge bg-blue text-white">35%</span>
                                    </td>
                                    <td class="align-middle text-center"> 35:28 </td>
                                </tr><!-- /tr -->
                                <!-- tr -->
                                <tr>
                                    <td class="align-middle text-truncate">
                                        <a href="#" class="tile bg-teal text-white mr-2">SB</a> <a href="#">SVG Icon Bundle</a>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="badge bg-teal text-white">32%</span>
                                    </td>
                                    <td class="align-middle text-center"> 20:39 </td>
                                </tr><!-- /tr -->
                                <!-- tr -->
                                <tr>
                                    <td class="align-middle text-truncate">
                                        <a href="#" class="tile bg-pink text-white mr-2">SP</a> <a href="#">Syrena Project</a>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="badge bg-pink text-white">93%</span>
                                    </td>
                                    <td class="align-middle text-center"> 35:28 </td>
                                </tr><!-- /tr -->
                                <!-- tr -->
                                <tr>
                                    <td class="align-middle text-truncate">
                                        <a href="#" class="tile bg-green text-white mr-2">MG</a> <a href="#">Mobile App Gex</a>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="badge bg-green text-white">100%</span>
                                    </td>
                                    <td class="align-middle text-center"> 35:10 </td>
                                </tr><!-- /tr -->
                                <!-- tr -->
                                <tr>
                                    <td class="align-middle text-truncate">
                                        <a href="#" class="tile bg-red text-white mr-2">LB</a> <a href="#">Landing Page Booster</a>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="badge bg-red text-white">100%</span>
                                    </td>
                                    <td class="align-middle text-center"> 21:21 </td>
                                </tr><!-- /tr -->
                            </tbody><!-- /tbody -->
                        </table><!-- /.table -->
                    </div><!-- /.table-responsive -->
                    <!-- .card-footer -->
                    <div class="card-footer">
                        <a href="#" class="card-footer-item">View report <i class="fa fa-fw fa-angle-right"></i></a>
                    </div><!-- /.card-footer -->
                </div><!-- /.card -->
            </div><!-- /grid column -->
            <!-- grid column -->
            <div class="col-xl-6">
                <!-- .card -->
                <div class="card card-fluid">
                    <!-- .card-header -->
                    <div class="card-header border-0">
                        <!-- .d-flex -->
                        <div class="d-flex align-items-center">
                            <span class="mr-auto">Time Spent: Tasks</span> <!-- .card-header-control -->
                            <div class="card-header-control">
                                <!-- .dropdown -->
                                <div class="dropdown">
                                    <button type="button" class="btn btn-icon btn-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-arrow"></div><a href="#" class="dropdown-item">Actions</a> <a href="#" class="dropdown-item">Goes here</a> <a href="#" class="dropdown-item">Remove</a>
                                    </div>
                                </div><!-- /.dropdown -->
                            </div><!-- /.card-header-control -->
                        </div><!-- /.d-flex -->
                    </div><!-- /.card-header -->
                    <!-- .table-responsive -->
                    <div class="table-responsive">
                        <!-- .table -->
                        <table class="table">
                            <!-- thead -->
                            <thead>
                                <tr>
                                    <th style="min-width:259px"> Task </th>
                                    <th> Due Date </th>
                                    <th> Estimate </th>
                                    <th> Worked </th>
                                </tr>
                            </thead><!-- /thead -->
                            <!-- tbody -->
                            <tbody>
                                <!-- tr -->
                                <tr>
                                    <td class="align-middle text-truncate">
                                        <a href="#project" class="tile tile-circle bg-indigo text-white mr-1">SP</a> <a href="#task">Make lemonade from scratch</a>
                                    </td>
                                    <td class="align-middle"> Apr 02 </td>
                                    <td class="align-middle"> 24:00 </td>
                                    <td class="align-middle"> 16:36 </td>
                                </tr><!-- /tr -->
                                <!-- tr -->
                                <tr>
                                    <td class="align-middle text-truncate">
                                        <a href="#project" class="tile tile-circle bg-blue text-white mr-1">LT</a> <a href="#task">Mix up a pitcher of sangria</a>
                                    </td>
                                    <td class="align-middle"> In 3 days </td>
                                    <td class="align-middle"> 04:00 </td>
                                    <td class="align-middle"> 03:36 </td>
                                </tr><!-- /tr -->
                                <!-- tr -->
                                <tr>
                                    <td class="align-middle text-truncate">
                                        <a href="#project" class="tile tile-circle bg-yellow text-white mr-1">OS</a> <a href="#task">Ride a roller coaster</a>
                                    </td>
                                    <td class="align-middle"> Tomorrow </td>
                                    <td class="align-middle"> 48:00 </td>
                                    <td class="align-middle"> 50:02 </td>
                                </tr><!-- /tr -->
                                <!-- tr -->
                                <tr>
                                    <td class="align-middle text-truncate">
                                        <a href="#project" class="tile tile-circle bg-pink text-white mr-1">SP</a> <a href="#task">Dangle your feet off a dock</a>
                                    </td>
                                    <td class="align-middle"> Apr 07 </td>
                                    <td class="align-middle"> 6:00 </td>
                                    <td class="align-middle"> 03:11 </td>
                                </tr><!-- /tr -->
                                <!-- tr -->
                                <tr>
                                    <td class="align-middle text-truncate">
                                        <a href="#project" class="tile tile-circle bg-yellow text-white mr-1">OS</a> <a href="#task">Have a picnic in the park</a>
                                    </td>
                                    <td class="align-middle"> In 2 days </td>
                                    <td class="align-middle"> 12:00 </td>
                                    <td class="align-middle"> 08:36 </td>
                                </tr><!-- /tr -->
                            </tbody><!-- /tbody -->
                        </table><!-- /.table -->
                    </div><!-- /.table-responsive -->
                    <!-- .card-footer -->
                    <div class="card-footer">
                        <a href="#" class="card-footer-item">View report <i class="fa fa-fw fa-angle-right"></i></a>
                    </div><!-- /.card-footer -->
                </div><!-- /.card -->
            </div><!-- /grid column -->
        </div><!-- /grid row -->
    </div><!-- /.page-section -->
</div><!-- /.page-inner -->
</div><!-- /.page -->
</div><!-- .app-footer -->