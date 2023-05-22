<div class="content-wrap">
    <!-- main page content. the place to put widgets in. usually consists of .row > .col-md-* > .widget.  -->
    <main id="content" class="content" role="main">
        <h1 class="fw-semi-bold">View Users</h1>
        <div class="causes">
            <div class="row">
                <div class="owl-carousel causes-carousel">
                      <section class="panel">
                          <header class="panel-heading">
                              Users
                          </header>
                          <table class="table table-striped">
                              <thead>
                              <tr>
                                  <th>First Name</th>
                                  <th>Email</th>
                                  <th>Username</th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach($user as $rows){?>
                              <tr>
                                  <td><a href="#"><?php echo $rows->first_name;?></a></td>
                                  <td><a href="#"><?php echo $rows->email;?></a></td>
                                  <td><a href="#"><?php echo $rows->username;?></a></td>
                                  <td><?php 
                                        $zero=0;
                                        $one=1;

                                        if ($rows->isactive==1){?>

                                            <a href="<?php echo site_url('user/publishuser/'.$rows->donorid.'/'.$zero);?>" class="btn btn-danger btn-xs"><i class="icon-user"> Unpublish</i></a>
                                        <?php }else{?>
                                        <a href="<?php echo site_url('user/publishuser/'.$rows->donorid.'/'.$one);?>" class="btn btn-success btn-xs"><i class="icon-user"> Publish</i></a>
                                        <?php }?></td>
                                 </tr>
                                    <?php }?>
                              </tbody>
                         </table>
                      </section>
                  </div>
              </div>
              </div>             
          </main>
     </div>
      
     
