<!DOCTYPE html>
<html>
    <?php
include('head.php');
?>
   <?php
include('header.php');
?>

    <h1 class="jumbotron text-center">Order</h1>
    <div class="col-md-12">


    <form action="order-form-submit.php" method="post" id="contactForm">
    <div class="form-group col-md-4">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required />
    </div>
    <div class="form-group  col-md-4">
        <label for="email">Email</label>
        <input type="text" type="email" class="form-control" name="email" id="email" placeholder="Your Email"
        required autofocus />
    </div>
    <div class="form-group  col-md-4">
        <label for="phone">Phone</label>
         <input type="phone" class="form-control" name="phone" id="phone" placeholder="Phone Number"
         required autofocus />
    </div>

        <br>
        <br>
    <div class="form-group  col-md-4">
        <label for="tagNumber">Tag Number</label>
        <input type="text" class="form-control" name="tagNumber" id="subject" placeholder="Tag Number"
        required autofocus />
    </div>
    <div class="form-group  col-md-4">
        <label for="species">Species (Ex. Deer, Elk, Javelina)</label>
        <input class="form-control" name="species" placeholder="Species"
        required autofocus />
    </div>
    <div class="form-group  col-md-4">
        <label>Date Harvested</label>
        <input class="form-control" type="date" name="dateHarvested" placeholder="Date Harvested"
        required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"></textarea>
    </div>

      <br>
      <br>

      <div class="col-md-12">
      <h4 style="color: red;" class="text-center">Note: Not all cuts may be available due to size of animal or damage during harvest.</h3>

      <br />
      <br />

      <!-- ####### FRONT QUARTERS SECTION #######-->

      <h3 class="text-center">Front quarters</h4>
      </div>
      <div>


      <div class="form-group  col-md-4">
            <label for="armRoast">Arm Roast</label>
            <input class="form-control input-lg" name="armRoast" placeholder="Arm Roast"
            autofocus />
      </div>
      <div class="form-group  col-md-4">
          <label for="flatIronSteak">Flat Iron Steak</label>
            <input class="form-control input-lg" name="flatIronSteak" placeholder="Flat Iron Steak"
            autofocus />
        </div>
        <div class="form-group  col-md-4">
            <label for="shortRibs">Short Ribs</label>
            <input class="form-control input-lg" name="shortRibs" placeholder="Short Ribs"
            autofocus />
      </div>
      </div>

            <br/>
            <br/>
        <div class="col-md-12">
            <br>
            <br>
            <h3 class="text-center row mt-3">Rear quarters</h4>
        </div>
            <br />
            <div class="form-group col-md-3">
                  <label for="sirloinRoasts">Sirloin Roasts</label>
                  <input class="form-control input-lg" name="sirloinRoasts" placeholder="Sirloin Roasts"
                  autofocus />
            </div>
            <div class="form-group col-md-3">
                <label for="sirloinSteaks">Sirloin Steaks</label>
                  <input class="form-control input-lg" name="sirloinSteaks" placeholder="Sirloin Steaks"
                  autofocus />
              </div>
              <div class="form-group col-md-3">
                  <label for="sirloinQuantity">Sirloin Quantity Per Package</label>
                  <input class="form-control input-lg" name="sirloinQuantity" placeholder="Sirloin Quantity Per Package"
                  autofocus />
            </div>
            <div class="form-group col-md-3">
                <label for="sirloinThickness">Sirloin Thickness</label>
                <input class="form-control input-lg" name="sirloinThickness" placeholder="Thickness"
                autofocus />
          </div>
          <div class="form-group col-md-6">
              <label for="jerkyRoasts">Jerky Roasts</label>
              <input class="form-control input-lg" name="jerkyRoasts" placeholder="Jerky Roasts"
              autofocus />
          </div>
          <div class="form-group col-md-6">
            <label for="jerkySlicedOrWhole">Sliced or Whole</label>
            <input class="form-control input-lg" name="jerkySlicedOrWhole" placeholder="Jerky Roasts"
            autofocus />
          </div>
          <div class="form-group col-md-6">
            <label for="loinMeatThickness">Loin Meat (Back Strats) Thickness</label>
            <input class="form-control input-lg" name="loinMeatThickness" placeholder="Thickness"
            autofocus />
          </div>
          <div class="form-group col-md-6">
            <label for="loinMeatQuantity">Loin Meat Quantity per Package</label>
            <input class="form-control input-lg" name="loinMeatQuantity" placeholder="Qty"
            autofocus />
          </div>

      <div class="col-md-6">
      <div class="text-center">
        <button type="submit" name="submit">Send Message</button>
      </div>
      </div>
    </form>
        </div>
</html>
