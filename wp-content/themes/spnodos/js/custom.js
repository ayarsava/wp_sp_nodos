var autoEvaluacion = function() {

    var current = 1;
    var flag = true;
    var respuestas = [];

    $(document).ready(function(){

      $('.start').on('click', function(e){
        e.preventDefault();
        $('.intro').fadeOut(200, function(){
          $(this).removeClass('d-flex');
          $('#question1').fadeIn(200);
          $('#progress').fadeIn(200);
          $('.survey').fadeIn(200);
        });
      });
      $('.progress-number span.actual').text(current);
      $('.progress-number span.maximo').text(totalpreguntas);
      
      $('input:radio').click(function() {
          if (flag) {
          
            function getSecondPart(str) {
              return str.split('__')[1];
            }

            var radio = $(this);
            var name = radio.attr("name");
            if (getSecondPart(name).length < 2) {
            name = name.substring(0, name.length - 3);
            } else  {
            name = name.substring(0, name.length - 4);
            }
            var value = radio.val();
            val[name] = val[name] + parseFloat(value);
            radio.parent('label').addClass('choosen');
            flag =  false;

            setTimeout(function() {
              $('#question' + current).fadeOut(200, function(){
                if (current < totalpreguntas) {
                  current += 1;
                  $('#question' + current).fadeIn(200);
                  flag = true;
                } else {
                  $('#ver-resultado').fadeIn(200);
                  $('#progress').fadeOut(200);

                  results(val);

                  if (max.length > 1) {
                    max.reverse();
                    var str = max.slice(0, 3).join(', ').replace(/, ([^,]*)$/, ' y $1');
                    var strmin = min.slice(0, 3).join(', ').replace(/, ([^,]*)$/, ' y $1');
                    $('span.max').prepend(str);
                    $('span.min').prepend(strmin);
                  } else if (max.length == 1) {
                    var str = max;
                    $('span.max').prepend(str);
                  } else {
                    $('.result-text').addClass('uk-hidden');
                  }
                  showMinValues();
                  makeGraph(val);
                }
              });
            }, 500);

            var progress = current * 100 / totalpreguntas;
            $('.progress-number span.actual').text(current +1);
            $('.porcentaje span').text(parseInt(progress));
            $('#resultado').val(JSON.stringify(val));
            var bar = document.getElementById('js-progressbar');
            var animate = setTimeout(function () {
                bar.value = progress;
                //console.log(progress);
                if (bar.value >= bar.max) {
                  clearInterval(animate);
                }
            }, 100);
          }
      });
    });

    function bySortedValue(obj, callback, context) {
      var tuples = [];
      for (var key in obj) tuples.push([key, obj[key]]);
      tuples.sort(function(a, b) {
        return a[1] < b[1] ? 1 : a[1] > b[1] ? -1 : 0
      });
      var length = tuples.length;
      while (length--) callback.call(context, tuples[length][0], tuples[length][1]);
    }

    function results(val) {
        $.ajax({
          type: "post",
          url: ajax_var.url,
          data: {
            action: ajax_var.action,
            nonce: ajax_var.nonce,
            cats: val,
          },
          success: function(results){
              $('#cursos-sugeridos').fadeIn(200);
              $('#cursos-sugeridos').html(results);
          }
        });
        
        /*$.ajax({
            type: "post",
            url: ajax_var.url,
            data: "action=" + ajax_var.action + "&nonce=" + ajax_var.nonce,
            success: function(result){
                $('#cursos-sugeridos').html(result);
            }
        });*/

        var data = {"respuestas": respuestas, "conceptos": val};
        $.ajax({
            //url: "{% url 'comunidad:guardar_resultado_carta_astral' %}",
            type: "POST",
            data: {'data': JSON.stringify(data)},
        });
    
        bySortedValue(val, function(key, value) {
            if (value < 70) {
            min.push(names[key]);
            } else {
            max.push(names[key]);
            }
        });
    }

    function showMinValues() {
      console.log(min);
    }
    
    function getPerc(num, percent) {
      return Number(num) - ((Number(percent) / 100) * Number(num));
    }

    function makeGraph(argument) {
      var data = [];
      $.each(val, function( index, value ) {
        var valor_maximo = maximo[index];
        var valor_porcentual = Math.ceil( 100 * value / valor_maximo);
        data.push(valor_porcentual);
      })
        
      var options = {
        scale: {
          ticks: {
            beginAtZero: true,
            max: 100,
            min: 0,
            fontSize:10
          },
          gridLines: { color: "gray" },
          pointLabels: {
            fontSize: 10,
          },
          pointDot: true,
          pointLabelFontSize: 10
        },
        tooltips : {
          enabled: true,
          callbacks: {
            label: function(tooltipItem, data) {
              return data.datasets[tooltipItem.datasetIndex].label +': '+ data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
            }
          }
        },
        legend: {
          display: false
        }
      };

      var marksData = {
        labels: labels,
        datasets: [{
          label: "Tu puntaje",
          backgroundColor: "rgb(15, 108, 189, 0.5)",
          borderColor: "rgb(15, 108, 189)",
          data: data
        }]
      };

      var radarChart = new Chart('chart', {
        type: 'radar',
        data: marksData,
        options: options
      });
    }
}

jQuery(function($){
  if ($('#test').length) {
    autoEvaluacion();
  }
});

