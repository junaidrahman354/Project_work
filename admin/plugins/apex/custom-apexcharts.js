


// Simple Line Area

var sLineArea = {
    chart: {
        height: 350,
        type: 'area',
        toolbar: {
          show: false,
        }
    },
    // colors: ['#4361ee', '#888ea8'],
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth'
    },
    series: [{
        name: 'series1',
        data: [31, 40, 28, 51, 42, 109, 100]
    }, {
        name: 'series2',
        data: [11, 32, 45, 32, 34, 52, 41]
    }],

    xaxis: {
        type: 'datetime',
        categories: ["2018-09-19T00:00:00", "2018-09-19T01:30:00", "2018-09-19T02:30:00", "2018-09-19T03:30:00", "2018-09-19T04:30:00", "2018-09-19T05:30:00", "2018-09-19T06:30:00"],                
    },
    tooltip: {
        x: {
            format: 'dd/MM/yy HH:mm'
        },
    }
}

var chart = new ApexCharts(
    document.querySelector("#s-line-area"),
    sLineArea
);

chart.render();



// Simple Column Stacked

var sColStacked = {
    chart: {
        height: 350,
        type: 'bar',
        stacked: true,
        toolbar: {
          show: false,
        }
    },
    // colors: ['#4361ee', '#888ea8', '#e3e4eb', '#d3d3d3'],
    responsive: [{
        breakpoint: 480,
        options: {
            legend: {
                position: 'bottom',
                offsetX: -10,
                offsetY: 0
            }
        }
    }],
    plotOptions: {
        bar: {
            horizontal: false,
        },
    },
    series: [{
        name: 'PRODUCT A',
        data: [44, 55, 41, 67, 22, 43]
    },{
        name: 'PRODUCT B',
        data: [13, 23, 20, 8, 13, 27]
    },{
        name: 'PRODUCT C',
        data: [11, 17, 15, 15, 21, 14]
    },{
        name: 'PRODUCT D',
        data: [21, 7, 25, 13, 22, 8]
    }],
    xaxis: {
        type: 'datetime',
        categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT', '01/05/2011 GMT', '01/06/2011 GMT'],
    },
    legend: {
        position: 'right',
        offsetY: 40
    },
    fill: {
        opacity: 1
    },
}

var chart = new ApexCharts(
    document.querySelector("#s-col-stacked"),
    sColStacked
);

chart.render();



// Mixed Chart

var options = {
  chart: {
    height: 350,
    type: 'line',
    toolbar: {
      show: false,
    }
  },
  // colors: ['#4361ee', '#888ea8'],
  series: [{
    name: 'Website Blog',
    type: 'column',
    data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
  }, {
    name: 'Social Media',
    type: 'line',
    data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
  }],
  stroke: {
    width: [0, 4]
  },
  title: {
    text: 'Traffic Sources'
  },
  labels: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001', '06 Jan 2001', '07 Jan 2001', '08 Jan 2001', '09 Jan 2001', '10 Jan 2001', '11 Jan 2001', '12 Jan 2001'],
  xaxis: {
    type: 'datetime'
  },
  yaxis: [{
    title: {
      text: 'Website Blog',
    },

  }, {
    opposite: true,
    title: {
      text: 'Social Media'
    }
  }]

}

var chart = new ApexCharts(
  document.querySelector("#mixed-chart"),
  options
);

chart.render();


// Donut Chart


var donutChart = {
    chart: {
        height: 350,
        type: 'donut',
        toolbar: {
          show: false,
        }
    },
    // colors: ['#4361ee', '#888ea8', '#e3e4eb', '#d3d3d3'],
    series: [44, 55, 41, 17],
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
        }
    }]
}

var donut = new ApexCharts(
    document.querySelector("#donut-chart"),
    donutChart
);

donut.render();


// Radial Chart

var radialChart = {
    chart: {
        height: 350,
        type: 'radialBar',
        toolbar: {
          show: false,
        }
    },
    // colors: ['#4361ee', '#888ea8', '#e3e4eb', '#d3d3d3'],
    plotOptions: {
        radialBar: {
            dataLabels: {
                name: {
                    fontSize: '22px',
                },
                value: {
                    fontSize: '16px',
                },
                total: {
                    show: true,
                    label: 'Total',
                    formatter: function (w) {
                        // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                        return 249
                    }
                }
            }
        }
    },
    series: [44, 55, 67, 83],
    labels: ['Apples', 'Oranges', 'Bananas', 'Berries'],    
}

var chart = new ApexCharts(
    document.querySelector("#radial-chart"),
    radialChart
);

chart.render();