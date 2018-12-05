jQuery(document).ready(function($) {

    $("#orderForm").submit(function(event) {

        event.preventDefault();

        var $form = $(this);

        var data = {
            name: $form.find('input[name="name"]').val(),
            email: $form.find('input[name="email"]').val(),
            phone: $form.find('textarea[name="phone"]').val(),
            tagNumber: $form.find('input[name="tagNumber"]').val(),
            species: $form.find('input[name="species"]').val(),
            dateHarvested: $form.find('input[name="dateHarvested"]').val(),
            armRoast: $form.find('input[name="armRoast"]').is(':checked'),
            shortRibs: $form.find('input[name="shortRibs"]').is(':checked'),
            sirloinRoasts: $form.find('input[name="sirloinRoasts"]').is(':checked'),
            sirloinSteaks: $form.find('input[name="sirloinSteaks"]').is(':checked'),
            sirloinQuantity: $form.find('input[name="sirloinQuantity"]').val(),
            sirloinThickness: $form.find('input[name="sirloinThickness"]').val(),
            jerkyRoasts: $form.find('input[name="jerkyRoasts"]').is(':checked'),
            jerkySlicedOrWhole: $form.find('#jerkySlicedOrWhole').val(),
            loinMeatThickness: $form.find('input[name="loinMeatThickness"]').val(),
            loinMeatQuantity: $form.find('input[name="loinMeatQuantity"]').val(),
            grindSizeOfPackage: $form.find('input[name="grindSizeOfPackage"]').val(),
            fatType: $form.find('#fatType').val(),
            liver: $form.find('input[name="liver"]').is(':checked'),
            liverSlicedOrWhole: $form.find('#liverSlicedOrWhole').val(),
            liverSize: $form.find('input[name="liverSize"]').val(),
            heart: $form.find('input[name="heart"]').is(':checked'),
            bones: $form.find('input[name="bones"]').is(':checked'),
        };

        $.post("../Client/form-to-email.php", data)
            .done(function(response) {
                alert("Data Loaded: " + response);
            });

        var dataString = JSON.stringify(data);

    });
});
