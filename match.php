<?php
$day = 'Monday';


$offer = match ($day) {
    'Monday' => '20% off on any drink',
    'Tuesday' => 'No sale today',
    'Wednesday' => '10% off on any drink',
    'Thursday' => '5% off on any drink',
    'Friday' => '15% off on any drink',
    'Saturday', 'Sunday' => '25% off on any pastries',
  
}
?>
<!DOCTYPE html>
<html>
      <?php include_once 'includes/header.php'; ?>
    <body>
        <h2>Today is <?= $day ?> </h2>
        <h2>Which means the offer today is <?= $offer ?></h2>


        <br>
        <p>Offers Based on the Days</p>
        <table>
            <tr>
                <th>Day</th>
                <th>Offer</th>
            </tr>
            <tr>
                <td>Monday</td>
                <td>20% off on any drink</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>No sale today</td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td>10% off on any drink</td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td>5% off on any drink</td>
            </tr>
            <tr>
                <td>Friday</td>
                <td>15% off on any drink</td>
            </tr>
            <tr>
                <td>Weekends</td>
                <td>25% off on any drink</td>
            </tr>
        </table>



    
       <?php include_once 'includes/footer.php'; ?>
    </body>
    
</html>