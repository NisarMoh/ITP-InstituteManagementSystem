<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->

<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar menupos-fixed brand-blue">
	<div class="navbar-wrapper">
		<div class="navbar-content scroll-div" >
			<ul class="nav pcoded-inner-navbar">
				<li class="nav-item pcoded-menu-caption">
					<label>Administration</label>
				</li>
				<li class="nav-item">
				    <a href="../dashboard_for_staff/dashboard.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
				</li>

				<li class="nav-item">
				    <a href="../4.%20student_management%20%5BIT18096576%5D/template_for_staff_pages.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-user-graduate"></i></span><span class="pcoded-mtext">Students</span></a>
				</li>

				<li class="nav-item">
				    <a href="../3.%20staff_management%20%5BIT18068610%5D/template_for_staff_pages.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-user-tie"></i></span><span class="pcoded-mtext">Staffs</span></a>
				</li>

				<li class="nav-item">
				    <a href="../6.%20subject_and_classroom_management%20%5BIT18352740%5D/subject_staff_home.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-layer-group"></i></span><span class="pcoded-mtext">Subjects</span></a>
				</li>

				<li class="nav-item">
				    <a href="../6.%20subject_and_classroom_management%20%5BIT18352740%5D/classroom/class_staff_home.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-chalkboard"></i></span><span class="pcoded-mtext">Classrooms</span></a>
				</li>

				<li class="nav-item pcoded-menu-caption">
					<label>Tuition</label>
				</li>

				<li class="nav-item pcoded-hasmenu">
				    <a href="#" class="nav-link "><span class="pcoded-micon"><i class="fas fa-book"></i></span><span class="pcoded-mtext">Assessments</span></a>
				    <ul class="pcoded-submenu">
				        <li><a href="../1.%20examination_management%20%5BIT18019964%5D/view_examination_list.php">Examination</a></li>
				        <li><a href="../1.%20examination_management%20%5BIT18019964%5D/view_test_list.php">Test</a></li>
                        <li><a href="../1.%20examination_management%20%5BIT18019964%5D/view_quiz_list.php">Quiz</a></li>
				    </ul>
				</li>

				<li class="nav-item">
				    <a href="../5.%20file_management%20%5BIT18122138%5D/template_for_staff_pages.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-book-open"></i></span><span class="pcoded-mtext">Learning Materials</span></a>
				</li>

				<li class="nav-item">
				    <a href="../7.%20timetable_management%20%5BIT18508338%5D/timetable_staff_page.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-calendar-alt"></i></span><span class="pcoded-mtext">Timetables</span></a>
				</li>

				<li class="nav-item">
				    <a href="../2.%20notice_and_forum%20%5BIT18018356%5D/template_for_staff_pages.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-comment-alt"></i></span><span class="pcoded-mtext">Forum</span></a>
				</li>

				<li class="nav-item pcoded-menu-caption">
				    <label>Transcation</label>
				</li>
				<li class="nav-item">
				    <a href="../8.%20transaction_management%20%5BIT14043338%5D/template_for_staff_pages.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-hand-holding-usd"></i></span><span class="pcoded-mtext">Fees</span></a>
				</li>
				<li class="nav-item">
				    <a href="#" class="nav-link "><span class="pcoded-micon"><i class="fas fa-money-check-alt"></i></span><span class="pcoded-mtext">Wages</span></a>
				</li>


			</ul>

			<div class="card text-center">
				<div class="card-block">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<i class="feather icon-sunset f-40"></i>
					<h6 class="mt-3">Help?</h6>
					<p>Please contact us on our email for need any support</p>
					<a href="#!" target="_blank" class="btn btn-primary btn-sm text-white m-0">Support</a>
				</div>
			</div>

		</div>
	</div>
</nav>
<!-- [ navigation menu ] end -->

<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed headerpos-fixed header-blue">
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        <a href="../index.php" class="b-brand">
            <!-- ========   [ IMS: Logo ]   ============ -->
            <img src="../assets/images/logo.png" alt="" class="logo">
            <img src="../assets/images/logo-icon.png" alt="" class="logo-thumb">
        </a>
        <a href="#!" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                <div class="search-bar">
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Search here">
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </li>
            <li class="nav-item">
                <a href="#!" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i><span class="badge bg-danger"><span class="sr-only"></span></span></a>
                    <div class="dropdown-menu dropdown-menu-right notification">
                        <div class="noti-head">
                            <h6 class="d-inline-block m-b-0">Notifications</h6>
                            <div class="float-right">
                                <a href="#!" class="m-r-10">mark as read</a>
                                <a href="#!">clear all</a>
                            </div>
                        </div>
                        <ul class="noti-body">
                            <li class="n-title">
                                <p class="m-b-0">NEW</p>
                            </li>
                            <li class="notification">
                                <div class="media">
                                    <img class="img-radius" src="../assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                        <p>New ticket Added</p>
                                    </div>
                                </div>
                            </li>
                            <li class="n-title">
                                <p class="m-b-0">EARLIER</p>
                            </li>
                            <li class="notification">
                                <div class="media">
                                    <img class="img-radius" src="../assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                        <p>Prchace New Theme and make payment</p>
                                    </div>
                                </div>
                            </li>
                            <li class="notification">
                                <div class="media">
                                    <img class="img-radius" src="../assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                                        <p>currently login</p>
                                    </div>
                                </div>
                            </li>
                            <li class="notification">
                                <div class="media">
                                    <img class="img-radius" src="../assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                        <p>Prchace New Theme and make payment</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="noti-footer">
                            <a href="#!">show all</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown drp-user">
                    <a href="#!" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="../assets/images/user/avatar-1.jpg" class="img-radius wid-40" alt="User-Profile-Image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <img src="../assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                            <span>John Doe</span>
                            <a href="auth-signin.html" class="dud-logout" title="Logout">
                                <i class="feather icon-log-out"></i>
                            </a>
                        </div>
                        <ul class="pro-body">
                            <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                            <li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                            <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
<!-- [ Header ] end -->