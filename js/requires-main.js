/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
requirejs(['jquery', 'semantic'], function ($) {
    $(document).ready(function () {
        /*
         * CustomSidebar
         */
        $('.sidebar-toggle').mouseover(function () {
            $('.menu.sidebar').sidebar('setting', {
                transition: 'overlay',
                closable: true,
            }).sidebar('toggle');
        });
        $('.sidebar-toggle-close').on('click', function () {
            $('.menu.sidebar').sidebar('setting', {
                transition: 'overlay',
                closable: true,
            }).sidebar('toggle');
        });

        /*
         * CustomDropdown
         */
        $('.dropdown').dropdown();

    });
});

requirejs(['jquery', 'highcharts'], function ($) {

    /*
     * Load Line Chart
     */
    $(document).ready(function () {
        $('#graphLife').highcharts({
            title: {
                text: 'ช่วงกราฟชีวิตของคุณ',
                x: -20 //center
            },
            colors: ['#00B5AD'],
            subtitle: {
                text: 'ตั้งแต่เดือน ม.ค. ถึง ธ.ค.',
                x: -20
            },
            xAxis: {
                categories: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.',
                    'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.'],
                tickInterval: 1,
                tickmarkPlacement: 'on',
                gridLineWidth: 0.5
            },
            yAxis: {
                title: {
                    text: 'กราฟชีวิต'
                },
                plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#00B5AD'
                    }],
                tickInterval: 0.5,
                //tickmarkPlacement: 'on',
                gridLineWidth: 1
            },
            tooltip: {
                //valueSuffix: '°C'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: [{
                    name: 'กราฟชีวิต',
                    data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
                }]
        });
    });


});