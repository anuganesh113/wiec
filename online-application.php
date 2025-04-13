<?php include('header.php') ?>

<div class="online-application-section book-appointment-section content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <h2 class="common-title">Online Application Form For <span>Study Abroad.</span></h2>
                <h2>Before You Begin !</h4>
                    <ul class="list">
                        <li><i class="fa-solid fa-circle-check"></i> <a href="how-to-obtain-visa.php">How to Obtain Visa</a></li>
                        <li><i class="fa-solid fa-circle-check"></i> Please make sure that you have a good and uninterrupted internet connection. If there is any interruption in the internet connection, you will be required to do the form again.</li>
                        <li><i class="fa-solid fa-circle-check"></i> Before you start the application form, please make sure that you have the following items ready as scanned copy, as this will be required to be uploaded at the end of the application form.
                            <ul class="numbered-list">
                                <li>1. Your passport/Citizenship as scanned copy.</li>
                                <li>2. Your good looking passport size photo as scanned copy JPEJ image file.</li>
                                <li>3. Marksheet of your School Leaving Certificate as scanned copy.</li>
                                <li>4. 10+2 or equivalent transcript of records.</li>
                                <li>5. Character Certificate of 10+2 or equivalent.</li>
                                <li>6. Bachelor’s degree transcripts of records.</li>
                                <li>7. Bachelor’s degree Original Degree or provisional certificate.</li>
                                <li>8. IELTS/TOEFL Certificate if available.</li>
                                <li>9. Work experience certificate.</li>
                                <li>10. CV in chronological order.</li>
                                <li>11. Others if any.</li>
                            </ul>
                        </li>
                        <li><i class="fa-solid fa-circle-check"></i> The size of the individual files should not be greater than 500Kb but should be clear and eligible enough for the application processing.</li>
                        <li><i class="fa-solid fa-circle-check"></i> In case of problems during the upload you can also send your documents as email attachment to info@kiec.edu.np or if you have problems getting your documents scanned you can drop it to our office, where we shall do the scanning without any extra cost.</li>
                    </ul>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="enroll-form">
                    <div class="form">
                        <form>
                            <div class="form-group">
                                <label for="name"> Your Name<span>*</span></label>
                                <input type="name" class="form-control" id="name" placeholder="Enter your Name">
                            </div>
                            <div class="form-group">
                                <label for="nationality"> Nationality<span>*</span></label>
                                <input type="name" class="form-control" id="nationality" placeholder="Enter your Nationality">
                            </div>
                            <div class="form-group">
                                <label for="address">Address<span>*</span></label>
                                <input type="name" class="form-control" id="address" placeholder="Enter your Address">
                            </div>
                            <div class="form-group">
                                <label for="passport_number">Passport Number</label>
                                <input type="name" class="form-control" id="passport_number" placeholder="Enter Passport Number">
                            </div>
                            <div class="form-group">
                                <label for="proficiency_type">Proficiency Type</label>
                                <input type="text" class="form-control" id="proficiency_type" placeholder="Enter your Proficiency">
                            </div>
                            <div class="form-group">
                                <label for="proficiency_score">Proficiency Score</label>
                                <input type="number" class="form-control" id="proficiency_score" placeholder="Enter your Proficiency Score">
                            </div>
                            <div class="form-group">
                                <label for="current_education"> Current Education<span>*</span></label>
                                <input type="name" class="form-control" id="current_education" placeholder="Enter your Qualification">
                            </div>
                            <div class="form-group">
                                <label for="desired_education"> Desired Education</label>
                                <input type="name" class="form-control" id="desired_education" placeholder="Enter your Desired Course">
                            </div>
                            <div class="form-group">
                                <label for="institute_name">Institute Name<span>*</span></label>
                                <input type="name" class="form-control" id="institute_name" placeholder="Enter Institute Name">
                            </div>
                            <div class="form-group">
                                <label for="marital_status">Marital Status<span>*</span></label>
                                <input type="name" class="form-control" id="marital_status" placeholder="Enter Marital Status">
                            </div>
                            <div class="form-group">
                                <label for="contact">Mobile Number<span>*</span></label>
                                <input type="number" class="form-control" id="contact" placeholder="Enter Mobile Number">
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email<span>*</span></label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your Email">
                            </div>
                            <div class="form-group">
                                <label for="notes">Notes</label>
                                <textarea name="notes" id="notes" rows="5" placeholder="Enter Your Message" data-invmsg="Notes is invalid" aria-invalid="false"></textarea>
                            </div>

                            <button type="submit" class="slider-button">
                                <a class="" href="#">
                                    Send Application
                                </a>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>