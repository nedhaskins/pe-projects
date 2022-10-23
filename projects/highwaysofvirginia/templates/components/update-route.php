<?php

//if there's an array that's been pulled

$filepath = 'data/highways.json';
$json = file_get_contents($filepath);

$highways = json_decode($json, true);

foreach ($highways as $highway) {

echo $highway['id'];

if ($highway['id'] == $slug) {

    $type = $highway['type'];
    $number = $highway['number'];
    $lengthInMiles = $highway['length'];
    $startLocation = $highway['startLocation'];
    $endLocation = $highway['endLocation'];
    $routeImage = $highway['image'];
    $description = $highway['description'];

    var_dump($_FILES);

    ?>

    <form action="upload-script.php" method="POST"
    enctype="multipart/form-data">

        <field>
            <input type="file" name="image-file" value='<?=$routeImage?>'>

        </field>

        <field>
            <label>Route Type</label>
            <select name="route-type" id="route-type" required>
                <option value="" selected="true" disabled>What type of route is this?</option>
                <option value="interstate" selected>Interstate</option>
                <option value="state-route">State Route</option>
                <option value="us-route">US Route</option>
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