const ctx1 = document.getElementById('chart1').getContext("2d");

const myChart = new Chart(ctx1, {
type: 'polarArea',
data: {
    labels: ['Facebook', 'Youtube', 'Amazon'],
    datasets: [{
    label: '# of Votes',
    data: [600, 800, 1000],
    backgroundColor: [
        "rgba(192, 32, 44, 1",
        "rgba(251, 169, 25, 1",
        "rgba(21, 82, 110, 1",
    ],
    }]
},
options: {
    responsive: true,
}
});


const ctx2 = document.getElementById('chart2').getContext("2d");

const myChart2 = new Chart(ctx2, {
type: 'bar',
data: {
    labels: ['Facebook', 'Youtube', 'Amazon'],
    datasets: [{
    label: '# of Votes',
    data: [600, 800, 1000],
    backgroundColor: [
        "rgba(192, 32, 44, 1",
        "rgba(251, 169, 25, 1",
        "rgba(21, 82, 110, 1",
    ],
    }]
},
options: {
    responsive: true,
}
});