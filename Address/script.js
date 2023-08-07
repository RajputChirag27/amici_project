// Country ==> State

$('#country').on('change', function() {
    var country_id = this.value;
    // console.log(country_id);   
    $.ajax({
        url: "../ajax/state.php",
        type: "POST",
        data: {
            country_data: country_id
        },
        success: function(result) {
            // console.log(result);
            $("#state").html(result);   
        }

    });

});

// State ==> City

$('#state').on('change', function() {
    var state_id = this.value;
    // console.log(country_id);   
    $.ajax({
        url: "../ajax/city.php",
        type: "POST",
        data: {
            state_data: state_id
        },
        success: function(data) {
            // console.log(data);
            $("#city").html(data);   
        }

    });

});