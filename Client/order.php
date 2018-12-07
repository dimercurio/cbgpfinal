<!DOCTYPE html>
<html>
<?php
include('head.php');
?>
    <?php
include('header.php');
?>

        <h1 class="jumbotron text-center jumboBackground" style="color: white;">Order</h1>
        <div class="col-md-12 container">

            <form action="weird.php" method="post" id="orderForm">
                <div class="card">

                    <div class="form-group col-md-4">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required />
                    </div>
                    <div class="form-group  col-md-4">
                        <label for="email">Email</label>
                        <input type="text" type="email" class="form-control" name="email" id="email" placeholder="Your Email" required autofocus />
                    </div>
                    <div class="form-group  col-md-4">
                        <label for="phone">Phone</label>
                        <input type="phone" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="Phone Number" required autofocus />
                    </div>

                    <br>
                    <br>
                    <div class="form-group  col-md-4">
                        <label for="tagNumber">Tag Number</label>
                        <input type="text" class="form-control" name="tagNumber" id="tagNumber" placeholder="Tag Number" required autofocus />
                    </div>
                    <div class="form-group  col-md-4">
                        <label for="species">Species (Ex. Deer, Elk, Javelina)</label>
                        <input class="form-control" name="species" placeholder="Species" required autofocus />
                    </div>
                    <div class="form-group  col-md-4">
                        <label>Date Harvested</label>
                        <input class="form-control" type="date" name="dateHarvested" placeholder="Date Harvested" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                        </textarea>
                    </div>

                    <br>
                    <br>

                    <div class="col-md-12">
                        <h4 style="color: red;" class="text-center">Note: Not all cuts may be available due to size of animal or damage during harvest.</h3>
                          <br />
                          <br />
                    <hr>
                        <!-- ####### FRONT QUARTERS SECTION #######-->
                        <h3 class="text-center">Front quarters</h3>
                    </div>
                    <div class="row">
                <div style="text-align: center;">
                    <div class="col-md-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="" name="armRoast">Arm Roast</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="" name="flatIronSteak">Flat Iron Steak</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group checkbox">
                            <label>
                                <input type="checkbox" value="" name="shortRibs">Short Ribs</label>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-12">
                    <br>
                    <br>

                    <!--- ####### REAR QUARTERS ####### -->
                    <hr>
                    <h3 class="text-center row mt-3">Rear quarters</h3>
        </div>
            <br />
            <div class="row">
            <div class="text-center">
                <div class="col-md-6">
                    <div class="form-group checkbox">
                        <label>
                            <input type="checkbox" value="" name="sirloinRoasts">Sirloin Roasts</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group checkbox">
                        <label>
                            <input type="checkbox" value="" name="sirloinSteaks">Sirloin Steaks</label>
                    </div>
                </div>
              </div>
              </div>
              <br><br>

              <div class="text-center">
              <div class="form-group col-md-6">
                  <label for="sirloinQuantity">Sirloin Quantity Per Package</label>
                  <a data-tooltip="The amount of sirloins sealed in a single package." data-placement="top"><span class="fa fa-question-circle"></span></a>
                  <input class="form-control" name="sirloinQuantity" placeholder="Sirloin Quantity Per Package"
                  autofocus />
            </div>
            <div class="form-group col-md-6">
                <label for="sirloinThickness">Sirloin Thickness</label>
                <input class="form-control" name="sirloinThickness" placeholder="Thickness (inches)"
                autofocus />
          </div>
          </div>
          <br>
          <br>
         <div class="row">
          <div class="text-center">
          <div class="col-md-6 push-top-20">
              <div class="form-group checkbox">
                  <label>
                      <input type="checkbox" value="" name="jerkyRoasts">Jerky Roasts</label>
              </div>
          </div>
          <div class="col-md-6 col-sm-6">
              <label>Sliced Or Whole</label>
            <div class="dropdown">
              <select class="form-control" id="jerkySlicedOrWhole" name="jerkySlicedOrWhole">
                 <option>Select an option</option>
                 <option value="sliced">Sliced</option>
                 <option value="whole">Whole</option>
                </select>
             </div>
          </div>
        </div>
        </div>
          <br><br>
          <div class="row">
          <div class="form-group col-md-6">
            <label for="loinMeatThickness">Loin Meat (Back Strats) Thickness</label>
            <input class="form-control" name="loinMeatThickness" placeholder="Thickness"
            autofocus />
          </div>
          <div class="form-group col-md-6">
            <label for="loinMeatQuantity">Loin Meat Quantity per Package</label>
            <input class="form-control" name="loinMeatQuantity" placeholder="Qty"
            autofocus />
          </div>
        </div>
          <br/>
          <br/>
          <div class="row mt-2"></div>
          <hr>
          <div class="col-md-12">
              <!--- ####### REAR QUARTERS ####### -->
              <h3 class="text-center row mt-3">Grind/Stew Meat</h3>

            <div class="text-center">
              <div class="form-group  col-md-6">
                  <label for="tagNumber">Size Of Package</label>
                  <input type="text" class="form-control" name="grindSizeOfPackage" id="subject" placeholder="Size Of Package(weight)" />
              </div>
              <div class="form-group col-md-6">
                  <label>Fat Type</label>
                <div class="dropdown">
                  <select class="form-control" id="fatType" name="fatType">
                     <option value="beefFat">Beef Fat</option>
                     <option value="porkFat">Pork Fat</option>
                    </select>
                 </div>
              </div>
            </div>
            </div>
            <div class="row mt-2"></div>
            <hr>
            <div class="col-md-12">
                <!--- ####### Offal ####### -->
                <h3 class="text-center row mt-3">Offal (Bones & Organ Meat)</h3>

              <div class="text-center">
                  <div class="form-group col-md-12">
                      <div class="form-group checkbox">
                          <label>
                              <input type="checkbox" value="" name="liver" onclick="enableDisableLiver(this.checked, 'liverSlicedOrWhole', 'liverSize')">Liver</label>
                      </div>
                  </div>
                <div class="form-group  col-md-6">
                    <label for="liverSliced">Size Of Package</label>
                    <input type="text" class="form-control" name="liverSize" id="liverSize" placeholder="Size Of Package(weight)" disabled />
                </div>
                <div class="form-group col-md-6">
                    <label>Sliced Or Whole</label>
                  <div class="dropdown">
                    <select class="form-control" name="liverSlicedOrWhole" id="liverSlicedOrWhole" disabled>
                       <option value="liverSliced">Sliced</option>
                       <option value="liverWhole">Whole</option>
                      </select>
                   </div>
                </div>
              </div>

              <div class="text-center">
                  <div class="col-md-6">
                      <div class="form-group checkbox">
                          <label>
                              <input type="checkbox" value="" name="heart">Heart</label>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group checkbox">
                          <label>
                              <input type="checkbox" value="" name="bones">Bones</label>
                      </div>
                  </div>
                </div>
              </div>
              <div class="row mt-2"></div>

              <div class="col-md-12">
                  <hr />
                  <!--- ####### Offal ####### -->
                  <h3 class="text-center row mt-3">Sausage Options</h3>
                  <h4 class="text-center row mt-2">
                    Flavors- Breakfast, Chorizo, Hot Italian, Sweet Italian, Bratwurst, Bell-Pepper & Onion, Jalapeno-cheddar, and Cheddar Brat.
                  </h4>
                    </div>

                    <br>
                    <br>
                    <br>
                    <div class="container">

                      <br><br>
                      <div class="row form-group">


                        <div class="text-center">

                          <div class="row">
                            <div class="card">
                                <label>Casings Or Bulk</label>
                                <div class="dropdown">
                                    <select class="form-control" id="sausageCasingsOrBulk">
                                        <option class="text-center" value="sausageCasings">Casings</option>
                                        <option class="text-center" value="sausageBulk">Bulk</option>
                                    </select>
                                </div>
                            </div>
                          </div>
                        </div>

                        </div>

                        <div class="row form-group">
                            <div class="col-md-6 col-sm-6">
                                <div class="text-center">
                                    <div class="form-group checkbox push-top-30">
                                        <label>
                                            <input type="checkbox" id="breakfastCheckbox" name="breakfastCheckbox" onclick="enableDisable(this.checked, 'breakfastWeight');">Breakfast</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Breakfast Sausage Weight(lbs)</label>
                                    <input type="text" class="form-control" id="breakfastWeight" name="breakfastWeight" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6 col-sm-6">
                                <div class="text-center">
                                    <div class="form-group checkbox push-top-30">
                                        <label>
                                            <input type="checkbox" value="" name="chorizo" onclick="enableDisable(this.checked, 'chorizoWeight');">Chorizo</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Chorizo Weight(lbs)</label>
                                    <input type="text" class="form-control" value="" name="chorizoWeight" id="chorizoWeight" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6 col-sm-6">
                                <div class="text-center">
                                    <div class="form-group checkbox push-top-30">
                                        <label>
                                            <input type="checkbox" value="" name="hotItalian" onclick="enableDisable(this.checked, 'hotItalianWeight');">Hot Italian</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Hot Italian Weight(lbs)</label>
                                    <input type="text" class="form-control" value="" name="hotItalianWeight" id="hotItalianWeight" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6 col-sm-6">
                                <div class="text-center">
                                    <div class="form-group checkbox push-top-30">
                                        <label>
                                            <input type="checkbox" value="" name="sweetItalian" onclick="enableDisable(this.checked, 'sweetItalianWeight');" />Sweet Italian</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Sweet Italian Weight(lbs)</label>
                                    <input type="text" value="" class="form-control" name="sweetItalianWeight" id="sweetItalianWeight" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6 col-sm-6">
                                <div class="text-center">
                                    <div class="form-group checkbox push-top-30">
                                        <label>
                                            <input type="checkbox" value="" name="bratwurst" onclick="enableDisable(this.checked, 'bratwurstWeight');">Bratwurst</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Bratwurst Weight(lbs)</label>
                                    <input type="text" class="form-control" value="" name="bratwurstWeight" id="bratwurstWeight" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6 col-sm-6">
                              <div class="text-center">
                                <div class="form-group checkbox push-top-30">
                                    <label>
                                        <input type="checkbox" value="" name="bellPepperAndOnion" onclick="enableDisable(this.checked, 'bellPepperAndOnionWeight');" />Bell Pepper and Onion Sausage</label>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Bell Pepper and Onion Sausage Weight(lbs)</label>
                                    <input type="text" class="form-control" value="" name="bellPepperAndOnionWeight" id="bellPepperAndOnionWeight" disabled />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="form-group checkbox push-top-30">
                              <div class="text-center">
                                <label>
                                    <input type="checkbox" value="" name="jalapenoCheddar" onclick="enableDisable(this.checked, 'jalapenoCheddarWeight');" />Jalapeno-Cheddar</label>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Jalapeno Cheddar Weight(lbs)</label>
                                <input type="input" class="form-control" value="" name="jalapenoCheddarWeight" id="jalapenoCheddarWeight" disabled />
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row mt-2"></div>

                        <div class="col-md-12">
                            <!--- ####### Summer Sausage ####### -->
                            <hr>
                            <h3 class="text-center row mt-3">Summer Sausage</h3>

                            <h4 class="text-center row mt-2">
                    Breakfast, Chorizo, Hot Italian, Sweet Italian, Bratwurst, Bell-Pepper & onion, jalapeno-cheddar, and Cheddar brat.
                  </h4>
                  <div class="text-center">
                            <h4><span style="color: red;">Note: 5 pound batch per flavor</span></h4>
                            </div>
                            <br>
                            <br>
                        </div>


                        <div class="row form-group">
                        <div class="col-md-6 col-sm-6">
                          <div class="text-center">
                            <div class="form-group checkbox push-top-30">
                                <label>
                                    <input type="checkbox" value="" name="summerPepper" onclick="enableDisable(this.checked, 'summerPepperWeight');" />Pepper</label>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Pepper Weight(lbs)</label>
                                <input type="text" value="" class="form-control" name="summerPepperWeight" id="summerPepperWeight" disabled>
                            </div>
                        </div>
                        </div>

                        <div class="row form-group">
                        <div class="col-md-6 col-sm-6">
                          <div class="text-center">
                            <div class="form-group checkbox push-top-30">
                                <label>
                                    <input type="checkbox" value="" name="summerJalapeno" onclick="enableDisable(this.checked, 'summerJalapenoWeight');">Jalapeno-Cheddar</label>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Jalapeno-Cheddar Weight(lbs)</label>
                                <input type="text" class="form-control" value="" name="summerJalapenoWeight" id="summerJalapenoWeight" disabled>
                            </div>
                        </div>
                        </div>

                        <div class="row form-group">


                        <div class="col-md-6 col-sm-6">
                          <div class="text-center">
                            <div class="form-group checkbox push-top-30">
                                <label>
                                    <input type="checkbox" value="" name="summarCheddar" onclick="enableDisable(this.checked, 'summerCheddarWeight');" />Cheddar Cheese</label>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Cheddar Cheese Weight(lbs)</label>
                                <input type="text" class="form-control" value="" name="summarCheddarWeight" id="summerCheddarWeight" disabled />
                            </div>
                        </div>
                        </div>

                        <div class="row form-group">
                        <div class="col-md-6 col-sm-6">
                          <div class="text-center">
                            <div class="form-group checkbox push-top-30">
                                <label>
                                    <input type="checkbox" value="" name="summerGreenOnion" onclick="enableDisable(this.checked, 'summerGreenOnionWeight');" />Green Onion and Garlic</label>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Green Onion and Garlic Weight(lbs)</label>
                                <input type="input" class="form-control" value="" name="summerGreenOnionWeight" id="summerGreenOnionWeight" disabled />
                            </div>
                        </div>
                        </div>

                        <div class="row form-group">
                        <div class="col-md-6 col-sm-6">
                          <div class="text-center">
                            <div class="form-group checkbox push-top-30">
                                <label>
                                    <input type="checkbox" value="" name="isSummerSmoked" />Smoked</label>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Size Of Casings</label>
                                <input type="input" class="form-control" value="" name="summerCasingsSize" />
                            </div>
                        </div>
                        </div>
                        <div class="row mt-2"></div>
                        <hr>
                        <div class="col-md-12">
                            <br>
                            <br>
                            <!--- ####### Summer Sausage ####### -->
                            <h3 class="text-center row mt-3">Snack Sticks</h3>

                        </div>

                        <div class="row form-group">
                        <div class="text-center">


                        <div class="col-md-4">
                            <div class="form-group checkbox push-top-30">
                                <label>
                                    <input type="checkbox" value="" name="snackOriginal" />Original</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group checkbox push-top-30">
                                <label>
                                    <input type="checkbox" value="" name="snackSpicy" />Spicy</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group checkbox push-top-30">
                                <label>
                                    <input type="checkbox" value="" name="snackCheddar" />Cheddar Cheese</label>
                            </div>
                        </div>

                        </div>
                        </div>
                        <div class="row mt-2"></div>

                        <div class="col-md-12">
                            <hr>
                            <!--- ####### Summer Sausage ####### -->
                            <h3 class="text-center row mt-3">Jerky</h3>
                            <br>
                            <br>
                        </div>


                        <div class="row">
                        <div class="col-md-5 text-center">
                          <div class="text-center">
                            <label>Sliced Or Whole</label>
                            <div class="dropdown">
                                <select class="form-control" id="jerkySlicedOrWhole">
                                    <option value="sliced">Sliced</option>
                                    <option value="whole">Whole</option>
                                </select>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="row form-group">

                        <div class="col-md-6 col-sm-6">
                          <div class="text-center">
                            <div class="form-group checkbox push-top-30">
                                <label>
                                    <input type="checkbox" value="" name="jerkyPeppered" onclick="enableDisable(this.checked, 'jerkyPepperedAmount');" />Peppered</label>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Peppered Amount</label>
                                <input type="input" class="form-control" value="" name="jerkyPepperedAmount" id="jerkyPepperedAmount" disabled />
                            </div>
                        </div>

                        </div>

                        <div class="row form-group">

                        <div class="col-md-6 col-sm-6">
                            <div class="form-group checkbox push-top-30">
                              <div class="text-center">
                                <label>
                                    <input type="checkbox" value="" name="jerkyCajun" onclick="enableDisable(this.checked, 'jerkyCajunAmount');" />Cajun</label>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Cajon Amount</label>
                                <input type="input" class="form-control" value="" name="jerkyCajunAmount" id="jerkyCajunAmount" disabled />
                            </div>
                        </div>

                      </div>

                      <div class="row form-group">

                        <div class="col-md-6 col-sm-6">
                            <div class="form-group checkbox push-top-30">
                              <div class="text-center">
                                <label>
                                    <input type="checkbox" value="" name="jerkyDrPepper" onclick="enableDisable(this.checked, 'jerkyDrPepperAmount');" />Dr. Pepper Jalapeno</label>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Dr Pepper Jalapeno Amount</label>
                                <input type="input" class="form-control" value="" name="jerkyDrPepperAmount" id="jerkyDrPepperAmount" disabled />
                            </div>
                        </div>

                        </div>

                        <div class="row form-group">

                        <div class="col-md-6 col-sm-6">
                            <div class="form-group checkbox push-top-30">
                              <div class="text-center">
                                <label>
                                    <input type="checkbox" value="" name="jerkyTeriyaki" onclick="enableDisable(this.checked, 'jerkyTeriyakiAmount');" />Teriyaki</label>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Teriyaki Amount</label>
                                <input type="input" class="form-control" value="" name="jerkyTeriyakiAmount" id="jerkyTeriyakiAmount" disabled />
                            </div>
                        </div>

                        </div>

                    </div>

                    <div class="row mt-4"></div>
                    <br>
                    <br>
                    <hr>
                    <div class="text-center">
                        <br />
                        <button type="submit" class="submitButton" name="submit">Submit Order</button>
                    </div>
                    <br>
                    <br>
                </div>
            </form>
        </div>
        <div class="row top-buffer">

        </div>
        <?php include('footer.php'); ?>

            <script type="text/javascript">
                function enableDisable(enabled, textBoxID) {
                    document.getElementById(textBoxID).disabled = !enabled;
                    if(!enabled){
                        document.getElementById(textBoxID).value = "";
                    }
                }

                function enableDisableLiver(enabled, selectID, textBoxID) {
                    document.getElementById(textBoxID).disabled = !enabled;
                    document.getElementById(selectID).disabled = !enabled;
                }
            </script>

</html>
