@extends('layouts.app')

@section('content')
<div class="content container">   
    <div class="wrap">
             
        <div class="content container">

        <h2 class="page-title">Dashboard</h2>

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

            @foreach($cardcategories as $cardcategories) 
                <div class="col-lg-3">
                    <section class="widget">
                        <header>
                            <h4>{{ $cardcategories->name }}</h4>
                            <div class="widget-controls">
                                <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            </div>
                        </header>
                        hvjhjgjgjgj
                    </section>
                </div>
            @endforeach



           <!--  <div class="col-lg-3">
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
            </div> -->
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
