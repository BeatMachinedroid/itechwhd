$(document).ready(function () {
    lineChart();
    donutChart();
    pieChart();
    $(window).resize(function () {
        window.lineChart.redraw();
    });
});
function lineChart() {
    window.lineChart = Morris.Line({
        element: "line-chart",
        data: [
            { y: "2006", a: 100 },
            { y: "2007", a: 75 },
            { y: "2008", a: 50 },
            { y: "2009", a: 75},
            { y: "2010", a: 50 },
            { y: "2011", a: 75},
            { y: "2012", a: 100},
        ],
        xkey: "y",
        ykeys: ["a"],
        labels: ["Series A"],
        lineColors: ["#009688", "#cdc6c6"],
        lineWidth: "3px",
        resize: true,
        redraw: true,
    });
}
