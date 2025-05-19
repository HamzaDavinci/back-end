<?php foreach ($velden as $veld => $label): ?>

        <label for="<?= $veld ?>">
            <?= $label ?>:
            <a class="required">* <?= $errors[$veld] ?></a>
        </label>
        
    <input id="<?= $veld ?>" name="<?= $veld ?>" type="text" value="<?= $vragen[$veld] ?>">

<?php endforeach; ?>