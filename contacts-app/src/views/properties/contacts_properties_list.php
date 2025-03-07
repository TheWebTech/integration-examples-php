<?php ?>
<h3>Properties</h3>
    <form method="post" action="/contacts/show.php">
        <fieldset>
            <?php
            foreach ($formFields as $field) { ?>
                <?php
                $nameSanitized = htmlentities($field['name']);
                $labelSanitized = htmlentities($field['label']);
                $valueSanitized = htmlentities($field['value']);
                ?>
                <label for="<?= $nameSanitized ?>"><?= $labelSanitized ?></label>
                <?php if ($nameSanitized === 'hubspot_owner_id') { ?>
                    <select name="<?= $nameSanitized ?>" id="<?= $nameSanitized ?>">
                        <option value="">Not assigned</option>
                        <?php foreach ($owners as $owner) { ?>
                            <option
                                    value="<?= $owner->ownerId ?>"
                                    <?php if ($valueSanitized == $owner->ownerId) { ?>selected<?php } ?>
                            ><?= $owner->firstName.' '.$owner->lastName ?></option>
                        <?php } ?>
                    </select>
                <?php } else { ?>
                    <input type="text" name="<?= $nameSanitized ?>" id="<?= $nameSanitized ?>" value="<?= $valueSanitized ?>">
                <?php } ?>
            <?php } ?>

            <input id='save' class="button-primary" type="submit" value="Save">
        </fieldset>
    </form>

