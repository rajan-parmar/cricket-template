<?php
    require 'layouts/header.php';
?>

<table class="table table-bordered ">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Cricketer Name</th>
            <th>Country</th>
            <th>Type</th>
            <th>Batting Average</th>
            <th>Bowling Average</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Sachin Tendulkar</td>
            <td>India</td>
            <td>Batsman</td>
            <td>
                <button type="button" class="btn btn-primary" data-toggle="modal" title="Batting Average" onclick="battingAverage()">
                    Batting Average
                </button>
            </td>
            <td>
                <button type="button" class="btn btn-primary" data-toggle="modal" title="Bowling Average" onclick="bowlingAverage()">
                    Bowling Average
                </button>
            </td>
        </tr>
    </tbody>
</table>

<div class="modal fade" id="cricket-modal">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Batting Average</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <table class="table table-bordered ">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>ODI</th>
                        <th>Test</th>
                        <th>T20</th>
                        <th>IPL</th>
                    </tr>
                </thead>

                <tbody id="display-data"></tbody>
            </table>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>

<template id="batting-data">
    <tr>
        <td>1</td>
        <td>50.50</td>
        <td>60.61</td>
        <td>30.10</td>
        <td>28.30</td>
    </tr>
</template>

<template id="bowling-data">
    <tr>
        <td>1</td>
        <td>60.80</td>
        <td>50.10</td>
        <td>40.05</td>
        <td>45.20</td>
    </tr>
</template>

<?php
    require 'layouts/footer.php';
?>

<script>
    function battingAverage() {
        $('#cricket-modal').modal('toggle')
        document.getElementsByClassName('modal-title')[0].innerHTML = 'Batting Average';
        var templateHTML = document.getElementById('batting-data').innerHTML;
        document.getElementById('display-data').innerHTML = templateHTML;
    }

    function bowlingAverage() {
        $('#cricket-modal').modal('toggle')
        document.getElementsByClassName('modal-title')[0].innerHTML = 'Bowling Average';
        var templateHTML = document.getElementById('bowling-data').innerHTML;
        document.getElementById('display-data').innerHTML = templateHTML;
    }
</script>