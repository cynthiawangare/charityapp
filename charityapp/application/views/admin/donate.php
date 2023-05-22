<div class="content-wrap">
    <!-- main page content. the place to put widgets in. usually consists of .row > .col-md-* > .widget.  -->
    <main id="content" class="content" role="main">
        <h1 class="fw-semi-bold">M-Pesa payment method</h1>
        <br></br>
        
        <div class="causes">
            <div class="row">
                <div class="owl-carousel causes-carousel">
                    <div class="fw-semi-bold">
                        <p>1. Go to M-pesa menu</p>
                        <p>2. Select send money</p>
                        <p>3. Enter 0700449883 on the M-pesa menu</p>
                        <p>4. Enter any amount</p>
                        <p>5. Enter your pin</p>
                        <p>6. Press okay</p>
                            
                    </div>
                </div>
                <form class="owl-carousel causes-carousel" action="<?php echo site_url('user/addcode');?>" method="post">
                
                <div class="form-group">
                    <label for="hint-field" class="col-sm-4 control-label">Input Verification code</label>
                        <div class="col-sm-7">
                            <input type="text" id="hint-field" class="form-control" name="code" placeholder="Code">
                        </div>
                </div>
                <div class="causes-btn">
                <input type="submit" class="btn btn-default btn-sm" value="Submit Code">
                    
                </div>
                
                </form>
        </div>
        
    </main>
</div>
