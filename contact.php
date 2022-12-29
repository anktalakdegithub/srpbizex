<?php 
$page_title="Contact Us-SRP BizExcell";
$page_description="Our services are designed based on the issue faced by industry – we can work on overall Initiatives / projects to improve the business or standalone Training & customer handling issues…";
$page_keywords='Founder, Lean,Six Sigma, Transformation,black belt projects, 730 green belt projects,CSAT,NPS';

include('header.php');?>
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Contact Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
<!-- Contact Start -->
<div class="container-xxl py-md-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Contact Us</div>
                <h2 class="display-6 mb-5">If You Have Any Query, Please Contact Us</h2>

                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="tel" placeholder="Subject">
                                <label for="subject">Contact Number</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="msg"
                                    style="height: 70px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary py-2 px-3 me-3" type="button" id="sendmsg">
                                Send Message
                                <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </button>
                        </div>
                        <div id="msgs"></div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow fadeIn my-auto justify-content-center " data-wow-delay="0.5s"
                style="min-height: 450px;">
                <div class="position-relative rounded overflow-hidden h-100 ">

                    <div class="row mx-md-5">
                        <h3 class="display-6 mb-5">Contact Us</h3>
                        <div class="col-12 mb-4">
                            <h5><i class="pe-2 fa fa-map-marker-alt "></i> Address:</h5>
                            <!-- <p class="pt-2">Anand Nagar, Thane, Maharashtra.</p> -->
                            <p class="pt-2">Thane, Maharashtra.</p>
                        </div>
                        <div class="col-12 mb-4">
                            <h5><i class="pe-2 fa fa-envelope "></i> Email Id:</h5>
                            <p class="pt-2"><a class="text-dark"
                                    href="mailto:sagar.pawar@srpbizex.com">sagar.pawar@srpbizex.com</a></p>
                        </div>
                        <div class="col-12 mb-4">
                            <h5><i class="pe-2 fa fa-phone-alt "></i> Contact Number:</h5>
                            <p class="pt-2">+91 9167773829,</p>
                            <p class="pt-1">+91 9823532788</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<!-- Footer Start -->
<?php include('footer.php');?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
$('#sendmsg').on('click', function() {

    $('#sendmsg').text('Please Wait..').attr('disabled', true);
    //   alert();
    var name = $('#name').val();
    var email = $('#email').val();
    var connum = $('#tel').val();
    var msg = $('#msg').val();
    var subject = $('#subject').val();

    $.ajax({
        url: "savecondata.php",
        data: {
            'name': name,
            'email': email,
            'connum': connum,
            'msg': msg,
            'subject': subject
        },
        dataType: "json",
        type: "post",
        success: function(data) {

            //  debugger;
            if (data.code == "404") {
                $('#msgs').html('<div class="alert alert-danger mt-3" role="alert">' + data.msg +
                    '</div>');
                $('#sendmsg').text('Send Message').attr('disabled', false);
            } else {
                $('#msgs').html('<div class="alert alert-success mt-3" role="alert">' + data.msg +
                    '</div>');
                $('#sendmsg').text('Send Message').attr('disabled', false);

            }

        }
    });
});
</script>