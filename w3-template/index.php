<?php
session_start();
include_once "./User.php";
if (!$_SESSION['logged']) {
    header("location: login.php");
}
$users = User::all();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>W3.CSS Template</title>
    <script src="https://kit.fontawesome.com/48696247d6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./js/index.js">
    <link rel="stylesheet" href="./style/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <!-- Phan header -->
    <div class="header" id="home">
        <div class="header-logo">
            <a href="#">L O G O</a>
        </div>

        <div class="header-nav navbar navbar-expand-lg navbar-light bg-light">
            <ul>
                <li><a href="#about">ABOUT</a></li>

                <li><a href="#team">
                        <i class="fa-solid fa-user"></i>
                        TEAM
                    </a>
                </li>

                <li><a href="#work">
                        <i class="fa-solid fa-grid-5"></i>
                        WORK
                    </a>
                </li>

                <li><a href="#pricing">
                        <i class="fa-solid fa-dollar-sign"></i>
                        PRICING
                    </a>
                </li>

                <li><a href="#contact">
                        <i class="fa-solid fa-envelope"></i>
                        CONTACT
                    </a>
                </li>
            </ul>
        </div>

        <div class="nav_bar-button navbar-toggler-icon">
            <i class="fa-solid fa-bars"></i>
        </div>

        <div class="header-nav-mobile">
            <ul>

                <li class="button-close header-nav-link">
                    <a href="#">
                        <i class="fa-solid fa-xmark"></i>
                        Close
                    </a>
                </li>


                <li class="header-nav-link"><a href="#about">
                        ABOUT
                    </a>
                </li>

                <li class="header-nav-link"><a href="#team">
                        TEAM
                    </a>
                </li>

                <li class="header-nav-link"><a href="#work">
                        WORK
                    </a>
                </li>

                <li class="header-nav-link"><a href="#pricing">
                        PRICING
                    </a>
                </li>

                <li class="header-nav-link"><a href="#contact">
                        CONTACT
                    </a>
                </li>
            </ul>
        </div>
    </div>



    <!-- phan content -->
    <div class="content">
        <div class="content-img" id="img">
            <img src="./image/1615532796_842680_1615532840_noticia_normal_recorte1.jpg">
        </div>

        <div class="content-word">
            <span>Start something that matters</span>
            <p>Stop wasting valuable time with projects that just isn't you</p>
            <a href="#about">Learn more and start today</a>
        </div>

        <div class="content-logo">
            <i class="fa-brands fa-facebook-square"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-snapchat-square"></i>
            <i class="fa-brands fa-pinterest"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-linkedin"></i>
        </div>
    </div>

    <!-- phan about -->

    <div class="about" id="about">
        <div class="about-title">
            <h1>ABOUT THE COMPANY</h1>
            <p>Key features of our company</p>
        </div>

        <div class="about-feature">
            <div class="key-feature">
                <i class="fa-solid fa-desktop"></i>
                <p>Responsive</p>
                <p class="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>

            <div class="key-feature">
                <i class="fa-solid fa-heart"></i>
                <p>Passion</p>
                <p class="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>

            <div class="key-feature">
                <i class="fa-solid fa-gem"></i>
                <p>Design</p>
                <p class="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>

            <div class="key-feature">
                <i class="fa-solid fa-gear"></i>
                <p>Support</p>
                <p class="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
        </div>
    </div>

    <!-- phan design -->
    <div class="design">
        <div class="design-content">
            <h7>We know design.</h7><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
                tempor incididunt ut labore et dolore.</p><br>
            <a href="#work"><i class="fa-solid fa-grid">View Our Works</i></a>
        </div>

        <div class="design-img">
            <img src="./image/phone_buildings.jpg" alt="">
        </div>
    </div>

    <!-- phan the team -->

    <div class="team-container" id="team">
        <div class="team-content">
            <h3>THE TEAM</h3>
            <p>The one who runs this company</p>
        </div>

        <div class="team-person">
            <div class="team-member">
                <img src="./image/team2.jpg">
                <h3>John Doe</h3>
                <p class="p-opacity">CEO & Founder</p><br>
                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                <button class="team-member-button"><i class="fa-solid fa-envelope"></i> CONTACT</button>
            </div>

            <div class="team-member">
                <img src="./image/team1.jpg">
                <h3>Anja Doe</h3>
                <p class="p-opacity">CEO & Founder</p><br>
                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                <button class="team-member-button"><i class="fa-solid fa-envelope"></i> CONTACT</button>
            </div>

            <div class="team-member">
                <img src="./image/team3.jpg">
                <h3>Mike Ross</h3>
                <p class="p-opacity">CEO & Founder</p><br>
                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                <button class="team-member-button"><i class="fa-solid fa-envelope"></i> CONTACT</button>
            </div>

            <div class="team-member">
                <img src="./image/team4.jpg">
                <h3>Dan Star</h3>
                <p class="p-opacity">CEO & Founder</p><br>
                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                <button class="team-member-button"><i class="fa-solid fa-envelope"></i> CONTACT</button>
            </div>
        </div>
    </div>

    <!-- phan number -->
    <div class="number-container">
        <div class="number-block">
            <span>14+</span>
            <p class="p1">Partners</p>
        </div>

        <div class="number-block">
            <span>55+</span>
            <p>Projects Done</p>
        </div>

        <div class="number-block">
            <span>89+</span>
            <p>Happy Clients</p>
        </div>

        <div class="number-block">
            <span>150+</span>
            <p class="p1">Meetings</p>
        </div>
    </div>

    <!-- Phan work -->
    <div id="work" class="work-container">

        <div class="work-content">
            <h3>OUR WORK</h3>
            <p>What we've done for people</p>
        </div>

        <div class="work-image row1">
            <img src="./image/tech_mic.jpg" alt="">

            <img src="./image/tech_phone.jpg" alt="">

            <img src="./image/tech_drone.jpg" alt="">

            <img src="./image/tech_sound.jpg" alt="">

        </div>

        <div class="work-image row2">
            <img src="./image/tech_tablet.jpg" alt="">

            <img src="./image/tech_camera.jpg" alt="">

            <img src="./image/tech_typewriter.jpg" alt="">

            <img src="./image/tech_tableturner.jpg" alt="">
        </div>
    </div>

    <!-- Phan skills -->

    <div class="skill-container">

        <div class="skill-content">
            <h3>Our Skills.</h3><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
                tempor incididunt ut labore et dolore.</p><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
                tempor incididunt ut labore et dolore.</p>

        </div>

        <div class="skill-chart">

            <i class="fa-solid fa-camera"> Photography</i>
            <div class="chart-container">
                <div class="skill Photo">90%</div>
            </div>

            <i class="fa-solid fa-desktop"> Web Design</i>
            <div class="chart-container">
                <div class="skill desktop">85%</div>
            </div>

            <i class="fa-solid fa-image"> Photoshop</i>
            <div class="chart-container">
                <div class="skill image">75%</div>
            </div>

        </div>
    </div>

    <!-- Phan PRICING -->

    <div class="pricing-container" id="pricing">
        <div class="pricing-content">
            <h3 style="text-align:center">PRICING</h3>

            <p style="text-align:center">Choose a pricing plan that fits your needs.</p>

            <div class="table-pricing">
                <div class="columns-content">
                    <div class="columns">
                        <ul class="pricing-table">
                            <li class="header-price">Basic</li>
                            <li><strong>10GB</strong> Storage</li>
                            <li><strong>10</strong> Emails</li>
                            <li><strong>10</strong> Domains</li>
                            <li><strong>Endless</strong> Support</li>
                            <li class="price">
                                <h2 class="wide">$ 10</h2><br>
                                <span class="span-opacity">per month</span>
                            </li>
                            <li class="grey"><a href="#" class="button">Sign Up</a></li>
                        </ul>
                    </div>
                </div>

                <div class="columns-content">
                    <div class="columns">
                        <ul class="pricing-table">
                            <li class="header-middle">Pro</li>
                            <li><strong>25GB</strong> Storage</li>
                            <li><strong>25</strong> Emails</li>
                            <li><strong>25</strong> Domains</li>
                            <li><strong>Endless</strong> Support</li>
                            <li class="price">
                                <h2 class="wide">$ 25</h2><br>
                                <span class="span-opacity">per month</span>
                            </li>
                            <li class="grey"><a href="#" class="button">Sign Up</a></li>
                        </ul>
                    </div>
                </div>

                <div class="columns-content">
                    <div class="columns">
                        <ul class="pricing-table">
                            <li class="header-price">Premium</li>
                            <li><strong>50GB</strong> Storage</li>
                            <li><strong>50</strong> Emails</li>
                            <li><strong>50</strong> Domains</li>
                            <li><strong>Endless</strong> Support</li>
                            <li class="price">
                                <h2 class="wide">$ 50</h2><br>
                                <span class="span-opacity">per month</span>
                            </li>
                            <li class="grey"><a href="#" class="button">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Phan CONTACT -->

    <div class="contact-container" id="contact">
        <div class="contact-content">
            <h3>CONTACT</h3>
            <p>Lets get in touch. Send us a message:</p>
        </div>

        <div class="contact-logo">
            <p>
                <i class="fa-solid fa-location-dot"></i>
                Chicago, US
            </p>

            <p>
                <i class="fa-solid fa-phone"></i>
                Phone: +00 151515
            </p>

            <p>
                <i class="fa-solid fa-envelope"></i>
                Email: mail@mail.com
            </p>
        </div>

        <div class="contact-form">
            <form action="./index.html" target="_blank" name="myForm" method="post">
                <p>
                    <input class="contact-text" type="text" placeholder="Name" required="" name="fname" id="fname">
                </p>

                <p>
                    <input class="contact-text" type="text" placeholder="Email" required="" name="femail" id="femail">
                </p>

                <p>
                    <input class="contact-text" type="text" placeholder="Subject" required="" name="fsubject" id="fsubject">
                </p>

                <p>
                    <input class="contact-text" type="text" placeholder="Message" required="" name="fmessage" id="fmessage">
                </p>

                <p>
                    <button class="contact-button" type="button" onclick="validateForm()">
                        <i class="fa fa-paper-plane"></i> SEND MESSAGE
                    </button>
                </p>
            </form>
        </div>

        <div class="contact-image">
            <img src="./image/map.jpg" alt="">
        </div>
        <div class="curd">

            <div class="container" style="min-height: 450px;">
                <div>
                    <h1 style="text-align:center;"> User list </h1>

                </div>
                <?php if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <p>
                            <?php echo ($_SESSION['message']);
                            unset($_SESSION['message']) ?>
                        </p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>
                <a href="./create.php" class="btn btn-primary" style="text-align:center;">Create</a> <br> <br>

                <div>
                    <?php if (count($users) > 0) { ?>
                        <table class="table table-bordered border-info" id="datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $key => $user) { ?>
                                    <tr class='user'>
                                        <th scope="row"><?= $key + 1 ?></th>
                                        <td><?php echo $user['name'] ?></td>
                                        <td><?php echo $user['email'] ?></td>
                                        <td class="d-flex">
                                            <a href="./show.php?id=<?= $user['id'] ?>" class="btn btn-info"> Show </a>
                                            <a href="./edit.php?id=<?= $user['id'] ?>" class="btn btn-warning ms-2"> Edit </a>
                                            <form action="./delete.php" method="post" id="formDelete-<?= $user['id'] ?>">
                                                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                                <a type="button" method="POST" class="btn btn-danger btn-delete text-center ms-2 deleteUser" id="<?= $user['id'] ?>"> Delete </a>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table><br>
                    <?php } else { ?>
                        <h2>No Data.</h2>
                    <?php } ?>

                    <nav aria-label="Page navigation example">

                    </nav>

                    <div id="index-table"></div>
                </div>
                <form>
                    <a href="./Logout.php" class="btn btn-danger">log out</a> <br>
                </form>
            </div>

            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
            <script type="text/javascript" src="./pagination/jquery.simplePagination.js"></script>
            <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>


            <script>
                $(document).ready(function() {


                    $(document).on('click', '.deleteUser', function() {
                        var id = $(this).attr('id');


                        let user = $(this);

                        Swal.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $.ajax({
                                    url: 'delete.php',
                                    type: 'POST',
                                    data: {
                                        id: id
                                    },
                                    success: function(data) {
                                        swal.fire({
                                            title: 'Success',
                                            icon: 'success',
                                            text: 'Deleted User Successfully',
                                        }).then(() => {
                                            user.closest('tr').remove();
                                        })
                                    }
                                })
                            }
                        })
                    })

                    $('#datatable').DataTable({
                        lengthMenu: [
                            [3, 5, 10, -1],
                            [3, 5, 20, 'All'],
                        ],
                    })
                })
            </script>
        </div>

    </div>

</body>

<!-- Phan Footer -->
<footer class="footer-container">

    <a href="#img" class="footer-button">
        <i class="fa fa-arrow-up"></i>
        To the top
    </a>

    <div class="footer-icon">

        <i class="fa fa-facebook-official"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-snapchat"></i>
        <i class="fa fa-pinterest-p"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-linkedin"></i>

    </div>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-css">w3.css</a></p>
</footer>

<script src="./js/index.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



</html>