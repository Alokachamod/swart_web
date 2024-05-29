<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sign in | SWART INDUSTRIES</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="resources\profile for swart.jpg">
</head>

<body class="mainbody">
    <div class="container-fluid justify-content-center" style="margin-top: 100px;">
        <div class="row align-content-center">

            <div class="col-12 ">
                <div class="row">

                    <div class="col-12">
                        <p class="text-center text-light title01">Hi, Welcome to SWART Admins.</p>
                    </div>

                </div>
            </div>

            <div class="p-5 col-12 ">
                <div class="row">
                    <div class="col-6 d-none d-lg-block"></div>

                    <div class="col-12 col-lg-6 d-block glass">
                        <div class="row g-3">
                            <div class="col-12">
                                <p class="title02 text-light">Sign In to your Account.</p>
                            </div>
                            <div class="col-12">
                                <label class="form-label text-light">Email</label>
                                <input type="email" class="form-control" placeholder="ex : john@gmail.com" id="e" />
                            </div>
                            <div class="col-12 col-lg-8 d-grid offset-xl-2 ">
                                <button class="btn btn-primary text-light" onclick="adminVerification();">Send Verification Code</button>
                            </div>
                            <button class="button col-8 offset-2 " onclick="customerside();" >
                                <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
                                    <path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path>
                                </svg>
                                <span>Back to Customer Log In</span>
                            </button>
                            
                            
                        </div>
                    </div>
                </div>
            </div>

            <!--  -->

            <div class="modal" tabindex="-1" id="verificationModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Admin Verification</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label class="form-label">Enter Your Verification Code</label>
                            <input type="text" class="form-control" id="vcode">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="verify();">Verify</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--  -->

            <div class="text-center col-12 fixed-bottom">
                <p>&copy; 2024 SWART Industries | All Rights Reserved</p>
            </div>

        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>