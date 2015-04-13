<?php include ("header.php") ?>

  <div class="contain" style="width:1020px !important;">
    <nav class="navbar nav-primary">
      <div class="branding">
        <a href="/">Summer of Tech</a>
      </div>
      <a href="index.php">Dashboard</a>
      <a href="students.php">Students</a>
      <a href="#">Internships</a>
      <a href="#">Events</a>                        
    </nav>    

    <nav class="breadcrumbs">
      <a href="#">Students</a>
      <a href="#" class="active">Michael</a>
    </nav>

    <div class="contain-content" role="main">
      <div class="row">

        <!--Primary Page Column -->
        <div class="col-xs-10 col-xs-offset-3">
          <h1>Create your profile</h1>

          <div class="panel">

            <div class="create-progress">
 
              <span class="h2"><a href="#">Study Details</a></span>
              <span class="h2"><a href="#">Why hire more</a></span>
              <span class="h2"><a href="#">Skill set</a></span>
              <span class="h2"><a href="#">Contacts</a></span>

              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                  <span class="sr-only">60% Complete</span>
                </div>
              </div>


              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">
                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>              

            </div>

          </div>
   

        </div> <!--col-xs-10-->

      </div> <!--row -->
    </div>

<?php include ("footer.php") ?>
