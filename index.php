<?php include ("header.php") ?>

   <nav class="breadcrumbs">
      <a href="#">Styleguide</a>
      <a href="#" class="active">Dashboard</a>
    </nav>

    <div class="contain-content" role="main">
      <div class="row">

        <!--Primary Page Column -->
        <div class="col-xs-16">
          <h1>SoT Styleguide</h1>

          <p>
            SoT is built using Twitter Bootstrap and as a result, all of the patterns in the Bootstrap library are available for use in Development. Additional styles and markup patterns are documented here.
          </p>

          <p>
            Please note that while the website is currently fixed width, the building using Bootstrap means a largely mobile-first approach and a future transition to a fluid or responsive layout has been kept in mind. 
          </p>
<pre>
&lt;div class="contain" style="width:1020px !important;">
</pre>

          <ul>
            <li><a href="toni.php">Toni's To-Do List & Things Needed</a></li>
            <li><span class="icon-github3"></span>&nbsp;<a href="https://github.com/tonibarrett/SoT">Source</a></li>
          </ul>          

          <hr />          

          <h4>Quick links to example pages</h4>
          <ul>
            <li><a href="student.php">Student profile</a> <span class="icon-checkmark"></span></li>
            <li><a href="company.php">Business profile</a> [70%]</li>            
            <li><a href="students.php">Search students</a> <span class="icon-checkmark"></span></li>
            <li><a href="signup.php">Sign up</a> [50%]</li>
            <li><a href="create-profile.php">Create profile</a> [5%]</li>                        
            <li><a href="company-dashboard.php">Business dashboard</a> [0%]</li>
            <li><a href="student-dashboard.php">Student dashboard</a> [0%]</li>            
          </ul>

          <hr />

          <h3>Grid Layout</h3>
          <p>
            SoT uses the Bootstrap Grid layout as in the <a href="http://getbootstrap.com/css/#grid">Bootstrap Documentation</a>. To suit the SoT style and non-responsive layout, only <strong>xs</strong> columns are to be used.
          </p>
          <ul>
            <li>16 column layout</li>
            <li>col-xs-* classes only</li>
          </ul>

          <hr />

          <div class="row">
            <div class="col-xs-10">

            <h3>Student Search Result Card</h3>
<pre class="prettyprint">
  &lt;div class="col-xs-4">
    &lt;div class="result-card">
        &lt;a href="student.php">
          &lt;img src="images/photo.jpeg" alt="Michael" />
        &lt;/a>
      &lt;div class="details">
          &lt;strong>Michael Bolton&lt;/strong>&lt;br />
          4th year at Victoria University of Wellington.
      &lt;/div>
      &lt;div class="actions">
        &lt;span class="icon-round icon-star-full">&lt;/span>
      &lt;/div>
    &lt;/div>
  &lt;/div>
</pre>
          </div>
          <div class="col-xs-4 col-xs-offset-2">
              <div class="result-card">
                  <a href="student.php">
                    <img src="images/photo.jpeg" alt="Michael" />
                  </a>
                <div class="details">
                    <strong>Michael Bolton</strong><br />
                    4th year at Victoria University of Wellington.
                </div>
                <div class="actions">
                  <span class="icon-round icon-star-full"></span>
                </div>
              </div>
          </div>
        </div>

        <div class="row">
          <hr />
          <div class="col-xs-10">
            <h3>Stats List</h3>

<pre class="prettyprint">
&lt;div class="stats-list">
  &lt;span class="stats-count">5</span>
  &lt;span class="stats-type">Softskills</span>

  &lt;span class="stats-count">5</span>
  &lt;span class="stats-type">Masterclass</span>

  &lt;span class="stats-count">5</span>
  &lt;span class="stats-type">Fundamentals</span>
&lt;/div> 
</pre>

          </div>
          <div class="col-xs-6">
            <div class="stats-list">
              <span class="stats-count">5</span>
              <span class="stats-type">Softskills</span>

              <span class="stats-count">5</span>
              <span class="stats-type">Masterclass</span>

              <span class="stats-count">5</span>
              <span class="stats-type">Fundamentals</span>
            </div> 
          </div>
        </div>          


          <div class="row">
            <hr />
            <div class="col-xs-10">
              <h3>Pie Charts</h3>


<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />


            </div>
          </div>


          <div class="row">
            <hr />
            <div class="col-xs-10">
              <h3></h3>
            </div>
            <div class="col-xs-4 col-xs-offset-2">
            </div>
          </div>          



      </div>

    </div>

<?php include ("footer.php") ?>