<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWART INDUSTRIES</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="resources/swart new logo si.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="service.css">
</head>

<body class="body">


    <?php include 'header.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div>
                    <p class="text-center contactustext text-light">Contact us</p>
                </div>
                <div>
                    <div class="container p-5 contact-form">
                        <div class="text-center contact-image">
                            <img src="resources/swart new logo si.png" alt="rocket_contact" style="" />
                        </div>
                        <form method="post">
                            <h3>Drop Us a Message</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text"  class="form-control" placeholder="Your Name *" id="name" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text"  class="form-control" placeholder="Your Email *" id="email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Phone Number *" id="mobile"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="button" class="btnContact" value="Send Message" onclick="contactmsgsend();" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea  class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" id="msg"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <?php include "footer.php"; ?>

    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type='text/javascript'></script>
    <script src="script.js"></script>
</body>

</html>