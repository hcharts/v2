$(function () {
    var chart = new Highcharts.Chart({
        chart: {
            renderTo: "container",
            type: "column"
        },
        title: {
            text: null
        },
        series: [{
            data: [4, 14, 18, 5, 6, 5, 14, 15, 18]
        }],
        xAxis: {
            categories: [{
                name: "Fruit",
                categories: ["Apple", "Banana", "Orange"]
            }, {
                name: "Vegetable",
                categories: ["Carrot", "Potato", "Tomato"]
            }, {
                name: "Fish",
                categories: ["Cod", "Salmon", "Tuna"]
            }]
        }
    });
});