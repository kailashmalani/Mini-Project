<?php
include('admin_header.php');
include('model.php');
session_start();
$user = $db->User;


?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/totalamt.css">
</head>
<body style="overflow-x: hidden;">
<div class="container">
<div class="row">
<div class="col-md-12 text-center" style="color:#cc2900;font-size:40px;margin-top:30px;font-weight:bold;">
STATISTICS
</div>
</div>
<div class="row">
<div class="col-md-12 text-center" style="margin-top:50px; margin-bottom: 50px;">
       <form action="gettotalamt.php" method="GET">
            <select name="day" style="color:#cc2900;background-color:white;font-family:comic;font-weight:bold;">
        <option value='01'>01</option>
        <option value='02'>02</option>
        <option value='03'>03</option>
        <option value='04'>04</option>
        <option value='05'>05</option>
        <option value='06'>06</option>
        <option value='07'>07</option>
        <option value='08'>08</option>
        <option value='09'>09</option>
        <option value='10'>10</option>
        <option value='11'>11</option>
        <option value='12'>12</option>
        <option value='13'>13</option>
        <option value='14'>14</option>
        <option value='15'>15</option>
        <option value='16'>16</option>
        <option value='17'>17</option>
        <option value='18'>18</option>
        <option value='19'>19</option>
        <option value='20'>20</option>
        <option value='21'>21</option>
        <option value='22'>22</option>
        <option value='23'>23</option>
        <option value='24'>24</option>
        <option value='25'>25</option>
        <option value='26'>26</option>
        <option value='27'>27</option>
        <option value='28'>28</option>
        <option value='29'>29</option>
        <option value='30'>30</option>
        <option value='31'>31</option>
            </select>

            <select name="month" value='' style="color:#cc2900;background-color:white;font-family:comic;font-weight:bold;">Select Month</option>
        <option value='01'>January</option>
        <option value='02'>February</option>
        <option value='03'>March</option>
        <option value='04'>April</option>
        <option value='05'>May</option>
        <option value='06'>June</option>
        <option value='07'>July</option>
        <option value='08'>August</option>
        <option value='09'>September</option>
        <option value='10'>October</option>
        <option value='11'>November</option>
        <option value='12'>December</option>
        </select>
        <!--<input type="date" name="" placeholder="DD/MM/YY">-->

            <input type="submit" name="view" value="View" style="font-weight:bold" class="btn btn-danger btn-sm">
        </form>
</div>
</div>
</div>
<div class="ticker">
<?php
if(isset($_SESSION['total'])&&$_SESSION['flag']==1){
 echo '<div id="shiva" ><span class="amtcount">'.$_SESSION['total'].'</span><p id="text1">Today\'s Collection</p></div>';
 echo '<div id="shiva" ><span class="ordercount">'.$_SESSION['count'].'</span><p id="text2">Orders Served</p></div>';
}?>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>


<script type="text/javascript">
    $('.amtcount').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 3000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

    $('.ordercount').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 3000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>

<?php

include('footer.php');
?>