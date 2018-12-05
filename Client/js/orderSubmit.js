jQuery(document).ready(function($) {

    $("#orderForm").submit(function(event) {

        event.preventDefault();

        var $form = $(this);

        var data = {
            name: $form.find('input[name="name"]').val(),
            email: $form.find('input[name="email"]').val(),
            phoneNumber: $form.find('input[name="phoneNumber"]').val(),
            tagNumber: $form.find('input[name="tagNumber"]').val(),
            species: $form.find('input[name="species"]').val(),
            dateHarvested: $form.find('input[name="dateHarvested"]').val(),
            armRoast: $form.find('input[name="armRoast"]').is(':checked'),
            shortRibs: $form.find('input[name="shortRibs"]').is(':checked'),
            flatIronSteak: $form.find('input[name="flatIronSteak"]').is(':checked'),
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
            sausageCasingsOrBulk: $form.find('#sausageCasingsOrBulk').val(),
            breakfast: $form.find('input[name="breakfastCheckbox"]').is(':checked'),
            breakfastWeight: $form.find('input[name="breakfastWeight"]').val(),
            chorizo: $form.find('input[name="chorizo"]').is(':checked'),
            chorizoWeight: $form.find('input[name="chorizoWeight"]').val(),
            hotItalian: $form.find('input[name="hotItalian"]').is(':checked'),
            hotItalianWeight: $form.find('input[name="hotItalianWeight"]').val(),
            sweetItalian: $form.find('input[name="sweetItalian"]').is(':checked'),
            sweetItalianWeight: $form.find('input[name="sweetItalianWeight"]').val(),
            bratwurst: $form.find('input[name="bratwurst"]').is(':checked'),
            bratwurstWeight: $form.find('input[name="bratwurstWeight"]').val(),
            bellPepperAndOnion: $form.find('input[name="bellPepperAndOnion"]').is(':checked'),
            bellPepperAndOnionWeight: $form.find('input[name="bellPepperAndOnionWeight"]').val(),
            jalapenoCheddar: $form.find('input[name="jalapenoCheddar"]').is(':checked'),
            jalapenoCheddarWeight: $form.find('input[name="jalapenoCheddarWeight"]').val(),
            summerPepper: $form.find('input[name="summerPepper"]').is(':checked'),
            summerPepperWeight: $form.find('input[name="summerPepperWeight"]').val(),
            summerJalapeno: $form.find('input[name="summerJalapeno"]').is(':checked'),
            summerJalapenoWeight: $form.find('input[name="summerJalapenoWeight"]').val(),
            summarCheddar: $form.find('input[name="summarCheddar"]').is(':checked'),
            summarCheddarWeight: $form.find('input[name="summarCheddarWeight"]').val(),
            summerGreenOnion: $form.find('input[name="summerGreenOnion"]').is(':checked'),
            summerGreenOnionWeight: $form.find('input[name="summerGreenOnionWeight"]').val(),
            isSummerSmoked: $form.find('input[name="isSummerSmoked"]').is(':checked'),
            summerCasingsSize: $form.find('input[name="summerCasingsSize"]').val(),
            snackOriginal: $form.find('input[name="snackOriginal"]').is(':checked'),
            snackSpicy: $form.find('input[name="snackSpicy"]').is(':checked'),
            snackCheddar: $form.find('input[name="snackCheddar"]').is(':checked'),
            jerkySlicedOrWhole: $form.find('#jerkySlicedOrWhole').val(),
            jerkyPeppered: $form.find('input[name="jerkyPeppered"]').is(':checked'),
            jerkyPepperedAmount: $form.find('input[name="jerkyPepperedAmount"]').val(),
            jerkyCajun: $form.find('input[name="jerkyCajun"]').is(':checked'),
            jerkyCajunAmount: $form.find('input[name="jerkyCajunAmount"]').val(),
            jerkyDrPepper: $form.find('input[name="jerkyDrPepper"]').is(':checked'),
            jerkyDrPepperAmount: $form.find('input[name="jerkyDrPepperAmount"]').val(),
            jerkyTeriyaki: $form.find('input[name="jerkyTeriyaki"]').is(':checked'),
            jerkyTeriyakiAmount: $form.find('input[name="jerkyTeriyakiAmount"]').val(),
        };

        $.post("../Client/order-form-submit.php", data)
            .done(function(response) {
                alert("Data Loaded: " + response);
            });

        var dataString = JSON.stringify(data);

    });
});
