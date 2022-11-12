  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Welcome 
            </h3>
            <h6 class="font-weight-normal mb-0">Dashboard Kinerja Witel Sulteng </h6>
          </div>
          <div class="col-12 col-xl-4">
            <div class="justify-content-end d-flex">
            <!-- <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
              <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <i class="mdi mdi-calendar"></i> Today (21 Sep 2022)
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                <a class="dropdown-item" href="#">January - March</a>
                <a class="dropdown-item" href="#">March - June</a>
                <a class="dropdown-item" href="#">June - August</a>
                <a class="dropdown-item" href="#">August - November</a>
              </div>
            </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between">
            <p class="card-title">Kinerja Indikator Unit</p>
            <a href="#" class="text-info">View all</a>
            </div>
            <canvas id="kinerja-chart"></canvas>
          </div>
        </div>
      </div> -->
      <div class="col-md-12 grid-margin transparent">
        <div class="row">
          <div class="col-md-3 col-lg-3">
            <div class="card l-bg-cyan">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-paper-plane"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">All Indikator</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                <?php echo $totalindikator; ?>
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span><i class="fa fa-info-circle"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-blue" style="color:white;" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-3 col-lg-3">
              <div class="card l-bg-blue">
                  <div class="card-statistic-3 p-4">
                      <div class="card-icon card-icon-large"><i class="fas fa-book"></i></div>
                      <div class="mb-4">
                          <h5 class="card-title mb-0">Total KM</h5>
                      </div>
                      <div class="row align-items-center mb-2 d-flex">
                          <div class="col-8">
                              <h2 class="d-flex align-items-center mb-0">
                                <?php echo $totalKM; ?>
                              </h2>
                          </div>
                          <div class="col-4 text-right">
                              <span><i class="fa fa-info-circle"></i></span>
                          </div>
                      </div>
                      <div class="progress mt-1 " data-height="8" style="height: 8px;">
                          <div class="progress-bar l-bg-green" style="color:white;" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-3 col-lg-3">
            <div class="card l-bg-green">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-check-square"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Support Needed (Open)</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                              <?php echo $totalSN; ?>
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span><i class="fa fa-info-circle"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-orange" style="color:white;" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-3 col-lg-3">
              <div class="card l-bg-orange">
                  <div class="card-statistic-3 p-4">
                      <div class="card-icon card-icon-large"><i class="fas fa-bullseye"></i></div>
                      <div class="mb-4">
                          <h5 class="card-title mb-0">Action Plan</h5>
                      </div>
                      <div class="row align-items-center mb-2 d-flex">
                          <div class="col-8">
                              <h2 class="d-flex align-items-center mb-0">
                                <?php echo $totalAP; ?>
                              </h2>
                          </div>
                          <div class="col-4 text-right">
                              <span><i class="fa fa-info-circle"></i></span>
                          </div>
                      </div>
                      <div class="progress mt-1 " data-height="8" style="height: 8px;">
                          <div class="progress-bar l-bg-cyan" style="color:white;" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                <p class="card-title">Indikator Witel</p>
                <a href="<?php echo site_url('kinerja/') ?>" class="text-info">View all</a>
                </div>
                <canvas id="kinerja-chart-witel"></canvas>
                <!-- <br>
                <div class="badge badge-danger"><h6><?php //echo $witelSN; ?> Support Needed</h6></div>
                <div class="badge badge-success"><h6><?php //echo $witelAP; ?> Action Plan</h6></div> -->
                <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                <div id="kinerja-hero" class="chartjs-legend mt-4 mb-2"></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-title">Kinerja Area</p>
                <div class="table-responsive">
                    <table id="tableuser" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                          <tr>
                          <th class="border-bottom pb-2"><center>Area</center></th>
                          <th class="border-bottom pb-2"><center>Kinerja</center></th>
                          <th class="border-bottom pb-2"><center>Supp. Needed</center></th>
                          <th class="border-bottom pb-2"><center>Act. Plan</center></th>
                          <th class="border-bottom pb-2"><center>More</center></th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php $getarea=$this->db->query("SELECT DISTINCT(teritory) FROM `kinerja`")->result(); ?>
                        <?php $no=1; foreach ($getarea as $rowarea) : ?>
                          <tr>
                            <td style="vertical-align:middle;"><?php echo $this->db->query("select * from teritory where id_teritory='$rowarea->teritory'")->row()->teritory; ?></td>
                            <td style="vertical-align:middle;"><center><div class="badge badge-primary"><?php echo $this->db->query("select * from kinerja where teritory='$rowarea->teritory'")->num_rows(); ?></div></center></td>
                            <td style="vertical-align:middle;">
                              <center>
                                <div class="badge badge-danger">
                                  <?php 
                                      $getjumlahSupport=$this->db->query("select * from kinerja inner join support on support.id_kinerja = kinerja.id_kinerja where kinerja.teritory='$rowarea->teritory'")->num_rows();
                                      echo $getjumlahSupport;
                                  ?>
                                </div>
                              </center>
                            </td>
                            <td style="vertical-align:middle;">
                              <center>
                                <div class="badge badge-danger">
                                  <?php 
                                      $getjumlahAP=$this->db->query("select * from kinerja inner join plan on plan.id_kinerja = kinerja.id_kinerja where kinerja.teritory='$rowarea->teritory'")->num_rows();
                                      echo $getjumlahAP;
                                  ?>
                                </div>
                              </center>
                            </td>
                            <td align="center" style="vertical-align:middle;">
                                <div class="btn-group">
                                    <a href="<?php echo site_url('kinerja/detail/'.$rowarea->teritory) ?>" class="btn btn-default"><center><i class="mdi mdi-format-list-bulleted" style="font-size:16px;" ></i></center></a>
                                </div>
                            </td>
                          </tr>
                        <?php $no++; endforeach;?>
                      </tbody>
                  </table>
                </div>

              </div>
            </div>
          </div>
          <!-- <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <p class="card-title">Indikator Datel</p>
                  <a href="#" class="text-info">View all</a>
                </div>
                <canvas id="kinerjadatel"></canvas>
                <br>
                <div class="badge badge-danger"><h6><?php //echo $datelSN; ?> Support Needed</h6></div>
                <div class="badge badge-success"><h6><?php //echo $datelAP; ?> Action Plan</h6></div>
              </div>
            </div>
          </div> -->
        </div>
        <!-- <div class="row">
          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                <p class="card-title">Indikator Hero</p>
                <a href="#" class="text-info">View all</a>
                </div>
                <canvas id="kinerja-chart-hero"></canvas>
                <br>
                <div class="badge badge-danger"><h6><?php //echo $heroSN; ?> Support Needed</h6></div>
                <div class="badge badge-success"><h6><?php //echo $heroAP; ?> Action Plan</h6></div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  <!--Dashboard -->
  <script type="text/javascript">
    (function($) {
    'use strict';
      $(function() {
        if ($("#order-chart").length) {
          var areaData = {
            labels: ["10","","","20","","","30","","","40","","", "50","","", "60","","","70"],
            datasets: [
              {
                data: [200, 480, 700, 600, 620, 350, 380, 350, 850, "600", "650", "350", "590", "350", "620", "500", "990", "780", "650"],
                borderColor: [
                  '#4747A1'
                ],
                borderWidth: 2,
                fill: false,
                label: "Orders"
              },
              {
                data: [400, 450, 410, 500, 480, 600, 450, 550, 460, "560", "450", "700", "450", "640", "550", "650", "400", "850", "800"],
                borderColor: [
                  '#F09397'
                ],
                borderWidth: 2,
                fill: false,
                label: "Downloads"
              }
            ]
          };
          var areaOptions = {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
              filler: {
                propagate: false
              }
            },
            scales: {
              xAxes: [{
                display: true,
                ticks: {
                  display: true,
                  padding: 10,
                  fontColor:"#6C7383"
                },
                gridLines: {
                  display: false,
                  drawBorder: false,
                  color: 'transparent',
                  zeroLineColor: '#eeeeee'
                }
              }],
              yAxes: [{
                display: true,
                ticks: {
                  display: true,
                  autoSkip: false,
                  maxRotation: 0,
                  stepSize: 200,
                  min: 200,
                  max: 1200,
                  padding: 18,
                  fontColor:"#6C7383"
                },
                gridLines: {
                  display: true,
                  color:"#f2f2f2",
                  drawBorder: false
                }
              }]
            },
            legend: {
              display: false
            },
            tooltips: {
              enabled: true
            },
            elements: {
              line: {
                tension: .35
              },
              point: {
                radius: 0
              }
            }
          }
          var revenueChartCanvas = $("#order-chart").get(0).getContext("2d");
          var revenueChart = new Chart(revenueChartCanvas, {
            type: 'line',
            data: areaData,
            options: areaOptions
          });
        }
        if ($("#order-chart-dark").length) {
          var areaData = {
            labels: ["10","","","20","","","30","","","40","","", "50","","", "60","","","70"],
            datasets: [
              {
                data: [200, 480, 700, 600, 620, 350, 380, 350, 850, "600", "650", "350", "590", "350", "620", "500", "990", "780", "650"],
                borderColor: [
                  '#4747A1'
                ],
                borderWidth: 2,
                fill: false,
                label: "Orders"
              },
              {
                data: [400, 450, 410, 500, 480, 600, 450, 550, 460, "560", "450", "700", "450", "640", "550", "650", "400", "850", "800"],
                borderColor: [
                  '#F09397'
                ],
                borderWidth: 2,
                fill: false,
                label: "Downloads"
              }
            ]
          };
          var areaOptions = {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
              filler: {
                propagate: false
              }
            },
            scales: {
              xAxes: [{
                display: true,
                ticks: {
                  display: true,
                  padding: 10,
                  fontColor:"#fff"
                },
                gridLines: {
                  display: false,
                  drawBorder: false,
                  color: 'transparent',
                  zeroLineColor: '#575757'
                }
              }],
              yAxes: [{
                display: true,
                ticks: {
                  display: true,
                  autoSkip: false,
                  maxRotation: 0,
                  stepSize: 200,
                  min: 200,
                  max: 1200,
                  padding: 18,
                  fontColor:"#fff"
                },
                gridLines: {
                  display: true,
                  color:"#575757",
                  drawBorder: false
                }
              }]
            },
            legend: {
              display: false
            },
            tooltips: {
              enabled: true
            },
            elements: {
              line: {
                tension: .35
              },
              point: {
                radius: 0
              }
            }
          }
          var revenueChartCanvas = $("#order-chart-dark").get(0).getContext("2d");
          var revenueChart = new Chart(revenueChartCanvas, {
            type: 'line',
            data: areaData,
            options: areaOptions
          });
        }
        if ($("#kinerja-chart-hero").length) {
          var SalesChartCanvasHero = $("#kinerja-chart-hero").get(0).getContext("2d");
          var SalesChartHero = new Chart(SalesChartCanvasHero, {
            type: 'bar',
            data: {
              labels: [<?php foreach ($gethero as $rowhero) : echo '"'.$rowhero->teritory.'",'; endforeach; ?>],
              datasets: [
                {
                  label: 'Kinerja Indikator Hero',
                  data: [<?php foreach ($gethero as $rowhero) : echo $this->db->query("select * from indikator where teritory='$rowhero->id_teritory'")->num_rows().','; endforeach; ?>],
                  backgroundColor: '#4B49AC'
                }
              ]
            },
            options: {
              cornerRadius: 5,
              responsive: true,
              maintainAspectRatio: true,
              layout: {
                padding: {
                  left: 0,
                  right: 0,
                  top: 0,
                  bottom: 0
                }
              },
              scales: {
                yAxes: [{
                  display: true,
                  gridLines: {
                    display: true,
                    drawBorder: false,
                    color: "#F2F2F2"
                  },
                  ticks: {
                    display: true,
                    min: 0,
                    max: 20,
                    callback: function(value, index, values) {
                      return  value + '' ;
                    },
                    autoSkip: true,
                    maxTicksLimit: 10,
                    fontColor:"#6C7383"
                  }
                }],
                xAxes: [{
                  stacked: false,
                  ticks: {
                    beginAtZero: true,
                    fontColor: "#6C7383"
                  },
                  gridLines: {
                    color: "rgba(0, 0, 0, 0)",
                    display: false
                  },
                  barPercentage: 1
                }]
              },
              legend: {
                display: false
              },
              elements: {
                point: {
                  radius: 0
                }
              }
            },
          });

          function clickHandler(click){
            
            const points=SalesChartHero.getElementsAtEventForMode(click, 'nearest', {intersect: true},true);
            
            if (points[0]){
              const dataset = points[0]._datasetIndex;
              const index = points[0]._index;

              const labelwitel=SalesChartHero.data.labels[index];
              window.location.href = 'hero/' + labelwitel;
            }
          }

          SalesChartHero.canvas.onclick=clickHandler;

          document.getElementById('sales-legend').innerHTML = SalesChartHero.generateLegend();
        }
        if ($("#kinerjadatel").length) {
          var SalesChartCanvasDatel = $("#kinerjadatel").get(0).getContext("2d");
          var SalesChartDatel = new Chart(SalesChartCanvasDatel, {
            type: 'bar',
            data: {
              labels: [<?php foreach ($getdatel as $rowdatel) : echo '"'.$rowdatel->teritory.'",'; endforeach; ?>],
              datasets: [
                {
                  label: 'Dashboard Witel Sulteng',
                  data: [<?php foreach ($getdatel as $rowdatel) : echo $this->db->query("select * from indikator where teritory='$rowdatel->id_teritory'")->num_rows().','; endforeach; ?>],
                  backgroundColor: '#4B49AC'
                }
              ]
            },
            options: {
              cornerRadius: 5,
              responsive: true,
              maintainAspectRatio: true,
              layout: {
                padding: {
                  left: 0,
                  right: 0,
                  top: 20,
                  bottom: 0
                }
              },
              scales: {
                yAxes: [{
                  display: true,
                  gridLines: {
                    display: true,
                    drawBorder: false,
                    color: "#F2F2F2"
                  },
                  ticks: {
                    display: true,
                    min: 0,
                    max: 20,
                    callback: function(value, index, values) {
                      return  value + '' ;
                    },
                    autoSkip: true,
                    maxTicksLimit: 10,
                    fontColor:"#6C7383"
                  }
                }],
                xAxes: [{
                  stacked: false,
                  ticks: {
                    beginAtZero: true,
                    fontColor: "#6C7383"
                  },
                  gridLines: {
                    color: "rgba(0, 0, 0, 0)",
                    display: false
                  },
                  barPercentage: 1
                }]
              },
              legend: {
                display: false
              },
              elements: {
                point: {
                  radius: 0
                }
              }
            },
          });

          function clickHandler(click){
            
            const points=SalesChartDatel.getElementsAtEventForMode(click, 'nearest', {intersect: true},true);
            
            if (points[0]){
              const dataset = points[0]._datasetIndex;
              const index = points[0]._index;

              const labelwitel=SalesChartDatel.data.labels[index];
              window.location.href = 'datel/' + labelwitel;
            }
          }

          SalesChartDatel.canvas.onclick=clickHandler;

          document.getElementById('sales-legend').innerHTML = SalesChartDatel.generateLegend();
        }
        if ($("#kinerja-chart-witel").length) {
          var SalesChartCanvas = $("#kinerja-chart-witel").get(0).getContext("2d");
          var SalesChart = new Chart(SalesChartCanvas, {
            type: 'bar',
            data: {
              labels: [<?php foreach ($getunit as $rowunit) : echo '"'.$rowunit->singkatan.'",'; endforeach; ?>],
              datasets: [
                {
                  label: 'Kinerja Indikator Witel',
                  data: [<?php foreach ($getunit as $rowunit) : echo $this->db->query("select * from indikator where uic_witel='$rowunit->id_loker'")->num_rows().','; endforeach; ?>],
                  backgroundColor: '#4B49AC'
                }
              ]
            },
            options: {
              cornerRadius: 5,
              responsive: true,
              maintainAspectRatio: true,
              layout: {
                padding: {
                  left: 0,
                  right: 0,
                  top: 0,
                  bottom: 0
                }
              },
              scales: {
                yAxes: [{
                  display: true,
                  gridLines: {
                    display: true,
                    drawBorder: false,
                    color: "#F2F2F2"
                  },
                  ticks: {
                    display: true,
                    min: 0,
                    max: 20,
                    callback: function(value, index, values) {
                      return  value + '' ;
                    },
                    autoSkip: true,
                    maxTicksLimit: 10,
                    fontColor:"#6C7383"
                  }
                }],
                xAxes: [{
                  stacked: false,
                  ticks: {
                    beginAtZero: true,
                    fontColor: "#6C7383"
                  },
                  gridLines: {
                    color: "rgba(0, 0, 0, 0)",
                    display: false
                  },
                  barPercentage: 1
                }]
              },
              legend: {
                display: false
              },
              elements: {
                point: {
                  radius: 0
                }
              }
            },
          });

          /*
          function clickHandler(click){
            
            const points=SalesChart.getElementsAtEventForMode(click, 'nearest', {intersect: true},true);
            
            if (points[0]){
              const dataset = points[0]._datasetIndex;
              const index = points[0]._index;

              const labelwitel=SalesChart.data.labels[index];
              window.location.href = 'witel/' + labelwitel;
            }
          }

          SalesChart.canvas.onclick=clickHandler; */

          document.getElementById('sales-legend').innerHTML = SalesChart.generateLegend();
        }
        if ($("#sales-chart-dark").length) {
          var SalesChartCanvas = $("#sales-chart-dark").get(0).getContext("2d");
          var SalesChart = new Chart(SalesChartCanvas, {
            type: 'bar',
            data: {
              labels: ["Jan", "Feb", "Mar", "Apr", "May"],
              datasets: [{
                  label: 'Target Sales',
                  data: [480, 230, 470, 210, 330],
                  backgroundColor: '#98BDFF'
                },
                {
                  label: 'Online Sales',
                  data: [400, 340, 550, 480, 170],
                  backgroundColor: '#4B49AC'
                }
              ]
            },
            options: {
              cornerRadius: 5,
              responsive: true,
              maintainAspectRatio: true,
              layout: {
                padding: {
                  left: 0,
                  right: 0,
                  top: 20,
                  bottom: 0
                }
              },
              scales: {
                yAxes: [{
                  display: true,
                  gridLines: {
                    display: true,
                    drawBorder: false,
                    color: "#575757"
                  },
                  ticks: {
                    display: true,
                    min: 0,
                    max: 500,
                    callback: function(value, index, values) {
                      return  value + '$' ;
                    },
                    autoSkip: true,
                    maxTicksLimit: 10,
                    fontColor:"#F0F0F0"
                  }
                }],
                xAxes: [{
                  stacked: false,
                  ticks: {
                    beginAtZero: true,
                    fontColor: "#F0F0F0"
                  },
                  gridLines: {
                    color: "#575757",
                    display: false
                  },
                  barPercentage: 1
                }]
              },
              legend: {
                display: false
              },
              elements: {
                point: {
                  radius: 0
                }
              }
            },
          });
          document.getElementById('sales-legend').innerHTML = SalesChart.generateLegend();
        }
        if ($("#north-america-chart").length) {
          var areaData = {
            labels: ["Jan", "Feb", "Mar"],
            datasets: [{
                data: [100, 50, 50],
                backgroundColor: [
                  "#4B49AC","#FFC100", "#248AFD",
                ],
                borderColor: "rgba(0,0,0,0)"
              }
            ]
          };
          var areaOptions = {
            responsive: true,
            maintainAspectRatio: true,
            segmentShowStroke: false,
            cutoutPercentage: 78,
            elements: {
              arc: {
                  borderWidth: 4
              }
            },      
            legend: {
              display: false
            },
            tooltips: {
              enabled: true
            },
            legendCallback: function(chart) { 
              var text = [];
              text.push('<div class="report-chart">');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Offline sales</p></div>');
                text.push('<p class="mb-0">88333</p>');
                text.push('</div>');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Online sales</p></div>');
                text.push('<p class="mb-0">66093</p>');
                text.push('</div>');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Returns</p></div>');
                text.push('<p class="mb-0">39836</p>');
                text.push('</div>');
              text.push('</div>');
              return text.join("");
            },
          }
          var northAmericaChartPlugins = {
            beforeDraw: function(chart) {
              var width = chart.chart.width,
                  height = chart.chart.height,
                  ctx = chart.chart.ctx;
          
              ctx.restore();
              var fontSize = 3.125;
              ctx.font = "500 " + fontSize + "em sans-serif";
              ctx.textBaseline = "middle";
              ctx.fillStyle = "#13381B";
          
              var text = "90",
                  textX = Math.round((width - ctx.measureText(text).width) / 2),
                  textY = height / 2;
          
              ctx.fillText(text, textX, textY);
              ctx.save();
            }
          }
          var northAmericaChartCanvas = $("#north-america-chart").get(0).getContext("2d");
          var northAmericaChart = new Chart(northAmericaChartCanvas, {
            type: 'doughnut',
            data: areaData,
            options: areaOptions,
            plugins: northAmericaChartPlugins
          });
          document.getElementById('north-america-legend').innerHTML = northAmericaChart.generateLegend();
        }
        if ($("#north-america-chart-dark").length) {
          var areaData = {
            labels: ["Jan", "Feb", "Mar"],
            datasets: [{
                data: [100, 50, 50],
                backgroundColor: [
                  "#4B49AC","#FFC100", "#248AFD",
                ],
                borderColor: "rgba(0,0,0,0)"
              }
            ]
          };
          var areaOptions = {
            responsive: true,
            maintainAspectRatio: true,
            segmentShowStroke: false,
            cutoutPercentage: 78,
            elements: {
              arc: {
                  borderWidth: 4
              }
            },      
            legend: {
              display: false
            },
            tooltips: {
              enabled: true
            },
            legendCallback: function(chart) { 
              var text = [];
              text.push('<div class="report-chart">');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Offline sales</p></div>');
                text.push('<p class="mb-0">88333</p>');
                text.push('</div>');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Online sales</p></div>');
                text.push('<p class="mb-0">66093</p>');
                text.push('</div>');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Returns</p></div>');
                text.push('<p class="mb-0">39836</p>');
                text.push('</div>');
              text.push('</div>');
              return text.join("");
            },
          }
          var northAmericaChartPlugins = {
            beforeDraw: function(chart) {
              var width = chart.chart.width,
                  height = chart.chart.height,
                  ctx = chart.chart.ctx;
          
              ctx.restore();
              var fontSize = 3.125;
              ctx.font = "500 " + fontSize + "em sans-serif";
              ctx.textBaseline = "middle";
              ctx.fillStyle = "#fff";
          
              var text = "90",
                  textX = Math.round((width - ctx.measureText(text).width) / 2),
                  textY = height / 2;
          
              ctx.fillText(text, textX, textY);
              ctx.save();
            }
          }
          var northAmericaChartCanvas = $("#north-america-chart-dark").get(0).getContext("2d");
          var northAmericaChart = new Chart(northAmericaChartCanvas, {
            type: 'doughnut',
            data: areaData,
            options: areaOptions,
            plugins: northAmericaChartPlugins
          });
          document.getElementById('north-america-legend').innerHTML = northAmericaChart.generateLegend();
        }

        if ($("#south-america-chart").length) {
          var areaData = {
            labels: ["Jan", "Feb", "Mar"],
            datasets: [{
                data: [60, 70, 70],
                backgroundColor: [
                  "#4B49AC","#FFC100", "#248AFD",
                ],
                borderColor: "rgba(0,0,0,0)"
              }
            ]
          };
          var areaOptions = {
            responsive: true,
            maintainAspectRatio: true,
            segmentShowStroke: false,
            cutoutPercentage: 78,
            elements: {
              arc: {
                  borderWidth: 4
              }
            },      
            legend: {
              display: false
            },
            tooltips: {
              enabled: true
            },
            legendCallback: function(chart) { 
              var text = [];
              text.push('<div class="report-chart">');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Offline sales</p></div>');
                text.push('<p class="mb-0">495343</p>');
                text.push('</div>');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Online sales</p></div>');
                text.push('<p class="mb-0">630983</p>');
                text.push('</div>');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Returns</p></div>');
                text.push('<p class="mb-0">290831</p>');
                text.push('</div>');
              text.push('</div>');
              return text.join("");
            },
          }
          var southAmericaChartPlugins = {
            beforeDraw: function(chart) {
              var width = chart.chart.width,
                  height = chart.chart.height,
                  ctx = chart.chart.ctx;
          
              ctx.restore();
              var fontSize = 3.125;
              ctx.font = "600 " + fontSize + "em sans-serif";
              ctx.textBaseline = "middle";
              ctx.fillStyle = "#000";
          
              var text = "76",
                  textX = Math.round((width - ctx.measureText(text).width) / 2),
                  textY = height / 2;
          
              ctx.fillText(text, textX, textY);
              ctx.save();
            }
          }
          var southAmericaChartCanvas = $("#south-america-chart").get(0).getContext("2d");
          var southAmericaChart = new Chart(southAmericaChartCanvas, {
            type: 'doughnut',
            data: areaData,
            options: areaOptions,
            plugins: southAmericaChartPlugins
          });
          document.getElementById('south-america-legend').innerHTML = southAmericaChart.generateLegend();
        }
        if ($("#south-america-chart-dark").length) {
          var areaData = {
            labels: ["Jan", "Feb", "Mar"],
            datasets: [{
                data: [60, 70, 70],
                backgroundColor: [
                  "#4B49AC","#FFC100", "#248AFD",
                ],
                borderColor: "rgba(0,0,0,0)"
              }
            ]
          };
          var areaOptions = {
            responsive: true,
            maintainAspectRatio: true,
            segmentShowStroke: false,
            cutoutPercentage: 78,
            elements: {
              arc: {
                  borderWidth: 4
              }
            },      
            legend: {
              display: false
            },
            tooltips: {
              enabled: true
            },
            legendCallback: function(chart) { 
              var text = [];
              text.push('<div class="report-chart">');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Offline sales</p></div>');
                text.push('<p class="mb-0">495343</p>');
                text.push('</div>');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Online sales</p></div>');
                text.push('<p class="mb-0">630983</p>');
                text.push('</div>');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Returns</p></div>');
                text.push('<p class="mb-0">290831</p>');
                text.push('</div>');
              text.push('</div>');
              return text.join("");
            },
          }
          var southAmericaChartPlugins = {
            beforeDraw: function(chart) {
              var width = chart.chart.width,
                  height = chart.chart.height,
                  ctx = chart.chart.ctx;
          
              ctx.restore();
              var fontSize = 3.125;
              ctx.font = "600 " + fontSize + "em sans-serif";
              ctx.textBaseline = "middle";
              ctx.fillStyle = "#fff";
          
              var text = "76",
                  textX = Math.round((width - ctx.measureText(text).width) / 2),
                  textY = height / 2;
          
              ctx.fillText(text, textX, textY);
              ctx.save();
            }
          }
          var southAmericaChartCanvas = $("#south-america-chart-dark").get(0).getContext("2d");
          var southAmericaChart = new Chart(southAmericaChartCanvas, {
            type: 'doughnut',
            data: areaData,
            options: areaOptions,
            plugins: southAmericaChartPlugins
          });
          document.getElementById('south-america-legend').innerHTML = southAmericaChart.generateLegend();
        }

        function format ( d ) {
          // `d` is the original data object for the row
          return '<table cellpadding="5" cellspacing="0" border="0" style="width:100%;">'+
              '<tr class="expanded-row">'+
                  '<td colspan="8" class="row-bg"><div><div class="d-flex justify-content-between"><div class="cell-hilighted"><div class="d-flex mb-2"><div class="mr-2 min-width-cell"><p>Policy start date</p><h6>25/04/2020</h6></div><div class="min-width-cell"><p>Policy end date</p><h6>24/04/2021</h6></div></div><div class="d-flex"><div class="mr-2 min-width-cell"><p>Sum insured</p><h5>$26,000</h5></div><div class="min-width-cell"><p>Premium</p><h5>$1200</h5></div></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-4"><p>Quote no.</p><h6>Incs234</h6></div><div class="mr-2"><p>Vehicle Reg. No.</p><h6>KL-65-A-7004</h6></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-4"><p>Policy number</p><h6>Incsq123456</h6></div><div class="mr-2"><p>Policy number</p><h6>Incsq123456</h6></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-3 d-flex"><div class="highlighted-alpha"> A</div><div><p>Agent / Broker</p><h6>Abcd Enterprices</h6></div></div><div class="mr-2 d-flex"> <img src="../../images/faces/face5.jpg" alt="profile"/><div><p>Policy holder Name & ID Number</p><h6>Phillip Harris / 1234567</h6></div></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-4"><p>Branch</p><h6>Koramangala, Bangalore</h6></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-4"><p>Channel</p><h6>Online</h6></div></div></div></div></td>'
              '</tr>'+
          '</table>';
      }
      var table = $('#example').DataTable( {
        "ajax": "js/data.txt",
        "columns": [
            { "data": "Quote" },
            { "data": "Product" },
            { "data": "Business" },
            { "data": "Policy" }, 
            { "data": "Premium" }, 
            { "data": "Status" }, 
            { "data": "Updated" }, 
            {
              "className":      'details-control',
              "orderable":      false,
              "data":           null,
              "defaultContent": ''
            }
        ],
        "order": [[1, 'asc']],
        "paging":   false,
        "ordering": true,
        "info":     false,
        "filter": false,
        columnDefs: [{
          orderable: false,
          className: 'select-checkbox',
          targets: 0
        }],
        select: {
          style: 'os',
          selector: 'td:first-child'
        }
      } );
    $('#example tbody').on('click', 'td.details-control', function () {
      var tr = $(this).closest('tr');
      var row = table.row( tr );

      if ( row.child.isShown() ) {
          // This row is already open - close it
          row.child.hide();
          tr.removeClass('shown');
      }
      else {
          // Open this row
          row.child( format(row.data()) ).show();
          tr.addClass('shown');
      }
    } );
      
      });
    })(jQuery);

  </script>

<script>
    //menampilkan data ketabel dengan plugin datatables
    $('#tableuser').DataTable();

    //menampilkan modal dialog saat tombol hapus ditekan
    $('#tableuser').on('click', '.item-hapus', function() {
        //ambil data dari atribute data 
        var id = $(this).attr('data');
        $('#myModalDelete').modal('show');
        //ketika tombol lanjutkan ditekan, data id akan dikirim ke method delete 
        //pada controller mahasiswa
        $('#btdelete').unbind().click(function() {
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url() ?>mahasiswa/delete/',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    $('#myModalDelete').modal('hide');
                    location.reload();
                }
            });
        });
    });
</script>