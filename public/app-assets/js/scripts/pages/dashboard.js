$(window).on('load', function () {
    'use strict';

    // Colors (change name please)
    var flatPicker = $('.flat-picker'),
    // isRtl = $('html').attr('data-textdirection') === 'rtl',
    chartColors = {
      donut: {
        series1: '#1fe076',
        series2: '#c9762c',
        series3: '#1fe076', //#ff0000
        series4: '#00a0cc',
        series5: '#FFA1A1'
      }
    };

    var $trackBgColor = '#EBEBEB';
    var $waistColor = '#A460ED'; //#0D6032
    var $hipColor = '#5BC0EB';  //#8F541F

    var confirmColor = $('#confirm-color')

    // Variables
    var $weightChart = document.querySelector('#weightChart');
    var $fatChart = document.querySelector('#fatChart');
    var $waistChart = document.querySelector('#waistChart');
    var $hipChart = document.querySelector('#hipChart');
    var $GoalsChart = document.querySelector('#GoalsChart')
    var $PaymentChart = document.querySelector('#PaymentChart');

    var weightChartOptions;
    var fatChartOptions;
    var waistChartOptions;
    var hipChartOptions;
    var GoalsChartOptions;
    var PaymentChartOptions;

    var weightChart;
    var fatChart;
    var waistChart;
    var hipChart;
    var GoalsChart
    var PaymentChart;

    var isRtl = $('html').attr('data-textdirection') === 'rtl';

    // On load Toast
    // setTimeout(function () {
    //     toastr['success'](
    //     'برافو عليك ولاك',
    //     '👋 يا أهلا وسهلا بالحبيب',
    //     {
    //         closeButton: true,
    //         tapToDismiss: false,
    //         rtl: isRtl
    //     }
    //     );
    // }, 2000);

    // Weight Chart
    // ----------------------------------
    weightChartOptions = {
      chart: {
        height: 150,
        type: 'area',
        toolbar: {
          show: false
        },
        sparkline: {
          enabled: true
        },
        grid: {
          show: false,
          padding: {
            left: 0,
            right: 0
          }
        }
      },
      colors: ['#1fe076'],
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'smooth',
        width: 2.5
      },
      fill: {
        type: 'gradient',
        gradient: {
          shadeIntensity: 0.9,
          opacityFrom: 0.7,
          opacityTo: 0.5,
          stops: [0, 80, 100]
        }
      },
      series: [
        {
            name: '',
            data: [78, 78.5, 79, 79.3, 80, 81, 82]
        }
      ],
      xaxis: {
        labels: {
          show: false
        },
        axisBorder: {
          show: false
        }
      },
      yaxis: [
        {
          y: 0,
          offsetX: 0,
          offsetY: 0,
          padding: { left: 0, right: 0 }
        }
      ],
      tooltip: {
        x: { show: false }
      }
    };
    weightChart = new ApexCharts($weightChart, weightChartOptions);
    weightChart.render();

    // Fat Chart
    // ----------------------------------
    fatChartOptions = {
      chart: {
        height: 150,
        type: 'area',
        toolbar: {
          show: false
        },
        sparkline: {
          enabled: true
        },
        grid: {
          show: false,
          padding: {
            left: 0,
            right: 0
          }
        }
      },
      colors: ['#c9762c'],
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'smooth',
        width: 2.5
      },
      fill: {
        type: 'gradient',
        gradient: {
          shadeIntensity: 0.9,
          opacityFrom: 0.7,
          opacityTo: 0.5,
          stops: [0, 80, 100]
        }
      },
      series: [
        {
            name: '',
            data: [23, 22.2, 22.1, 22, 18.2]
        }
      ],
      xaxis: {
        labels: {
          show: false
        },
        axisBorder: {
          show: false
        }
      },
      yaxis: [
        {
          y: 0,
          offsetX: 0,
          offsetY: 0,
          padding: { left: 0, right: 0 }
        }
      ],
      tooltip: {
        x: { show: false }
      }
    };
    fatChart = new ApexCharts($fatChart, fatChartOptions);
    fatChart.render();

    // Waist Chart
    // ----------------------------------
    waistChartOptions = {
        chart: {
            height: 150,
            type: 'line',
            toolbar: {
              show: false
            },
            zoom: {
              enabled: false
            }
          },
          grid: {
            borderColor: $trackBgColor,
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
          colors: [$waistColor],
          series: [
            {
              name:'',
              data: [75, 75.3, 74, 73]
            }
          ],
          markers: {
            size: 5,
            colors: $waistColor,
            strokeColors: $waistColor,
            strokeWidth: 2,
            strokeOpacity: 1,
            strokeDashArray: 0,
            fillOpacity: 0,
            discrete: [
              {
                seriesIndex: 0,
                dataPointIndex: 3,
                fillColor: '#283046',
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
                fontSize: '0px'
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
    waistChart = new ApexCharts($waistChart, waistChartOptions);
    waistChart.render();

    // Hip Chart
    // ----------------------------------
    hipChartOptions = {
        chart: {
            height: 150,
            type: 'line',
            toolbar: {
              show: false
            },
            zoom: {
              enabled: false
            }
          },
          grid: {
            borderColor: $trackBgColor,
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
          colors: [$hipColor],
          series: [
            {
              name:'',
              data: [81, 80.6, 80, 78]
            }
          ],
          markers: {
            size: 5,
            colors: $hipColor,
            strokeColors: $hipColor,
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
                fontSize: '0px'
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
      hipChart = new ApexCharts($hipChart, hipChartOptions);
      hipChart.render();

    // Goal Chart
    // ----------------------------------
    GoalsChartOptions = {
    chart: {
        height: 300,
        type: 'radialBar',
        fontFamily: 'GumelaArabic-Regular'
      },
      colors: [chartColors.donut.series1, chartColors.donut.series2],
      plotOptions: {
        radialBar: {
          size: 185,
          hollow: {
            size: '25%'
          },
          track: {
            margin: 15
          },
          dataLabels: {
            name: {
              offsetY: -10,
              fontSize: '1.9rem',
            },
            value: {
              offsetY: 5,
              fontSize: '1.5rem',
            },
            total: {
              show: true,
              fontSize: '1.3rem',
              label: 'النتيجة',
              formatter: function (w) {
                return '60%';
              }
            }
          }
        }
      },
      grid: {
        padding: {
          top: -35,
          bottom: -30
        }
      },
      legend: {
        show: true,
        position: 'top'
      },
      stroke: {
        lineCap: 'round'
      },
      series: [70, 50],
      labels: ['الوزن', 'الدهون']
    };
    GoalsChart = new ApexCharts($GoalsChart, GoalsChartOptions);
    GoalsChart.render();

    // Payment Chart
    // ----------------------------------
    PaymentChartOptions = {
    chart: {
        height: 300,
        type: 'radialBar',
        fontFamily: 'GumelaArabic-Regular'
        },
        colors: [chartColors.donut.series3],
        plotOptions: {
        radialBar: {
            size: 185,
            startAngle: -140,
            endAngle: 140,
            hollow: {
            size: '45%'
            },
            track: {
            margin: 15
            },
            dataLabels: {
            name: {
                offsetY: -10,
                fontSize: '1.9rem',
            },
            value: {
                offsetY: 5,
                fontSize: '1.5rem',
            },
            total: {
                show: true,
                fontSize: '1.5rem',
                label: '28/9/2022',
                formatter: function (w) {
                return '75%';
                }
            }
            }
        }
        },
        grid: {
        padding: {
            top: -35,
            bottom: -30
        }
        },
        legend: {
        show: true,
        position: 'top'
        },
        stroke: {
        dashArray: 8
        },
        series: [75],
        labels: ['فعال'],
        fill: {
          type: 'gradient',
          gradient: {
            shade: 'dark',
            type: 'horizontal',
            shadeIntensity: 1,
            gradientToColors: ['#ff3300'],
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 100]
          }
        },
    };
    PaymentChart = new ApexCharts($PaymentChart, PaymentChartOptions);
    PaymentChart.render();

    // Form Alert
    // ----------------------------------
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

    // Alert
    // ----------------------------------
    Swal.fire({
        icon: 'warning',
        title: 'أهلاً وسهلاً بك',
        text: 'الرجاء تفعيل الإشتراك قبل إنتهائه',
        confirmButtonText: 'شكراً',
        customClass: {
        confirmButton: 'btn btn-primary'
        },
        buttonsStyling: false
    })

});
