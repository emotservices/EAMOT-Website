(async () => {
  const topology = await fetch(
    "https://code.highcharts.com/mapdata/countries/in/custom/in-all-disputed.topo.json"
  ).then((response) => response.json());

  // Prepare demo data. The data is joined to map using value of 'hc-key'
  // property by default. See API docs for 'joinBy' for more info on linking
  // data and map.
  const data = [
    ["punjab", 141],
    ["maharashtra", 126],
    ["rajasthan", 122],
    ["uttar pradesh", 104],
    ["delhi", 103],
    ["haryana", 86],
    ["madhya pradesh", 72],
    ["tamil nadu", 71],
    ["gujarat", 69],
    ["karnataka", 60],
    ["west bengal", 48],
    ["telangana", 36],
    ["kerala", 29],
    ["andhra pradesh", 25],
    ["assam", 22],
    ["odisha", 21],
    ["bihar", 20],
    ["chhattisgarh", 20],
    ["chandigarh", 19],
    ["jammu and kashmir", 19],
    ["jharkhand", 18],
    ["himachal pradesh", 17],
    ["goa", 13],
    ["uttarakhand", 11],
    ["dadra & nagar haveli", 3],
    ["daman & diu", 2],
    ["arunanchal pradesh", 3],
    ["nagaland", 3],
    ["mizoram", 3],
    ["sikkim", 2],
    ["meghalaya", 2],
    ["manipur", 2],
    ["puducherry", 2],
    ["ladakh", 2],
    ["tripura", 1],
  ];

  // Create the chart
  Highcharts.mapChart("container", {
    chart: {
      map: topology,
    },

    title: {
      text: "EAMOT Comprehensive AMC for DG in India - Statewise",
    },

    // subtitle: {
    //   text: 'Source map: <a href="http://code.highcharts.com/mapdata/countries/in/custom/in-all-disputed.topo.json">India with disputed territories</a>',
    // },

    mapNavigation: {
      enabled: true,
      buttonOptions: {
        verticalAlign: "bottom",
      },
    },

    colorAxis: {
      min: 0,
    },

    series: [
      {
        data: data,
        name: "DG Sets Served by EAMOT",
        states: {
          hover: {
            color: "#BADA55",
          },
        },
        dataLabels: {
          enabled: true,
          format: "{point.name} {point.value}",
        },
      },
    ],
  });
})();
