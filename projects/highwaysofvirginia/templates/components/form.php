<?php

$type = $highway['type'];
$number = $highway['number'];
$lengthInMiles = $highway['length'];
$startLocation = $highway['startLocation'];
$endLocation = $highway['endLocation'];
$image = $highway['image'] ?? false;
$description = $highway['description'];

$buttonMessage = 'Update highway';

?>

<form class="create-update-form" method="POST"
enctype="multipart/form-data">

    <field>
        <label>Highway Shield Photo</label>
        <input type="file" name="image-file" href="<?=$image?>">
    </field>

    <?php if($page == 'create') { ?>

        <field>
            <label>Route Type</label>
            <select name="route-type" id="route-type" required>
                <option value="" selected="true" disabled>What type of route is this?</option>
                <option value="interstate" selected>Interstate</option>
                <option value="state-route">State Route</option>
                <option value="us-route">US Route</option>
            </select>
        </field>

    <?php } elseif($page == 'update') { ?>

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
                    echo "<option value=\"$k\"" . ( $k === $type ? 'selected' : '' ) . "/>$v</option>\n";
                }

                ?>

            </select>
        </field>

    <?php } ?>

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

    <field class="description-field">
        <label>Description</label>
        <textarea cols=32 rows=10 name='description' type='text' value='' required><?=$description?></textarea>
    </field>
    <button-wrapper class="form-button-wrapper">
        <button class='form-button' type="submit" name='submitted'><?=$buttonMessage?></button>
    </button-wrapper>

</form>