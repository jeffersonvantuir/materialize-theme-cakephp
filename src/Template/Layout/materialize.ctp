<?php
/**
 * Created by Jefferson Vantuir
 * https://jeffersonbehling.github.io/
 * jefferson.behling@gmail.com
 */

$cakeDescription = 'Materialize Theme CakePHP 3.x';
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <?= $this->Html->css('Materialize.materialize.min.css') ?>
    <?= $this->Html->css('Materialize.materialize.css') ?>
    <?= $this->Html->css('Materialize.custom.css') ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<!--Import jQuery before materialize.js-->
<?= $this->Html->script('Materialize.jquery-3.2.1.min.js') ?>
<?= $this->Html->script('Materialize.materialize.min.js') ?>
</body>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

<body>
    <nav class="teal">
        <div class="nav-wrapper">
            <a href="" class="brand-logo"><?= $this->fetch('title') ?></a>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
<script>
    $(document).ready(function() {
        $('select').material_select();
    });

    $('.datepicker').pickadate({
        selectMonths: false, // Creates a dropdown to control month
        selectYears: 200, // Creates a dropdown of 15 years to control year,
        monthsFull: [
            "<?= __d('materialize', 'January') ?>",
            "<?= __d('materialize', 'February') ?>",
            "<?= __d('materialize', 'March') ?>",
            "<?= __d('materialize', 'April') ?>",
            "<?= __d('materialize', 'May') ?>",
            "<?= __d('materialize', 'June') ?>",
            "<?= __d('materialize', 'July') ?>",
            "<?= __d('materialize', 'August') ?>",
            "<?= __d('materialize', 'September') ?>",
            "<?= __d('materialize', 'October') ?>",
            "<?= __d('materialize', 'November') ?>",
            "<?= __d('materialize', 'December') ?>"],
        monthsShort: [
            "<?= __d('materialize', 'Jan') ?>",
            "<?= __d('materialize', 'Fev') ?>",
            "<?= __d('materialize', 'Mar') ?>",
            "<?= __d('materialize', 'Apr') ?>",
            "<?= __d('materialize', 'May') ?>",
            "<?= __d('materialize', 'Jun') ?>",
            "<?= __d('materialize', 'Jul') ?>",
            "<?= __d('materialize', 'Aug') ?>",
            "<?= __d('materialize', 'Sep') ?>",
            "<?= __d('materialize', 'Oct') ?>",
            "<?= __d('materialize', 'Nov') ?>",
            "<?= __d('materialize', 'Dec') ?>"],
        weekdaysFull: [
            "<?= __d('materialize', 'Sunday') ?>",
            "<?= __d('materialize', 'Monday') ?>",
            "<?= __d('materialize', 'Tuesday') ?>",
            "<?= __d('materialize', 'Wednesday') ?>",
            "<?= __d('materialize', 'Thursday') ?>",
            "<?= __d('materialize', 'Friday') ?>",
            "<?= __d('materialize', 'Saturday') ?>"],
        weekdaysShort: [
            "<?= __d('materialize', 'Sun') ?>",
            "<?= __d('materialize', 'Mon') ?>",
            "<?= __d('materialize', 'Tue') ?>",
            "<?= __d('materialize', 'Wed') ?>",
            "<?= __d('materialize', 'Thu') ?>",
            "<?= __d('materialize', 'Fri') ?>",
            "<?= __d('materialize', 'Sat') ?>"],
        weekdaysLetter: [
            "<?= __d('materialize', 'S') ?>",
            "<?= __d('materialize', 'M') ?>",
            "<?= __d('materialize', 'T') ?>",
            "<?= __d('materialize', 'W') ?>",
            "<?= __d('materialize', 'T') ?>",
            "<?= __d('materialize', 'F') ?>",
            "<?= __d('materialize', 'S') ?>"],
        today: "<?= __d('materialize', 'Today') ?>",
        clear: "<?= __d('materialize', 'Clear') ?>",
        close: 'Ok',
        closeOnSelect: true, // Close upon selecting a date,
        format: 'dd/mm/yyyy'
    });

    $('.timepicker').pickatime({
        default: 'now', // Set default time: 'now', '1:30AM', '16:30'
        fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
        twelvehour: false, // Use AM/PM or 24-hour format
        donetext: 'OK', // text for done-button
        cleartext: "<?= __d('materialize', 'Clear') ?>", // text for clear-button
        canceltext: "<?= __d('materialize', 'Cancel') ?>", // Text for cancel-button
        format: "HH:ii",
        autoclose: false, // automatic close timepicker
        ampmclickable: true, // make AM PM clickable
        aftershow: function(){} //Function for after opening timepicker
    });

</script>