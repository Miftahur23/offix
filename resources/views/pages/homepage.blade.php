@extends('master')  
    @section('content')
        
   
           
        <div class="app-main">
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="container fiori-container">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                 <h2>Offix</h2> 
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow mr-3 dropdown-toggle btn btn-dark">
                                            <i class="fa fa-star" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom"></i>
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Inbox
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span>
                                                            Book
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span>
                                                            Picture
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span>
                                                            File Disabled
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <button type="button" class="btn-shadow btn btn-wide btn-success">
                                            <span class="btn-icon-wrapper pr-1 opacity-7">
                                                <i class="fa fa-plus"></i>
                                            </span>
                                        Add New
                                    </button>
                                
                                </div>        </div>
                        </div>
                    </div>                <div class="app-inner-layout app-inner-layout-page">
                        <div class="app-inner-bar">
                            <div class="container fiori-container">
                                <div class="inner-bar-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link show-menu-btn">
                                                <i class="fa fa-align-left mr-2"></i>
                                                <span class="hide-text-md">Show page menu</span>
                                            </a>
                                            <a href="#" class="nav-link close-menu-btn">
                                                <i class="fa fa-align-right mr-2"></i>
                                                <span class="hide-text-md">Close page menu</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>                            <div class="inner-bar-center">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                                                <span>Overview</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a role="tab" data-toggle="tab" class="nav-link" href="#tab-content-1">
                                                <span>Audiences</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a role="tab" data-toggle="tab" class="nav-link" href="#tab-content-2">
                                                <span>Demographics</span>
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link opacity-8">
                                                <span>More</span>
                                                <i class="fa fa-angle-down ml-1 opacity-6"></i>
                                            </a>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-inbox"> </i><span>Menus</span></button>
                                                <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span></button>
                                                <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-book"> </i><span>Actions</span></button>
                                                <div tabindex="-1" class="dropdown-divider"></div>
                                                <div class="p-3 text-right">
                                                    <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                                    <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="inner-bar-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link open-right-drawer">
                                                <span class="hide-text-md">Show right drawer</span>
                                                <i class="fa fa-align-right ml-2"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>                        </div>
                        </div>
                        <div class="app-inner-layout__wrapper">
                            <div class="app-inner-layout__sidebar">
                                <div class="app-layout__sidebar-inner dropdown-menu-rounded">
                                    <div class="nav flex-column">

                                       
                                        <div class="nav-item-header text-primary nav-item">
                                            Dashboards Examples
                                        </div>
                                        <a class="dropdown-item" href="analytics-dashboard.html">Analytics</a>
                                        <a class="dropdown-item" href="management-dashboard.html">Management</a>
                                        <a class="dropdown-item" href="advertisement-dashboard.html">Advertisement</a>
                                        <a class="dropdown-item active" href="index.html">Helpdesk</a>
                                        <a class="dropdown-item" href="monitoring-dashboard.html">Monitoring</a>
                                        <a class="dropdown-item" href="crypto-dashboard.html">Cryptocurrency</a>
                                        <a class="dropdown-item" href="pm-dashboard.html">Project Management</a>
                                        <a class="dropdown-item" href="product-dashboard.html">Product</a>
                                        <a class="dropdown-item" href="statistics-dashboard.html">Statistics</a>
                                    </div>                            </div>
                            </div>
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container fiori-container">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6 col-xl-7">
                                                <div class="main-card mb-3 card">
                                                    <div class="rm-border card-header">
                                                        <div>
                                                            <h5 class="menu-header-title text-capitalize text-primary">Income Report</h5>
                                                        </div>
                                                        


                                                        
                                                    </div>
                                                    <div class="card-body p-2">
                                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                            <div style="height: 274px;">
                                                                <div id="chart-apex-stacked-commerce"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-top bg-light card-header">
                                                        <div class="actions-icon-btn mx-auto">
                                                            <div>
                                                                <div role="group" class="btn-group-lg btn-group nav">
                                                                    <button type="button" data-toggle="tab" href="#tab-content-income" class="btn-pill pl-3 active btn btn-focus">Income</button>
                                                                    <button type="button" data-toggle="tab" href="#tab-content-expenses" class="btn-pill pr-3  btn btn-focus">Expenses</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-6 col-xl-5">
                                                <div class="main-card mb-3 card">
                                                    <div class="card-body">
                                                        <h6 class="text-muted text-uppercase font-size-md opacity-7 mb-3 font-weight-normal">Highlights</h6>
                                                        <div class="border-light card-border scroll-area-sm card">
                                                            <div class="scrollbar-container">
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="38" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Beck Collier</div>
                                                                                    <div class="widget-subheading mt-1 opacity-10">
                                                                                        <div class="badge badge-pill badge-primary">$152</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="fsize-2 text-success">
                                                                                        <small class="opacity-5 pr-1">$</small>
                                                                                        <span>750</span>
                                                                                        <small class="text-success pl-2">
                                                                                            <i class="fa fa-angle-down"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="38" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Angelo Hume</div>
                                                                                    <div class="widget-subheading mt-1 opacity-10">
                                                                                        <div class="badge badge-pill badge-primary">$53</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="fsize-2 text-success">
                                                                                        <small class="opacity-5 pr-1">$</small>
                                                                                        <span>542</span>
                                                                                        <small class="text-danger pl-2">
                                                                                            <i class="fa fa-angle-up"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="38" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Saim Melendez</div>
                                                                                    <div class="widget-subheading mt-1 opacity-10">
                                                                                        <div class="badge badge-pill badge-primary">$239</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="fsize-2 text-success">
                                                                                        <small class="opacity-5 pr-1">$</small>
                                                                                        <span>874</span>
                                                                                        <small class="text-warning pl-2">
                                                                                            <i class="fa fa-angle-down"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="38" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Primrose Navarro</div>
                                                                                    <div class="widget-subheading mt-1 opacity-10">
                                                                                        <div class="badge badge-pill badge-primary">$21</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="fsize-2 text-success">
                                                                                        <small class="opacity-5 pr-1">$</small>
                                                                                        348
                                                                                        <small class="text-muted pl-2">
                                                                                            <i class="fa fa-angle-up"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="38" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Finnlay Barton</div>
                                                                                    <div class="widget-subheading mt-1 opacity-10">
                                                                                        <div class="badge badge-pill badge-primary">$381</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="fsize-2 text-success">
                                                                                        <small class="opacity-5 pr-1">$</small>
                                                                                        692
                                                                                        <small class="text-muted pl-2">
                                                                                            <i class="fa fa-angle-up"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="38" class="rounded-circle" src="assets/images/avatars/10.jpg" alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Johan Corbett</div>
                                                                                    <div class="widget-subheading mt-1 opacity-10">
                                                                                        <div class="badge badge-pill badge-primary">$74</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="fsize-2 text-success">
                                                                                        <small class="opacity-5 pr-1">$</small>
                                                                                        395
                                                                                        <small class="text-muted pl-2">
                                                                                            <i class="fa fa-angle-down"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="border-bottom-0 list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="38" class="rounded-circle" src="assets/images/avatars/9.jpg" alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Kaja Wolfe</div>
                                                                                    <div class="widget-subheading mt-1 opacity-10">
                                                                                        <div class="badge badge-pill badge-primary">$7</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="fsize-2 text-success">
                                                                                        <small class="opacity-5 pr-1">$</small>
                                                                                        619
                                                                                        <small class="text-muted pl-2">
                                                                                            <i class="fa fa-angle-down"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-header">
                                                <div><h5 class="menu-header-title text-capitalize text-primary">Simple Table</h5></div>
                                                <div class="btn-actions-pane-right">
                                                    <div role="group" class="btn-group-sm btn-group">
                                                        <button class="active btn btn-outline-dark">Last Week</button>
                                                        <button class="btn btn-outline-dark">All Month</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">Status</th>
                                                        <th>Name</th>
                                                        <th class="text-center">Progress</th>
                                                        <th class="text-center">Sales</th>
                                                        <th class="text-center">Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-center text-muted">#345</td>
                                                        <td class="text-center">
                                                            <div class="badge badge-pill pl-2 pr-2 badge-warning">Pending</div>
                                                        </td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <div class="widget-content-left">
                                                                            <img width="32" class="rounded" src="assets/images/avatars/1.jpg" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading">John Doe</div>
                                                                        <div class="widget-subheading opacity-7">Web Developer</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="progress-bar-xs progress">
                                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center" style="width: 150px;">
                                                            <div id="dashboard-sparkline-33"></div>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn-icon btn-icon-only btn btn-light btn-sm">
                                                                <i class="icon ion-android-apps"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center text-muted">#347</td>
                                                        <td class="text-center">
                                                            <div class="badge badge-pill pl-2 pr-2 badge-success">Completed</div>
                                                        </td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <div class="widget-content-left">
                                                                            <img width="32" class="rounded" src="assets/images/avatars/2.jpg" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading">Ruben Tillman</div>
                                                                        <div class="widget-subheading opacity-7">Etiam sit amet orci eget</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="progress-bar-xs progress">
                                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center" style="width: 150px;">
                                                            <div id="dashboard-sparkline-22"></div>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn-icon btn-icon-only btn btn-light btn-sm">
                                                                <i class="icon ion-android-apps"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center text-muted">#321</td>
                                                        <td class="text-center">
                                                            <div class="badge badge-pill pl-2 pr-2 badge-danger">In Progress</div>
                                                        </td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <div class="widget-content-left">
                                                                            <img width="32" class="rounded" src="assets/images/avatars/3.jpg" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading">Elliot Huber</div>
                                                                        <div class="widget-subheading opacity-7">Lorem ipsum dolor sic</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="progress-bar-xs progress">
                                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center" style="width: 150px;">
                                                            <div id="dashboard-sparkline-11"></div>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn-icon btn-icon-only btn btn-light btn-sm">
                                                                <i class="icon ion-android-apps"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center text-muted">#55</td>
                                                        <td class="text-center">
                                                            <div class="badge badge-pill pl-2 pr-2 badge-info">On Hold</div>
                                                        </td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <div class="widget-content-left">
                                                                            <img width="32" class="rounded" src="assets/images/avatars/4.jpg" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading">Vinnie Wagstaff</div>
                                                                        <div class="widget-subheading opacity-7">UI Designer</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="progress-bar-xs progress">
                                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="bar-sparkline-2">1,2,4,6,9,4,4,3,1,7,2,4,6,9,4,4,3,1,7,5,9,10</div>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn-icon btn-icon-only btn btn-light btn-sm">
                                                                <i class="icon ion-android-apps"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="d-block clearfix card-footer">
                                                <div class="float-left">
                                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger btn-sm">Delete</button>
                                                </div>
                                                <div class="float-right">
                                                    <button class="btn-wide btn btn-link btn-sm">View All</button>
                                                    <button class="btn-wide btn-shadow btn btn-primary btn-sm">Add New Entry</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="container fiori-container">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <div class="footer-dots">
                                        <div class="dropdown">
                                            <a aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dot-btn-wrapper">
                                                <i class="dot-btn-icon typcn typcn-warning-outline text-warning"></i>
                                                <div class="badge badge-dot badge-abs badge-dot-sm badge-danger">Danger</div>
                                            </a>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu">
                                                <div class="dropdown-menu-header mb-0">
                                                    <div class="dropdown-menu-header-inner bg-deep-blue">
                                                        <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                                        <div class="menu-header-content text-dark">
                                                            <h5 class="menu-header-title">Notifications</h5>
                                                            <h6 class="menu-header-subtitle">You have <b>21</b> unread messages</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                                    <li class="nav-item">
                                                        <a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header1">
                                                            <span>Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header1">
                                                            <span>Events</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header1">
                                                            <span>System</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab-messages-header1" role="tabpanel">
                                                        <div class="scroll-area-sm">
                                                            <div class="scrollbar-container">
                                                                <div class="p-3">
                                                                    <div class="notifications-box">
                                                                        <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                                            <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                    <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                    <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                                        <h4 class="timeline-title">Build the production release
                                                                                            <span class="badge badge-danger ml-2">NEW</span>
                                                                                        </h4>
                                                                                        <span class="vertical-timeline-element-date"></span></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                                        <h4 class="timeline-title">Something not important
                                                                                            <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                    <div class="avatar-icon"><img
                                                                                                            src="assets/images/avatars/1.jpg"
                                                                                                            alt=""></div>
                                                                                                </div>
                                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                    <div class="avatar-icon"><img
                                                                                                            src="assets/images/avatars/2.jpg"
                                                                                                            alt=""></div>
                                                                                                </div>
                                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                    <div class="avatar-icon"><img
                                                                                                            src="assets/images/avatars/3.jpg"
                                                                                                            alt=""></div>
                                                                                                </div>
                                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                    <div class="avatar-icon"><img
                                                                                                            src="assets/images/avatars/4.jpg"
                                                                                                            alt=""></div>
                                                                                                </div>
                                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                    <div class="avatar-icon"><img
                                                                                                            src="assets/images/avatars/5.jpg"
                                                                                                            alt=""></div>
                                                                                                </div>
                                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                    <div class="avatar-icon"><img
                                                                                                            src="assets/images/avatars/9.jpg"
                                                                                                            alt=""></div>
                                                                                                </div>
                                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                    <div class="avatar-icon"><img
                                                                                                            src="assets/images/avatars/7.jpg"
                                                                                                            alt=""></div>
                                                                                                </div>
                                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                    <div class="avatar-icon"><img
                                                                                                            src="assets/images/avatars/8.jpg"
                                                                                                            alt=""></div>
                                                                                                </div>
                                                                                                <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                                    <div class="avatar-icon"><i>+</i></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </h4>
                                                                                        <span class="vertical-timeline-element-date"></span></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                    <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">This dot has an info state</h4><span class="vertical-timeline-element-date"></span></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                    <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                    <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                                        <h4 class="timeline-title">Build the production release
                                                                                            <span class="badge badge-danger ml-2">NEW</span>
                                                                                        </h4>
                                                                                        <span class="vertical-timeline-element-date"></span></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                    <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">This dot has a dark state</h4><span class="vertical-timeline-element-date"></span></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab-events-header1" role="tabpanel">
                                                        <div class="scroll-area-sm">
                                                            <div class="scrollbar-container">
                                                                <div class="p-3">
                                                                    <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4>
                                                                                    <p>Lorem ipsum dolor sic amet, today at <a href="javascript:void(0);">12:00 PM</a></p><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                                    <p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4>
                                                                                    <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna elit enim at minim veniam quis nostrud</p><span
                                                                                            class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4>
                                                                                    <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4>
                                                                                    <p>Lorem ipsum dolor sic amet, today at <a href="javascript:void(0);">12:00 PM</a></p><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                                    <p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4>
                                                                                    <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna elit enim at minim veniam quis nostrud</p><span
                                                                                            class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4>
                                                                                    <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab-errors-header1" role="tabpanel">
                                                        <div class="scroll-area-sm">
                                                            <div class="scrollbar-container">
                                                                <div class="no-results pt-3 pb-0">
                                                                    <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                                        <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                                        <span class="swal2-success-line-tip"></span>
                                                                        <span class="swal2-success-line-long"></span>
                                                                        <div class="swal2-success-ring"></div>
                                                                        <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                                        <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                                    </div>
                                                                    <div class="results-subtitle">All caught up!</div>
                                                                    <div class="results-title">There are no system errors!</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-divider nav-item"></li>
                                                    <li class="nav-item-btn text-center nav-item">
                                                        <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View Latest Changes</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="dots-separator"></div>
                                        <div class="dropdown">
                                            <a class="dot-btn-wrapper dd-chart-btn-2" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false">
                                                <i class="dot-btn-icon typcn typcn-chart-bar-outline text-danger"></i>
                                                <div class="badge badge-dot badge-abs badge-dot-sm badge-warning">Warning</div>
                                            </a>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu">
                                                <div class="dropdown-menu-header">
                                                    <div class="dropdown-menu-header-inner bg-premium-dark">
                                                        <div class="menu-header-image" style="background-image: url('assets/images/dropdown-header/abstract4.jpg');"></div>
                                                        <div class="menu-header-content text-white">
                                                            <h5 class="menu-header-title">Users Online
                                                            </h5>
                                                            <h6 class="menu-header-subtitle">Recent Account Activity Overview
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-chart">
                                                    <div class="widget-chart-content">
                                                        <div class="icon-wrapper rounded-circle">
                                                            <div class="icon-wrapper-bg opacity-9 bg-focus">
                                                            </div>
                                                            <i class="lnr-users text-white">
                                                            </i>
                                                        </div>
                                                        <div class="widget-numbers">
                                                            <span>344k</span>
                                                        </div>
                                                        <div class="widget-subheading pt-2">
                                                            Profile views since last login
                                                        </div>
                                                        <div class="widget-description text-danger">
                                                        <span class="pr-1">
                                                            <span>176%</span>
                                                        </span>
                                                            <i class="fa fa-arrow-left"></i>
                                                        </div>
                                                    </div>
                                                    <div class="widget-chart-wrapper">
                                                        <div id="dashboard-sparkline-carousel-4-pop"></div>
                                                    </div>
                                                </div>
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-divider mt-0 nav-item">
                                                    </li>
                                                    <li class="nav-item-btn text-center nav-item">
                                                        <button class="btn-shine btn-wide btn-pill btn btn-warning btn-sm">
                                                            <i class="fa fa-cog fa-spin mr-2">
                                                            </i>
                                                            View Details
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                
                                    </div>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="header-megamenu nav">
                                        <li class="nav-item">
                                            <a data-placement="top" rel="popover-focus" data-offset="300" data-toggle="popover-custom" class="nav-link">
                                                Footer Menu
                                                <div class="badge badge-success ml-0 ml-1">
                                                    <small>Old</small>
                                                </div>
                                                <i class="fa fa-angle-up ml-2 opacity-8"></i>
                                            </a>
                                            <div class="rm-max-width rm-pointers">
                                                <div class="d-none popover-custom-content">
                                                    <div class="dropdown-mega-menu dropdown-mega-menu-sm">
                                                        <div class="grid-menu grid-menu-2col">
                                                            <div class="no-gutters row">
                                                                <div class="col-sm-6 col-xl-6">
                                                                    <ul class="nav flex-column">
                                                                        <li class="nav-item-header nav-item">Overview</li>
                                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon lnr-inbox"> </i><span>Contacts</span></a></li>
                                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon lnr-book"> </i><span>Incidents</span>
                                                                            <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                                        </a></li>
                                                                         
                                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon lnr-picture"> </i><span>Companies</span></a></li>
                                                                        <li class="nav-item"><a disabled="" href="javascript:void(0);" class="nav-link disabled"><i class="nav-link-icon lnr-file-empty"> </i><span>Dashboards</span></a></li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-6 col-xl-6">
                                                                    <ul class="nav flex-column">
                                                                        <li class="nav-item-header nav-item">Sales &amp; Marketing</li>
                                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Queues</a></li>
                                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Resource Groups</a></li>
                                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Goal Metrics
                                                                            <div class="ml-auto badge badge-warning">3</div>
                                                                        </a></li>
                                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Campaigns</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        </div>
        </div>
        @endsection