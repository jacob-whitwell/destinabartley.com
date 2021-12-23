<?php
$active_page = "home";
include('inc/header.php');
?>

<div class="jumbotron">
    <div class="video-container">
        <video autoplay loop muted>
            <source src="img/jumbotron.mp4" type="video/mp4">
        </video>
    </div>
</div>

<div class="content fade_in">
    <div class="container">

        <section class="synopsis">
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <div class="motto">
                        <h2 class="section-title" style="margin-top: 0;">Destina Bartley <br>Plymouth Wedding
                            Videographer</h2>
                    </div>
                    <p>Hi, I'm Destina.</p>
                    <p>I'm a Plymouth based Videographer and Editor.</p>
                    <p>I produce cinematic wedding videos that tell a story. By taking a fly-on-the-wall approach to
                        remain unobtrusive, I capture the day as it happens, in its authenticity. I film the whole day,
                        from bridal prep through to the first dance and evening entertainment.</p>
                    <p>I take bookings right across Devon (and beyond), throughout the year.</p>
                    <p>Please do not hesitate to <a href="contact.php">get in touch</a> for any enquiries.</p>
                    <br>
                </div>
                <div class="col-sm-12 col-md-4">
                    <img src="img/destina.jpg" alt="Destina Bartley" class="img-responsive">
                </div>
            </div>
        </section>
    </div>
</div>


<section class="testimonial">
    <div class="testimonial-image">
        <img src="img/wedding-hands.png" class="fade_in" alt="Wedding Videography">
        <p class="section-title">A film to treasure for a lifetime</p>
    </div>

</section>

<section class="videos" style="margin-top: 10%;">
    <div class="container">
        <div class="row">
            <h1 class="section-title"">My Work</h1>

            <div class="col-md-12 col-lg-6">
                <div class="video-wrapper">
                    <iframe src="https://player.vimeo.com/video/244446146" width="100%" height="315" frameborder="0"
                            webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
                <div class="video-info">
                    <h2 class="video-title">Beth &amp; Simon’s Wedding</h2>
                    <p>November 2017</p>
                </div>
            </div>

            <div class="col-md-12 col-lg-6">
                <div class="video-wrapper">
                    <iframe src="https://player.vimeo.com/video/238217081" width="100%" height="315" frameborder="0"
                            webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
                <div class="video-info">
                    <h2 class="video-title">Sarra &amp; William’s Wedding</h2>
                    <p>September 2017</p>
                </div>
            </div>

            <div class="col-md-12 col-lg-6">
                <iframe src="https://player.vimeo.com/video/233293635" width="100%" height="315" frameborder="0"
                        webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <div class="video-info">
                    <h2 class="video-title">Jo &amp; Sebastian's Wedding</h2>
                    <p>August 2017</p>
                </div>
            </div>

            <div class="col-md-12 col-lg-6">
                <iframe src="https://player.vimeo.com/video/229474138" width="100%" height="315" frameborder="0"
                        webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <div class="video-info">
                    <h2 class="video-title">Amy &amp; Carwyn's Wedding</h2>
                    <p>July 2017</p>
                </div>
            </div>

            <div class="col-md-12 col-lg-6">
                <iframe src="https://player.vimeo.com/video/186144641" width="100%" height="315" frameborder="0"
                        webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                <div class="video-info">
                    <h2 class="video-title">Paige &amp; Caleb's Wedding</h2>
                    <p>September 2016</p>
                </div>
            </div>

            <div class="col-md-12 col-lg-6 videos_border">
                <iframe src="https://player.vimeo.com/video/183194286" width="100%" height="315" frameborder="0"
                        webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                <div class="video-info">
                    <h2 class="video-title">Sally &amp; Kyle's Wedding</h2>
                    <p>September 2016</p>
                </div>

            </div>
        </div>
    </div>
</section>

<?php
include('inc/footer.php');
?>
