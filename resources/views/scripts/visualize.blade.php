<script>

var data = [
    ['ng-ri', 5],
    ['ng-kt', 108],
    ['ng-so', 19],
    ['ng-za', 293],
    ['ng-yo', 0],
    ['ng-ke', 13],
    ['ng-ad', 436],
    ['ng-bo', 18],
    ['ng-ak', 4],
    ['ng-ab', 3],
    ['ng-im', 4],
    ['ng-by', 1],
    ['ng-be', 2539],
    ['ng-cr', 13],
    ['ng-ta', 755],
    ['ng-kw', 23],
    ['ng-la', 1],
    ['ng-ni', 144],
    ['ng-fc', 25],
    ['ng-og', 46],
    ['ng-on', 19],
    ['ng-ek', 9],
    ['ng-os', 5],
    ['ng-oy', 36],
    ['ng-an', 15],
    ['ng-ba', 36],
    ['ng-go', 13],
    ['ng-de', 91],
    ['ng-ed', 30],
    ['ng-en', 64],
    ['ng-eb', 38],
    ['ng-kd', 1188],
    ['ng-ko', 151],
    ['ng-pl', 2138],
    ['ng-na', 521],
    ['ng-ji', 14],
    ['ng-kn', 5]
];

let network_data = [];

function getMapData() {
    let map_data = [];
    let url = $('#map_data_url').data('url');

    return fetch(url, {
        method: 'GET',
    })
    .then(response => response.json())
    .then(data => {
        // console.log(data.fatalities)
        network_data = data.data;
        console.log(network_data);
    })
    .catch((error) => {
        console.log(error);
    });
}

// Create the map chart
Highcharts.mapChart('map-container', {
    chart: {
        map: 'countries/ng/ng-all'
    },

    title: {
        text: 'Fulani herdsmen attacks by locations and fatalities'
    },

    credits: {
      enabled: false
    },

    mapNavigation: {
        enabled: true,
        buttonOptions: {
            verticalAlign: 'bottom'
        }
    },

    colorAxis: {
        min: 1,
        max: 1000,
        minColor: '#ffeed0',
        maxColor: '#f49b03',
        lineColor: '#fff4ed',
        lineWidth: 5,
    },

  //   tooltip: {
  //   headerFormat: '',
  //   pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
  //     'There were a total of: <b>{point.y}</b> attacks in <b>{point.name}</b>. <br/>' +
  //     'This is resulted in: <b>{point.name}</b> fatalities, which makes up <br>for <b>{point.valuey}%</b> of the total recorded attacks so far.'
  // },

    series: [{
        data: data,
        name: 'Fatalities',
        states: {
            hover: {
                color: '#734e0d'
            }
        },
        dataLabels: {
            enabled: true,
            format: '{point.name}'
        }
    }]
});


// Create column chart
Highcharts.chart('area-chat-container', {
  chart: {
    type: 'bar'
  },
  title: {
    text: 'Fulani herdsmen attacks and fatalities by states'
  },
  legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'top',
    x: 150,
    y: 100,
    floating: true,
    borderWidth: 0,
    backgroundColor:
      Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF'
  },
  xAxis: {
    categories: [
      'Abia',
      'Adamawa',
      'Akwa Ibom',
      'Anambra',
      'Bauchi',
      'Bayelsa',
      'Benue',
      'Borno',
      'Cross River',
      'Delta',
      'Ebonyi',
      'Edo',
      'Ekiti',
      'Enugu',
      'Federal Capital Territory',
      'Gombe',
      'Imo',
      'Jigawa',
      'Kaduna',
      'Kano',
      'Katsina',
      'Kebbi',
      'Kogi',
      'Kwara',
      'Lagos',
      'Nassarawa',
      'Niger',
      'Ogun',
      'Sokoto',
      'Taraba',
      'Zamfara'
    ],
    plotBands: [{ // visualize the weekend
      from: 4.5,
      to: 6.5,
      color: 'rgba(68, 170, 213, .2)'
    }]
  },
  yAxis: {
    title: {
      text: 'Fatalities'
    }
  },
  tooltip: {
    shared: true,
  },
  credits: {
    enabled: false
  },
  plotOptions: {
    areaspline: {
      fillOpacity: 0.5
    },
  },
  series: [{
    name: 'Attacks',
    data: [3, 71, 4,12,8,3,2539,2,4,68,9,20,10,23,10,3,8,13,160,2,35,6,31,12,3,93,32,31,5,111,34]
  }, {
    name: 'Fatalities',
    data: [1, 436, 4,15,36,1,303,18,13,91,38,30,9,64,25,13,4,14,1188,5,108,13,151,23,1,521,144,46,19,755,293]
  }]
});

// Pie chart
Highcharts.chart('pie-container', {
  chart: {
    type: 'pie'
  },
  title: {
    text: 'Herdsmen attacks across the 6 geopolitiical zones in Nigeria'
  },
  tooltip: {
    headerFormat: '',
    pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
      'There were a total of: <b>{point.y}</b> attacks in the <b>{point.name}</b> region of Nigeria.<br/>' +
      'This is resulted in: <b>{point.z}</b> fatalities, which makes up <br>for <b>{point.pct}%</b> of the total recorded attacks so far in the country.'
  },
  credits: {
    enabled: false
  },
  xAxis: {
    accessibility: {
      rangeDescription: 'Range: 1997 to 2021'
    }
  },
  series: [{
    minPointSize: 10,
    innerSize: '20%',
    zMin: 0,
    name: 'Geo-Political Zones',
    data: [{
      "name": "North Central",
      "y": 760,
      "z": 5541,
      "pct": 51.317
      },
      {
      "name": "South East",
      "y": 55,
      "z": 122,
      "pct": 3.714
      },
      {
      "name": "South South",
      "y": 105,
      "z": 144,
      "pct": 7.09
      },
      {
      "name": "North West",
      "y": 255,
      "z": 1640,
      "pct": 17.218
      },
      {
      "name": "South West",
      "y": 111,
      "z": 116,
      "pct": 7.495
      },
      {
      "name": "North East",
      "y": 195,
      "z": 1258,
      "pct": 13.167
      }]
  }]
});


// Line chart
Highcharts.chart('line-container', {

  title: {
    text: 'Fulani herdsmen attacks over the years'
  },

  // subtitle: {
  //   text: 'Source: thesolarfoundation.com'
  // },

  yAxis: {
    title: {
      text: 'Attacks'
    }
  },

  xAxis: {
    accessibility: {
      rangeDescription: 'Range: 1997 to 2021'
    }
  },

  credits: {
    enabled: false
  },

  legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
  },

  plotOptions: {
    series: {
      label: {
        connectorAllowed: false
      },
      pointStart: 1997
    }
  },

  series: [{
    name: 'Attacks',
    data: [1, 1, 0, 1, 3, 6, 3, 20,4,0,0,2,3,27,25,31,89,134,80,93,111,358,127,233,129]
  }],

  responsive: {
    rules: [{
      condition: {
        maxWidth: 900
      },
      chartOptions: {
        legend: {
          layout: 'horizontal',
          align: 'right',
          verticalAlign: 'top'
        }
      }
    }]
  }

});






// Scripts proper
$(document).on('change', '#toggle-val', function() {
    $('.viz-data').fadeOut(200);
    let viz = $(this).find(':selected').val();
    $('#'+viz).fadeIn(400);
})
</script>