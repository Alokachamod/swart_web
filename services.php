<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWART INDUSTRIES</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="resources\swart new logo                           S.png">
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
                <div class="sbody">
                    <h1 class="text-center uch">Services</h1>
                    <div class=" justify-content-center d-flex">
                        <button class="sibtn col-4" onclick="openwarrantymodel();">
                            <img src="resources/guarantee.png" alt="icon" class=" sicon">
                        </button>
                        <button class="sibtn col-4">
                            <img src="resources/fast-delivery.png" alt="icon" class=" sicon">
                        </button>
                        <button class="sibtn col-4">
                            <img src="resources/technical-support.png" alt="icon" class=" sicon">
                        </button>
                    </div>

                </div>
                <!--warranty model-->
                <div class="modal fade auto-off" id="warrantymodal" tabindex="-1" role="dialog" aria-labelledby="demoModal" aria-hidden="true">
                    <div class="modal-dialog animated zoomInDown modal-dialog-centered" role="document">
                        <div class="modal-content">

                            <div class="container-fluid">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="row">

                                    <div class="py-5 text-center col-md-12 px-sm-5 ">
                                        <h2>Warranty</h2>
                                        <p class="text-muted">


                                        <div class="container warranty-section">
                                            <h2>Warranty Terms</h2>

                                            <h5>1. Warranty Period</h5>
                                            <p><strong>Duration:</strong> Specify the length of the warranty period, which could be something like 1 year, 2 years, or a specific number of months from the date of purchase or deployment.</p>
                                            <p><strong>Coverage Start Date:</strong> Clearly state when the warranty period begins (e.g., from the date of purchase, date of installation, or date of activation).</p>

                                            <h5>2. What's Covered</h5>
                                            <p><strong>Scope of Warranty:</strong> Describe what issues or defects are covered under the warranty. This might include functionality issues, performance defects, security vulnerabilities, or compatibility problems.</p>
                                            <p><strong>Services Included:</strong> Specify what types of services are included under the warranty, such as bug fixes, security patches, performance optimizations, or technical support.</p>

                                            <h5>3. What's Not Covered</h5>
                                            <p><strong>Exclusions:</strong> Clearly outline what is not covered by the warranty. This might include damages caused by misuse, unauthorized modifications, third-party integrations, or natural disasters.</p>
                                            <p><strong>Limitations:</strong> Mention any limitations of the warranty, such as wear and tear, cosmetic damages, or issues arising from improper installation.</p>

                                            <h5>4. How to Claim Warranty</h5>
                                            <p><strong>Contact Information:</strong> Provide detailed contact information for the warranty claims department, including email, phone number, and possibly a physical address.</p>
                                            <p><strong>Claim Process:</strong></p>
                                            <ul>
                                                <li><strong>Initial Contact:</strong> Describe how to initiate a warranty claim, such as contacting customer support or submitting a warranty claim form online.</li>
                                                <li><strong>Required Information:</strong> List the information required to process the claim, such as proof of purchase, description of the issue, and any relevant documentation or screenshots.</li>
                                                <li><strong>Evaluation:</strong> Explain the evaluation process, including how the claim will be assessed and the typical timeframe for a response.</li>
                                                <li><strong>Resolution:</strong> Detail the steps that will be taken to resolve the issue, which might include repairing the defect, providing a replacement, or issuing a refund.</li>
                                            </ul>

                                            <h5>5. Customer Responsibilities</h5>
                                            <p><strong>Proper Use:</strong> State that the product or service must be used according to the provided instructions and guidelines.</p>
                                            <p><strong>Timely Reporting:</strong> Emphasize the importance of reporting issues as soon as they are detected to avoid further complications.</p>

                                            <h5>6. Legal Terms</h5>
                                            <p><strong>Jurisdiction:</strong> Mention the legal jurisdiction that governs the warranty terms.</p>
                                            <p><strong>Changes to Warranty:</strong> State that the company reserves the right to modify the warranty terms, with notice provided to customers.</p>

                                            <h5>7. Additional Support</h5>
                                            <p><strong>Extended Warranty Options:</strong> If applicable, provide information on any extended warranty plans that customers can purchase.</p>
                                            <p><strong>Technical Support:</strong> Highlight the availability of technical support outside the warranty scope, including contact details and potential costs.</p>
                                        </div>

                                        </p>
                                        <form>
                                            <button type="submit" class="btn btn-cstm-dark btn-block btn-cta" data-dismiss="modal" aria-label="Close">close </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include "footer.php"; ?>
            </div>
        </div>
    </div>
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