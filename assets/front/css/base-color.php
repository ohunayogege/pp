<?php
header ("Content-Type:text/css");
$color = $_GET['color']; // Change your Color Here


function checkhexcolor($color) {
    return preg_match('/^#[a-f0-9]{6}$/i', $color);
}

if( isset( $_GET[ 'color' ] ) AND $_GET[ 'color' ] != '' ) {
    $color = "#".$_GET[ 'color' ];
}

if( !$color OR !checkhexcolor( $color ) ) {
    $color = "#746EF1";
}

?>

.support-bar-area .support-contact-info i {
    color: <?php echo $color; ?>;
}
.main-menu li.active a {
    color: <?php echo $color; ?>;
}
.main-menu li.active a {
    color: <?php echo $color; ?>;
}
.main-menu li a::before {
    background-color: <?php echo $color; ?>;
}
.main-menu li a::after {
    background-color: <?php echo $color; ?>;
}
.main-menu li a.boxed-btn:hover {
    border: 1px solid <?php echo $color; ?>;
    color: <?php echo $color; ?>;
}
a.boxed-btn {
    background-color: <?php echo $color; ?>;
}
.main-menu li a.boxed-btn {
    border: 1px solid <?php echo $color; ?>;
}
a.hero-boxed-btn:hover {
    background-color: <?php echo $color; ?>;
}
.intro-txt {
    background-color: <?php echo $color; ?>;
}
a.boxed-btn {
    background-color: <?php echo $color; ?>;
}
.approach-summary a.boxed-btn:hover {
    border: 1px solid <?php echo $color; ?>;
    color: <?php echo $color; ?>;
}
.single-approach:hover .approach-icon-wrapper {
    background-color: <?php echo $color; ?>;
    border: 1px solid <?php echo $color; ?>;
}
.approach-icon-wrapper i {
    color: <?php echo $color; ?>;
}
a.boxed-btn {
    background-color: <?php echo $color; ?>;
}
a.readmore-btn {
    background-color: <?php echo $color; ?>;
}
.single-case p {
    color: <?php echo $color; ?>;
}
.single-testimonial h6 {
    color: <?php echo $color; ?>;
}
.single-testimonial::before {
    border-top: 2px solid <?php echo $color; ?>;
    border-right: 2px solid <?php echo $color; ?>;
}
.single-testimonial::after {
    border-bottom: 2px solid <?php echo $color; ?>;
    border-left: 2px solid <?php echo $color; ?>;
}
.social-accounts {
    background-color: <?php echo $color; ?>;
}
.social-accounts ul li a:hover {
    color: <?php echo $color; ?>;
}
.social-accounts ul li a:hover {
    color: <?php echo $color; ?>;
}
.single-blog::before {
    border-right: 2px solid <?php echo $color; ?>;
    border-bottom: 2px solid <?php echo $color; ?>;
}
.single-blog::after {
    border-top: 2px solid <?php echo $color; ?>;
    border-left: 2px solid <?php echo $color; ?>;
}
.blog-txt .date span {
    color: <?php echo $color; ?>;
}
.blog-txt .blog-title a:hover {
    color: <?php echo $color; ?>;
}
a.readmore-btn {
    background-color: <?php echo $color; ?>;
}
ul.footer-links li a::after {
    color: <?php echo $color; ?>;
}
ul.footer-links li a:hover {
    color: <?php echo $color; ?>;
}
.footer-newsletter button[type="submit"]:hover, .footer-newsletter input[type="submit"]:hover {
    color: <?php echo $color; ?>;
}
.footer-newsletter button[type="submit"], .footer-newsletter input[type="submit"] {
    background-color: <?php echo $color; ?>;
    border: 1px solid <?php echo $color; ?>;
}
.footer-contact-info ul li i {
    color: <?php echo $color; ?>;
}
.back-to-top {
    background-color: <?php echo $color; ?>;
    border: 1px solid <?php echo $color; ?>;
}
.back-to-top:hover {
    color: <?php echo $color; ?>;
}
ul.breadcumb li a:hover {
    color: <?php echo $color; ?>;
}
.main-menu li a:hover {
    color: <?php echo $color; ?>;
}
.approach-icon-wrapper {
    border: 1px solid <?php echo $color; ?>;
}
.case-carousel button.owl-next:hover {
    border: 2px solid <?php echo $color; ?> !important;
}
.case-carousel button.owl-next:hover i {
    color: <?php echo $color; ?>;
}
.member-info small {
    color: <?php echo $color; ?>;
}
.single-team-member::before {
    border-top: 2px solid <?php echo $color; ?>;
    border-left: 2px solid <?php echo $color; ?>;
}
.single-team-member::after {
    border-bottom: 2px solid <?php echo $color; ?>;
    border-right: 2px solid <?php echo $color; ?>;
}
.loader {
    border: 4px solid <?php echo $color; ?>;
}
.loader-inner {
    background-color: <?php echo $color; ?>;
}
.single-service::before {
    border-right: 2px solid <?php echo $color; ?>;
    border-bottom: 2px solid <?php echo $color; ?>;
}
.single-service::after {
    border-top: 2px solid <?php echo $color; ?>;
    border-left: 2px solid <?php echo $color; ?>;
}
.pagination-nav li.page-item.active a {
    background-color: <?php echo $color; ?>;
    border: 2px solid <?php echo $color; ?>;
}
.category-lists ul li a::after {
    color: <?php echo $color; ?>;
}
.category-lists ul li a:hover {
    color: <?php echo $color; ?>;
}
.subscribe-section span {
    color: <?php echo $color; ?>;
}
.subscribe-section h3::after {
    background-color: <?php echo $color; ?>;
}
.subscribe-form input[type="submit"], .subscribe-form button[type="submit"] {
    background-color: <?php echo $color; ?>;
    border: 1px solid <?php echo $color; ?>;
}
.subscribe-form input[type="submit"]:hover, .subscribe-form button[type="submit"]:hover {
    border: 1px solid <?php echo $color; ?>;
    color: <?php echo $color; ?>;
}
.project-ss-carousel .owl-next {
    background-color: <?php echo $color; ?>;
    border: 1px solid <?php echo $color; ?>;
}
.project-ss-carousel .owl-next:hover {
    color: <?php echo $color; ?>;
}
.project-ss-carousel .owl-prev {
    background-color: <?php echo $color; ?>;
    border: 1px solid <?php echo $color; ?>;
}
.project-ss-carousel .owl-prev:hover {
    color: <?php echo $color; ?>;
}
.popular-post-txt h5 a:hover {
    color: <?php echo $color; ?>;
}
.single-contact-info i {
    color: <?php echo $color; ?>;
}
.support-bar-area ul.social-links li a:hover {
    color: <?php echo $color; ?>;
}
.main-menu li.dropdown:hover a {
    color: <?php echo $color; ?>;
}
.main-menu li.dropdown ul.dropdown-lists li a::before {
    background-color: <?php echo $color; ?>;
}
.main-menu li.dropdown ul.dropdown-lists li.active a {
    background-color: <?php echo $color; ?>;
}
.main-menu li.dropdown.active::after {
    color: <?php echo $color; ?>;
}
.single-category .text a.readmore {
    color: <?php echo $color; ?>;
}
.category-lists ul li.active a {
    color: <?php echo $color; ?>;
}
.case-types ul li a {
    border: 1px solid <?php echo $color; ?>;
}
.case-types ul li a:hover {
    background-color: <?php echo $color; ?>;
}
.case-types ul li.active a {
    background-color: <?php echo $color; ?>;
}
.main-menu li.dropdown:hover::after {
    color: <?php echo $color; ?>;
}
.faq-section .accordion .card .card-header .btn:hover {
    background-color: <?php echo $color; ?>;
}
.faq-section .accordion .card .card-header .btn[aria-expanded="true"] {
    background-color: <?php echo $color; ?>;
}
.blog-details-quote {
    border-left: 3px solid <?php echo $color; ?>;
}
.comment-lists h3::after {
    background-color: <?php echo $color; ?>;
}
.reply-form-section h3::after {
    background-color: <?php echo $color; ?>;
}
.error-txt a {
    background-color: <?php echo $color; ?>;
    border: 1px solid <?php echo $color; ?>;
}

.error-txt a:hover {
    color: <?php echo $color; ?>;
}

.mega-dropdown .dropbtn::before {
    background-color: <?php echo $color; ?>;
}

.mega-dropdown .dropbtn::after {
    background-color: <?php echo $color; ?>;
}

.mega-dropdown-content .service-category a::before {
    color: <?php echo $color; ?>;
}

.mega-dropdown-content .service-category h3 {
    color: <?php echo $color; ?>;
}

.testimonial-carousel.owl-theme .owl-dots .owl-dot.active span {
    background: <?php echo $color; ?>;
}
.owl-carousel.common-carousel .owl-nav button.owl-next, .owl-carousel.common-carousel .owl-nav button.owl-prev {
    background: <?php echo $color; ?>;
    border: 1px solid <?php echo $color; ?>;
}

.owl-carousel.common-carousel .owl-nav button.owl-next:hover, .owl-carousel.common-carousel .owl-nav button.owl-prev:hover {
    color: <?php echo $color; ?>;
}

.mega-dropdown .service-category a.active {
    color: <?php echo $color; ?>;
}

.mega-dropdown .dropbtn.active {
    color: <?php echo $color; ?>;
}

.case-types ul li a {
    color: <?php echo $color; ?>;
}

.mega-dropdown:hover a.dropbtn {
    color: <?php echo $color; ?>;
}

.mega-dropdown .dropbtn::before {
    background-color: <?php echo $color; ?>;
}

.mega-dropdown .dropbtn::after {
    background-color: <?php echo $color; ?>;
}

.single-pic h4::after {
    background-color: <?php echo $color; ?>;
}

.video-play-button:before {
    background: <?php echo $color; ?>;
}

.video-play-button:after {
    background: <?php echo $color; ?>;
}

.project-ss-carousel.owl-theme .owl-dots .owl-dot.active span {
    background: <?php echo $color; ?>;
}

.pagination-nav li.page-item.active a, .pagination-nav li.page-item.active span {
    background-color: <?php echo $color; ?>;
    border: 2px solid <?php echo $color; ?>;
}

.statistics-section h5 i {
    color: <?php echo $color; ?>;
}

.hero2-carousel.owl-theme .owl-dots .owl-dot.active span {
    background-color: <?php echo $color; ?>;
}

@media only screen and (max-width: 575px) {
  .case-types ul li a {
      background-color: <?php echo $color; ?>;
  }
  .case-types ul li a {
      border: 1px solid <?php echo $color; ?>;
  }
}
