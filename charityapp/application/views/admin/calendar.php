
<div class="content-wrap">
    <!-- main page content. the place to put widgets in. usually consists of .row > .col-md-* > .widget.  -->
    <main id="content" class="content" role="main">
        <ol class="breadcrumb">
            <li>YOU ARE HERE</li>
            <li class="active">Calendar</li>
        </ol>
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-title" id="calender-current-date">Calendar - <span class="fw-semi-bold">Events</span></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-lg-4">
                <h4>Draggable <span class="fw-semi-bold">Events</span></h4>
                <p>Just drap and drop events from there directly into the calendar.</p>
                <div class="calendar-external-events mb-lg" id='external-events'>
                    <div class='external-event bg-gray text-white' data-event-class="bg-gray text-white">Buy this template</div>
                    <div class='external-event bg-primary text-white' data-event-class="bg-primary text-white">Study some Node</div>
                    <div class='external-event bg-info text-white' data-event-class="bg-info text-white">Make a tea</div>
                    <div class='external-event bg-success text-white' data-event-class="bg-success text-white">Go to school</div>
                    <div class='external-event bg-warning text-white' data-event-class="bg-warning text-white">Open windows</div>
                </div>
            </div>
            <div class="col-md-9 col-lg-8">
                <section class="widget widget-calendar">
                    <div class="widget-body">
                        <div class="calendar-controls">
                            <div class="btn-group ">
                                <button class="btn btn-default" id="calender-prev"><i class="fa fa-angle-left"></i></button>
                                <button class="btn btn-default" id="calender-next"><i class="fa fa-angle-right"></i></button>
                            </div>
                            <div id="calendar-switcher" class="btn-group pull-right" data-toggle="buttons">
                                <label class="btn btn-default active">
                                    <input type="radio" name="view" value="month"> Month
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="view" value="agendaWeek"> Week
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="view" value="agendaDay"> Day
                                </label>
                            </div>
                        </div>
                        <div id="calendar" class="calendar"></div>
                    </div>
                </section>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header no-border">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title fw-bold mt" id="myModalLabel17">Edit Event</h4>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer no-border">
                                <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header no-border">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title fw-bold mt" id="myModalLabel18">New Event</h4>
                                <p class="fs-mini text-muted mt-sm">
                                    Just enter event name to create a new one
                                </p>
                            </div>
                            <div class="modal-body bg-gray-lighter">
                                <div class="form-group">
                                    <input type="text" id="event-name" class="form-control input-no-border"
                                           placeholder="Name">
                                </div>
                            </div>
                            <div class="modal-footer no-border">
                                <button data-dismiss="modal" class="btn btn-default">Cancel</button>
                                <button data-dismiss="modal" id="create-event" class="btn btn-success">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


