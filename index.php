<?php
    /* Set locale to English US */
    echo setlocale(LC_ALL,"US");

    // determine wich language to use
    $site_language = ( ((isset($_SESSION['page_language'])) && ($_SESSION['page_language'] == 'en')) || (!isset($_SESSION['page_language'])) )? 'en' : 'gr';
    require_once('language/'.$site_language."/language.php");

    // set my projects array
    $projects_arr = array(
        array('tittle' => 'Project 1', 'details' => 'Details 1', 'image' => 'project_image.webp'),
        array('tittle' => 'Project 2', 'details' => 'Details 2', 'image' => 'project_image.webp'),
        array('tittle' => 'Project 3', 'details' => 'Details 3', 'image' => 'project_image.webp'),
        array('tittle' => 'Project 4', 'details' => 'Details 4', 'image' => 'project_image.webp'),
        array('tittle' => 'Project 5', 'details' => 'Details 5', 'image' => 'project_image.webp'),
    );
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $lang['meta']['title']; ?></title>

        <!-- css -->
		<link href="assets/css/bootstrap_5.2.min.css" type="text/css" rel="stylesheet">
		<link href="assets/css/style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid" data-layout="container">

            <!-- navbar burger icon -->
            <img src="assets/img/burger.webp" alt="burger menu icon" width="30" height="30" class="cursor-pointer d-block d-lg-none position-absolute right-0 mt-3 me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMobileMenu">

            <!-- navbar + mobile offcanvas menu -->
            <div class="container fixed-top" id="navbar_container">

                <!-- mobile offcanvas menu -->
                <div class="offcanvas offcanvas-start" id="offcanvasMobileMenu" tabindex="-1">

                    <!-- offcanvas header and close button -->
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title"><?php echo $lang['navbar']['menu']; ?></h5>
                        <button class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="menuButton" aria-labelledby="menuButton"></button>
                    </div>

                    <!-- offcanvas body contntets -->
                    <div class="offcanvas-body">
                        <div class="row g-3">
                            <!-- hero -->
                            <div class="col-12">
                                <a href="#hero" class="text-dark text-decoration-none"><?php echo $lang['navbar']['home']; ?></a>
                            </div>
                            
                            <!-- about -->
                            <div class="col-12">
                                <a href="#about" class="text-dark text-decoration-none"><?php echo $lang['navbar']['about']; ?></a>
                            </div>
                            
                            <!-- achievments -->
                            <div class="col-12">
                                <a href="#achievments" class="text-dark text-decoration-none"><?php echo $lang['navbar']['achievments']; ?></a>
                            </div>
                            
                            <!-- projects -->
                            <div class="col-12">
                                <a href="#projects" class="text-dark text-decoration-none"><?php echo $lang['navbar']['projects']; ?></a>
                            </div>
                            
                            <!-- contact -->
                            <div class="col-12">
                                <a href="#contact" class="text-dark text-decoration-none"><?php echo $lang['navbar']['contact']; ?></a>
                            </div>
                        </div>
                    </div>

                </div>
        
                <!-- navbar -->
                <nav class="navbar navbar-expand-lg d-none d-lg-block bg-nav py-4" id="desktop_navbar">
                    <ul class="navbar-nav flex-wrap justify-content-end gap-4">

                        <!-- hero -->
                        <li class="nav-item">
                            <a class="nav-link text-wrap text-white border-effect-orange" href="#hero"><?php echo $lang['navbar']['home']; ?></a>
                        </li>
                        
                        <!-- about -->
                        <li class="nav-item">
                            <a class="nav-link text-wrap text-white border-effect-orange" href="#about"><?php echo $lang['navbar']['about']; ?></a>
                        </li>
                        
                        <!-- achievments -->
                        <li class="nav-item">
                            <a class="nav-link text-wrap text-white border-effect-orange" href="#achievments"><?php echo $lang['navbar']['achievments']; ?></a>
                        </li>
                        
                        <!-- projects -->
                        <li class="nav-item">
                            <a class="nav-link text-wrap text-white border-effect-orange" href="#projects"><?php echo $lang['navbar']['projects']; ?></a>
                        </li>
                        
                        <!-- contact -->
                        <li class="nav-item">
                            <a class="nav-link text-wrap text-white border-effect-orange" href="#contact"><?php echo $lang['navbar']['contact']; ?></a>
                        </li>

                    </ul>
                </nav>

            </div>

            <!-- hero section -->
            <div class="row mb-5" id="hero">
                <div class="col-12 h-100vh bg-hero-portrait">
                    <div class="row position-relative top-25">
                        
                        <!-- hero title -->
                        <div class="col-12 mb-5">
                            <h1 class="text-white text-center"><?php echo $lang['hero']['title']; ?></h1>
                        </div>

                        <!-- hero subtitle (typed.js) -->
                        <div class="col-12 typed-height text-center mt-4">
                            <span class="text-items-typed-hero d-none"><?php echo $lang['hero']['subtitle_typed']; ?></span>
                            <h2 class="text-white text-typed-hero d-inline"></h2>
                        </div>

                    </div>
                </div>
            </div>

            <!-- about section -->
            <div class="container mb-5" id="about">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row g-3">

                            <!-- image + info + social + skills -->
                            <div class="col-12 col-md-5">
                                <div class="row g-4">

                                    <!-- image + info -->
                                    <div class="col-12">
                                        <div class="row">

                                            <!-- image -->
                                            <div class="col-12 col-md-4 text-center">
                                                <img src="assets/img/face_portrait.webp" alt="face_portrait" width="300" height="300" class="img-fluid">
                                            </div>

                                            <!-- info -->
                                            <div class="col-12 col-md-8">
                                                <div class="row gy-2">
                                                    <div class="col-12"><strong><?php echo $lang['about']['name']; ?>:</strong> <?php echo $lang['about']['name_value']; ?></div>
                                                    <div class="col-12"><strong><?php echo $lang['about']['age']; ?>:</strong> 29 <?php echo $lang['about']['yo']; ?></div>
                                                    <div class="col-12"><strong><?php echo $lang['about']['email']; ?>:</strong> <?php echo $lang['about']['email_value']; ?></div>
                                                    <div class="col-12"><strong><?php echo $lang['about']['phone']; ?>:</strong> <?php echo $lang['about']['phone_value']; ?></div>
                                                    <div class="col-12"><strong><?php echo $lang['about']['address']; ?>:</strong> <?php echo $lang['about']['address_value']; ?></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- social -->
                                    <div class="col-12 d-flex justify-content-center flex-nowrap gap-4">
                                        <!-- linked in -->
                                        <a href="https://www.linkedin.com/in/dimitris-bakalis-587a011a0/">
                                            <img width="35" height="35" class="img-fluid" src="assets/img/linkedin.webp" alt="linked in">
                                        </a>

                                        <!-- github -->
                                        <a href="https://github.com/dbakalis">
                                            <img width="35" height="35" class="img-fluid" src="assets/img/github.webp" alt="github">
                                        </a>

                                        <!-- instagram -->
                                        <a href="https://www.instagram.com/dimibaka/">
                                            <img width="35" height="35" class="img-fluid" src="assets/img/instagram.webp" alt="instagram">
                                        </a>
                                    </div>
                                    
                                    <!-- skills -->
                                    <div class="col-12">
                                        <div class="row g-3">

                                            <div class="col-12">
                                                <span>PHP</span> 
                                                <div class="progress progress-bar-php-header h-25px" role="progressbar" aria-label="Skill php" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-php bg-orange text-dark fs-18px"></div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <span>HTML / BOOTSTRAP</span> 
                                                <div class="progress progress-bar-html-header h-25px" role="progressbar" aria-label="Skill html" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-html bg-orange text-dark fs-18px"></div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <span>CSS</span> 
                                                <div class="progress progress-bar-css-header h-25px" role="progressbar" aria-label="Skill css" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-css bg-orange text-dark fs-18px"></div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <span>Javascript / Jquery</span> 
                                                <div class="progress progress-bar-js-header h-25px" role="progressbar" aria-label="Skill js" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-js bg-orange text-dark fs-18px"></div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <span>Laravel</span> 
                                                <div class="progress progress-bar-laravel-header h-25px" role="progressbar" aria-label="Skill laravel" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-laravel bg-orange text-dark fs-18px"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- about paragraph -->
                            <div class="col-12 col-md-7">
                                <h3 class="border-bottom-orange"><?php echo $lang['about']['about_title']; ?></h3>
                                <?php echo $lang['about']['about_text']; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- counters section -->
            <div class="row bg-counter-section py-5 mb-5">
                <div class="col-12">
                    <div class="container py-5">
                        <div class="row g-3">

                            <!-- completed projects -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="row g-3">
                                    <!-- icon -->
                                    <div class="col-12 text-center">
                                        <img src="assets/img/websites.webp" alt="websites projects icon" class="img-fluid" width="100" height="100">
                                    </div>
    
                                    <!-- counter (countup.js) -->
                                    <div class="col-12 text-center text-white">
                                        <h3><?php echo $lang['counters']['completed_projects']; ?></h3>
                                        <span class="fs-2 count-up" data-val="<?php echo $lang['counters']['completed_projects_num']; ?>"><?php echo $lang['counters']['completed_projects_num']; ?></span>
                                    </div>
                                </div>                            
                            </div>
                            
                            <!-- years of experience -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="row g-3">
                                    <!-- icon -->
                                    <div class="col-12 text-center">
                                        <img src="assets/img/calendar.webp" alt="websites projects icon" class="img-fluid" width="100" height="100">
                                    </div>
    
                                    <!-- counter (countup.js) -->
                                    <div class="col-12 text-center text-white">
                                        <h3><?php echo $lang['counters']['years_experience']; ?></h3>
                                        <span class="fs-2 count-up" data-val="<?php echo $lang['counters']['years_experience_num']; ?>"><?php echo $lang['counters']['years_experience_num']; ?></span>
                                    </div>
                                </div>                            
                            </div>
                            
                            <!-- technologies utilized -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="row g-3">
                                    <!-- icon -->
                                    <div class="col-12 text-center">
                                        <img src="assets/img/techs.webp" alt="websites projects icon" class="img-fluid" width="105" height="105">
                                    </div>
    
                                    <!-- counter (countup.js) -->
                                    <div class="col-12 text-center text-white">
                                        <h3><?php echo $lang['counters']['technologiess_used']; ?></h3>
                                        <span class="fs-2 count-up" data-val="<?php echo $lang['counters']['technologiess_used_num']; ?>"><?php echo $lang['counters']['technologiess_used_num']; ?></span>
                                    </div>
                                </div>                            
                            </div>
  
                            <!-- personal clients -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="row g-3">
                                    <!-- icon -->
                                    <div class="col-12 text-center">
                                        <img src="assets/img/client.webp" alt="websites projects icon" class="img-fluid" width="85" height="85">
                                    </div>
    
                                    <!-- counter (countup.js) -->
                                    <div class="col-12 text-center text-white">
                                        <h3><?php echo $lang['counters']['customers']; ?></h3>
                                        <span class="fs-2 count-up" data-val="<?php echo $lang['counters']['customers_num']; ?>"><?php echo $lang['counters']['customers_num']; ?></span>
                                    </div>
                                </div>                            
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- projects section -->
            <div class="container mb-5" id="projects">
                <div class="row g-5">

                    <?php // loop projects
                        if (!empty($projects_arr)){
                            foreach ($projects_arr as $project_index => $project) {
                    ?>
                                <!-- project <?php echo $i; ?> -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card">
                                        <!-- project image -->
                                        <img src="assets/img/<?php echo $project['image']; ?>" class="card-img-top" alt="project_image">

                                        <!-- project details -->
                                        <div class="card-body">
                                            <h5 class="card-title">#<?php echo $project_index; ?>. - <?php echo $project['title']; ?></h5>
                                            <p class="card-text"><?php echo $project['details']; ?></p>
                                        </div>

                                        <div class="card-footer">
                                            <a href="#" class="btn btn-primary"><?php echo $lang['projects']['visit']; ?></a>
                                        </div>
                                    </div>
                                </div>
                    <?php
                            }
                        }
                    ?>

                </div>
            </div>

            <!-- contact section -->
            <form action="" method="post">
                <div class="row bg-contact-section py-5">
                    <div class="col-12">
                        <div class="container">
                            <div class="row g-4">

                                <!-- header -->
                                <h3 class="text-center text-white"><?php echo $lang['contact']['title']; ?></h3>

                                <!-- email -->
                                <div class="col-12 col-md-6">
                                    <label for="contact-email" class="form-label text-white"><?php echo $lang['contact']['email']; ?></label>
                                    <input type="email" class="form-control" id="contact-email">
                                </div>

                                <!-- name -->
                                <div class="col-12 col-md-6">
                                    <label for="contact-name" class="form-label text-white"><?php echo $lang['contact']['name']; ?></label>
                                    <input type="text" class="form-control" id="contact-name">
                                </div>

                                <!-- text -->
                                <div class="col-12">
                                    <label for="contact-text" class="form-label text-white"><?php echo $lang['contact']['text']; ?></label>
                                    <textarea id="contact-text" cols="30" rows="10" class="form-control"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>

        <!-- scripts -->
		<script src="assets/js/bootstrap_5.2.bundle.min.js" defer></script>
        <script src="assets/js/jquery3_6_0.min.js"></script>
		<script src="assets/js/typed/typed.min.js" defer></script>
		<script src="assets/js/scripts.js" defer></script>
    </body>
</html>