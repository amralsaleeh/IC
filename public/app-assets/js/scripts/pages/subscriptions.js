document.addEventListener('livewire:load', function () {

    'use strict';

    var sessionChart;
    var sessionChartOptions;

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
                data: [78, 78.9, 79, 79.3, 80, 81, 82]
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

    // Session Chart
    // --------------------------------------------------------------------
    var $sessionChart = document.querySelector('#session-chart');
    sessionChartOptions = {
        chart: {
          type: 'donut',
          height: 300,
          toolbar: {
            show: false
          }
        },
        dataLabels: {
          enabled: false
        },
        series: [58.6, 34.9, 6.5, 6.5, 6.5],
        legend: { show: false },
        comparedResult: [2, -3, 8],
        labels: ['Desktop', 'Mobile', 'Tablet', 'Tablet', 'Tablet'],
        stroke: { width: 0 },
        colors: [window.colors.solid.primary, window.colors.solid.warning, window.colors.solid.danger]
      };
      sessionChart = new ApexCharts($sessionChart, sessionChartOptions);
      sessionChart.render();

});
