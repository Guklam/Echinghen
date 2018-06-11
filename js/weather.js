// v3.1.0
// http://simpleweatherjs.com
$(document).ready(function () {
    $.simpleWeather({
        location: 'Echinghen, FR',
        woeid: '',
        unit: 'C',
        success: function (weather) {
            html = '<h2><i class="wi wi-yahoo-' + weather.code + '"></i> ' + weather.temp +
                '&deg;' + weather.units.temp + '</h2>';
            html += '<ul><li>' + weather.city + ', ' + weather.region + '</li>';

            $("#weather").html(html);
        },
        error: function (error) {
            $("#weather").html('<p>' + error + '</p>');
        }
    });
});