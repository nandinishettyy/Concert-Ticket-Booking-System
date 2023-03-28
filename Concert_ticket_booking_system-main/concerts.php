<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Booking </title>
    <link rel="stylesheet" href="css/style.css">
    <?php
           include("partials/bootstrap.php");
    ?>
  </head>
  <body style="background: #9794E1;">
   <?php 
      include('partials/navbar.php');
   ?>
   <div class="py-5">
        <h2 class="text-center">Book your tickets here...</h2>
    </div>
   <div class="row">
      <?php 
        include("config/constants.php");
        $query = "SELECT * FROM concert";
        $res = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($res))
        {
      ?> 
        <div class="col-lg-3 col-md-6 col-sm-12">
          <form action="">
            <div class="card mb-4 ml-2 mr-2">
            
              <img
                class="card-img-top"
                src="<?php echo $row['image'];?>"
                alt="Card image"
              />
            
              <div class="card-body"> 
                <h4> <?php echo $row['artist_name']; ?>  </h4>
                <h6><?php echo $row['venue_name']; ?><br/><?php echo $row['date'];?><br/><?php echo $row['time'];?></h6>
              </div>
              
               <?php echo "<a class='btn btn-primary' href='ticket_summary.php?ID={$row['concert_id']}'>BOOK NOW!</a>";
               ?>

              
            </div>
          </form>
        </div>
        
      <?php

           
            
        }
      ?>

    </div>
  </div>
</div>

 

      <!-- <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
              <img
                class="card-img-top"
                src="images/prateek kuhad1.jpg"
                alt="Card image"
              />
              <div class="card-body">
                <h4 class="card-title">Prateek Kuhad</h4>
                <p class="card-text">Manpho Convention Centre<br/>23-09-2021<br />8:30pm</p>

                <a href="#" class="btn btn-primary">BOOK NOW!</a>
              </div>
            </div>
          </div>
        </div>
      </div> -->

          <!-- <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
              <img class="card-img-top" src="images/arr.jpg" alt="Card image" />
              <div class="card-body">
                <h4 class="card-title">A R Rahman</h4>
                <p class="card-text">Manpho Convention Centre<br/>20-12-21<br />7:00pm</p>
                <a href="#" class="btn btn-primary">BOOK NOW!</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
              <img class="card-img-top" src="images/yazin-nizar-16.jpg" alt="Card image" />
              <div class="card-body">
                <h4 class="card-title">Yazin Nizar</h4>
                <p class="card-text">SkyDeck<br/>3-12-21<br />8:00pm</p>
                <a href="#" class="btn btn-primary">BOOK NOW!</a>
              </div>
            </div>
          </div>

          

          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
              <img
                class="card-img-top"
                src="images/vidyavox.jpg"
                alt="Card image"
              />
              <div class="card-body">
                <h4 class="card-title">Vidya Vox</h4>
                <p class="card-text">Palace Ground<br/>2-10-21<br />7:00pm</p>
                <a href="#" class="btn btn-primary">BOOK NOW!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br/>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
              <img
                class="card-img-top"
                src="images/armaan1234.jpg"
                alt="Card image"
              />
              <div class="card-body">
                <h4 class="card-title">Armaan Malik</h4>
                <p class="card-text">SkyDeck<br/>20-10-2021<br />7:00pm</p>

                <a href="#" class="btn btn-primary">BOOK NOW!</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
              <img class="card-img-top" src="images/shankar.jpg" alt="Card image" />
              <div class="card-body">
                <h4 class="card-title">Shankar Mahadevan</h4>
                <p class="card-text">Manpho Convention Centre<br/>30-12-21<br />8:00pm</p>
                <a href="#" class="btn btn-primary">BOOK NOW!</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
              <img
                class="card-img-top"
                src="images/UshaUthup1200.jpg"
                alt="Card image"
              />
              <div class="card-body">
                <h4 class="card-title">Usha Uthup</h4>
                <p class="card-text">Manpho Convention Centre<br/>27-10-21<br />7:00pm</p>
                <a href="#" class="btn btn-primary">BOOK NOW!</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
              <img class="card-img-top" src="images/shirley.jpg" alt="Card image" />
              <div class="card-body">
                <h4 class="card-title">Shirley Setia</h4>
                <p class="card-text">Palace Ground<br/>20-11-21<br />7:00pm</p>
                <a href="#" class="btn btn-primary">BOOK NOW!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br/>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
              <img class="card-img-top" src="images/yellow_5e4fc53466b7a.jpg" alt="Card image" />
              <div class="card-body">
                <h4 class="card-title">The Yellow Diary</h4>
                <p class="card-text">Palace Ground<br/>2-09-2021<br />8:00pm</p>

                <a href="#" class="btn btn-primary">BOOK NOW!</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
              <img class="card-img-top" src="images/arijit-singh-1200.jpg" alt="Card image" />
              <div class="card-body">
                <h4 class="card-title">Arijit Singh</h4>
                <p class="card-text">Manpho Convention Centre<br/>2-11-21<br />8:00pm</p>
                <a href="#" class="btn btn-primary">BOOK NOW!</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
              <img class="card-img-top" src="images/sanjith.jpg" alt="Card image" />
              <div class="card-body">
                <h4 class="card-title">Sanjith Hegde</h4>
                <p class="card-text">SkyDeck<br/>15-09-21<br />8:00pm</p>
                <a href="#" class="btn btn-primary">BOOK NOW!</a>
              </div>
            </div>
          </div>
      

          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
              <img class="card-img-top" src="images/swarathma.jpg" alt="Card image" />
              <div class="card-body">
                <h4 class="card-title">Swarathma</h4>
                <p class="card-text">SkyDeck<br/>9-10-21<br />5:00pm</p>
                <a href="#" class="btn btn-primary">BOOK NOW!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br/>
      

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
              <img class="card-img-top" src="images/udit.jpg" alt="Card image" />
              <div class="card-body">
                <h4 class="card-title">Udit Narayan</h4>
                <p class="card-text">Manpho Convention Centre<br/>21-10-2021<br />8:00pm</p>

                <a href="#" class="btn btn-primary">BOOK NOW!</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
              <img class="card-img-top" src="images/raghud.jpg" alt="Card image" />
              <div class="card-body">
                <h4 class="card-title">Raghu Dixit</h4>
                <p class="card-text">SkyDeck<br/>5-10-21<br />8:00pm</p>
                <a href="#" class="btn btn-primary">BOOK NOW!</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
              <img class="card-img-top" src="images/shreya-2.jpg" alt="Card image" />
              <div class="card-body">
                <h4 class="card-title">Shreya Ghoshal</h4>
                <p class="card-text">Manpho Convention Centre<br/>20-12-2021<br />8:00pm</p>

                <a href="#" class="btn btn-primary">BOOK NOW!</a>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
              <img class="card-img-top" src="images/sangeetha.jpg" alt="Card image" />
              <div class="card-body">
                <h4 class="card-title">Sangeetha Kati</h4>
                <p class="card-text">Manpho Convention Centre<br/>15-09-21<br />8:00pm</p>
                <a href="#" class="btn btn-primary">BOOK NOW!</a>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      
    
</div>
</body>
</html>

<div id="dataModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Book your tickets here</h4>
      </div>


    </div>

  </div>

</div>
