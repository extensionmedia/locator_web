require('./bootstrap');
import Chart from 'chart.js';
//import ChartDataLabels from 'chartjs-plugin-datalabels';

$(document).ready(function(){
    $('.dropdown').on('click', function(e){
        if( $(this).find('.dropdown-content').hasClass('hidden') ){
            $(".dropdown-content").slideUp('fast');
            var dropdown = $(this).find('.dropdown-content');
            dropdown.slideToggle( 200, 'swing');
            e.stopPropagation();            
        }

    });

    $(".dropdown").on('click', function(e){
        e.stopPropagation();
    });

    $(document).on('click', function (e) {
        $(".dropdown-content").slideUp('fast');
    });

    $('.reset_password').on('click', function(){
        $('.reset_password_message').fadeIn('fast', function(){
            setTimeout(function(){ $('.reset_password_message').slideUp('fast'); }, 3000);
        });
    });

    $('.upload_image').on('click', function(){
        $('.upload_image_message').fadeIn('fast', function(){
            setTimeout(function(){ $('.upload_image_message').slideUp('fast'); }, 3000);
        });
    });
    
    setInterval(() => {
        $('.isAjax').each(function(){
            if(!$(this).hasClass('loaded')){
                var route = $(this).attr('data-route');
                $(this).addClass('loaded').load(route);
            }
        });        
    }, 500);

    $('.modal').on('click', function(){
        var container = $(this).data('container');
        var html = `
                    <div class="z-10 absolute top-0 left-0 right-0 bottom-0 w-full h-full " style="background-color: rgba(200,200,200, 0.3)">
                        {content}
                    </div>
                `;
        var content = `
            <div class="w-96 mx-auto mt-4 shadow bg-white rounded p-5 model-content">
                content
            </div>
        `;
        $("."+container).addClass('relative').append(html.replace("{content}", content));
        $(".model-content").hide().slideDown( 200 );
    });

    if($("#myBarChart").length){
        var months_name = ['Jan', 'Fév', 'Mars', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'];
        var config = {
            type : 'bar',
            caption :   '',
            labels : [],
            data : [],
            colors:[
                '#003f5c',
                '#2f4b7c',
                '#665191',
                '#a05195',
                '#d45087',
                '#f95d6a',
                '#ff7c43',
                '#ffa600'
            ]
        };

        var ctx = document.getElementById('myBarChart');
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                        data: []
                    },{
                        data: []
                    }
                ]
            },
            options: {
                tooltips: {
                    callbacks: {
                        label: function(tooltipItems, data) { 
                            return new Intl.NumberFormat('fr-FR', { style: 'currency', currency: 'Mad' }).format(tooltipItems.yLabel);
                        }
                    }
                }
            }
        });
    
        $.ajax({
            type        :     "GET",
            url         :      "/finance/mouvements/totalByYearAndMonth/2017",
            dataType    :     "json",
        }).done(function(response){
            var labels = [];
            var values = [];
            var total = 0; 
            var data = [];
            var lbl = [];
            var years = [];

            for (var year in response){
                years.push( year );
                for (var months in response[year]){
                    data.push( response[year][months] );
                    lbl.push( months_name[months] );
                }  
                values.push( data );
                labels.push( lbl );
                data = [];
                lbl = [];
            }
            config.labels = labels;
            config.data = values;

            myBarChart.data.labels = config.labels[0];

            myBarChart.data.datasets[0].data=config.data[0];
            myBarChart.data.datasets[0].backgroundColor='rgba(54, 162, 235, 0.6)'; //config.colors[3];
            myBarChart.data.datasets[0].label=years[0];

            myBarChart.data.datasets[1].data=config.data[1];
            myBarChart.data.datasets[1].backgroundColor='rgba(255, 99, 132, 0.6)'; //config.colors[6];
            myBarChart.data.datasets[1].label=years[1];
            //myBarChart.data.datasets[1].type='line';
            //myBarChart.data.datasets[0].type='line';

            myBarChart.update();
    
        }).fail(function(xhr, textStatus, error) {
            $("#preloader").remove();
            console.log(xhr.statusText);
            console.log(textStatus);
            console.log(error);
        });
    }

    if($("#myPieChart").length){
        
        var config = {
            type : 'line',
            caption :   '',
            labels : [],
            data : [],
            colors:[
                '#003f5c',
                '#2f4b7c',
                '#665191',
                '#a05195',
                '#d45087',
                '#f95d6a',
                '#ff7c43',
                '#ffa600'
            ]
        };

        var ctx = document.getElementById('myPieChart');
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: [],
                datasets: [{
                    label: 'Comptes ',
                    data: []
                }]
            },
            options:{
                responsive:true,
                legend:{
                    position: 'bottom',
                    align : 'start',
                    display:false,
                    labels:{
                        boxWidth : 10,
                        fontSize: 10
                    }
                }
            }
        });
    
        $.ajax({
            type        :     "GET",
            url         :      "/finance/mouvements/totalByYear/2019",
            dataType    :     "json",
        }).done(function(response){
            var labels = [];
            var values = [];
            var total = 0; 
            for (var key in response){
                labels.push(key);
                values.push(response[key]['in']);
            }

            config.labels = labels;
            config.data = values;
            config.caption = 'Comptes finance';

            myPieChart.data.labels=config.labels;
            myPieChart.data.datasets[0].data=config.data;
            myPieChart.data.datasets[0].backgroundColor=config.colors;
            myPieChart.data.datasets[0].label = config.caption,
            myPieChart.update();
    
        }).fail(function(xhr, textStatus, error) {
            $("#preloader").remove();
            console.log(xhr.statusText);
            console.log(textStatus);
            console.log(error);
        });
    }
});
