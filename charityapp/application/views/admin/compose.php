
<div class="content-wrap">
    <!-- main page content. the place to put widgets in. usually consists of .row > .col-md-* > .widget.  -->
    <main id="content" class="content" role="main">
        <ol class="breadcrumb">
            <li>YOU ARE HERE</li>
            <li class="active">Email</li>
        </ol>
        <h1 class="page-title">Email - <span class="fw-semi-bold">Inbox</span></h1>
        <div class="row">
            <div class="col-md-3 col-lg-2">
                <a class="btn btn-danger btn-block" href="inbox.html">
                    Compose
                </a>
                <ul class="nav nav-pills nav-stacked nav-email-folders mt">
                    <li class="active">
                        <a href="inbox.html">
                            <span class="badge pull-right">2</span>
                            Inbox
                        </a>
                    </li>
                    <li><a href="#">Starred</a></li>
                    <li><a href="#">Sent Mail</a></li>
                    <li>
                        <a href="#">
                            <span class="badge pull-right">3</span>
                            Draft
                        </a>
                    </li>
                    <li><a href="#">Trash</a></li>
                </ul>
                <h5 class="mt">QUICK VIEW</h5>
                <ul class="nav nav-pills nav-stacked nav-email-folders mb-lg fs-mini">
                    <li><a href="#"><i class="fa fa-circle text-danger pull-right"></i> Work </a></li>
                    <li><a href="#"><i class="fa fa-circle text-white pull-right"></i> Private </a></li>
                    <li><a href="#"><i class="fa fa-circle text-gray-light pull-right"></i> Saved </a></li>
                </ul>
            </div>
            <div class="col-md-9 col-lg-10">
                <div class="clearfix mb-xs">
                    <a class="btn btn-default btn-sm width-50 pull-left" id="back-btn" href="inbox.html">
                        <i class="fa fa-angle-left fa-lg"></i>
                    </a>
                    <div class="pull-right hide" id="folder-stats">
                        <p class="widget-email-count">Showing 1 - 10 of 96 messages</p>
                        <ul class="pagination pagination-sm widget-email-pagination">
                            <li class="prev disabled"><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="next"><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <section class="widget widget-email">
                    <header>
                        <h4>Compose <span class="fw-semi-bold">New</span></h4>
                    </header>
                    <div class="widget-body">
                        <form id="email-compose" class="form-email-compose" method="get" action="inbox.html">
                            <div class="form-group">
                                <input type="email" id="input-to" placeholder="To" class="input-transparent form-control" value="">
                            </div>
                            <div class="form-group">
                                <input type="text" id="input-subject" placeholder="Subject" class="input-transparent form-control" value="">
                            </div>
                            <div class="form-group">
                                <textarea rows="10" class="form-control" id="wysiwyg" placeholder="Message"></textarea>
                            </div>
                            <div class="clearfix">
                                <div class="btn-toolbar pull-right">
                                    <button type="reset" id="compose-discard-button" class="btn btn-gray">Discard</button>
                                    <button type="button" id="compose-save-button" class="btn btn-gray">&nbsp;&nbsp;Save&nbsp;&nbsp;</button>
                                    <button type="submit" id="compose-send-button" class="btn btn-danger">&nbsp;&nbsp;&nbsp;Send&nbsp;&nbsp;&nbsp;</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </main>
</div>


