var autoEvaluacion = function() {
    var val = {};
            var min = [];
            var max = [];
            var names = {};
            var maximo = {};
        
            val['gobierno'] = 0;
            val['ecosistema'] = 0;
            val['innovacion'] = 0;
            val['gestion'] = 0;
            val['rrhh'] = 0;
            val['gestioneconomica'] = 0;
            val['mejoraprocesos'] = 0;
            val['gestionambiental'] = 0;
            val['desarrollocomunidades'] = 0;
        
            names['gobierno'] = 'Gobierno Cooperativo';
            names['ecosistema'] = 'Ecosistema Cooperativo';
            names['innovacion'] = 'Estrategia e innovación';
            names['gestion'] = 'Gestión del productor/comercial';
            names['rrhh'] = 'Recursos Humanos';
            names['gestioneconomica'] = 'Gestión económica-financiera';
            names['mejoraprocesos'] = 'Mejora de procesos';
            names['gestionambiental'] = 'Gestión ambiental';
            names['desarrollocomunidades'] = 'Desarrollo de comunidades';

            maximo['gobierno'] = 70;
            maximo['ecosistema'] = 60;
            maximo['innovacion'] = 80;
            maximo['gestion'] = 168;
            maximo['rrhh'] = 112;
            maximo['gestioneconomica'] = 140;
            maximo['mejoraprocesos'] = 112;
            maximo['gestionambiental'] = 112;
            maximo['desarrollocomunidades'] = 112;
        
            
        
            var current = 1;
            var flag = true;
            var totalpreguntas = 4;
        
            // LABELS
            var labels = ["GOBIERNO COOPERATIVO", "ECOSISTEMA COOPERATIVO","ESTRATEGIA E INNOVACIÓN","GESTIÓN DEL PRODUCTOR/COMERCIAL","RECURSOS HUMANOS","GESTIÓN ECONÓMICA-FINANCIERA","MEJORA DE PROCESOS","GESTIÓN AMBIENTAL","DESARROLLO DE COMUNIDADES"];
        
            // DATA PROMEDIO
            var value_def = [70,60,80,75,115,70,150,170,140];
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
                    var radio = $(this);
                    var name = radio.attr("name");
                    name = name.substring(0, name.length - 3);
                    var value = radio.val();
                    // El número de respuesta (de 1 a 5)
                    //var respuesta_numero = radio.attr("id") - 5 * (current - 1);
                    //respuestas.push(respuesta_numero);
                    console.log('suma' + value);
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
        
                          results();
        
                          if (max.length > 0) {
                            var str = max.slice(0, -1).join(', ')+' y '+max.slice(-1);
                            $('span.max').prepend(str);
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
                    //$('.progress-bar').css('width', progress + '%');
                    $('.progress-number span.actual').text(current +1);
                    $('.porcentaje span').text(parseInt(progress));
                    $('#resultado').val(JSON.stringify(val));
                    console.log(current);
                    console.log(val);

                    
                    var bar = document.getElementById('js-progressbar');
                    var animate = setTimeout(function () {
                        bar.value = progress;
                        console.log(progress);
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
        
            function results() {
                
                $.ajax({
                    type: "post",
                    url: ajax_var.url,
                    data: "action=" + ajax_var.action + "&nonce=" + ajax_var.nonce,
                    success: function(result){
                        $('#cursos-sugeridos').html(result);
                    }
                });
        
                var data = {"respuestas": respuestas, "conceptos": val};
                $.ajax({
                    //url: "{% url 'comunidad:guardar_resultado_carta_astral' %}",
                    type: "POST",
                    data: {'data': JSON.stringify(data)},
                });
            
                bySortedValue(val, function(key, value) {
                    if (value < 60) {
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
                var valor_porcentual = parseInt( 100 * value / valor_maximo);
                data.push(valor_porcentual);
                console.log('Valor máximo de ' + index + ': ' + valor_maximo);
                console.log('Value: ' + value);
                console.log('Valor porcentual: ' + valor_porcentual);
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
autoEvaluacion();


if ($('#test').length) {
    autoEvaluacion();
}