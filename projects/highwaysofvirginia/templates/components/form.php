<form method="POST"
enctype="multipart/form-data">

    <field>
        <input type="file" name="image-file">
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
        <label>Descrption</label>
        <textarea cols=32 rows=10 name='description' type='text' value='' required></textarea>
    </field>

    <button class='route-button' type="submit" name='submitted'><?=$buttonMessage?></button>

</form>