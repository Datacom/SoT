<?php include ("header.php") ?>

    <nav class="breadcrumbs">
      <a href="#">Students</a>
      <a href="#" class="active">Browse Students</a>
    </nav>

    <div class="contain-content" role="main">

        <br />

        <h1>Browse our <strong>1000</strong> students for this year's Summer of Tech Programme.</h1>

        <nav class="navbar navbar-default">

          <!--Search Box -->
          <form class="navbar-form navbar-left" role="search">
            <div class="input-group search-box">
              <input type="text" class="form-control" placeholder="Search: name">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                  <span class="icon-search"></span>
                </button>
              </span>
            </div><!-- /input-group -->      
          </form>

          <!-- Search Sort Options -->
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Highest ranked first <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">All programmes <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>        
          </ul>
        </nav>

        <!-- Search Tabs -->
        <ul class="nav nav-justified nav-tabs-search">
          <li role="presentation" class="active"><a href="#">Programming</a></li>
          <li role="presentation"><a href="#">Web &amp; Mobile Development</a></li>
          <li role="presentation"><a href="#">Graphic &amp; Visual Design</a></li>
          <li role="presentation"><a href="#">Electronics &amp; Computer Systems</a></li>
          <li role="presentation"><a href="#">Systems &amp; Network</a></li>
          <li role="presentation"><a href="#">BA, PM, UX, etc</a></li>
        </ul> 

      <div class="row">

        <!--Sidebar Search Filter -->
        <div class="col-xs-4">
            <div class="panel panel-default">
              <div class="panel-body">
                
                <form>

                  <label>Skills</label>

                  <!-- Checkbox pattern -->
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> .NET (C# and VB.net)
                    </label>
                  </div>

                  <!-- More checkboxes for demo purposes -->
                  <div class="checkbox"><label><input type="checkbox"> .NET (C# and VB.net)</label></div><div class="checkbox"><label><input type="checkbox"> .NET (C# and VB.net)</label></div><div class="checkbox"><label><input type="checkbox"> .NET (C# and VB.net)</label></div><div class="checkbox"><label><input type="checkbox"> .NET (C# and VB.net)</label></div><div class="checkbox"><label><input type="checkbox"> .NET (C# and VB.net)</label></div><div class="checkbox"><label><input type="checkbox"> .NET (C# and VB.net)</label></div>

                  <br /><br />

                  <label>Year of study</label>

                  <!-- Checkbox pattern -->
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> First year
                    </label>
                  </div>

                  <!-- More checkboxes for demo purposes -->
                  <div class="checkbox"><label><input type="checkbox"> Second year</label></div><div class="checkbox"><label><input type="checkbox"> Third year</label></div><div class="checkbox"><label><input type="checkbox"> Fourth year</label></div><div class="checkbox"><label><input type="checkbox"> Graduating</label></div><div class="checkbox"><label></div>                  
                    
              </form>                  
            </div>
          </div>          
        </div> <!--col-xs-10-->   

     
        <!-- Search Results -->        
        <div class="col-xs-12">
          <div class="row">

            <!-- Result Loop-->
            <div class="col-xs-4">
              <div class="result-card">
                  <a href="student.php">
                    <img src="images/photo.jpeg" alt="Michael" />
                  </a>
                <div class="details">
                    <strong>Michael Bolton</strong><br />
                    4th year at Victoria University of Wellington.
                </div>
                <div class="actions">
                  <span class="pie-chart">100</span>                  
                  <span class="icon-round icon-star-full icon-active"></span>
                </div>
              </div>
            </div>
            <!-- / Result Loop -->

            <!-- More results for demo purposes -->
            <div class="col-xs-4"><div class="result-card"><a href="student.php"><img src="images/photo.jpeg" alt="Michael" /></a><div class="details"><strong>Michael Bolton</strong><br /></div><div class="actions"><span class="pie-chart">70</span><span class="icon-round icon-star-full"></span></div></div></div>
            <div class="col-xs-4"><div class="result-card"><a href="student.php"><img src="images/photo.jpeg" alt="Michael" /></a><div class="details"><strong>Michael Reallylonglastnamefortesting</strong><br />4th year at Victoria University of Wellington.</div><div class="actions"><span class="icon-round icon-star-full"></span></div></div></div>
            <div class="col-xs-4"><div class="result-card"><a href="student.php"><img src="images/photo.jpeg" alt="Michael" /></a><div class="details"><strong>Michael Bolton</strong><br />444444444444444444444444444444444444444444.</div><div class="actions"><span class="icon-round icon-star-full icon-active"></span></div></div></div>
            <div class="col-xs-4"><div class="result-card"><a href="student.php"><img src="images/photo.jpeg" alt="Michael" /></a><div class="details"><strong>MichaelBoltonMichaelBoltonMichaelBolton</strong><br />4th year at Victoria University of Wellington. This is a really long description to test out the CSS.</div><div class="actions"><span class="icon-round icon-star-full"></span></div></div></div>
            <!-- / Demo results -->

          </div>
        </div>   



      </div> <!--row -->
    </div>


<?php include ("footer.php") ?>