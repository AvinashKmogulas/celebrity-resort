<!DOCTYPE html>
<html lang="en">
<?php
require_once("config/config.php");
include("header.php");
?>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7QM6QDZ" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <main>
        <div class="hero small-height jarallax" data-jarallax data-speed="0.2">
            <!-- <img class="jarallax-img" src="img/hero_home_2.jpg" alt=""> -->
            <div class="owl-carousel owl-theme career_slider">
                <div class="car_item"><img class="jarallax-img" src="img/about-banner.jpg" alt=""> </div>
                <div class="car_item"><img class="jarallax-img" src="img/restaurant/slides/dine-banner.jpg" alt=""> </div>
            </div>
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <!-- <small class="slide-animated one">Luxury Resort Career </small> -->
                    <h1 class="slide-animated two">Career </h1>
                    <!--             <div>
              <a href="#Apply_Here" class="btn_1 outline">Apply Now </a>
            </div> -->
                </div>
            </div>
        </div>

        <?php include("be.php"); ?>

        <style>
            .card.car_item {
                border: none;
                box-shadow: none;
            }

            .card-icon {
                width: 74px;
                height: 74px;
                margin: 10px auto;
                background-color: #faf8f5;
                padding: 15px;
                border-radius: 100%;
                box-shadow: 0px 2px 2px 0px #000;
            }

            .card-icon img {
                max-width: 100%;
            }

            .card.car_item .card-body {
                padding-left: 0;
                padding-right: 0;
                padding-bottom: 0;
            }

            .card.car_item .card-body h5 {
                font-size: 23px;
            }

            .card.car_item .card-body p {
                font-size: 13px;
            }

            .op_sec {}

            .card.op_item {
                box-shadow: 1px 1px 2px #3c3c3c;
                border: none;
            }

            .card.op_item .card-body {
                position: relative;
                min-height: 200px;
            }

            .card.op_item .card-body p {
                margin-bottom: 6px;
                font-size: 14px;
                font-weight: 500;
            }

            .card.op_item .card-body .btn_1.Apply_Now_Btn {
                position: absolute;
                right: 0;
                bottom: 0;
                border-top-left-radius: 6px;
                border-bottom-right-radius: 6px;
            }

            .card.op_item .card-body a.animated_link {
                display: inline-block;
                vertical-align: top;
                margin-top: 10px;
                color: #000000;
                border-bottom: 1px solid #000;
                position: absolute;
                bottom: 12px;
                left: 15px;
                z-index: 0;
                font-size: 14px;
            }

            .job_desc .modal-content,
            .apply_here .modal-content {
                padding: 0;
            }

            .job_desc .modal-content .modal-body p {
                margin-bottom: 8px;
                font-size: 14px;
            }

            .job_desc .modal-content .modal-body ul {
                padding-left: 18px;
            }

            .job_desc .modal-content .modal-body ul li {
                font-size: 14px;
            }

            .job_desc .modal-content .modal-body ul li::marker {
                color: #2e3061;
            }
        </style>

        <section class="bg_white">
            <div class="container margin_120_95">
                <div class="row justify-content-between">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <div class="title">
                            <small>Work With Celebrity Resort Hyderabad </small>
                            <h2>Build Your Career with the LEAD Model </h2>
                            <p>At Celebrity Resort Hyderabad, we believe in empowering our employees through continuous learning, growth, and excellence. Our LEAD Model ensures that every team member thrives in a dynamic and rewarding work environment. </p>
                            <h3>Lead Your Way to Success </h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 mt-3 text-center" data-cue="slideInUp" data-delay="200">
                        <div class="card car_item">
                            <div class="card-icon"><img src="img/learn.png" alt="..."> </div>
                            <div class="card-body">
                                <h5>Learn </h5>
                                <p>Gain industry-leading skills, advanced hospitality techniques, and hands-on experience with experienced leaders. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 mt-3 text-center" data-cue="slideInUp" data-delay="200">
                        <div class="card car_item">
                            <div class="card-icon"><img src="img/excel.png" alt="..."> </div>
                            <div class="card-body">
                                <h5>Excel </h5>
                                <p>Elevate your career with performance-driven promotions and leadership opportunities. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 mt-3 text-center" data-cue="slideInUp" data-delay="200">
                        <div class="card car_item">
                            <div class="card-icon"><img src="img/adapt.png" alt="..."> </div>
                            <div class="card-body">
                                <h5>Adapt </h5>
                                <p>Thrive in a fast-paced, evolving hospitality landscape with cutting-edge training and innovation. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 mt-3 text-center" data-cue="slideInUp" data-delay="200">
                        <div class="card car_item">
                            <div class="card-icon"><img src="img/deliver.png" alt="..."> </div>
                            <div class="card-body">
                                <h5>Deliver </h5>
                                <p>Create exceptional guest experiences that set new standards in hospitality and service. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="op_sec">
            <div class="container margin_120_95">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="title mb-3 text-center">
                            <small>Open Positions </small>
                            <h2>Explore Opportunities & Apply Today! </h2>
                        </div>
                        <p class="w-75 mx-auto text-center"></p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <?php
                    $sql = "SELECT 
                        jp.id, 
                        jp.title AS job_title, 
                        GROUP_CONCAT(DISTINCT d.department) AS departments, 
                        GROUP_CONCAT(DISTINCT rm.name) AS report_managers, 
                        jp.description 
                    FROM 
                        job_posts jp 
                    LEFT JOIN department d ON FIND_IN_SET(d.id, jp.department) 
                    LEFT JOIN report_manager rm ON FIND_IN_SET(rm.id, jp.report) 
                    GROUP BY jp.id";

                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();

                    $jobPosts = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($jobPosts as $row): ?>
                        <div class="col-lg-4 col-md-4 col-sm-6 mt-4" data-cue="slideInUp" data-delay="200">
                            <div class="card op_item">
                                <div class="card-body">
                                    <p><b>Job Title:</b> <?= htmlspecialchars($row['job_title']) ?></p>
                                    <p><b>Department:</b> <?= str_replace(',', ' / ', htmlspecialchars($row['departments'])) ?></p>
                                    <p><b>Reports To:</b> <?= str_replace(',', ' / ', htmlspecialchars($row['report_managers'])) ?></p>
                                    <div>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#<?= str_replace(' ', '_', $row['job_title']) ?>" class="animated_link">
                                            <strong>Job Description</strong>
                                        </a>
                                        <button
                                            class="btn_1 Apply_Now_Btn"
                                            type="button"
                                            data-bs-toggle="modal"
                                            data-bs-target="#Job_Enquire"
                                            data-role="<?= htmlspecialchars($row['job_title']) ?>">
                                            Apply Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                    ?>
                    <!-- <div class="col-lg-4 col-md-4 col-sm-6 mt-4" data-cue="slideInUp" data-delay="200">
                        <div class="card op_item">
                            <div class="card-body">
                                <p><b>Job Title:</b> Food & Beverage Manager </p>
                                <p><b>Department:</b> Food & Beverage </p>
                                <p><b>Reports To:</b> General Manager </p>
                                <div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Food_Beverage_Manager" class="animated_link"> <strong>Job Description </strong> </a>
                                    <button class="btn_1 Apply_Now_Btn" type="button" data-bs-toggle="modal" data-bs-target="#Job_Enquire" data-role="Food & Beverage Manager">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 mt-4" data-cue="slideInUp" data-delay="200">
                        <div class="card op_item">
                            <div class="card-body">
                                <p><b>Job Title:</b> Captain – Food & Beverage Service</p>
                                <p><b>Department:</b> Food & Beverage Service</p>
                                <p><b>Reports To:</b> Restaurant Manager / F&B Manager</p>
                                <div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Captain_Food_Beverage_Service" class="animated_link"> <strong>Job Description </strong> </a>
                                    <button class="btn_1 Apply_Now_Btn" type="button" data-bs-toggle="modal" data-bs-target="#Job_Enquire" data-role="Captain – Food & Beverage Service">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 mt-4" data-cue="slideInUp" data-delay="200">
                        <div class="card op_item">
                            <div class="card-body">
                                <p><b>Job Title:</b> Steward – Food & Beverage Service </p>
                                <p><b>Department:</b> Food & Beverage Service </p>
                                <p><b>Reports To:</b> Captain / Outlet Manager </p>
                                <div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Steward_Food_Beverage_Service" class="animated_link"> <strong>Job Description </strong> </a>
                                    <button class="btn_1 Apply_Now_Btn" type="button" data-bs-toggle="modal" data-bs-target="#Job_Enquire" data-role="Steward – Food & Beverage Service">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 mt-4" data-cue="slideInUp" data-delay="200">
                        <div class="card op_item">
                            <div class="card-body">
                                <p><b>Job Title:</b> Sales & Marketing Manager</p>
                                <p><b>Department:</b> Sales & Marketing</p>
                                <p><b>Reports To:</b> General Manager / Director of Sales & Marketing</p>
                                <div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Sales_Marketing_Manager" class="animated_link"> <strong>Job Description </strong> </a>
                                    <button class="btn_1 Apply_Now_Btn" type="button" data-bs-toggle="modal" data-bs-target="#Job_Enquire" data-role="Sales & Marketing Manager">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 mt-4" data-cue="slideInUp" data-delay="200">
                        <div class="card op_item">
                            <div class="card-body">
                                <p><b>Job Title:</b> Reservation Executive</p>
                                <p><b>Department:</b> Front Office / Reservations</p>
                                <p><b>Reports To:</b> Front Office Manager / Sales Manager </p>
                                <div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Reservation_Executive" class="animated_link"> <strong>Job Description </strong> </a>
                                    <button class="btn_1 Apply_Now_Btn" type="button" data-bs-toggle="modal" data-bs-target="#Job_Enquire" data-role="Reservation Executive">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 mt-4" data-cue="slideInUp" data-delay="200">
                        <div class="card op_item">
                            <div class="card-body">
                                <p><b>Job Title:</b> Guest Relations Executive (GRE) – Sales </p>
                                <p><b>Department:</b> Sales & Marketing / Front Office </p>
                                <p><b>Reports To:</b> Sales Manager / Front Office Manager </p>
                                <div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Guest_Relations_Executive_Sales" class="animated_link"> <strong>Job Description </strong> </a>
                                    <button class="btn_1 Apply_Now_Btn" type="button" data-bs-toggle="modal" data-bs-target="#Job_Enquire" data-role="Guest Relations Executive (GRE) – Sales">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 mt-4" data-cue="slideInUp" data-delay="200">
                        <div class="card op_item">
                            <div class="card-body">
                                <p><b>Job Title:</b> Sales Executive</p>
                                <p><b>Department:</b> Sales & Marketing</p>
                                <p><b>Reports To:</b> Sales Manager / General Manager</p>
                                <div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Sales_Executive" class="animated_link"> <strong>Job Description </strong> </a>
                                    <button class="btn_1 Apply_Now_Btn" type="button" data-bs-toggle="modal" data-bs-target="#Job_Enquire" data-role="Sales Executive">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 mt-4" data-cue="slideInUp" data-delay="200">
                        <div class="card op_item">
                            <div class="card-body">
                                <p><b>Job Title:</b> Sales Associate </p>
                                <p><b>Department:</b> Sales & Marketing </p>
                                <p><b>Reports To:</b> Sales Executive / Sales Manager </p>
                                <div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Sales_Associate" class="animated_link"> <strong>Job Description </strong> </a>
                                    <button class="btn_1 Apply_Now_Btn" type="button" data-bs-toggle="modal" data-bs-target="#Job_Enquire" data-role="Sales Associate">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 mt-4" data-cue="slideInUp" data-delay="200">
                        <div class="card op_item">
                            <div class="card-body">
                                <p><b>Job Title:</b> Cost Controller</p>
                                <p><b>Department:</b> Finance & Accounts</p>
                                <p><b>Reports To:</b> Financial Controller / General Manager </p>
                                <div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Cost_Controller" class="animated_link"> <strong>Job Description </strong> </a>
                                    <button class="btn_1 Apply_Now_Btn" type="button" data-bs-toggle="modal" data-bs-target="#Job_Enquire" data-role="Cost Controller">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 mt-4" data-cue="slideInUp" data-delay="200">
                        <div class="card op_item">
                            <div class="card-body">
                                <p><b>Job Title:</b> Account Supervisor </p>
                                <p><b>Department:</b> Finance & Accounts </p>
                                <p><b>Reports To:</b> Finance Manager / Financial Controller </p>
                                <div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Account_Supervisor" class="animated_link"> <strong>Job Description </strong> </a>
                                    <button class="btn_1 Apply_Now_Btn" type="button" data-bs-toggle="modal" data-bs-target="#Job_Enquire" data-role="Account Supervisor">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 mt-4" data-cue="slideInUp" data-delay="200">
                        <div class="card op_item">
                            <div class="card-body">
                                <p><b>Job Title:</b> Store Associate </p>
                                <p><b>Department:</b> Stores & Inventory </p>
                                <p><b>Reports To:</b> Store Supervisor / Cost Controller / Purchase Manager </p>
                                <div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Store_Associate" class="animated_link"> <strong>Job Description </strong> </a>
                                    <button class="btn_1 Apply_Now_Btn" type="button" data-bs-toggle="modal" data-bs-target="#Job_Enquire" data-role="Store Associate">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 mt-4" data-cue="slideInUp" data-delay="200">
                        <div class="card op_item">
                            <div class="card-body">
                                <p><b>Job Title:</b> Housekeeping Supervisor </p>
                                <p><b>Department:</b> Housekeeping </p>
                                <p><b>Reports To:</b> Executive Housekeeper / Operations Manager </p>
                                <div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Housekeeping_Supervisor" class="animated_link"> <strong>Job Description </strong> </a>
                                    <button class="btn_1 Apply_Now_Btn" type="button" data-bs-toggle="modal" data-bs-target="#Job_Enquire" data-role="Housekeeping Supervisor">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 mt-4" data-cue="slideInUp" data-delay="200">
                        <div class="card op_item">
                            <div class="card-body">
                                <p><b>Job Title:</b> Housekeeping Associate </p>
                                <p><b>Department:</b> Housekeeping </p>
                                <p><b>Reports To:</b> Housekeeping Supervisor / Executive Housekeeper </p>
                                <div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Housekeeping_Associate" class="animated_link"> <strong>Job Description </strong> </a>
                                    <button class="btn_1 Apply_Now_Btn" type="button" data-bs-toggle="modal" data-bs-target="#Job_Enquire" data-role="Housekeeping Associate">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </section>

        <section class="bg_white">
            <div class="container margin_120_95">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="title mb-3 text-center">
                            <h2>For More Information </h2>
                        </div>
                        <p class="w-75 mx-auto text-center"></p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="contact_info">
                            <ul class="clearfix text-center">
                                <li>
                                    <i class="bi bi-telephone"></i>
                                    <h4>Telephone</h4>
                                    <p><a href="tel:+918530043444">+91 85300 43444 </a>, <a href="tel:+919989136999">+91 99891 36999 </a>
                                        <!-- <br><small>Timing Morning (9 am to 7 pm)</small> -->
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="contact_info">
                            <ul class="clearfix text-center">
                                <li>
                                    <i class="bi bi-envelope-paper"></i>
                                    <h4>Email address</h4>
                                    <p>
                                        <a href="mailto:booking@celebrityhospitality.com">booking@celebrityhospitality.com</a>
                                    </p>
                                    <!-- <p><a href="mailto:enquiry@celebrityhospitality.com">enquiry@celebrityhospitality.com</a></p> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include("footer.php"); ?>

    <script>
        $('.career_slider').owlCarousel({
            center: true,
            items: 1,
            loop: true,
            addClassActive: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            animateOut: 'fadeOut',
            responsive: {
                0: {
                    dots: true
                },
                991: {
                    dots: true
                }
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const applyButtons = document.querySelectorAll('.Apply_Now_Btn');

            applyButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const role = this.getAttribute('data-role');
                    const select = document.querySelector('#Job_Enquire select');

                    if (select) {
                        const options = select.options;
                        for (let i = 0; i < options.length; i++) {
                            if (options[i].value === role) {
                                select.selectedIndex = i;
                                break;
                            }
                        }
                    }
                });
            });
        });
    </script>


    <!-- Modal Job Enquire Form -->
    <div class="modal fade apply_here" id="Job_Enquire" tabindex="-1" aria-labelledby="Apply_Here" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-4" id="Apply_Here">Apply Here </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="cr_career_form" name="cr_career_form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" placeholder="Name" name="name" id="cr_name">
                                    <label for="car_name">Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="number" placeholder="Phone Number" name="phone" id="cr_phone">
                                    <label for="car_phone">Phone Number</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input name="email" id="cr_email" class="form-control" type="email" placeholder="Email">
                                    <label for="car_email">Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <select class="form-control" name="position" id="cr_position">
                                        <option value="">Position Applied For </option>
                                        <option value="Food & Beverage Manager">Food & Beverage Manager </option>
                                        <option value="Captain – Food & Beverage Service">Captain – Food & Beverage Service </option>
                                        <option value="Steward – Food & Beverage Service">Steward – Food & Beverage Service </option>
                                        <option value="Sales & Marketing Manager">Sales & Marketing Manager </option>
                                        <option value="Reservation Executive">Reservation Executive </option>
                                        <option value="Guest Relations Executive (GRE) – Sales">Guest Relations Executive (GRE) – Sales </option>
                                        <option value="Sales Executive">Sales Executive </option>
                                        <option value="Sales Associate">Sales Associate </option>
                                        <option value="Cost Controller">Cost Controller </option>
                                        <option value="Account Supervisor">Account Supervisor </option>
                                        <option value="Store Associate">Store Associate </option>
                                        <option value="Housekeeping Supervisor">Housekeeping Supervisor </option>
                                        <option value="Housekeeping Associate">Housekeeping Associate </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-4">
                                    <label for="car_document" style="margin-bottom: 6px;">Upload CV </label>
                                    <input class="form-control" type="file" placeholder="Upload CV" style="height: auto;line-height: 36px;" name="cv" id="cr_cv">
                                    <small class="mt-1 mb-0">Upload Resume PDF File Type (Below 4 MB Max) </small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-center">
                                    <input type="submit" value="Submit" class="btn_1 outline" id="submit_cr_form">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script>
        $("#cr_career_form").on("submit", function(e) {
            e.preventDefault();

            let name = $("#cr_name").val();
            let phone = $("#cr_phone").val();
            let email = $("#cr_email").val();
            let position = $("#cr_position").val();
            let cv = $("#cr_cv")[0].files[0];

            if (name == "") {
                alert("Please enter your name!");
                return false;
            } else if (phone == "") {
                alert("Please enter your phone number!");
                return false;
            } else if (email == "") {
                alert("Please enter your email!");
                return false;
            } else if (position == "") {
                alert("Please select position!");
                return;
            } else if (cv == "") {
                alert("Please upload your cv!");
                return;
            }

            let formData = new FormData(this);
            let $submitBtn = $("#submit_cr_form");
            $submitBtn.prop("disabled", true).val("Please wait...");
            $.ajax({
                url: 'career_mailer.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log("Server Response: ", response);
                    $submitBtn.prop("disabled", false).val("Submit");
                    window.location.href = "thankyou.php";
                },
                error: function(err) {
                    console.log("Error: ", err);
                    alert("Something Went wrong please try again!")
                    $submitBtn.prop("disabled", false).val("Submit");
                }
            })
        });
    </script>

    <!-- Modal Job Enquire Form End -->


    <!-- Modal Job Description For All -->
    <div class="modal fade job_desc" id="Food_Beverage_Manager" tabindex="-1" aria-labelledby="Food_Beverage_Manager" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-4" id="Food_Beverage_Manager">Food & Beverage Manager </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <p><b>Job Title:</b> Food & Beverage Manager </p>
                <p><b>Department:</b> Food & Beverage </p>
                <p><b>Reports To:</b> General Manager </p> -->
                    <p><b>Job Summary:</b> </p>
                    <p>The Food & Beverage Manager is responsible for leading and managing all F&B operations across the resort—including restaurants, banquets, in-room dining, day outing catering, and special events. The role ensures top-quality service, optimal cost control, guest satisfaction, and team development while aligning with Celebrity Resort’s hospitality standards.</p>
                    <p><b>Key Responsibilities:</b> </p>
                    <p><b>Operational Management:</b> </p>
                    <ul>
                        <li>Oversee the daily functioning of all F&B outlets (restaurant, banquet, bar, poolside dining, etc.).</li>
                        <li>Ensure smooth coordination between kitchen, service, and sales for flawless guest experience.</li>
                        <li>Plan and manage F&B setups for corporate events, weddings, and group outings.</li>
                    </ul>
                    <p><b>Guest Experience:</b> </p>
                    <ul>
                        <li>Maintain high service quality standards to enhance guest satisfaction and repeat business.</li>
                        <li>Interact with guests to gather feedback and ensure prompt resolution of issues.</li>
                        <li>Innovate with menu offerings and F&B concepts in collaboration with the Executive Chef.</li>
                    </ul>
                    <p><b>Team Leadership:</b> </p>
                    <ul>
                        <li>Recruit, train, schedule, and motivate F&B staff including stewards, captains, bartenders, and banquet team.</li>
                        <li>Conduct regular briefings and performance evaluations.</li>
                        <li>Foster a positive work environment and ensure discipline and grooming standards.</li>
                    </ul>
                    <p><b>Sales & Revenue:</b> </p>
                    <ul>
                        <li>Collaborate with the sales team to create event packages and upsell F&B offerings.</li>
                        <li>Analyze sales reports, forecast trends, and strategize for increased revenue and profitability.</li>
                        <li>Manage pricing, portion control, and special promotions to boost revenue.</li>
                    </ul>
                    <p><b>Inventory & Cost Control:</b> </p>
                    <ul>
                        <li>Work with the Cost Controller to manage inventory, control wastage, and maintain ideal food cost.</li>
                        <li>Approve requisitions and ensure proper storage, hygiene, and FIFO usage of materials.</li>
                        <li>Implement effective cost-saving practices without compromising quality.</li>
                    </ul>
                    <p><b>Compliance & Safety:</b> </p>
                    <ul>
                        <li>Ensure all food safety, hygiene, and health standards (FSSAI) are met.</li>
                        <li>Conduct regular audits for cleanliness, service, and kitchen operations.</li>
                    </ul>
                    <p><b>Qualifications & Skills:</b> </p>
                    <ul>
                        <li>Degree/Diploma in Hotel Management or Hospitality. </li>
                        <li>F&B experience in resorts or upscale hotels, with at least 2–3 years in a managerial role. </li>
                        <li>Strong leadership and people management skills. </li>
                        <li>In-depth knowledge of food, beverages, banqueting operations, and customer service. </li>
                        <li>Proficient in Microsoft Office and POS systems (e.g., IDS). </li>
                        <li>Strong communication and guest handling abilities. </li>
                        <li>Ability to work under pressure and during peak hours/events. </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade job_desc" id="Captain_Food_Beverage_Service" tabindex="-1" aria-labelledby="Captain_Food_Beverage_Service" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-4" id="Captain_Food_Beverage_Service">Captain – Food & Beverage Service </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <p><b>Job Title:</b> Captain – Food & Beverage Service </p>
                <p><b>Department:</b> Food & Beverage Service </p>
                <p><b>Reports To:</b> Restaurant Manager / F&B Manager </p> -->
                    <p><b>Job Summary:</b> </p>
                    <p>The Captain is responsible for overseeing and coordinating service activities in the restaurant, banquets, and event areas. They ensure guests receive exceptional service and act as a link between the guests and the service staff. The Captain also plays a key role in training junior staff and maintaining service standards at the resort. </p>
                    <p><b>Key Responsibilities:</b> </p>
                    <p><b>Guest Service:</b> </p>
                    <ul>
                        <li>Greet and welcome guests in a professional manner. </li>
                        <li>Take food and beverage orders accurately and deliver prompt service. </li>
                        <li>Ensure guest satisfaction and handle queries or complaints efficiently. </li>
                    </ul>
                    <p><b>Team Supervision:</b> </p>
                    <ul>
                        <li>Supervise and guide stewards and waitstaff during service.</li>
                        <li>Allocate duties, monitor performance, and ensure grooming standards are maintained.</li>
                        <li>Assist in training new service staff on SOPs and guest interaction.</li>
                    </ul>
                    <p><b>Service Coordination:</b> </p>
                    <ul>
                        <li>Coordinate with the kitchen and bar to ensure timely delivery of orders.</li>
                        <li>Ensure mise-en-place is complete before each shift (cutlery, crockery, condiments).</li>
                        <li>Maintain clean and organized service areas at all times.</li>
                    </ul>
                    <p><b>Banquet & Event Support:</b> </p>
                    <ul>
                        <li>Lead service during banquets, day outings, weddings, and conferences.</li>
                        <li>Oversee buffet setups, table arrangements, and VIP guest handling.</li>
                    </ul>
                    <p><b>Sales & Upselling:</b> </p>
                    <ul>
                        <li>Suggest menu items and upsell food and beverages to increase revenue.</li>
                        <li>Be well-versed with menu items, ingredients, and preparation styles.</li>
                    </ul>
                    <p><b>Billing & Reporting:</b> </p>
                    <ul>
                        <li>Prepare bills, handle basic POS operations, and collect payments as required.</li>
                        <li>Report daily service highlights, guest feedback, and issues to the supervisor.</li>
                    </ul>
                    <p><b>Qualifications & Skills:</b> </p>
                    <ul>
                        <li>Diploma or Certificate in Hotel Management or Food & Beverage Service.</li>
                        <li>F&B experience, preferably in hotels, resorts, or fine dining restaurants.</li>
                        <li>Good communication skills (English, Hindi, Telugu preferred).</li>
                        <li>Strong leadership, multitasking, and guest handling abilities.</li>
                        <li>Well-groomed, energetic, and team-oriented.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade job_desc" id="Steward_Food_Beverage_Service" tabindex="-1" aria-labelledby="Steward_Food_Beverage_Service" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-4" id="Steward_Food_Beverage_Service">Steward – Food & Beverage Service </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <p><b>Job Title:</b> Steward – Food & Beverage Service </p>
                <p><b>Department:</b> Food & Beverage Service </p>
                <p><b>Reports To:</b> Captain / Outlet Manager </p> -->
                    <p><b>Job Summary:</b> </p>
                    <p>The Steward plays a vital role in delivering excellent guest service by assisting with food and beverage service in restaurants, banquets, poolside areas, and during day outing events. The Steward ensures cleanliness, timely service, and guest satisfaction while maintaining hygiene and presentation standards at the resort.</p>
                    <p><b>Key Responsibilities:</b> </p>
                    <p><b>Guest Service:</b> </p>
                    <ul>
                        <li>Assist guests with seating, menu guidance, and order taking as directed by the Captain.</li>
                        <li>Serve food and beverages in a timely and professional manner.</li>
                        <li>Clear tables, reset dining areas, and ensure cleanliness after every service.</li>
                    </ul>
                    <p><b>Restaurant & Banquet Operations:</b> </p>
                    <ul>
                        <li>Support service during breakfast, lunch, dinner, and events.</li>
                        <li>Assist in buffet setups, beverage counters, and special F&B arrangements.</li>
                        <li>Ensure mise-en-place is completed (cutlery, glassware, napkins, condiments).</li>
                    </ul>
                    <p><b>Cleanliness & Hygiene:</b> </p>
                    <ul>
                        <li>Maintain cleanliness of the restaurant, service stations, and pantry areas.</li>
                        <li>Follow hygiene and safety protocols strictly as per resort and FSSAI standards.</li>
                        <li>Properly dispose of waste and follow segregation practices.</li>
                    </ul>
                    <p><b>Inventory & Supplies:</b> </p>
                    <ul>
                        <li>Refill water, condiments, and service items as needed.</li>
                        <li>Report stock shortages of cutlery, crockery, or service items to the Captain.</li>
                    </ul>
                    <p><b>Team Support:</b> </p>
                    <ul>
                        <li>Coordinate closely with the kitchen, bar, and other F&B team members.</li>
                        <li>Assist seniors during peak service hours, banquets, and resort functions.</li>
                    </ul>
                    <p><b>Qualifications & Skills:</b> </p>
                    <ul>
                        <li>10th Pass / 12th Pass or Diploma in Hotel Management preferred.</li>
                        <li>Experience in a hotel, resort, or restaurant setup.</li>
                        <li>Basic understanding of food service, hygiene, and guest etiquette.</li>
                        <li>Energetic, polite, and willing to learn.</li>
                        <li>Ability to stand long hours and work in a fast-paced environment.</li>
                        <li>Familiarity with multiple cuisines and serving styles is a plus.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade job_desc" id="Sales_Marketing_Manager" tabindex="-1" aria-labelledby="Sales_Marketing_Manager" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-4" id="Sales_Marketing_Manager">Sales & Marketing Manager </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <p><b>Job Title:</b> Sales & Marketing Manager </p>
                <p><b>Department:</b> Sales & Marketing </p>
                <p><b>Reports To:</b> General Manager / Director of Sales & Marketing </p> -->
                    <p><b>Job Summary:</b> </p>
                    <p>The Sales & Marketing Manager is responsible for developing and executing strategic plans to drive room bookings, corporate tie-ups, day outing packages, weddings, and events at Celebrity Resort. The role demands proactive business development, brand positioning, digital marketing oversight, and customer relationship management to maximize revenue and visibility.</p>
                    <p><b>Key Responsibilities:</b> </p>
                    <p><b>Sales Development:</b> </p>
                    <ul>
                        <li>Generate leads and build relationships with corporate clients, event planners, travel agents, and wedding planners.</li>
                        <li>Convert inquiries into confirmed bookings for rooms, banquets, day outings, and MICE events.</li>
                        <li>Conduct client visits, resort show-arounds, and presentations.</li>
                    </ul>
                    <p><b>Marketing & Branding:</b> </p>
                    <ul>
                        <li>Plan and execute seasonal promotional campaigns, festive packages, and digital advertisements.</li>
                        <li>Work with design and content teams to create brochures, social media content, and email marketing campaigns.</li>
                        <li>Build brand awareness through online and offline channels.</li>
                    </ul>
                    <p><b>Revenue & Reporting:</b> </p>
                    <ul>
                        <li>Achieve monthly and annual revenue targets across all resort segments.</li>
                        <li>Monitor market trends, competitor pricing, and resort performance to suggest dynamic pricing strategies.</li>
                        <li>Maintain accurate reports of leads, bookings, conversions, and campaign performance.</li>
                    </ul>
                    <p><b>Client Relationship Management:</b> </p>
                    <ul>
                        <li>Maintain strong relationships with key clients and agencies for repeat business.</li>
                        <li>Handle post-event feedback and guest satisfaction follow-ups.</li>
                        <li>Represent the resort at industry events, exhibitions, and networking meets.</li>
                    </ul>
                    <p><b>Team Coordination:</b> </p>
                    <ul>
                        <li>Coordinate with operations, F&B, front office, and reservations teams to ensure smooth execution of group bookings and events.</li>
                        <li>Guide junior sales executives and track their performance.</li>
                    </ul>
                    <p><b>Qualifications & Skills:</b> </p>
                    <ul>
                        <li>Bachelor’s or Master’s degree in Business Administration, Marketing, or Hotel Management.</li>
                        <li>Sales & marketing experience in hospitality/resorts/events.</li>
                        <li>Strong communication, negotiation, and interpersonal skills.</li>
                        <li>Proficiency in CRM tools, MS Office, and digital marketing platforms.</li>
                        <li>Proven track record of achieving sales targets.</li>
                        <li>Strong local network in the corporate and event planning sectors is a plus.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade job_desc" id="Reservation_Executive" tabindex="-1" aria-labelledby="Reservation_Executive" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-4" id="Reservation_Executive">Reservation Executive </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <p><b>Job Title:</b> Reservation Executive </p>
                <p><b>Location:</b> Celebrity Resort, Shamirpet, Hyderabad </p>
                <p><b>Department:</b> Front Office / Reservations </p>
                <p><b>Reports To:</b> Front Office Manager / Sales Manager </p> -->
                    <p><b>Job Summary:</b></p>
                    <p>The Reservation Executive is responsible for handling all reservation inquiries, confirmations, and cancellations in a professional, timely, and guest-centric manner. The role ensures optimal occupancy and revenue through efficient booking management and guest communication.</p>
                    <p><b>Key Responsibilities:</b> </p>
                    <p><b>Handling Reservations:</b> </p>
                    <ul>
                        <li>Answer phone calls, emails, and online booking queries related to room and event reservations. Confirm, modify, or cancel bookings based on availability and guest needs.</li>
                        <li>Manage reservations using the resort's Property Management System (PMS).</li>
                    </ul>
                    <p><b>Guest Interaction:</b> </p>
                    <ul>
                        <li>Provide accurate information about accommodation types, rates, packages, and resort facilities.</li>
                        <li>Assist walk-in guests and coordinate with the front desk for check-ins and group bookings.</li>
                    </ul>
                    <p><b>Coordination with Departments:</b> </p>
                    <ul>
                        <li>Work closely with the Front Office, Sales, and Housekeeping teams to ensure smooth arrival experiences.</li>
                        <li>Coordinate group bookings, special requests, and VIP guest arrangements.</li>
                    </ul>
                    <p><b>Revenue Management Support:</b> </p>
                    <ul>
                        <li>Update room inventory daily and report overbooking or cancellations.</li>
                        <li>Support yield management strategies through upselling and cross-selling.</li>
                    </ul>
                    <p><b>Documentation & Reporting:</b> </p>
                    <ul>
                        <li>Maintain accurate records of all bookings.</li>
                        <li>Generate reservation reports for the management team.</li>
                    </ul>
                    <p><b>Qualifications & Skills:</b> </p>
                    <ul>
                        <li>Graduate in Hospitality, Tourism, or a related field.</li>
                        <li>Experience in reservations or front office roles, preferably in a hotel or resort.</li>
                        <li>Familiarity with PMS/CRM software (like IDS, Opera, or similar).</li>
                        <li>Strong communication and interpersonal skills.</li>
                        <li>Attention to detail and ability to multitask.</li>
                        <li>Basic computer proficiency (MS Office, Email, etc.).</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade job_desc" id="Guest_Relations_Executive_Sales" tabindex="-1" aria-labelledby="Guest_Relations_Executive_Sales" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-4" id="Guest_Relations_Executive_Sales">Guest Relations Executive (GRE) – Sales </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <p><b>Job Title:</b> Guest Relations Executive (GRE) – Sales </p>
              <p><b>Location:</b> Celebrity Resort, Shamirpet, Hyderabad </p>
              <p><b>Department:</b>Sales & Marketing / Front Office </p>
              <p><b>Reports To:</b> Sales Manager / Front Office Manager </p> -->
                    <p><b>Job Summary:</b> </p>
                    <p>The GRE – Sales is responsible for welcoming guests, ensuring a seamless and personalized experience during their visit, while also actively promoting the resort’s offerings to maximize sales opportunities. This hybrid role combines guest relations with sales functions, making it essential in enhancing guest satisfaction and achieving revenue targets.</p>
                    <p>
                        <b>Key Responsibilities:</b>
                    </p>
                    <p>
                        <b>Guest Relations:</b>
                    </p>
                    <ul>
                        <li>Greet and welcome guests in a warm, courteous manner.</li>
                        <li>Handle guest queries, feedback, and concerns with professionalism and empathy.</li>
                        <li>Maintain positive guest relations throughout their stay or visit.</li>
                        <li>Maintain an up-to-date knowledge of resort facilities, packages, and promotions.</li>
                    </ul>
                    <p>
                        <b>Sales Support:</b>
                    </p>
                    <ul>
                        <li>Actively promote day outing packages, rooms, banquet/event spaces, and F&B offerings.</li>
                        <li>Assist in converting walk-in inquiries into confirmed bookings.</li>
                        <li>Maintain and update guest profiles to support future marketing and sales efforts.</li>
                        <li>Upsell services such as spa treatments, event add-ons, and dining upgrades.</li>
                    </ul>
                    <p>
                        <b>Coordination:</b>
                    </p>
                    <ul>
                        <li>Liaise with Sales, Reservations, and F&B departments to ensure smooth execution of bookings.</li>
                        <li>Ensure all guest preferences and special requests are communicated and fulfilled.</li>
                    </ul>
                    <p>
                        <b>Follow-Up & Reporting:</b>
                    </p>
                    <ul>
                        <li>Collect feedback and reviews from guests post-visit for quality assurance and brand building.</li>
                        <li>Generate daily guest reports and support the sales team with relevant data.</li>
                    </ul>
                    <p>
                        <b>Qualifications & Skills:</b>
                    </p>
                    <ul>
                        <li>A degree/diploma in Hospitality, Sales, or related fields.</li>
                        <li>Experience in guest relations or hospitality sales.</li>
                        <li>Excellent communication and interpersonal skills.</li>
                        <li>Friendly personality with a flair for sales and relationship building.</li>
                        <li>Knowledge of CRM systems or Property Management Systems is a plus.</li>
                        <li>Comfortable with targets and cross-functional coordination.</li>
                        <li>Must be willing to travel locally for meetings and client visits.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade job_desc" id="Sales_Executive" tabindex="-1" aria-labelledby="Sales_Executive" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-4" id="Sales_Executive">Sales Executive </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <p><b>Job Title:</b> Sales Executive</p>
                <p><b>Department:</b> Sales & Marketing</p>
                <p><b>Reports To:</b> Sales Manager / General Manager</p> -->
                    <p><b>Job Summary:</b></p>
                    <p>The Sales Executive is responsible for generating leads, converting prospects, and nurturing client relationships to increase revenue across all business verticals of the resort including day outings, room sales, events, and corporate tie-ups. The role involves both field and in-office activities and demands strong communication and negotiation skills.</p>
                    <p><b>Key Responsibilities:</b></p>
                    <p><b>Lead Generation & Client Acquisition:</b></p>
                    <ul>
                        <li>Identify potential clients through cold calling, site visits, networking, referrals, and digital platforms.</li>
                        <li>Handle inbound inquiries from individuals, corporates, schools, and travel agents.</li>
                    </ul>
                    <p><b>Sales Conversion:</b></p>
                    <ul>
                        <li>Present the resort’s offerings effectively to prospective clients.</li>
                        <li>Arrange and conduct site visits, explain packages, and follow up for bookings.</li>
                        <li>Prepare and send customized proposals based on client requirements.</li>
                    </ul>
                    <p><b>Relationship Management:</b></p>
                    <ul>
                        <li>Build and maintain strong relationships with existing and prospective clients.</li>
                        <li>Provide excellent pre-sale and post-sale support to ensure repeat business.</li>
                    </ul>
                    <p><b>Coordination & Execution:</b></p>
                    <ul>
                        <li>Coordinate with internal departments (F&B, Front Office, Banquets, etc.) to ensure smooth service delivery.</li>
                        <li>Assist in the execution of events and group bookings when necessary.</li>
                    </ul>
                    <p><b>Documentation & Reporting:</b></p>
                    <ul>
                        <li>Maintain records of leads, bookings, and client interactions in CRM or tracking systems.</li>
                        <li>Submit daily and monthly sales reports to the Sales Manager.</li>
                    </ul>

                    <p><b>Qualifications & Skills:</b></p>
                    <ul>
                        <li>Graduate or Diploma in Sales, Marketing, Hospitality, or related fields.</li>
                        <li>Experience in hotel/resort sales, preferably in leisure or MICE segments.</li>
                        <li>Excellent communication and interpersonal skills.</li>
                        <li>Goal-oriented with strong negotiation and closing abilities.</li>
                        <li>Proficiency in MS Office, email communication, and CRM tools.</li>
                        <li>Pleasant personality and presentable appearance for client-facing interactions.</li>
                        <li>Must be willing to travel locally for meetings and client visits.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade job_desc" id="Sales_Associate" tabindex="-1" aria-labelledby="Sales_Associate" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-4" id="Sales_Associate">Sales Associate </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <p><b>Job Title:</b> Sales Associate</p>
                <p><b>Department:</b> Sales & Marketing</p>
                <p><b>Reports To:</b> Sales Executive / Sales Manager</p> -->

                    <p><b>Job Summary:</b></p>
                    <p>The Sales Associate at Celebrity Resort plays a supporting role in the sales team by assisting in lead management, client coordination, follow-ups, and maintaining sales documentation. This position is ideal for individuals who are enthusiastic, detail-oriented, and looking to grow in the hospitality sales domain.</p>
                    <p><b>Key Responsibilities:</b></p>

                    <p><b>Lead Support & Coordination:</b></p>
                    <ul>
                        <li>Assist the sales team in handling inquiries via phone, email, and walk-ins.</li>
                        <li>Follow up with potential clients for bookings, documentation, and feedback.</li>
                        <li>Maintain and update lead trackers and booking logs.</li>
                    </ul>

                    <p><b>Client Engagement:</b></p>
                    <ul>
                        <li>Help coordinate site visits, greet prospective clients, and explain basic packages.</li>
                        <li>Support in building long-term relationships with existing clients and guests.</li>
                    </ul>

                    <p><b>Sales Administration:</b></p>
                    <ul>
                        <li>Prepare and send quotations, invoices, and booking confirmations as guided.</li>
                        <li>Maintain proper filing and record-keeping for all sales-related documentation.</li>
                    </ul>

                    <p><b>Cross-Departmental Coordination:</b></p>
                    <ul>
                        <li>Coordinate with other departments like Front Office, F&B, and Events for smooth execution of client requirements.</li>
                        <li>Communicate clearly about client expectations and special requests.</li>
                    </ul>

                    <p><b>Support During Events/Bookings:</b></p>
                    <ul>
                        <li>Be present on-site during group check-ins or events to assist the team and ensure client satisfaction.</li>
                        <li>Handle basic guest queries and escalate issues to seniors as required.</li>
                    </ul>

                    <p><b>Qualifications & Skills:</b></p>
                    <ul>
                        <li>Bachelor’s degree or diploma in Hospitality, Sales, or related fields.</li>
                        <li>Experience in a hospitality sales/support role (freshers with strong communication skills can apply).</li>
                        <li>Good spoken and written communication (English, Hindi, and Telugu preferred).</li>
                        <li>Basic computer skills – MS Word, Excel, Email.</li>
                        <li>Friendly, positive attitude with a willingness to learn and grow.</li>
                        <li>Punctual, presentable, and team-oriented.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade job_desc" id="Cost_Controller" tabindex="-1" aria-labelledby="Cost_Controller" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-4" id="Cost_Controller">Cost Controller </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <p><b>Job Title:</b> Cost Controller</p>                
                <p><b>Department:</b> Finance & Accounts</p>
                <p><b>Reports To:</b> Financial Controller / General Manager</p> -->

                    <p><b>Job Summary:</b></p>
                    <p>The Cost Controller is responsible for monitoring, analyzing, and managing all resort-related costs to ensure optimal profitability. This includes food & beverage cost analysis, inventory management, procurement control, and budget adherence. The role is critical in maintaining operational efficiency and reducing unnecessary expenses without compromising service quality.</p>
                    <p><b>Key Responsibilities:</b></p>

                    <p><b>Cost Management:</b></p>
                    <ul>
                        <li>Monitor daily operations to control F&B and operational costs.</li>
                        <li>Analyze cost variance between actual and budgeted figures, and suggest corrective actions.</li>
                        <li>Develop and implement cost control systems, procedures, and policies.</li>
                    </ul>


                    <p><b>Inventory & Stock Management:</b></p>
                    <ul>
                        <li>Supervise physical inventory counts of F&B, housekeeping, and engineering stores.</li>
                        <li>Ensure accurate inventory valuation and timely reporting.</li>
                        <li>Monitor stock movements and highlight slow/non-moving items.</li>
                    </ul>


                    <p><b>Purchasing Support:</b></p>
                    <ul>
                        <li>Verify purchase requisitions and ensure adherence to cost budgets.</li>
                        <li>Validate purchase orders and match them with received items and supplier invoices.</li>
                    </ul>

                    <p><b>Food & Beverage Costing:</b></p>
                    <ul>
                        <li>Conduct recipe costing and monitor portion controls.</li>
                        <li>Track daily consumption of materials and analyze usage vs. sales.</li>
                        <li>Collaborate with the Executive Chef and F&B Manager for menu pricing and cost optimization.</li>
                    </ul>

                    <p><b>Audit & Compliance:</b></p>
                    <ul>
                        <li>Conduct surprise audits on stores, bars, kitchens, and other cost centers.</li>
                        <li>Ensure compliance with internal controls and hotel standard operating procedures.</li>
                        <li>Assist in monthly/quarterly internal and external audits.</li>
                    </ul>

                    <p><b>Reporting:</b></p>
                    <ul>
                        <li>Generate and submit regular cost reports to management (daily, weekly, and monthly).</li>
                        <li>Prepare variance analysis and recommendations for cost improvements.</li>
                    </ul>

                    <p><b>Qualifications & Skills:</b></p>
                    <ul>
                        <li>Bachelor’s degree in Commerce, Finance, Hospitality Management, or related field.</li>
                        <li>Experience in cost control within the hospitality industry (resort/hotel experience preferred).</li>
                        <li>Knowledge of inventory systems and accounting software (e.g., IDS, Tally, SAP).</li>
                        <li>Strong analytical and numerical skills.</li>
                        <li>Excellent attention to detail and organizational skills.</li>
                        <li>Familiarity with food costing, procurement processes, and internal controls.</li>
                        <li>Proficient in MS Excel, Word, and reporting tools.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade job_desc" id="Account_Supervisor" tabindex="-1" aria-labelledby="Account_Supervisor" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-4" id="Account_Supervisor">Account Supervisor </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <p><b>Job Title:</b> Account Supervisor</p>
                      <p><b>Department:</b> Finance & Accounts</p>
                      <p><b>Reports To:</b> Finance Manager / Financial Controller</p> -->

                    <p><b>Job Summary:</b></p>
                    <p>The Account Supervisor oversees the daily operations of the accounts department, ensuring timely and accurate financial reporting, proper bookkeeping, and compliance with internal policies. The role involves supervising junior accountants, managing receivables/payables, and assisting in audits, budgeting, and financial planning for the resort.</p>
                    <p><b>Key Responsibilities:</b></p>

                    <p><b>Financial Management:</b></p>
                    <ul>
                        <li>Oversee daily accounting operations, including journal entries, ledger maintenance, and reconciliations.</li>
                        <li>Ensure timely preparation of Profit & Loss (P&L) statements, balance sheets, and cash flow reports.</li>
                    </ul>


                    <p><b>Accounts Payable & Receivable:</b></p>
                    <ul>
                        <li>Monitor billing, collections, and vendor payments.</li>
                        <li>Reconcile vendor statements and follow up on overdue invoices and payments.</li>
                        <li>Maintain customer and vendor ledgers accurately.</li>
                    </ul>


                    <p><b>Supervision & Coordination:</b></p>
                    <ul>
                        <li>Supervise and guide a team of accountants and clerks.</li>
                        <li>Allocate tasks and ensure timely closing of books of accounts.</li>
                        <li>Coordinate with departments like F&B, Front Office, and Procurement for financial data and clarity.</li>
                    </ul>

                    <p><b>Compliance & Audit:</b></p>
                    <ul>
                        <li>Ensure compliance with GST, TDS, and other statutory requirements.</li>
                        <li>Assist with internal and external audits, including documentation and query resolution.</li>
                    </ul>

                    <p><b>Reporting & Analysis:</b></p>
                    <ul>
                        <li>Prepare MIS reports, budget variance reports, and expenditure summaries for management.</li>
                        <li>Analyze resort performance indicators and support decision-making with financial insights.</li>
                    </ul>

                    <p><b>Cash & Bank Management:</b></p>
                    <ul>
                        <li>Monitor daily cash flow and bank transactions.</li>
                        <li>Handle petty cash disbursements and maintain accurate records.</li>
                    </ul>

                    <p><b>Qualifications & Skills:</b></p>
                    <ul>
                        <li>Bachelor’s or Master’s degree in Commerce, Finance, or Accounting.</li>
                        <li>Experience in accounting, preferably in hospitality or hotel industry.</li>
                        <li>Strong knowledge of Tally ERP, MS Excel, and accounting standards.</li>
                        <li>Good understanding of hospitality financial processes and cost controls.</li>
                        <li>Excellent leadership, communication, and analytical skills.</li>
                        <li>Familiar with tax compliance, audits, and inventory finance.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade job_desc" id="Store_Associate" tabindex="-1" aria-labelledby="Store_Associate" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-4" id="Store_Associate">Store Associate </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <p><b>Job Title:</b> Store Associate</p>                
                <p><b>Department:</b> Stores & Inventory</p>
                <p><b>Reports To:</b> Store Supervisor / Cost Controller / Purchase Manager</p> -->

                    <p><b>Job Summary:</b></p>
                    <p>The Store Associate is responsible for receiving, storing, issuing, and maintaining inventory of all items including food & beverage, housekeeping, maintenance, and administrative supplies. The role ensures accurate record-keeping, cleanliness, and compliance with resort inventory protocols.</p>
                    <p><b>Key Responsibilities:</b></p>

                    <p><b>Inventory Management:</b></p>
                    <ul>
                        <li>Receive goods as per purchase orders and ensure quantity and quality checks.</li>
                        <li>Properly label, store, and organize inventory in designated storage areas.</li>
                        <li>Issue items to departments based on approved requisitions and maintain accurate records.</li>
                    </ul>



                    <p><b>Documentation & System Entry:</b></p>
                    <ul>
                        <li>Record all receipts, issues, and returns in the inventory management system or manual registers.</li>
                        <li>Maintain up-to-date stock ledgers and ensure daily data entry.</li>
                    </ul>


                    <p><b>Coordination & Communication:</b></p>
                    <ul>
                        <li>Coordinate with departments like F&B, Housekeeping, Engineering for material issuance.</li>
                        <li>Inform the purchase department of low stock levels and reorder requirements.</li>
                    </ul>

                    <p><b>Hygiene & Safety:</b></p>
                    <ul>
                        <li>Ensure cleanliness and safety of the storage area.</li>
                        <li>Follow FIFO (First In, First Out) and FEFO (First Expiry, First Out) methods to reduce wastage.</li>
                    </ul>

                    <p><b>Stock Audits:</b></p>
                    <ul>
                        <li>Participate in monthly/quarterly physical stock counts and assist in reconciliation processes.</li>
                        <li>Report stock discrepancies to the Store Supervisor or Cost Controller immediately.</li>
                    </ul>


                    <p><b>Qualifications & Skills:</b></p>
                    <ul>
                        <li>12th Pass / Graduate in any stream (preferably in Stores, Logistics, or Hospitality).</li>
                        <li>Experience in hotel/resort stores or inventory handling.</li>
                        <li>Basic knowledge of inventory management practices.</li>
                        <li>Familiar with Tally, Excel, or store software (e.g., IDS, POS).</li>
                        <li>Physically fit to handle store movement and lifting as required.</li>
                        <li>Detail-oriented, honest, and organized.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade job_desc" id="Housekeeping_Supervisor" tabindex="-1" aria-labelledby="Housekeeping_Supervisor" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-4" id="Housekeeping_Supervisor">Housekeeping Supervisor </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <p><b>Job Title:</b>Housekeeping Supervisor</p>
                <p><b>Department:</b>Housekeeping</p>
                <p><b>Reports To:</b> Executive Housekeeper / Operations Manager</p> -->

                    <p><b>Job Summary:</b></p>
                    <p>The Housekeeping Supervisor is responsible for overseeing and coordinating daily housekeeping operations in guest rooms, public areas, banquet halls, and resort facilities. The role ensures that cleanliness standards are met, staff are well-directed, and guest satisfaction is maintained at the highest level.</p>
                    <p><b>Key Responsibilities:</b></p>

                    <p><b>Supervision & Team Management:</b></p>
                    <ul>
                        <li>Supervise housekeeping attendants, room boys, linen staff, and janitors.</li>
                        <li>Allocate daily tasks and inspect work areas to ensure hygiene and presentation standards.</li>
                        <li>Conduct daily briefings and ensure grooming, attendance, and discipline of team members.</li>
                    </ul>

                    <p><b>Guest Rooms & Public Area Maintenance:</b></p>
                    <ul>
                        <li>Inspect guest rooms after cleaning for readiness before check-in.</li>
                        <li>Monitor the upkeep of lobbies, restrooms, banquet halls, poolside, and other public spaces.</li>
                        <li>Respond promptly to guest requests such as additional amenities or express cleaning.</li>
                    </ul>

                    <p><b>Inventory & Supplies:</b></p>
                    <ul>
                        <li>Ensure adequate stock of cleaning materials, guest supplies, and linen.</li>
                        <li>Coordinate with the store and purchase departments for timely requisitions.</li>
                        <li>Monitor usage and minimize wastage of materials.</li>
                    </ul>


                    <p><b>Training & Quality Control:</b></p>
                    <ul>
                        <li>Train new housekeeping staff on SOPs, safety practices, and hospitality etiquette.</li>
                        <li>Conduct regular audits and quality checks of cleaned areas.</li>
                        <li>Implement hygiene protocols in line with resort and government (FSSAI/health) standards.</li>
                    </ul>


                    <p><b>Coordination:</b></p>
                    <ul>
                        <li>Liaise with Front Office, Maintenance, and F&B departments for room status, repairs, and events.</li>
                        <li>Ensure timely room turnovers during high occupancy and group bookings.</li>
                        <li>Report maintenance issues or safety hazards to the engineering team.</li>
                    </ul>

                    <p><b>Qualifications & Skills:</b></p>
                    <ul>
                        <li>Diploma/Degree in Hotel Management or Housekeeping operations.</li>
                        <li>Housekeeping experience in hotels/resorts with supervisory role.</li>
                        <li>Strong leadership, attention to detail, and guest-oriented approach.</li>
                        <li>Basic computer knowledge (MS Office, PMS like IDS/Opera preferred).</li>
                        <li>Physically fit, well-groomed, and effective in time management.</li>
                        <li>Ability to handle pressure during high occupancy and events.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade job_desc" id="Housekeeping_Associate" tabindex="-1" aria-labelledby="Housekeeping_Associate" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-4" id="Housekeeping_Associate">Housekeeping Associate </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <p><b>Job Title:</b> Housekeeping Associate</p>
                <p><b>Department:</b> Housekeeping</p>
                <p><b>Reports To:</b>  Housekeeping Supervisor / Executive Housekeeper</p> -->

                    <p><b>Job Summary:</b></p>
                    <p>The Housekeeping Associate is responsible for maintaining cleanliness, hygiene, and aesthetic standards in guest rooms, public areas, and resort premises. The role plays a key part in delivering a clean and welcoming environment for guests, ensuring their comfort and satisfaction.</p>
                    <p><b>Key Responsibilities:</b></p>

                    <p><b>Room Cleaning & Maintenance:</b></p>
                    <ul>
                        <li>Clean and service guest rooms as per resort standards.</li>
                        <li>Change bed linens, replenish amenities, and clean bathrooms thoroughly.</li>
                        <li>Report any room maintenance issues or damages to the supervisor immediately.</li>
                    </ul>


                    <p><b>Public Area Upkeep:</b></p>
                    <ul>
                        <li>Maintain cleanliness of lobbies, corridors, restrooms, banquet halls, and poolside areas.</li>
                        <li>Dust, mop, vacuum, and sanitize as needed to keep public areas guest-ready.</li>
                        <li>Assist in event setups and ensure banquet/event areas are tidy before and after functions.</li>
                    </ul>


                    <p><b>Guest Service Support:</b></p>
                    <ul>
                        <li>Respond promptly to guest requests such as additional towels, laundry pickup, or room supplies.</li>
                        <li>Maintain a polite and professional demeanor when interacting with guests.</li>
                        <li>Ensure Do Not Disturb and Privacy signs are respected.</li>
                    </ul>



                    <p><b>Linen & Supplies Handling:</b></p>
                    <ul>
                        <li>Collect and transport dirty linen to the laundry and retrieve clean linen.</li>
                        <li>Refill cleaning trolleys with necessary supplies daily.</li>
                        <li>Handle housekeeping tools and chemicals with care and safety.</li>
                    </ul>



                    <p><b>Safety & Hygiene:</b></p>
                    <ul>
                        <li>Follow personal hygiene and grooming standards as per resort policies.</li>
                        <li>Use proper safety gear while handling chemicals and cleaning equipment.</li>
                        <li>Ensure waste is segregated and disposed of properly.</li>
                    </ul>


                    <p><b>Qualifications & Skills:</b></p>
                    <ul>
                        <li>Diploma/Degree in Hotel Management or Housekeeping operations.</li>
                        <li>Housekeeping experience preferred (freshers can apply).</li>
                        <li>Physically fit and willing to perform manual tasks.</li>
                        <li>Basic understanding of housekeeping tasks and guest etiquette.</li>
                        <li>Punctual, reliable, and able to follow instructions.</li>
                        <li>Knowledge of Hindi, Telugu, or English is an advantage.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>

</html>