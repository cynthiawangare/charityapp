
<div class="content-wrap">
    <!-- main page content. the place to put widgets in. usually consists of .row > .col-md-* > .widget.  -->
    <main id="content" class="content" role="main">
        <!-- jquery ui sortable chrome overflow-x fix. when set to hidden does not behaves as expected. resetting back
             just for this page.
             http://bugs.jqueryui.com/ticket/9588 -->
        <style>
            body{
                overflow-x: visible;
            }
        </style>
        <ol class="breadcrumb">
            <li>YOU ARE HERE</li>
            <li class="active">Grid</li>
        </ol>
        <h1 class="page-title">Grid - <span class="fw-semi-bold">Options</span></h1>
        <div class="row">
            <div class="col-md-7 col-lg-offset-1">
                <section class="widget">
                    <header>
                        <h4>Draggable Grid &nbsp;<span class="label label-danger fw-normal">since 2.1</span></h4>
                    </header>
                    <div class="widget-body">
                        <p>
                            <strong>Widgster</strong> is a plugin that allows to easily implement basic widget functions that
                            lots of our customers have requested.  For now it has the following essential
                            widget features:
                        </p>
                        <ul class="text-list">
                            <li><strong>Collapse/Expand</strong> - all widgets can be collapsed to fill only header's vertical space;</li>
                            <li><strong>Close</strong> - closable. Any widget may be removed by clicking the close btn;</li>
                            <li><strong>Full Screen</strong> - an option to make widget fill the whole window (just like OS);</li>
                            <li><strong>Ajax Load</strong> - the hottest option allowing to load/reload widget content asynchronously. You just
                                need to provide an url to fetch the data from. With loader delivered.</li>
                        </ul>
                        <p>It's available under MIT license, check out github to find it.</p>
                        <p>
                            Test it out!
                        </p>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 widget-container">
                <section class="widget" id="default-widget" data-widgster-load="demo/ajax/widgets/default.php">
                    <header>
                        <h5>Default <span class="fw-semi-bold">Widget</span></h5>
                        <div class="widget-controls">
                            <a data-widgster="load" title="Reload" href="#"><i class="fa fa-refresh"></i></a>
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a data-widgster="fullscreen" title="Full Screen" href="#"><i class="glyphicon glyphicon-fullscreen"></i></a>
                            <a data-widgster="restore" title="Restore" href="#"><i class="glyphicon glyphicon-resize-small"></i></a>
                            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p>A timestamp this widget was created: Apr 24, 19:07:07</p>
                        <p>A timestamp this widget was updated: Apr 24, 19:07:07</p>
                    </div>
                </section>
                <section class="widget" id="shares-widget"
                         data-widgster-load="demo/ajax/widgets/shares.php">
                    <header>
                        <h5>
                            <span class="label label-primary"><i class="fa fa-facebook"></i></span> &nbsp;
                            Latest <span class="fw-semi-bold">Shares</span>
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="load" title="Reload" href="#"><strong class="text-gray-light">Reload</strong></a>
                            <a data-widgster="close" title="Close" href="#"><strong class="text-gray-light">Close</strong></a>
                        </div>
                    </header>
                    <div class="widget-body no-padding">
                        <div class="list-group list-group-lg">
                            <a href="#" class="list-group-item">
                                <span class="thumb-sm pull-left mr">
                                    <img class="img-circle" src="demo/img/people/a1.jpg" alt="...">
                                </span>
                                <i class="fa fa-circle pull-right text-danger mt-sm"></i>
                                <h5 class="no-margin">Maikel Basso</h5>
                                <small class="text-muted">about 2 mins ago</small>
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="thumb-sm pull-left mr">
                                    <img class="img-circle" src="demo/img/people/a2.jpg" alt="...">
                                </span>
                                <i class="fa fa-circle pull-right text-info mt-sm"></i>
                                <h5 class="no-margin">Ianus Arendse</h5>
                                <small class="text-muted">about 42 mins ago</small>
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="thumb-sm pull-left mr">
                                    <img class="img-circle" src="demo/img/people/a3.jpg" alt="...">
                                </span>
                                <i class="fa fa-circle pull-right text-success mt-sm"></i>
                                <h5 class="no-margin">Valdemar Landau</h5>
                                <small class="text-muted">one hour ago</small>
                            </a>
                            <a href="#" class="list-group-item mb-n-md">
                                <span class="thumb-sm pull-left mr">
                                    <img class="img-circle" src="demo/img/people/a4.jpg" alt="...">
                                </span>
                                <i class="fa fa-circle pull-right text-warning mt-sm"></i>
                                <h5 class="no-margin">Rick Teagan</h5>
                                <small class="text-muted">3 hours ago</small>
                            </a>
                        </div>
                    </div>
                </section>
                <section class="widget" id="autoload-widget"
                         data-widgster-load="demo/ajax/widgets/autoload.php"
                         data-widgster-autoload="true"
                         data-widgster-show-loader="false">
                    <header>
                        <h5>Autoload <span class="fw-semi-bold">Widget</span></h5>
                        <div class="widget-controls dropdown">
                            <span>
                                <i class="fa fa-spinner fa-lg fade mr-xs"></i>
                            </span>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a data-widgster="load" title="Reload" href="#">Reload
                                        &nbsp;&nbsp;<span class="badge bg-success animated bounceIn"><strong>9</strong></span>
                                    </a>
                                </li>
                                <li>
                                    <a data-widgster="fullscreen" title="Full Screen" href="#">Fullscreen</a>
                                    <a data-widgster="restore" title="Restore" href="#">Restore</a>
                                </li>
                                <li class="divider"></li>
                                <li><a data-widgster="close" title="Close" href="#">Close</a></li>
                            </ul>
                        </div>
                    </header>
                    <div class="widget-body">
                        <h3 class="text-align-center no-margin">Sign up, it's <strong>free</strong></h3>
                        <p class="lead text-muted text-align-center">
                            Faith makes it possible to achieve that which man's mind can conceive and believe.
                        </p>
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><i class="fa fa-circle text-warning"></i> &nbsp; Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                           placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="pswd"><i class="fa fa-circle text-danger"></i> &nbsp; Password</label>
                                    <input class="form-control" id="pswd" type="text" placeholder="Min 8 characters">
                                </div>
                                <p>
                                    To make a widget automatically load it's content you just need to set
                                    <strong>data-widgster-autoload</strong> attribute and provide an url.
                                </p>
                                <pre><code>data-widgster-load="server/ajax_widget.php"
data-widgster-autoload="true"</code></pre>
                                <p>
                                    <strong>data-widgster-autoload</strong> may be set to an integer value. If set, for example, to
                                    2000 will refresh widget every 2 seconds.
                                </p>
                                <div class="clearfix">
                                    <div class="btn-toolbar pull-right">
                                        <button type="button" class="btn btn-transparent">Cancel</button>
                                        <button type="button" class="btn btn-success">&nbsp;Submit&nbsp;</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </section>
                <section class="widget" style="min-height: 200px">
                    <header>
                        <h5>Custom <span class="fw-semi-bold">Loader</span></h5>
                    </header>
                    <div class="widget-body">
                        <div class="loader animated fadeIn handle">
                        <span class="spinner">
                            <i class="fa fa-spinner fa-spin"></i>
                        </span>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-6 widget-container">
                <section class="widget" id="news-widget" data-widgster-load="demo/ajax/widgets/news.php">
                    <header>
                        <h5>
                            News <span class="badge bg-success">17</span>
                        </h5>
                        <span class="text-muted">spinning refresh button & close prompt</span>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a data-widgster="load" title="I am spinning!" href="#"><i class="fa fa-refresh"></i></a>
                            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body no-padding">
                        <ul class="news-list stretchable">
                            <li>
                                <span class="icon bg-danger text-white">
                                    <i class="fa fa-star"></i>
                                </span>
                                <div class="news-item-info">
                                    <h4 class="name no-margin mb-xs"><a href="#">First Human Colony on Mars</a></h4>
                                    <p class="fs-mini">
                                        First 700 people will take part in building first human settlement outside of Earth.
                                        That's awesome, right?
                                    </p>
                                    <time class="help-block">Mar 20, 18:46</time>
                                </div>
                            </li>
                            <li>
                                <span class="icon bg-info text-white">
                                    <i class="fa fa-microphone"></i>
                                </span>
                                <div class="news-item-info">
                                    <h4 class="name no-margin mb-xs"><a href="#">Light Blue reached $300</a></h4>
                                    <p class="fs-mini">
                                        Light Blue Inc. shares just hit $300 price. "This was inevitable. It should
                                        have happen sooner or later" - says NYSE expert.
                                    </p>
                                    <time class="help-block">Sep 25, 11:59</time>
                                </div>
                            </li>
                            <li>
                                <span class="icon bg-success text-white">
                                    <i class="fa fa-eye"></i>
                                </span>
                                <div class="news-item-info">
                                    <h4 class="name no-margin mb-xs"><a href="#">No more spying</a></h4>
                                    <p class="fs-mini">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                    </p>
                                    <time class="help-block">Mar 20, 18:46</time>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="news-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="news-close-modal-label" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="news-close-modal-label">Sure?</h4>
                                </div>
                                <div class="modal-body">
                                    Do you really want to unrevertably remove this super news widget?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                    <button type="button" class="btn btn-danger" id="news-widget-remove">Yes, remove widget</button>
                                </div>

                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                </section>
                <section class="widget locked" data-widgster-collapsed="true">
                    <header>
                        <h5>Collapsed by default & locked</h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <blockquote >
                            There are no limits. There are plateaus, but you must not stay there, you must go beyond
                            them. If it kills you, it kills you. A man must constantly exceed his level.
                            <footer>
                                Bruce Lee
                            </footer>
                        </blockquote>
                        <p>To make a widget initially collapsed just add <code>data-widgster-collapsed="true"</code> attribute to <code>.widget</code>.</p>
                        <p>To make it locked (prevent dragging) add <code>.locked</code> class.</p>
                    </div>
                </section>
                <section class="widget bg-gray">
                    <div class="widget-body no-padding">
                        <div class="jumbotron handle bg-gray text-white mb-0">
                            <div class="container">
                                <h1>Draggable story!</h1>
                                <p class="lead">
                                    <em>Build</em> your own
                                    interfaces! Sit back and relax.
                                </p>
                                <p class="text-align-center">
                                    <a class="btn btn-danger btn-lg" data-widgster="fullscreen">
                                        Fullscreen me! &nbsp;
                                        <i class="fa fa-check"></i>
                                    </a>
                                </p>
                                <a class="btn btn-danger btn-lg" data-widgster="restore">
                                    Want to go back?
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
</div>


