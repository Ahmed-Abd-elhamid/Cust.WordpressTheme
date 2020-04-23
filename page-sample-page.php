<?php get_header(); ?>

<div class="container contact-form mt-5">

    <form method="post" id="submit_form">
        <div class="row justify-content-center p-2">
            <div class="col-md-7 border p-4 shadow">
                <h1 class="text-dark mb-5 text-center"><b>Contact Us</b></h1>
                <div class="form-group">
                    <input type="text" name="nameInput" class="form-control" placeholder="Your Name *" value="" />
                    <div class="nameWarning text-danger text-center"></div>
                </div>
                <hr>
                <div class="form-group">
                    <input type="text" name="emailInput" class="form-control" placeholder="Your Email *" value="" />
                    <div class="emailWarning text-danger text-center"></div>
                </div>
                <hr>
                <div class="form-group">
                    <input type="text" name="subjectInput" class="form-control" placeholder="Subject" value="" />
                </div>
                <hr>
                <div class="form-group">
                    <textarea name="msgInput" class="form-control" placeholder="Your Message" style="width: 100%; height: 150px;"></textarea>
                </div>
                <hr>
                <div class="submitWarning text-danger"></div>
                <div class="form-group text-center">
                    <input type="submit" name="btnSubmit" class="btn btn-primary" value="Send Message" />
                </div>
            </div>

        </div>
    </form>
</div>
<br>


<?php get_footer(); ?>