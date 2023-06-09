
<div class="content-wrap">
    <!-- main page content. the place to put widgets in. usually consists of .row > .col-md-* > .widget.  -->
    <main id="content" class="content" role="main">
        <ol class="breadcrumb">
            <li>YOU ARE HERE</li>
            <li class="active">Tables Basic</li>
        </ol>
        <h1 class="page-title">Visual - <span class="fw-semi-bold">Charts</span></h1>
        <div class="row">
            <div class="col-md-6 col-lg-5">
                <section class="widget">
                    <header>
                        <h4>
                            Flot <span class="fw-semi-bold">Charts</span>
                        </h4>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <div class="mt mb" id="flot-main" style="width: 100%; height: 260px;"></div>
                        <div class="chart-tooltip" id="flot-main-tooltip" style="opacity: 0"></div>
                        <p class="fs-mini text-muted">
                            Flot is a <span class="fw-semi-bold">pure</span> JavaScript plotting library for jQuery, with a
                            focus on simple usage, attractive looks and interactive features.
                        </p>
                        <h4 class="mt">Interactive <span class="fw-semi-bold">Sparklines</span></h4>
                        <div class="row mt">
                            <div class="col-sm-6">
                                <div class="stats-row">
                                    <div class="stat-item">
                                        <p class="value4 fw-thin">34 567</p>
                                        <h6 class="name text-muted no-margin">Overall Values</h6>
                                    </div>
                                    <div class="stat-item stat-item-mini-chart">
                                        <div class="sparkline" data-type="bar" data-bar-color="#f0b518"
                                             data-height="30" data-bar-width="6" data-bar-spacing="2">9,12,14,15,10,14,20</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="stats-row">
                                    <div class="stat-item">
                                        <p class="value4 fw-thin">34 567</p>
                                        <h6 class="name text-muted no-margin">Overall Values</h6>
                                    </div>
                                    <div class="stat-item stat-item-mini-chart">
                                        <div class="sparkline" data-type="bar" data-bar-color="#FFA587"
                                             data-height="30" data-bar-width="6" data-bar-spacing="2">9,12,14,15,10,14,20</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="fs-mini text-muted">
                            This jQuery plugin generates sparklines (small inline charts) directly in the browser using
                            data supplied either inline in the HTML, or via javascript.
                        </p>
                    </div>
                </section>
            </div>
            <div class="col-md-6 col-lg-4">
                <section class="widget">
                    <header>
                        <h4>
                            Realtime <span class="fw-semi-bold">Rickshaw</span>
                        </h4>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p class="fs-mini text-muted mb-lg">
                            Rickshaw provides the elements you need to create interactive graphs: renderers, legends,
                            hovers, range selectors, etc. You put the pieces together.
                            It's all based on <span class="fw-semi-bold">d3</span> underneath, so graphs are drawn with standard SVG and styled with CSS.
                            Customize all you like with techniques you already know.
                        </p>
                        <h4>720 Users</h4>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-gray-light" style="width: 60%;"></div>
                        </div>
                        <p class="fs-mini text-muted mb-lg">
                            <span class="circle bg-success text-white">
                                <i class="fa fa-circle"></i>
                            </span>
                            &nbsp;
                            Target <span class="fw-semi-bold">820</span> users
                            is <span class="fw-semi-bold">96%</span> reached.
                        </p>
                        <div id="rickshaw" class="chart-overflow-bottom"></div>
                    </div>
                </section>
            </div>
            <div class="col-md-6 col-lg-3">
                <section class="widget">
                    <header>
                        <h4>
                            Line <span class="fw-semi-bold">Sparkline</span>
                        </h4>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p class="fs-mini text-muted">
                            Each example displayed below takes just 1 line of HTML or javascript to generate.
                        </p>
                        <div class="stats-row mt">
                            <div class="stat-item">
                                <h6 class="name">Overall Growth</h6>
                                <p class="value">43.75%</p>
                            </div>
                            <div class="stat-item">
                                <h6 class="name">Montly</h6>
                                <p class="value">86.34%</p>
                            </div>
                        </div>
                        <p class="text-muted fs-mini">
                            <span class="fw-semi-bold">17% higher</span> than last month</p>
                        <div id="sparkline1" class="chart-overflow-bottom"></div>
                    </div>
                </section>
                <section class="widget">
                    <header>
                        <h4>
                            Sparkline <span class="fw-semi-bold">Pie Charts</span>
                        </h4>
                        <div class="widget-controls">
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p class="fs-mini text-muted">
                            Each example displayed below takes just 1 line of HTML or javascript to generate.
                        </p>
                        <div id="sparkline2" class="chart-overflow-bottom mb-0 text-align-center"></div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-lg-8">
                <section class="widget">
                    <header>
                        <h4>
                            <span class="fw-semi-bold">D3</span> Charts
                        </h4>
                        <div class="widget-controls">
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p class="fs-mini text-muted">
                            This project is an attempt to build re-usable charts and chart components for <span class="fw-semi-bold">d3.js</span> without
                            taking away the power that d3.js gives you.
                        </p>
                        <div id="nvd31">
                            <svg></svg>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-5 col-lg-4">
                <section class="widget">
                    <header>
                        <h4>
                            <span class="fw-semi-bold">D3</span> Charts
                        </h4>
                        <div class="widget-controls">
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p class="fs-mini text-muted">
                            This is a very young collection of components, with the goal of keeping these components
                            very customizeable.
                        </p>
                        <div id="nvd32">
                            <svg></svg>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <section class="widget">
                    <header>
                        <h4>
                            Morris <span class="fw-semi-bold">Area Charts</span>
                        </h4>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p class="fs-mini text-muted">
                            Good-looking charts shouldn't be difficult.
                            The public API is terribly simple. It's just one function: <code>Morris.Line(options)</code>,
                            where options is an object containing some of the following configuration options.
                        </p>
                        <div id="morris2">
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-6">
                <section class="widget">
                    <header>
                        <h4>
                            Morris <span class="fw-semi-bold">Line Charts</span>
                        </h4>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p class="fs-mini text-muted">
                            Good-looking charts shouldn't be difficult.
                            The public API is terribly simple. It's just one function: <code>Morris.Line(options)</code>,
                            where options is an object containing some of the following configuration options.
                        </p>
                        <div id="morris1">
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <section class="widget">
                    <header>
                        <h4>
                            Easy <span class="fw-semi-bold">Pie Charts</span>
                        </h4>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body clearfix">
                        <div class="text-align-center">
                            <div class="easy-pie-chart mb-lg" id="easy-pie1" data-percent="73">
                                73
                            </div>
                        </div>
                        <p class="fs-mini text-muted">
                            Easy pie chart is a jQuery plugin that uses the canvas element to render simple pie charts
                            for single values. These charts are highly customizable, very easy to implement, scale to
                            the resolution of the display of the client to provide sharp charts even on retina displays.
                        </p>
                    </div>
                </section>
            </div>
            <div class="col-md-6 col-lg-4">
                <section class="widget">
                    <header>
                        <h4>
                            Morris <span class="fw-semi-bold">Donut Charts</span>
                        </h4>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <div id="morris3">
                        </div>
                        <p class="fs-mini text-muted">
                            Donuts a great for representing some parted information like traffice sources,
                            disk partitions, etc.
                            This really couldn't be easier. Create a Donut chart using <code>Morris.Donut(options)</code>,
                            with only few options.
                        </p>
                    </div>
                </section>
            </div>
            <div class="col-md-12 col-lg-4">
                <section class="widget">
                    <header>
                        <h4>
                            Flot <span class="fw-semi-bold">Bars</span>
                        </h4>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <div class="mt-lg" id="flot-bar" style="width: 100%; height: 260px;"></div>
                        <p class="fs-mini text-muted">
                            Flot is a <span class="fw-semi-bold">pure</span> JavaScript plotting library for jQuery, with a
                            focus on simple usage, attractive looks and interactive features.
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </main>
</div>




