<?php
$page_title = "Destina Bartley | Contact";
$active_page = "contact";
include('inc/header.php');
?>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="fade_in">
                    <h1 class="section-title">Contact Me</h1>
                    <div class="form-area">
                        <form role="form" method="post" action="contact_form.php">
                            <br style="clear:both">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile Number">
                            </div>
                            <div class="form-group">
                            <textarea class="form-control" name="message" type="textarea" placeholder="Message"
                                      maxlength="140"
                                      rows="7" required></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary pull-right" value="Submit form">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include('inc/footer.php'); ?>