
<div class="content-wrap">
    <!-- main page content. the place to put widgets in. usually consists of .row > .col-md-* > .widget.  -->
    <main id="content" class="content" role="main">
        <ol class="breadcrumb">
            <li>YOU ARE HERE</li>
            <li class="active">UI Notifications</li>
        </ol>
        <h1 class="page-title">Messages - <span class="fw-semi-bold">Notifications</span></h1>
        <section class="widget">
            <header>
                <h5>
                    Messenger
                </h5>
                <div class="widget-controls">
                    <a title="Properties" href="#"><i class="glyphicon glyphicon-cog"></i></a>
                    <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-plus"></i></a>
                    <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-minus"></i></a>
                    <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <div class="row">
                    <div class="col-md-4">
                        <h4>Layout options</h4>
                        <p>There are few position options available for notifications. You can click any of them
                            to change notifications position:</p>
                        <div class="location-selector">
                            <div class="bit top left" data-position="top left"></div>
                            <div class="bit top right" data-position="top right"></div>
                            <div class="bit top" data-position="top"></div>
                            <div class="bit bottom left" data-position="bottom left"></div>
                            <div class="bit bottom right" data-position="bottom right"></div>
                            <div class="bit bottom" data-position="bottom"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4>Notification Types</h4>
                        <p>Different types of notifications for lost of use cases. Custom classes are also supported.</p>
                        <p><a class="btn btn-info" id="show-info-message" href="#">Info Message</a></p>
                        <p><a class="btn btn-danger" id="show-error-message" href="#">Error + Retry Message</a></p>
                        <p><a class="btn btn-success" id="show-success-message" href="#">Success Message</a></p>
                    </div>
                    <div class="col-md-4">
                        <h4>Dead Simple Usage</h4>
                        <p>Just few lines of code to instantiate a notifications object. Does not require passing any options:</p>
                        <pre><code>Messenger().post("Thanks for checking out Messenger!");</code></pre>
                        <p>More complex example:</p>
                                <pre><code>Messenger().post({
    message: 'There was an explosion while processing your request.',
    type: 'error',
    showCloseButton: true
});</code></pre>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>


