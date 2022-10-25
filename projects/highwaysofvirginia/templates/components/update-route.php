<?php

//if there's an array that's been pulled

$filepath = 'data/highways.json';
$json = file_get_contents($filepath);

$highways = json_decode($json, true);

?>

    <form action="php-scripts/update-script.php" method="POST"
    enctype="multipart/form-data">

        <field>

                <input type="file" name="image-file">

        </field>

        <field>
            <label>Route Type</label>

            <select name="route-type" id="route-type" required>

                <option value="" selected="true" disabled>What type of route is this?</option>

                <!--The attribute "selected" should appear for the current route-type of the item.-->

                <?php

                $options = [
                    'interstate' => 'Interstate',
                    'us-route' => 'US Route',
                    'state-route' => 'State Route'
                ];

                foreach( $options as $k => $v ) {
                    echo "<option value=\"$k\"" . ( $k === $highway['type'] ? 'selected' : '' ) . "/>$v</option>\n";
                }

                ?>

            </select>
        </field>

        <field>
            <label>Route Number</label>
            <input name='route-number' type='number' min="1" max="999" value='<?=$number?>' required>
        </field>
            <field>
            <label>Length in Miles</label>
            <input name='length-in-miles' type='number' value='<?=$lengthInMiles?>' required>
        </field>

        <field>
            <label>Starting Location</label>
            <input name='start-location' type='text' value='<?=$startLocation?>' required>
        </field>

        <field>
            <label>End Location</label>
            <input name='end-location' type='text' value='<?=$endLocation?>' required>
        </field>

        <field>
            <label>Description</label>
            <textarea cols=32 rows=10 name='description' type='text' value='' required><?=$description?></textarea>
        </field>

        <button class='route-button' type="submit" name='submitted'>Update route</button>

    </form>

    <?php }

} ?>


//overwrite only the data for the object whose id matches the current page slug