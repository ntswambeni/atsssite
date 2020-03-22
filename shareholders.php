<?php
    $page="about";
    include("header.ohp");
?>

<section class="services py-5">
    <div class="container-fluid py-md-4 mt-md-3">
        <h2 class="heading-agileinfo">SHAREHOLDERS</h2>

        <div class="row inner_w3l_agile_grids-1 mt-md-5 pt-5 mr-4">
            <div class="col-md-4 w3layouts_news_left_grid1">
                <a href="#"  data-toggle="modal" data-target="#mission">
                    <div class="new_top rounded shareholder">
                        <img class="position-relative img-perfil" src="images/stiian.jpg">
                        <h3 class="mb-3 mt-3">#</h3>
                        <a href="#"  data-toggle="modal" data-target="#stiaan">
                            <div class="ok-button rounded mb-5">
                                <p class="text-center">PROFILE</p>
                            </div>

                        </a >

                    </div>
                </a >
            </div>
            <div class="col-md-4 w3layouts_news_left_grid2">
                <a href="#" data-toggle="modal" data-target="#vision">
                    <div class="new_top rounded shareholder">
                        <img class="position-relative img-perfil" src="images/carlos.jpg">
                        <h3 class="mb-3 mt-3">AURÉLIO CARLOS MAZIAS</h3>
                        <a href="#"  data-toggle="modal" data-target="#carlos">
                            <div class="ok-button rounded mb-5">
                                <p class="text-center">PROFILE</p>
                            </div>

                        </a >
                    </div>
                </a>
            </div>
            <div class="col-md-4 w3layouts_news_left_grid3">
                <a href="#" data-toggle="modal" data-target="#background">
                    <div class="new_top rounded shareholder">
                        <img class="position-relative img-perfil" src="images/stiian.jpg">
                        <h3 class="mb-3 mt-3">STIAAN VILJOEN</h3>
                        <a href="#"  data-toggle="modal" data-target="#stiaan">
                            <div class="ok-button rounded mb-5">
                                <p class="text-center">PROFILE</p>
                            </div>

                        </a >

                    </div>
                </a>
            </div>
        </div>
        <!-- Modal Mission -->
        <div id="mission" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">MISSION</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Provide customers with reliable, professional, measurable, low-risk Security Management solutions
                            for the Retail and Logistics industries, offering complete peace of mind and conﬁdence using highly qualiﬁed
                            personnel fully committed to service excellence.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal carlos -->
        <div id="carlos" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Aurélio Carlos Mazias</h4>
                    </div>
                    <!-- <div class="modal-body">
                        <p>4º Ano concluído (último ano de licenciatura) em <strong>“Marketing internacional, pelo ISCIM – Instituto superior de comunicação</strong>

                            Preparação da Tese de impacto internacional das multinacionais no âmbito da responsabilidade social empresarial
                        </p>

                        <h5>Área funcional Experiência profissional</h5>
                        <ul>
                            <li><strong> Actualmente:</strong> Grupo Pérola Negra (Comercio Internacional)</li>

                            <li><strong> Função e cargo ocupado:</strong> Director de Marketing e vendas</li>

                               <h6>Outras habilidades</h6>

                            <li>Instrutor de fitness e karate</li>

                            <li>Presidente da federação Moçambicana de karate</li>
                        </ul>



                    </div> -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal stiian -->
        <div id="stiaan" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Stiaan Viljoen</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Stiaan Viljoen is an experienced Loss Control Practitioner and Security Consultant with more
                            than thirty (30) years' experience in the South African Retail Industry.
                            He completed a BA degree at the University of Pretoria in 1992, majoring in Psychology.
                            He has occupied various senior positions, among which were group Security Manager
                            at Stuttafords Stores and Loss Control Executive at CNA Stores, the latter was his appointment before establishing ATSS in 2001.
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
