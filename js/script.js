$(document).ready(function(){
  $('.sidenav').sidenav();
});

$(document).ready(function(){
    $('.collapsible').collapsible();
});

var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
    }

    setTimeout(function() {
       that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
        // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};

Chart.defaults.global.defaultFontColor = '#FFF';
Chart.defaults.global.defaultFontFamily = "'Montserrat'";
//Chart.defaults.global.defaultFontStyle = '600';
Chart.defaults.global.defaultFontSize = 14;
var ctx = document.getElementById('skillsChart');
ctx.height = "400";
var config = {
    type: 'horizontalBar',
    data: {
        labels: ['Android Dev','Web Dev', 'Ms Office', 'Graphic Design', 'Rest API'],
        datasets: [{
            label: 'Skills Presentation',
            data: [60, 80, 80, 60, 50],
            backgroundColor: '#fff',
            borderWidth: 1
        }]
    },
    options: {
        maintainAspectRatio: false,
        legend: {
            display: false
        },
        tooltips: {
            displayColors: false,
            callbacks: {
                label: function(tooltipItem, data) {
                    var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    return value + '%';
                }
            }
        },
        scales: {
            xAxes: [{
                gridLines: {
                    display: false,
                },
                ticks: {
                    max: 100,
                    min: 0,
                    callback: function (value) { return value+ "%" }
                }
            }],
            yAxes: [{
                gridLines: {
                    display: false,
                },
                ticks: {
                    fontColor: "black",
                    mirror: true,
                    display: false,
                }
            }]
        },
        animation: {
            onProgress () {
              const chartInstance = this.chart;
              const ctx = chartInstance.ctx;
              const dataset = this.data.datasets[0];
              const meta = chartInstance.controller.getDatasetMeta(0);
        
              Chart.helpers.each(meta.data.forEach((bar, index) => {
                const label = this.data.labels[index];
                const labelPositionX = 20;
                const labelWidth = ctx.measureText(label).width + labelPositionX;
        
                ctx.textBaseline = 'middle';
                ctx.textAlign = 'left';
                ctx.fillStyle = '#333';
                ctx.fillText(label, labelPositionX, bar._model.y);
              }));
            }
          }
    }
}
var skillsChart = new Chart(ctx, config);
