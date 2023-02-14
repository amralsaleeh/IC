/*=========================================================================================
    File Name: chart-apex.js
    Description: Apexchart Examples
    ----------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

document.addEventListener('livewire:load', function () {

    'use strict';

    var $strokeColor = '#ebe9f1';

    var confirmColor = $('#confirm-color')

    // Line Chart - 1
    // --------------------------------------------------------------------
    var areaChartEl = document.querySelector('#line-area-chart'),
      areaChartConfig = {
        chart: {
            height: 200,
            type: 'line',
            toolbar: {
              show: false
            },
            zoom: {
              enabled: false
            }
          },
          grid: {
            borderColor: '#1fe076',
            strokeDashArray: 5,
            xaxis: {
              lines: {
                show: true
              }
            },
            yaxis: {
              lines: {
                show: false
              }
            },
            padding: {
              top: -30,
              bottom: -10
            }
          },
          stroke: {
            width: 3
          },
          colors: ['#1fe076','#1fe076'],
          series: [
            {
                name: '',
                data: [78, 78.9, 79, 79.3, 80, 81, 100]
            }
          ],
          markers: {
            size: 5,
            colors: '#1fe076',
            strokeColors: '#1fe076',
            strokeWidth: 2,
            strokeOpacity: 1,
            strokeDashArray: 0,
            fillOpacity: 0,
            discrete: [
              {
                seriesIndex: 0,
                dataPointIndex: 3,
                fillColor: '#ffffff',
                strokeWidth: 5,
                strokeOpacity: 1,
                size: 7
              }
            ],
            shape: 'circle',
            radius: 2,
            hover: {
              size: 9
            }
          },
          xaxis: {
            labels: {
              show: true,
              style: {
                fontSize: '5px'
              }
            },
            axisBorder: {
              show: false
            },
            axisTicks: {
              show: false
            }
          },
          yaxis: {
            show: false
          },
          tooltip: {
            x: {
              show: false
            }
          }
      };
    if (typeof areaChartEl !== undefined && areaChartEl !== null) {
      var areaChart = new ApexCharts(areaChartEl, areaChartConfig);
      areaChart.render();
    }

    // Line Chart - 2
    // --------------------------------------------------------------------
    var areaChartEl = document.querySelector('#line-area-chart-2'),
      areaChartConfig = {
        chart: {
            height: 200,
            type: 'line',
            toolbar: {
              show: false
            },
            zoom: {
              enabled: false
            }
          },
          grid: {
            borderColor: '#c9762c',
            strokeDashArray: 5,
            xaxis: {
              lines: {
                show: true
              }
            },
            yaxis: {
              lines: {
                show: false
              }
            },
            padding: {
              top: -30,
              bottom: -10
            }
          },
          stroke: {
            width: 3
          },
          colors: ['#c9762c','#c9762c'],
          series: [
            {
                name: '',
                data: [23, 22.2, 22.1, 22, 18.2, 19, 20]
            }
          ],
          markers: {
            size: 5,
            colors: '#c9762c',
            strokeColors: '#c9762c',
            strokeWidth: 2,
            strokeOpacity: 1,
            strokeDashArray: 0,
            fillOpacity: 0,
            discrete: [
              {
                seriesIndex: 0,
                dataPointIndex: 3,
                fillColor: '#ffffff',
                strokeWidth: 5,
                strokeOpacity: 1,
                size: 7
              }
            ],
            shape: 'circle',
            radius: 2,
            hover: {
              size: 9
            }
          },
          xaxis: {
            labels: {
              show: true,
              style: {
                fontSize: '5px'
              }
            },
            axisBorder: {
              show: false
            },
            axisTicks: {
              show: false
            },
          },
          xaxis: {
            categories: [
              '1',
              '2',
              '3',
              '4',
              '5',
              '6',
              '7',
              '8',
              '9',
              '10',
              '11',
              '12'
            ]
          },
          yaxis: {
            show: false
          },
          tooltip: {
            x: {
              show: false
            }
          }
      };
    if (typeof areaChartEl !== undefined && areaChartEl !== null) {
      var areaChart = new ApexCharts(areaChartEl, areaChartConfig);
      areaChart.render();
    }

    // Area Chart
    // --------------------------------------------------------------------
    var areaChartE2 = document.querySelector('#sales-visit-chart'),
      areaChartConfigg = {
        chart: {
          height: 400,
          type: 'radar',
          fontFamily: 'GumelaArabic-Regular',
          dropShadow: {
            enabled: true,
            blur: 8,
            left: 1,
            top: 1,
            opacity: 0.2
          },
          toolbar: {
            show: false
          },
          offsetY: 5
        },
        series: [
          {
              name: 'الهدف',
              data: [100, 100, 100, 100, 100, 100, 100, 100, 100]
          },
          {
            name: 'الحالية',
            data: [75, 73, 90, 92, 86, 76, 75, 90, 100]
          }
        ],
        stroke: {
          width: 1
        },
        colors: ['#14ae65', '#aee554' ],
        plotOptions: {
          radar: {
            polygons: {
              strokeColors: [$strokeColor, 'transparent', 'transparent', 'transparent', 'transparent', 'transparent'],
              connectorColors: 'transparent'
            }
          }
        },
        fill: {
          opacity: [0.2, 0.6]
        },
        markers: {
          size: 0
        },
        legend: {
          show: false
        },
        xaxis: {
              categories: ['الرقبة', 'الكتاف', 'الذراع', 'البطن', 'الفخذ', 'السمانة', 'الخصر', 'الساعد', 'الصدر'],
              labels: {
              show: true,
              style: {
                  colors: ["#a8a8a8"],
                  fontSize: "16px"
              }
              }
          },
        dataLabels: {
          enabled: false,
          background: {
            foreColor: [$strokeColor, $strokeColor, $strokeColor, $strokeColor, $strokeColor, $strokeColor]
          }
        },
        yaxis: {
          show: false,
          min: 0,
          max: 136,
          tickAmount: 4,
        },
        grid: {
          show: false,
          padding: {
            bottom: -27
          }
        }
      };
      if (typeof areaChartE2 !== undefined && areaChartE2 !== null) {
        var areaChart = new ApexCharts(areaChartE2, areaChartConfigg);
        areaChart.render();
      }

    // Alerts
    // --------------------------------------------------------------------
    if (confirmColor.length) {
        confirmColor.on('click', function () {
          Swal.fire({
            title: 'هل أنت متأكد؟',
            text: "لن تتمكن من التراجع عن التعديل!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'نعم',
            cancelButtonText: 'تجاهل',
            customClass: {
              confirmButton: 'btn btn-primary',
              cancelButton: 'btn btn-outline-danger ms-1'
            },
            buttonsStyling: false
          }).then(function (result) {
            if (result.value) {
              Swal.fire({
                icon: 'success',
                title: 'تم بنجاح',
                text: 'تم حفظ جميع التغيرات',
                customClass: {
                  confirmButton: 'btn btn-success'
                }
              })
            }
          })
        })
      }
  });
