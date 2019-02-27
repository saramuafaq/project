<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Welcome !!!</title>
</head>
<body>

<div id="main-content">
        <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
            <div id="title">
                <i class="fas fa-home"></i>
                <span style="margin-left:auto;">
                      <!-- Trigger the modal with a button -->
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Login</a>
                    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter2">Sign Up</a>
         
                <!-- Modal -->
                <!-- LOGIN -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLongTitle">Please Enter These Informations To Login </h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="login.php">
                                <label for="email">Your Email</label>
                                <input type="email" name="email" placeholder="Ex: m@gmail.com" required/>
                                <label for="password">Password</label>
                                <input type="password" name="password" placeholder="********" required/>
                            
                        </div>
						<input type="submit" name="submit" class="btn btn-success">
                        </div>
                    </div></form>
                    </div>
                </div>


                 <!-- Modal -->
                <!-- SIGN UP -->
                <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLongTitle">Please Enter These Informations To Sign Up </h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form action="reg.php" method="POST">
                                    <label for="name">Full Name</label>
                                    <input type="text" name="name" id="name" placeholder="Ex: Mark" required/>
                                    <label for="email">Your Email</label>
                                    <input type="email"  name="email" placeholder="hey@gmail.com" required/>
                                    <label for="password2">Create A Password</label>
                                    <input type="password" id="password" name="password" placeholder="********" required/>
                                    <label for="insuringpassword">Rewrite The Password</label>
                                    <input type="password" id="confirm" name="confirm" placeholder="********" required/>
                                    <label for="gender">Gender</label>
                                    <select name="gender">
                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                    </select>
									<label for="phone">Phone Number</label>
                                    <input type="number" name="phone" id="phone"  required/>
                               
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <input type="submit" class="btn btn-success" name="reg" value="Sign Up">
                             </form></div>
                        </div>
                        </div>
                    </div>

                </span>
            </div>


            <span class="text-muted">
                <a href="index.html">HOME</a>
                <a href="subjects.html">Subjects</a>
                <a href="#newests">News/Newest</a>
                <a href="comments.html">About Us</a>
                <a href="categories.html">Contact Us</a>

                <a href="profile.html">My Profile</a>  
                <a href="#" class="disabled-link">Chat</a>    
                <!-- wabka disable bi u tanha ka login bu user aka, awja btwani access y profile akay bka. -->

                <a href="#" >Live <span id="liveNote"> *</span></a>
            </span>
            </div>

        </div>
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler h" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span id="liveNote2"> *</span>
        </button>
        <h1 style="color: whoverable-divte;" id="logo">Class-S Logo</h1>
        </nav>
        </div>
    </div>

    <div id="welcome-parent">
        <div id="welcome-video-container">
            <video id="welcome-video" autoplay loop muted>
                <source id="mp4" src="media/Videos/WelcomeSako.mp4" type="video/mp4">
                <p>Your browser doesn't support it !!! </p>
            </video>
        </div>
        <!-- <div id="video-opacity"></div> -->
        <p id="welcome-text"></p>
    </div>
    



    <!-- SUBJECTS Part -->
    <section id="subject-section">

        <h1>subjects</h1>
        <div id="subject-items">
            <div class="subject-divs">

                <a href="subjects.html" class="img-containers">
                    <img src="media/Images/laptop.jpg">
                    <div class="opacityDiv">
                        <h2>Procedure Programming</h2>
                    </div>
                </a>

                <a href="subjects.html" class="img-containers">
                    <img src="media/Images/oop.jpeg">
                    <div class="opacityDiv">
                        <h2>OOP</h2>
                    </div>
                </a>

                <a href="subjects-2.html" class="img-containers">
                    <img src="media/Images/AI.jpg">
                    <div class="opacityDiv">
                        <h2>Artificial Intillegence</h2>
                    </div> 
                </a>
                
            </div>

            <div class="subject-divs">
                <a href="subjects-2.html" class="img-containers">
                    <img src="media/Images/books.jpg">
                    <div class="opacityDiv">
                        <h2>Library</h2>
                    </div> 
                </a>

                <a href="subjects-2.html" class="img-containers">
                    <img src="media/Images/contact.jpg">
                    <div class="opacityDiv">
                        <h2>Operating System</h2>
                    </div> 
                </a>

                <a href="subjects-2.html" class="img-containers">
                    <img src="media/Images/compute.jpg">
                    <div class="opacityDiv">
                        <h2>Computer Information</h2>
                    </div> 
                </a>
            </div>

            <div class="subject-divs">
                <a href="subjects-2.html" class="img-containers">
                   <img src="media/Images/graphic.jpeg">
                   <div class="opacityDiv">
                       <h2>Graphic</h2>
                   </div>
                </a>

                <a href="subjects-2.html" class="img-containers">
                    <img src="media/Images/DBMS.jpg">
                    <div class="opacityDiv">
                        <h2>DBMS</h2>
                    </div> 
                </a>

                <a href="subjects-2.html" class="img-containers">
                    <img src="media/Images/datasequrity.jpg">
                    <div class="opacityDiv">
                        <h2>Data Security</h2>
                    </div> 
                </a>
            </div>

            <div id="for-prepend-new-items"></div>
            <button class="fas fa-arrow-down" ></button>
        </div> <!-- #subject-items -->

    </section> <!-- #subject-section -->



    <!----------------------------- Newest Part -------------------------------------->


    <div id="parallax1">

        <div id="newests">
    
            <div id="left-newest">
                <div class="card bg-light">
                    <div class="card-header">
                        <h3>News</h3>
                    </div>
                    <div class="card-body">
                      <div class="card-text newest-items">
                      
                        <div class="news-single-items">
                            <a href="#"><img src="media/Images/graphic.jpeg" /></a>
                            <a href="#" class="texts">Here is some news about Graphics that controls the life.</a>
                            <span id="time-of-posted-1">7-4-2019/ 10:00 AM</span>
                            <span id="posted-by-TechEye-1"><a href="#">TechEye</a></span>
                        </div>
    
                        <div class="news-single-items">
                            <a href="#"><img src="media/Images/datasequrity.jpg" /></a>
                            <a href="#" class="texts">amus vero sed repudiandae possimus harum temporibus, ipsum perspic</a>
                            <span id="time-of-posted-1">7-4-2019/ 10:00 AM</span>
                            <span id="posted-by-TechEye-1"><a href="#">TechEye</a></span>
                        </div>
    
                        <div class="news-single-items">
                            <a href="#"><img src="media/Images/java.png" /></a>
                            <a href="#" class="texts">Here is some news about Graphics that controls the life.</a>
                            <span id="time-of-posted-1">7-4-2019/ 10:00 AM</span>
                            <span id="posted-by-TechEye-1"><a href="#">TechEye</a></span>
                        </div>
    
                        <div class="news-single-items">
                            <a href="#"><img src="media/Images/laptop.jpg" /></a>
                            <a href="#" class="texts">Here is some news about Graphics that controls the life.</a>
                            <span id="time-of-posted-1">7-4-2019/ 10:00 AM</span>
                            <span id="posted-by-TechEye-1"><a href="#">TechEye</a></span>
                        </div>
    
                        <div class="news-single-items">
                            <a href="#"><img src="media/Images/oop.jpeg" /></a>
                            <a href="#" class="texts">Here is some news about Graphics that controls the life.</a>
                            <span id="time-of-posted-1">7-4-2019/ 10:00 AM</span>
                            <span id="posted-by-TechEye-1"><a href="#">TechEye</a></span>
                        </div>
    
                        <div class="news-single-items">
                            <a href="#"><img src="media/Images/web.png" /></a>
                            <a href="#" class="texts">Here is some news about Graphics that controls the life.</a>
                            <span id="time-of-posted-1">7-4-2019/ 10:00 AM</span>
                            <span id="posted-by-TechEye-1"><a href="#">TechEye</a></span>
                        </div>
    
    
                      </div>
                    </div>
                  </div>
            </div> <!-- left-newest -->
    
    
    
            <div id="right-newest">
                <div class="card bg-light">
                        <div class="card-header">
                            <button class="btn btn-sm btn-secondary mr-2">Most Viewed</button>
                            <button class="btn btn-sm btn-secondary">Newest</button>
                        </div>
                    <div class="card-body">
                        <div class="card-text newest-items">
                            
                            <div class="news-single-items">
                                <a href="#"><img src="media/Images/graphic.jpeg" /></a>
                                <a href="#" class="texts">Here is some news about Graphics that controls the life.</a>
                                <span id="time-of-posted-1">7-4-2019/ 10:00 AM</span>
                            </div>
                            
                            <div class="news-single-items">
                                <a href="#"><img src="media/Images/graphic.jpeg" /></a>
                                <a href="#" class="texts">Here is some news about Graphics that controls the life.</a>
                                <span id="time-of-posted-1">7-4-2019/ 10:00 AM</span>
                            </div>
                            
                            <div class="news-single-items">
                                <a href="#"><img src="media/Images/graphic.jpeg" /></a>
                                <a href="#" class="texts">Here is some news about Graphics that controls the life.</a>
                                <span id="time-of-posted-1">7-4-2019/ 10:00 AM</span>
                            </div>
                            
                            <div class="news-single-items">
                                <a href="#"><img src="media/Images/graphic.jpeg" /></a>
                                <a href="#" class="texts">Here is some news about Graphics that controls the life.</a>
                                <span id="time-of-posted-1">7-4-2019/ 10:00 AM</span>
                            </div>
                            
                            <div class="news-single-items">
                                <a href="#"><img src="media/Images/graphic.jpeg" /></a>
                                <a href="#" class="texts">Here is some news about Graphics that controls the life.</a>
                                <span id="time-of-posted-1">7-4-2019/ 10:00 AM</span>
                            </div>
                            
                            <div class="news-single-items">
                                <a href="#"><img src="media/Images/graphic.jpeg" /></a>
                                <a href="#" class="texts">Here is some news about Graphics that controls the life.</a>
                                <span id="time-of-posted-1">7-4-2019/ 10:00 AM</span>
                            </div>
                            
                            <div class="news-single-items">
                                <a href="#"><img src="media/Images/graphic.jpeg" /></a>
                                <a href="#" class="texts">Here is some news about Graphics that controls the life.</a>
                                <span id="time-of-posted-1">7-4-2019/ 10:00 AM</span>
                            </div>
                            
                            <div class="news-single-items">
                                <a href="#"><img src="media/Images/graphic.jpeg" /></a>
                                <a href="#" class="texts">Here is some news about Graphics that controls the life.</a>
                                <span id="time-of-posted-1">7-4-2019/ 10:00 AM</span>
                            </div>
                            
                            <div class="news-single-items">
                                <a href="#"><img src="media/Images/graphic.jpeg" /></a>
                                <a href="#" class="texts">Here is some news about Graphics that controls the life.</a>
                                <span id="time-of-posted-1">7-4-2019/ 10:00 AM</span>
                            </div>
                            
                            <div class="news-single-items">
                                <a href="#"><img src="media/Images/graphic.jpeg" /></a>
                                <a href="#" class="texts">Here is some news about Graphics that controls the life.</a>
                                <span id="time-of-posted-1">7-4-2019/ 10:00 AM</span>
                            </div>
    
                        </div>
                    </div>
                </div>
             </div>
        </div>  <!-- #newests -->
        <br><br>
        
        <!-- End Of Newest -->
    
    </div> 
        <!-- End of #parallax1 -->







    <section id="contact-us">
        <div id="contact-container">

            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3221.993213367147!2d44.022290914759836!3d36.14237851215114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40073b4bd1f73c9d%3A0x27cdaacdd65aaa8a!2sCollege+of+Engineering+-+Salahaddin+University-Erbil!5e0!3m2!1sen!2siq!4v1540396743874" frameborder="0" allowfullscreen></iframe>
            </div>

            <div id="form">
                <form>
                    <h2>Tell Us What Do You Think ? </h2>
                    <div class="feedBackins">
                    <h3>Your Name</h3>
                    <input type="text" id="name" placeholder="Name ...">
                    </div>
                    <div class="feedBackins">
                    <h3>Your Email</h3>
                    <input type="email" id="email" placeholder="Email ...">
                    </div>
                    <div class="feedBackins">
                    <h3>Your Comment</h3>
                    <textarea id="comment" placeholder="Your Comment ..."></textarea>
                    </div>
                    <button type="button" id="send">Send</button>
                </form>
             </div>
        </div>
    </section> <!-- #contact-us -->
    

    <footer id="footer"> @2018 Class-S ALL RIGHTS RESERVED. </footer>


</div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- <script src="typed.js"></script> -->
    <script src="script.js"></script>



<script>

$("#subject-items button").on("click",()=>{
    console.log("hi");
    $("#for-prepend-new-items").prepend(`<div class="subject-divs">

<a href="subjects.html" class="img-containers">
    <img src="media/Images/laptop.jpg">
    <div class="opacityDiv">
        <h2>Procedure Programming</h2>
    </div>
</a>

<a href="subjects.html" class="img-containers">
    <img src="media/Images/oop.jpeg">
    <div class="opacityDiv">
        <h2>OOP</h2>
    </div>
</a>

<a href="subjects-2.html" class="img-containers">
    <img src="media/Images/AI.jpg">
    <div class="opacityDiv">
        <h2>Artificial Intillegence</h2>
    </div> 
</a>

</div>

<div class="subject-divs">
<a href="subjects-2.html" class="img-containers">
    <img src="media/Images/books.jpg">
    <div class="opacityDiv">
        <h2>Library</h2>
    </div> 
</a>

<a href="subjects-2.html" class="img-containers">
    <img src="media/Images/contact.jpg">
    <div class="opacityDiv">
        <h2>Operating System</h2>
    </div> 
</a>

<a href="subjects-2.html" class="img-containers">
    <img src="media/Images/compute.jpg">
    <div class="opacityDiv">
        <h2>Computer Information</h2>
    </div> 
</a>
</div>`);
});

</script>




</body>
</html>