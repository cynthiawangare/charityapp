
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
            <li class="active">UI List Groups</li>
        </ol>
        <h1 class="page-title">Lists - <span class="fw-semi-bold">Sortable Groups</span></h1>
        <section class="widget">
            <header>
                <h4>
                    Grouped <span class="fw-semi-bold">Lists</span>
                </h4>
                <div class="widget-controls">
                    <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                    <a href="#"><i class="fa fa-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <h3>Closest <span class="fw-semi-bold">Stars</span></h3>
                <p>Try to play around with this list. Are you ready to pass an exam on astronomy? </p>
                <ul class="list-group list-group-sortable mt-lg" id="sortable">
                    <li class="list-group-item">
                        <i class="fa fa-sort"></i>
                        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
                        &nbsp;&nbsp;&nbsp; 03 &nbsp;&nbsp;&nbsp;
                        Barnard's Star
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-sort"></i>
                        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
                        &nbsp;&nbsp;&nbsp; 01 &nbsp;&nbsp;&nbsp;
                        The Sun
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-sort"></i>
                        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
                        &nbsp;&nbsp;&nbsp; 04 &nbsp;&nbsp;&nbsp;
                        Wolf 359
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-sort"></i>
                        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
                        &nbsp;&nbsp;&nbsp; 02 &nbsp;&nbsp;&nbsp;
                        Proxima Centauri
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-sort"></i>
                        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
                        &nbsp;&nbsp;&nbsp; 05 &nbsp;&nbsp;&nbsp;
                        Lalande 21185
                    </li>
                </ul>
            </div>
        </section>
        <section class="widget mt-lg">
            <header>
                <h4>
                    List <span class="fw-semi-bold">Groups</span>
                </h4>
                <div class="widget-controls">
                    <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                    <a href="#"><i class="fa fa-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <h3>Nestable <span class="fw-semi-bold">List</span></h3>
                <p class="fs-mini">There is a scientific theory that you can arrange this list in such way that there will
                    be no more saddness
                in the whole world. Can you? Touch devices supported</p>
                <div class="row">
                    <div class="col-md-6 mt-lg">
                        <div class="dd" id="nestable1">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">Item 1</div>
                                </li>
                                <li class="dd-item" data-id="2">
                                    <div class="dd-handle">Item 2</div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="3"><div class="dd-handle">Item 3</div></li>
                                        <li class="dd-item" data-id="4"><div class="dd-handle">Item 4</div></li>
                                        <li class="dd-item" data-id="5">
                                            <div class="dd-handle">Item 5</div>
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="6"><div class="dd-handle">Item 6</div></li>
                                                <li class="dd-item" data-id="7"><div class="dd-handle">Item 7</div></li>
                                                <li class="dd-item" data-id="8"><div class="dd-handle">Item 8</div></li>
                                            </ol>
                                        </li>
                                        <li class="dd-item" data-id="9"><div class="dd-handle">Item 9</div></li>
                                    </ol>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-6 mt-lg">
                        <div class="dd" id="nestable2">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="13">
                                    <div class="dd-handle">Item 13</div>
                                </li>
                                <li class="dd-item" data-id="14">
                                    <div class="dd-handle">Item 14</div>
                                </li>
                                <li class="dd-item" data-id="15">
                                    <div class="dd-handle">Item 15</div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="16"><div class="dd-handle">Item 16</div></li>
                                        <li class="dd-item" data-id="17"><div class="dd-handle">Item 17</div></li>
                                        <li class="dd-item" data-id="18"><div class="dd-handle">Item 18</div></li>
                                    </ol>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>


