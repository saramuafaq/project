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
                            <form>
                                <label for="email">Your Email</label>
                                <input type="email" placeholder="Ex: m@gmail.com" required/>
                                <label for="password">Password</label>
                                <input type="password" placeholder="********" required/>
                            </form>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-success">Login</button>
                        </div>
                    </div>
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
                                <form>
                                    <label for="name">First Name</label>
                                    <input type="text" id="name" placeholder="Ex: Mark" required/>
                                    <label for="name">Last Name</label>
                                    <input type="text" id="name" placeholder="Ex: Zuckerberg" required/>
                                    <label for="email2">Your Email</label>
                                    <input type="email" form="email2" placeholder="hey@gmail.com" required/>
                                    <label for="password2">Create A Password</label>
                                    <input type="password" id="password2" placeholder="********" required/>
                                    <label for="insuringpassword">Rewrite The Password</label>
                                    <input type="password" id="insuringpassword" placeholder="********" required/>
                                    <label for="birthday">Birthday</label>
                                    <input type="date" id="birthday" />
                                    <label for="gender">Gender</label>
                                    <select>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </form>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-success">Sign Up</button>
                            </div>
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

                <a href="#" class="disabled-link">My Profile</a>  
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


<div class="container-fluid">

    <div class="row">
        <!-- List Of Subjects -->
        <div class="col-md-2" id="list-of-subjects-in-audio-page">
                <h2>list of subjects</h2>
                <div id="left-part-subjects">
                    <a href="subjects-2.html">OOP</a>
                    <a href="subjects-2.html">Procedure Programming</a>
                    <a href="subjects.html">DBMS</a>
                    <a href="subjects.html">Artificial Intelligence</a>
                    <a href="subjects.html">Computer Graphics</a>
                    <a href="subjects.html">Compiler</a>
                    <a href="subjects.html">Computational Theory</a>
                    <a href="subjects.html">Data Structures</a>
                    <a href="subjects.html">Compuet Networks</a>
                    <a href="subjects.html">Operating Systems</a>
                    <a href="subjects.html">Real Time System</a>
                    <a href="subjects.html">Data Security</a>
                    <a href="subjects.html">Image Processing</a>
                    <a href="subjects.html">Academic Debate</a>
                    <a href="subjects.html">Electrical Engineering</a>
                    <a href="subjects.html">Software engineeing</a>
                    <a href="subjects.html">Engineering Analysis</a>
                    <a href="subjects.html">Computer Graphics</a>
                    <a href="subjects.html">Compiler</a>
                    <a href="subjects.html">Computational Theory</a>
                    <a href="subjects.html">Data Structures</a>
                    <a href="subjects.html">Compuet Networks</a>
                    <a href="subjects.html">Operating Systems</a>
                    <a href="subjects.html">Real Time System</a>
                    <a href="subjects.html">Data Security</a>
                    <a href="subjects.html">Image Processing</a>
                    <a href="subjects.html">Academic Debate</a>
                    <a href="subjects.html">Electrical Engineering</a>
                    <a href="subjects.html">Software engineeing</a>
                    <a href="subjects.html">Engineering Analysis</a>
                    <a href="subjects.html">Computer Graphics</a>
                    <a href="subjects.html">Compiler</a>
                    <a href="subjects.html">Computational Theory</a>
                    <a href="subjects.html">Data Structures</a>
                    <a href="subjects.html">Compuet Networks</a>
                    <a href="subjects.html">Operating Systems</a>
                    <a href="subjects.html">Real Time System</a>
                    <a href="subjects.html">Data Security</a>
                    <a href="subjects.html">Image Processing</a>
                    <a href="subjects.html">Academic Debate</a>
                    <a href="subjects.html">Electrical Engineering</a>
                    <a href="subjects.html">Software engineeing</a>
                    <a href="subjects.html">Engineering Analysis</a>

                </div>
        </div>

        <div id="audio-table" class="col-md-10">
            <table class="table table-hover bg-light">
                <thead>
                    <tr>
                        <th scope="row" colspan="5" class="table-secondary">Basics On Java Programming</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    

                    
                    <tr>
                        <th scope="row" colspan="5" class="table-secondary">Variables Of Java Programming</th>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>



                    <tr>
                        <th scope="row" colspan="5" class="table-secondary">Loops In Java Programming</th>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>



                    <tr>
                        <th scope="row" colspan="5" class="table-secondary">Basics On Java Programming</th>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>

                    <tr>
                        <th scope="row" colspan="5" class="table-secondary">Basics On Java Programming</th>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-volume-up"></i></th>
                        <td>Introduction to Programming</td>
                        <td>Mark Zuckerberg</td>
                        <td>9 - 12 - 2017</td>
                        <td><a href="#" class="btn btn-success">Download</a></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

</div><!-- .row -->

</div> <!-- .container-fluid -->
<footer id="footer"> @2018 Class-S ALL RIGHTS RESERVED. </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="typed.js"></script>
    <script src="script.js"></script>
</body>
</html>