@extends('layouts.app')

@section('content')
<div class="content container">
    <div class="logo">
        <h4><a href="index.html">Biashara <strong>Board</strong></a></h4>
    </div>
    <nav id="sidebar" class="sidebar nav-collapse collapse">
        <ul id="side-nav" class="side-nav">
            <li class="active">
                <a href="index.html"><i class="fa fa-home"></i> <span class="name">Dashboard</span></a>
            </li>
            <li class="">
                <a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>
            </li>
            <li class="">
                <a href="tables.html"><i class="fa fa-table"></i> Tables</a></li>
            </li>
            <li class="">
                <a href="notifications.html"><i class="fa fa-bell"></i> Notifications</a></li>
            </li>
            <li class="panel ">
                <a class="accordion-toggle collapsed" data-toggle="collapse"
                   data-parent="#side-nav" href="#elements-collapse"><i class="fa fa-magic"></i> <span class="name">Elements</span></a>
                <ul id="elements-collapse" class="panel-collapse collapse ">
                    <li class=""><a href="charts.html">Charts</a></li>
                    <li class=""><a href="icons.html">Icons</a></li>
                    <li class=""><a href="maps.html" data-no-pjax>Maps</a></li>
                </ul>
            </li>
        </ul>
    
        <h5 class="sidebar-nav-title">Your boards <a class="action-link" href="#"><i class="glyphicon glyphicon-plus"></i></a></h5>
        <!-- some styled links in sidebar. ready to use as links to email folders, projects, groups, etc -->
        <ul class="sidebar-labels">
            <li>
                <a href="#">
                    <!-- yep, .circle again -->
                    <i class="fa fa-circle text-warning"></i>
                    <span class="label-name">My Recent</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-circle text-gray"></i>
                    <span class="label-name">Starred</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-circle text-danger"></i>
                    <span class="label-name">Background</span>
                </a>
            </li>
        </ul>
    
        <h5 class="sidebar-nav-title">Projects</h5>
        <!-- A place for sidebar notifications & alerts -->
        <div class="sidebar-alerts">
            <div class="alert fade in">
                <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                <span class="text-white fw-semi-bold">Sales Report</span> <br>
                <div class="progress progress-xs mt-xs mb-0">
                    <div class="progress-bar progress-bar-gray-light" style="width: 16%"></div>
                </div>
                <small>Calculating x-axis bias... 65%</small>
            </div>
            <div class="alert fade in">
                <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                <span class="text-white fw-semi-bold">Personal Responsibility</span> <br>
                <div class="progress progress-xs mt-xs mb-0">
                    <div class="progress-bar progress-bar-danger" style="width: 23%"></div>
                </div>
                <small>Provide required notes</small>
            </div>
        </div>
    </nav>    

    <div class="wrap">
        <header class="page-header">
            <div class="navbar">
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="visible-phone-landscape">
                        <a href="#" id="search-toggle">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" title="Messages" id="messages"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="glyphicon glyphicon-comment"></i>
                        </a>
                        <ul id="messages-menu" class="dropdown-menu messages" role="menu">
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="img/1.png" alt="">
                                    <div class="details">
                                        <div class="sender">Jane Hew</div>
                                        <div class="text">
                                            Hey, John! How is it going? ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="img/2.png" alt="">
                                    <div class="details">
                                        <div class="sender">Alies Rumiancaŭ</div>
                                        <div class="text">
                                            I'll definitely buy this template
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="img/3.png" alt="">
                                    <div class="details">
                                        <div class="sender">Michał Rumiancaŭ</div>
                                        <div class="text">
                                            Is it really Lore ipsum? Lore ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="text-align-center see-all">
                                    See all messages <i class="fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" title="8 support tickets"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="glyphicon glyphicon-globe"></i>
                            <span class="count">8</span>
                        </a>
                        <ul id="support-menu" class="dropdown-menu support" role="menu">
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-important"><i class="fa fa-bell-o"></i></span>
                                    </div>
                                    <div class="details">
                                        Check out this awesome ticket
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-warning"><i class="fa fa-question-circle"></i></span>
                                    </div>
                                    <div class="details">
                                        "What is the best way to get ...
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-success"><i class="fa fa-tag"></i></span>
                                    </div>
                                    <div class="details">
                                        This is just a simple notification
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-info"><i class="fa fa-info-circle"></i></span>
                                    </div>
                                    <div class="details">
                                        12 new orders has arrived today
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-important"><i class="fa fa-plus"></i></span>
                                    </div>
                                    <div class="details">
                                        One more thing that just happened
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="text-align-center see-all">
                                    See all tickets <i class="fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="hidden-xs">
                        <a href="#" id="settings"
                           title="Settings"
                           data-toggle="popover"
                           data-placement="bottom">
                            <i class="glyphicon glyphicon-cog"></i>
                        </a>
                    </li>
                    <li class="hidden-xs dropdown">
                        <a href="#" title="Account" id="account"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i>
                        </a>
                        <ul id="account-menu" class="dropdown-menu account" role="menu">
                            <li role="presentation" class="account-picture">
                                <img src="img/2.png" alt="">
                                Philip Daineka
                            </li>
                            <li role="presentation">
                                <a href="form_account.html" class="link">
                                    <i class="fa fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="component_calendar.html" class="link">
                                    <i class="fa fa-calendar"></i>
                                    Calendar
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="link">
                                    <i class="fa fa-inbox"></i>
                                    Inbox
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="visible-xs">
                        <a href="#"
                           class="btn-navbar"
                           data-toggle="collapse"
                           data-target=".sidebar"
                           title="">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="hidden-xs"><a href="login.html"><i class="glyphicon glyphicon-off"></i></a></li>
                </ul>
                <form id="search-form" class="navbar-form pull-right" role="search">
                    <input type="search" class="form-control search-query" placeholder="Search...">
                </form>
                <div class="notifications pull-right">
                    <div class="alert pull-right">
                        <a href="#" class="close ml-xs" data-dismiss="alert">&times;</a>
                        <i class="fa fa-info-circle mr-xs"></i> Check out Light Blue <a id="notification-link" href="#">settings</a> on the right!
                    </div>
                </div>
            </div>
        </header>        
        <div class="content container">

        <h2 class="page-title">Dashboard <small>Statistics and more</small></h2>

        <div id="fn" class="row" hidden class="col-lg-3" style="width: 350px;">
            <form class="no-margin"
                      action="index.html" method="get">
                    <fieldset>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input type="text" class="form-control input-lg input-transparent"
                                       placeholder="card">
                            </div>
                        </div>

                        <div class="col-md-6">
                           <button type="submit" class="btn btn-block btn-sm btn-success">
                            <span class="small-circle"><i class="fa fa-plus"></i></span>
                            <small>Add</small>
                        </button> 
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-block btn-sm btn-danger">
                                <span class="small-circle"><i class="fa fa-caret-right"></i></span>
                                <small>Cancel</small>
                            </button>
                        </div>
                    </fieldset>
                </form>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <section class="widget">
                    <header>
                        <h4 id="ongoing">Ongoing</h4>
                        <div class="widget-controls">
                            <!-- <a title="Options" href="#"><i class="glyphicon glyphicon-cog"></i></a> -->
                            <!-- <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a> -->
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <!-- <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a> -->
                        </div>
                    </header>
                    hvjhjgjgjgj
                </section>
            </div>
            <div class="col-lg-3">
                <section class="widget">
                    <header>
                        <h4>Done</h4>
                        <div class="widget-controls">
                            <!-- <a title="Options" href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a> -->
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <!-- <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a> -->
                        </div>
                    </header>
                    hgjhgjhgjggjjj
                </section>
            </div>
            <div class="col-lg-3">
                <section class="widget">
                    <header>
                        <h4>Done</h4>
                        <div class="widget-controls">
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                        </div>
                    </header>
                    hgjhgjhgjggjjj
                </section>
            </div>
            <div class="col-lg-3">
                <section class="widget">
                    <header>
                        <h4>Done</h4>
                        <div class="widget-controls">
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                        </div>
                    </header>
                    hgjhgjhgjggjjj
                </section>
            </div>
            <div id="add_list" class="col-lg-3">
                <section class="widget">
                      <h4><i class="glyphicon glyphicon-plus"></i> Add a list</h4>
                </section>
            </div>
        </div>
    </div>
    <div class="loader-wrap hiding hide">
        <i class="fa fa-circle-o-notch fa-spin"></i>
    </div>
</div>
@endsection
