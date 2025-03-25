(async () => {
  const topology = await fetch(
    "https://code.highcharts.com/mapdata/countries/in/custom/in-all-disputed.topo.json"
  ).then((response) => response.json());

  // Prepare demo data. The data is joined to map using value of 'hc-key'
  // property by default. See API docs for 'joinBy' for more info on linking
  // data and map.
  var data = [
    { lat: 26.8538, lon: 80.94533, ticket_id: 2257 },
    { lat: 30.68605, lon: 76.74355, ticket_id: 2267 },
    { lat: 25.23545, lon: 73.24045, ticket_id: 2276 },
    { lat: 11.09675, lon: 79.6533, ticket_id: 2207 },
    { lat: 24.64644, lon: 75.94171, ticket_id: 2324 },
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
