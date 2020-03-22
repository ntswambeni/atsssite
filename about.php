<?php
    $page="about";
    include("header.php");
?>

<!-- about body -->
<section class="about-body banner banner-about">
    <div class="container-fluid">
        <h2>about us</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="rounded big-button">
                    <h3 class="mb-3 mt-3">MISSION</h3>
                    <a href="#"  data-toggle="modal" data-target="#mission">
                        <div class="ok-button rounded">
                            <p class="text-center">OK</p>
                        </div>

                    </a >
                </div>
            </div>
            <div class="col-lg-4">
                <div class="rounded big-button">
                    <h3 class="mb-3 mt-3">VISION</h3>
                    <a href="#"  data-toggle="modal" data-target="#vision">
                        <div class="ok-button rounded">
                            <p class="text-center">OK</p>
                        </div>

                    </a >
                </div>
            </div>
            <div class="col-lg-4">
                <div class="rounded big-button">
                    <h3 class="mb-3 mt-3">BACKGROUND</h3>
                    <a href="#"  data-toggle="modal" data-target="#background">
                        <div class="ok-button rounded">
                            <p class="text-center">OK</p>
                        </div>

                    </a >
                </div>
            </div>
            <div class=""></div>
        </div>
        <!-- Modal Mission -->
        <div id="mission" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">MISSION</h3>
                    </div>
                    <div class="modal-body">
                        <p>
                            To provide clients with <strong>reliable</strong> and professionally relevant
                            African Tracking Security Services that are measurable and a low risk to the
                            Retail and Logistics Industries, offering total reassurance and confidence by
                            using people who are <strong>highly skilled</strong> and fully committed to
                            <strong>service excellence</strong>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal Vision -->
        <div id="vision" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">VISION</h3>
                    </div>
                    <div class="modal-body">
                        <p>
                            To be the <strong>preferred Supplier</strong> of African Tracking Security Services in Africa.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal background -->
        <div id="background" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">BACKGROUND</h3>
                    </div>
                    <div class="modal-body">
                        <p>
                            All of the ATSS partners have worked in retail management field for many years in various senior positions.
                            This allows us to speak with authority in the Retail and Logistics Investigation field, and to focus our capacity
                            exclusively in this arena.
                        </p>
                        <p>
                            Our capacity to understand the Cash office/ Front End/ Receiving and Dispatch area comes from working
                            in this sphere for many years. In turn this allows us to investigate matters
                            efficiently and cost effectively.
                        </p>
                        <p>
                            We are able to deploy this capacity - at short notice - to any part of Mozambique.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>



<?php include("footer.php");?>
