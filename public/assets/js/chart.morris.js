// $(document).ready(function () {
//     lineChart();
//     donutChart();
//     pieChart();
//     $(window).resize(function () {
//       window.lineChart.redraw();
//       window.donutChart.redraw();
//       window.pieChart.redraw();
//     });
//   });

// function lineChart() {
//     window.lineChart = Morris.Bar({
//         element: "line-chart",
//         data: [
//             { y: 'Vm 3', a: 100, b: 90 },
//             { y: 'Vm 4', a: 75,  b: 65 },
//             { y: 'Vm 6', a: 50,  b: 40 },
//             { y: 'Vm 10', a: 75,  b: 65 },
//           ],
//           xkey: 'y',
//           ykeys: ['a', 'b','c'],
//           labels: ['2022','2023','2024','2025'],
//         resize: true,
//         redraw: true,
//     });
// }

// function donutChart() {
//     window.donutChart = Morris.Donut({
//       element: "donut-chart",
//       data: [
//         { label: "Vm 3", value: 50 },
//         { label: "Vm 3", value: 25 },
//         { label: "Vm 3", value: 5 },
//         { label: "Vm 3", value: 10 },
//         { label: "Vm 3", value: 10 },
//       ],
//       backgroundColor: "#f2f5fa",
//       labelColor: "#009688",
//       colors: ["#0BA462", "#39B580", "#67C69D", "#95D7BB"],
//       resize: true,
//       redraw: true,
//     });
//   }
