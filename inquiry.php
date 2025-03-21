<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Apply for loans at iFinTech - Hassle-free financial solutions.">
<meta name="author" content="iFinTech">
<title>iFinTech - Inquiry</title>
<link rel="icon" href="fav.png" type="image/png">

<div class="wrapper-main">
    <?php include 'header.php'; ?>

    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">Loan Inquiry</h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Loan Inquiry</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="contact-main">
        <div class="container">
            <!-- Inquiry Form Section -->
            <div class="row">
                <div class="col-lg-12 mb-4 contact-left">
                    <h3>Apply for a Loan</h3>
                    <form name="loanInquiryForm" id="loanInquiryForm" action="save_inquiry.php" method="post" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <input type="text" placeholder="Full Name" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <input type="tel" placeholder="Phone Number" class="form-control" name="phone" required>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <input type="email" placeholder="Email Address" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <select class="form-control" name="loan_type" required>
                                    <option value="" selected disabled>Select Loan Type</option>
                                    <option value="Personal Loan">Personal Loan</option>
                                    <option value="Business Loan">Business Loan</option>
                                    <option value="Car Loan">Car Loan</option>
                                    <option value="Home Loan">Home Loan</option>
                                    <option value="Doctor Loan">Doctor Loan</option>
                                    <option value="LAP Loan">LAP Loan</option>
                                    <option value="CC Loan">CC Loan</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <textarea rows="5" placeholder="Message" class="form-control" name="message" maxlength="500" required></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Inquiry</button>
                    </form>
                </div>

                <!-- Contact Details -->
               
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</div>
