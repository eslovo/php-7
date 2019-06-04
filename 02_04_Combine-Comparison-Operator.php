<?php
/**
 * Created by Vitaly Lebedev
 * Email: eslovo@gmail.com
 * Date: 03.06.2019
 * Time: 22:16
 */


include_once dirname(__FILE__).'/layout/header.php';

?>

    <div class="w3-container w3-teal">
        <h1>Combine Comparison Operator: <strong><=></strong></h1>
    </div>

    <div class="w3-container">

        <h2>"Spaceship operator" <=></h2>

        <p>Used to compare two values</p>
        <br/>
        <p><strong>$swatch_price <=> $rolex_price</strong></p>


        <ul class="w3-ul" style="width:30%">
            <li>Returns 1 when left side is greater than right side</li>
            <li>Returns 0 when left is equal to right</li>
            <li>Returns -1 when left is less than right</li>
        </ul>

        <h3>Switch operator</h3>

        <div class="w3-code jsHigh">
            $a =100;<br/>
            $b =200;<br/>
            <br/>
            switch($a <=> $b){<br/>
            &nbsp;&nbsp;case 1:<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;echo '$a is greater than $b';<br/>
            &nbsp;&nbsp;case 0:<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;echo '$a is equal $b';<br/>
            &nbsp;&nbsp;case -1:<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;echo '$a is less than $b';<br/>
            }
        </div>

        <h3>Sorting array by price in <strong>ASC</strong>ending order</h3>

        <div class="w3-code jsHigh">
            $watches = array(<br/>
            &nbsp;&nbsp;array('brand' => 'Swatch', 'price' => 50.0),<br/>
            &nbsp;&nbsp;array('brand' => 'Timex', 'price' => 5.0),<br/>
            &nbsp;&nbsp;array('brand' => 'Rolex', 'price' => 500.0)<br/>
            );<br/>
            <br/>
            // sort array by price, in ASCending order<br/>
            function sort_by_price(<strong>$watch1</strong>, $watch2) {<br/>
            &nbsp;&nbsp;return <strong>$watch1['price']</strong> <=> $watch2['price'];<br/>
            }<br/>
            <br/>
            usort($watches, 'sort_by_price');

            print_r($watches);
        </div>

        <h3>Sorting array by price in <strong>DESC</strong>ending order</h3>

        <div class="w3-code jsHigh">
            $watches = array(<br/>
            &nbsp;&nbsp;array('brand' => 'Swatch', 'price' => 50.0),<br/>
            &nbsp;&nbsp;array('brand' => 'Timex', 'price' => 5.0),<br/>
            &nbsp;&nbsp;array('brand' => 'Rolex', 'price' => 500.0)<br/>
            );<br/>
            <br/>
            // sort array by price, in DESCending order<br/>
            usort($watches, function (<strong>$a</strong>, $b) {<br/>
            &nbsp;&nbsp;return $b['price'] <=> <strong>$a['price']</strong>;<br/>
            });<br/>
        </div>
    </div>
<?php

include_once dirname(__FILE__).'/layout/footer.php';