
<div class="content-wrap">
    <!-- main page content. the place to put widgets in. usually consists of .row > .col-md-* > .widget.  -->
    <main id="content" class="content" role="main">
        <ol class="breadcrumb">
            <li>YOU ARE HERE</li>
            <li class="active">UI Components</li>
        </ol>
        <h1 class="page-title">Components - <span class="fw-semi-bold">Bootstrap</span></h1>
        <section class="widget">
            <header>
                <h5>
                    Alert <span class="fw-semi-bold">Messages</span>
                </h5>
                <div class="widget-controls">
                    <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                    <a href="#"><i class="fa fa-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <h3>Small <span class="fw-semi-bold">Elements</span></h3>
                <p class="mb-lg">Gaining direct user attention on some matter. Add dismiss functionality to all alert messages with this plugin.</p>
                <div class="alert alert-success alert-sm">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <span class="fw-semi-bold">Success:</span> You successfully read this important alert message.
                </div>
                <div class="alert alert-info alert-sm">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <span class="fw-semi-bold">Info:</span> This alert needs your attention, but it's not super important.
                </div>
                <div class="alert alert-warning alert-sm">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <span class="fw-semi-bold">Warning:</span> Best check yo self, you're not looking too good.
                </div>
                <div class="alert alert-danger alert-sm">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <span class="fw-semi-bold">Danger:</span> Change this and that and try again.
                    <a class="btn btn-default btn-xs pull-right mr" href="#">Ignore</a>
                    <a class="btn btn-danger btn-xs pull-right mr-xs" href="#">Take this action</a>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-md-6">
                <section class="widget">
                    <header>
                        <h5>
                            Labels & Badge <span class="fw-semi-bold">Options</span>
                        </h5>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a href="#"><i class="fa fa-refresh"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <h3>Label <span class="fw-semi-bold">Colors</span></h3>
                        <p>Just add the <code>.label</code> class to inline element to create a label.</p>
                        <p>
                            <span class="label label-default">Default</span>
                            <span class="label label-primary">Primary</span>
                            <span class="label label-info">Info</span>
                            <span class="label label-success">Success</span>
                            <span class="label label-warning">Warning</span>
                            <span class="label label-danger">Danger</span>
                        </p>
                        <h3>Badge <span class="fw-semi-bold">Variations</span></h3>
                        <p>Same as labels, just add the <code>.badge</code> class to inline element to create a badge.</p>
                        <p>
                            <button class="btn btn-primary" type="button">
                                Notifications &nbsp;&nbsp; <span class="badge">3</span>
                            </button>
                            <span class="badge bg-danger">01</span>
                            <span class="badge bg-warning">20</span>
                            <span class="badge bg-success">31</span>
                            <span class="badge bg-info">18</span>
                            <span class="badge bg-primary">41</span>
                            <span class="badge">9</span>
                        </p>
                        <!--<p>Both labes and badge may be used with <code>.text-*</code> classes to produce cool-->
                        <!--<abbr title="User Interface">UI</abbr> look.</p>-->
                        <!--<p>-->
                        <!--<span class="label bg-gray text-warning fw-bold">12</span>-->
                        <!--<span class="label label-primary text-gray-dark fw-bold">Dark</span>-->
                        <!--<span class="badge bg-warning"><span class="text-gray-dark">19</span></span>-->
                        <!--<span class="label bg-gray-lighter text-danger">Valid</span>-->
                        <!--<span class="badge bg-gray"><span class="text-success">success</span></span>-->
                        <!--</p>-->
                    </div>
                </section>
            </div>
            <div class="col-md-6">
                <section class="widget">
                    <header>
                        <h5>
                            Tooltips & Popover <span class="fw-semi-bold">Variations</span>
                        </h5>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a href="#"><i class="fa fa-refresh"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <h3>Position <span class="fw-semi-bold">Tooltips</span></h3>
                        <p>Stable four position options available:</p>
                        <div class="btn-toolbar">
                            <a href="#" class="btn btn-default" data-toggle="tooltip" data-placement="left"
                               title="Tooltip on left">On left
                            </a>
                            <a href="#" class="btn btn-default" data-toggle="tooltip" data-placement="top"
                               title="Tooltip on top">On top
                            </a>
                            <a href="#" class="btn btn-default" data-toggle="tooltip" data-placement="bottom"
                               title="Tooltip on bottom">On bottom
                            </a>
                            <a href="#" class="btn btn-default" data-toggle="tooltip" data-placement="right"
                               title="Tooltip on right">On right
                            </a>
                        </div>
                        <h3>Popover <span class="fw-semi-bold">Options</span></h3>
                        <p>Placing help text where needed:</p>
                        <div class="btn-toolbar">
                            <button type="button" class="btn btn-default" data-toggle="popover" title=""
                                    data-placement="left"
                                    data-content="And here's some amazing content. It's very engaging. right?">
                                Popover on left
                            </button>
                            <button type="button" class="btn btn-info" data-toggle="popover" title=""
                                    data-placement="top"
                                    data-content="And here's some amazing content. It's very engaging. right?"
                                    data-original-title="A Title">
                                Titled Popover
                            </button>
                        </div>
                        <h3><span class="fw-semi-bold">Bootstrap</span> Modals</h3>
                        <p>Modals are streamlined, but flexible, dialog prompts with the minimum
                            required functionality and smart defaults.</p>
                        <button class="btn btn-gray" data-toggle="modal" data-target="#myModal18">
                            Launch demo modal
                        </button>
                        <div class="modal fade" id="myModal18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title text-align-center fw-bold mt" id="myModalLabel18">One more step</h4>
                                        <p class="text-align-center fs-mini text-muted mt-sm">
                                            We need a bit of your detailed information to proceed. US ticketing system requires
                                            us to process and check your personal infromation before we can go.
                                        </p>
                                    </div>
                                    <div class="modal-body bg-gray-lighter">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control input-no-border"
                                                               placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control input-no-border"
                                                               placeholder="Middle Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control input-no-border"
                                                               placeholder="Address">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control input-no-border"
                                                               placeholder="City">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control input-no-border"
                                                               placeholder="Country">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control input-no-border"
                                                               placeholder="Zip">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-gray" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <section class="widget">
            <header>
                <h5>
                    Progress <span class="fw-semi-bold">Bars</span>
                </h5>
                <div class="widget-controls">
                    <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                    <a href="#"><i class="fa fa-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Progress Bar <span class="fw-semi-bold">Colors</span></h3>
                        <p class="fs-mini text-muted">Easily perceptible colored options for Bootstrap progress bars:</p>
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="progress progress-sm mt">
                                    <div class="progress-bar progress-bar-danger" style="width: 75%;"></div>
                                </div>
                                <div class="progress progress-sm mt">
                                    <div class="progress-bar progress-bar-warning" style="width: 60%;"></div>
                                </div>
                                <div class="progress progress-sm mt">
                                    <div class="progress-bar progress-bar-success" style="width: 45%;"></div>
                                </div>
                                <div class="progress progress-sm mt">
                                    <div class="progress-bar progress-bar-primary" style="width: 30%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3>Progress Bar <span class="fw-semi-bold">Sizes</span></h3>
                        <p class="fs-mini text-muted">Three different sizes for all of possible use cases:</p>
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="progress progress-xs mt">
                                    <div class="progress-bar progress-bar-gray" style="width: 60%;"></div>
                                </div>
                                <div class="progress progress-xs mt">
                                    <div class="progress-bar progress-bar-warning" style="width: 60%;"></div>
                                </div>
                                <div class="progress progress-sm mt">
                                    <div class="progress-bar progress-bar-info" style="width: 33%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3>More <span class="fw-semi-bold">Options</span></h3>
                        <p class="fs-mini text-muted">Animated, stripped and progress bars containing text:</p>
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="progress progress-striped active mt">
                                    <div class="progress-bar progress-bar-info fw-semi-bold" style="width: 60%;">
                                        $24 818
                                    </div>
                                </div>
                                <div class="progress progress-striped progress-sm mt">
                                    <div class="progress-bar progress-bar-gray-light" style="width: 60%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>


