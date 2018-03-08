(function( $ ) {

    // console.log('fahrenheitcelsius');

    $(document).ready(Fahrenheitcelsius);
    $('#fahrenheit').on('input',Fahrenheitcelsius);

    function Fahrenheitcelsius() {
        var fahrenheit = $('#fahrenheit').val();
        console.log(fahrenheit);
        var celsius = (fahrenheit - 32)/1.8;
        var round = celsius.toFixed(2);
        $('#celsius').val(round);
        // console.log(celsius);
        // console.log(fahrenheitfield);

    }

    $('#celsius').on('input',celsiusFahrenheit);

    function celsiusFahrenheit() {
        var celsius = $('#celsius').val();
        var fahrenheit = (celsius * 1.8) + 32;
        var round = fahrenheit.toFixed(2);
        $('#fahrenheit').val(round);
        // console.log(round);
    }

}(jQuery));
