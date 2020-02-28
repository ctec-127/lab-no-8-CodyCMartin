<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    <div class="container">

        <div class="row">

            <div class="col-sm-12 col-lg-6">


                <label for="temp">Temperature</label>
                <input type="text" class="form-control" value="<?php if (isset($_POST['originaltemp'])) {
            echo $_POST['originaltemp'];}?>" name="originaltemp" size="14" maxlength="7" id="temp">

            </div>

            <div class="col-sm-12 col-lg-6">
                <label for="originalunit">Unit</label>
                <select name="originalunit" id="originalunit" class="form-control">
                    <option value="--Select--" <?php if($originalUnit == "--Select--") echo 'selected="selected"';?>>
                        --Select--</option>
                    <option value="celsius" <?php if($originalUnit == "celsius") echo 'selected="selected"';?>>Celsius
                    </option>
                    <option value="fahrenheit" <?php if($originalUnit == "fahrenheit") echo 'selected="selected"';?>>
                        Farenheit</option>
                    <option value="kelvin" <?php if($originalUnit == "kelvin") echo 'selected="selected"';?>>Kelvin
                    </option>
                </select>

            </div>

        </div>

        <div class="row">

            <div class="col-sm-12 col-lg-6">

                <label for="convertedtemp">Converted Temperature</label>
                <input type="text" class="form-control" value="<?php echo $convertedTemp; ?>" name="convertedtemp"
                    size="14" maxlength="7" id="convertedtemp" readonly>

            </div>

            <div class="col-sm-12 col-lg-6">
                <label for="conversionunit">Conversion unit</label>
                <select name="conversionunit" id="conversionunit" class="form-control">
                    <option value="--Select--" <?php if($conversionUnit == "--Select--") echo 'selected="selected"';?>>
                        --Select--</option>
                    <option value="celsius" <?php if($conversionUnit == "celsius") echo 'selected="selected"';?>>Celsius
                    </option>
                    <option value="fahrenheit" <?php if($conversionUnit == "fahrenheit") echo 'selected="selected"';?>>
                        Farenheit
                    </option>
                    <option value="kelvin" <?php if($conversionUnit == "kelvin") echo 'selected="selected"';?>>Kelvin
                    </option>
                </select>

            </div>

        </div>

        <input type="submit" class="btn btn-dark" value="Convert" />



    </div>
</form>