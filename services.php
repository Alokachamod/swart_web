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
                        <button class="sibtn col-4" onclick="opendelivermodel();">
                            <img src="resources/fast-delivery.png" alt="icon" class=" sicon">
                        </button>
                        <button class="sibtn col-4" onclick="openafterservicemodal()">
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


                                        <div class="delivery-details">
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
                <!--deliver model-->
                <div class="modal fade auto-off" id="delivermodal" tabindex="-1" role="dialog" aria-labelledby="demoModal" aria-hidden="true" >
                    <div class="modal-dialog animated zoomInDown modal-dialog-centered" role="document">
                        <div class="modal-content">

                            <div class="container-fluid">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="row">

                                    <div class="py-5 text-center col-md-12 px-sm-5 ">
                                        <h2>Delivery </h2>
                                        <p class="text-muted">
                                        <div class="container delivery-details">
                                            <h1>Delivery Details</h1>

                                            <h2>1. Delivery Options</h2>
                                            <p><strong>Standard Delivery:</strong> Provide an estimated delivery time frame (e.g., 3-5 business days).</p>
                                            <p><strong>Express Delivery:</strong> Offer faster delivery options with a specified time frame (e.g., 1-2 business days).</p>
                                            <p><strong>Same Day Delivery:</strong> If available, specify cut-off times for orders to be eligible for same-day delivery.</p>

                                            <h2>2. Delivery Costs</h2>
                                            <p><strong>Standard Delivery Cost:</strong> Mention the cost for standard delivery.</p>
                                            <p><strong>Express Delivery Cost:</strong> Include the cost for express delivery.</p>
                                            <p><strong>Free Delivery:</strong> Highlight if there is free delivery for orders over a certain amount.</p>

                                            <h2>3. Delivery Regions</h2>
                                            <p><strong>Domestic Delivery:</strong> Specify if delivery is available nationwide.</p>
                                            <p><strong>International Delivery:</strong> Mention if you offer international shipping and any regions that are excluded.</p>
                                            <p><strong>Restrictions:</strong> Note any areas where delivery is not possible.</p>

                                            <h2>4. Delivery Partners</h2>
                                            <p>List the courier companies you use for deliveries (e.g., DHL, FedEx, UPS).</p>

                                            <h2>5. Order Tracking</h2>
                                            <p>Explain how customers can track their orders. Provide a tracking number and a link to the tracking page.</p>

                                            <h2>6. Estimated Delivery Times</h2>
                                            <p>Clearly state the estimated delivery time from the moment the order is placed until it arrives at the customer’s doorstep. Include different times for standard, express, and same-day delivery.</p>

                                            <h2>7. Handling and Processing Time</h2>
                                            <p>Explain the time it takes to process and handle orders before they are dispatched.</p>

                                            <h2>8. Delivery Notifications</h2>
                                            <p>Mention if customers will receive notifications regarding the status of their order, such as when it has been dispatched or is out for delivery.</p>

                                            <h2>9. Special Instructions</h2>
                                            <p>Allow customers to provide special instructions for delivery (e.g., leaving the package with a neighbor or in a safe place).</p>

                                            <h2>10. Contact Information</h2>
                                            <p>Provide customer service contact details for delivery-related inquiries.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--after service model-->
                <div class="modal fade auto-off" id="afterservicemodal" tabindex="-1" role="dialog" aria-labelledby="demoModal" aria-hidden="true">
                    <div class="modal-dialog animated zoomInDown modal-dialog-centered" role="document">
                        <div class="modal-content">

                            <div class="container-fluid">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="row">

                                    <div class="py-5 text-center col-md-12 px-sm-5 ">
                                        <h2>After Services </h2>
                                        <p class="text-muted">
                                        <div class="delivery-details">
                                            <h2>Device Repair</h2>
                                            <p>Description: Professional repair services for a wide range of devices including computers, smartphones, tablets, and other electronic gadgets.</p>
                                            <ul>
                                                <li>
                                                    <h4>Computer Repair:</h4>
                                                    <ul>
                                                        <li><strong>Hardware Repair:</strong> Fixing issues related to physical components like motherboard, hard drives, RAM, power supply, etc.</li>
                                                        <li><strong>Software Troubleshooting:</strong> Resolving software-related problems, such as operating system errors, application malfunctions, and viruses.</li>
                                                        <li><strong>Upgrades:</strong> Enhancing performance through hardware upgrades like increasing RAM, replacing hard drives with SSDs, etc.</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4>Mobile Device Repair:</h4>
                                                    <ul>
                                                        <li><strong>Screen Replacement:</strong> Fixing cracked or broken screens for smartphones and tablets.</li>
                                                        <li><strong>Battery Replacement:</strong> Replacing old or faulty batteries to restore optimal device performance.</li>
                                                        <li><strong>Other Repairs:</strong> Fixing issues with cameras, charging ports, buttons, and other components.</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4>Peripheral Device Repair:</h4>
                                                    <ul>
                                                        <li><strong>Printer Repair:</strong> Addressing issues with printers, including paper jams, connectivity problems, and print quality issues.</li>
                                                        <li><strong>Accessory Repair:</strong> Fixing problems with accessories like keyboards, mice, and external drives.</li>
                                                    </ul>
                                                </li>
                                            </ul>

                                            <h2>Technical Support</h2>
                                            <p>Description: Comprehensive technical support services to help clients with their technological needs, ensuring smooth operation and optimal performance of their devices and systems.</p>
                                            <ul>
                                                <li>
                                                    <h4>Remote Support:</h4>
                                                    <ul>
                                                        <li><strong>Troubleshooting:</strong> Providing remote assistance to diagnose and fix software and connectivity issues.</li>
                                                        <li><strong>Guidance:</strong> Offering step-by-step guidance for software installations, updates, and configurations.</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4>On-Site Support:</h4>
                                                    <ul>
                                                        <li><strong>Installation:</strong> Setting up and configuring hardware and software at the client's location.</li>
                                                        <li><strong>Maintenance:</strong> Performing routine maintenance to keep systems running efficiently, including cleaning, updates, and optimizations.</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4>Network Support:</h4>
                                                    <ul>
                                                        <li><strong>Setup and Configuration:</strong> Designing and implementing network solutions, including wired and wireless networks.</li>
                                                        <li><strong>Troubleshooting:</strong> Diagnosing and resolving network issues, such as connectivity problems and slow performance.</li>
                                                        <li><strong>Security:</strong> Implementing network security measures, including firewalls, antivirus software, and secure access protocols.</li>
                                                    </ul>
                                                </li>
                                            </ul>

                                            <h2>Other Services</h2>
                                            <p>Description: A range of specialized services to meet the diverse needs of clients, from data recovery to consulting and custom solutions.</p>
                                            <ul>
                                                <li>
                                                    <h4>Data Recovery:</h4>
                                                    <ul>
                                                        <li><strong>Recovery Services:</strong> Recovering lost, deleted, or corrupted data from hard drives, SSDs, USB drives, and other storage media.</li>
                                                        <li><strong>Backup Solutions:</strong> Setting up data backup systems to prevent data loss and ensure business continuity.</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4>Consulting Services:</h4>
                                                    <ul>
                                                        <li><strong>IT Consulting:</strong> Providing expert advice on IT infrastructure, software solutions, and technology strategies.</li>
                                                        <li><strong>Project Management:</strong> Assisting with the planning and execution of technology projects, ensuring they are completed on time and within budget.</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4>Custom Solutions:</h4>
                                                    <ul>
                                                        <li><strong>Software Development:</strong> Creating custom software applications tailored to the specific needs of clients.</li>
                                                        <li><strong>System Integration:</strong> Integrating various software and hardware systems to streamline operations and improve efficiency.</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4>Training and Education:</h4>
                                                    <ul>
                                                        <li><strong>Workshops and Seminars:</strong> Offering training sessions on various topics, such as software usage, cybersecurity best practices, and new technology trends.</li>
                                                        <li><strong>Personalized Training:</strong> Providing one-on-one training tailored to the individual needs of clients.</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include "footer.php"; ?>
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