<?php
/**
 * Created by Vitaly Lebedev
 * Email: eslovo@gmail.com
 * Date: 03.06.2019
 * Time: 15:25
 */

include_once dirname(__FILE__).'/layout/header.php';

?>

<div class="w3-container w3-teal">
        <h1>RETURN TYPE DECLARATIONS</h1>
    </div>

    <div class="w3-container">

    <ul class="w3-ul w3-hoverable" style="width:30%">
        <li>Specify the type of function return values</li>
        <li>Three techniques: none, coercive, and strict
            <ul class="w3-ul" style="width:100%">
                <li>No declaratioin: returns values as-is</li>
                <li>Coercive declaration: coerces value before returning it</li>
                <li>Strict declaration: raises error if type does not match</li>
            </ul>
        </li>
        <li>Same identifiers as scalar type declarations
            <ul class="w3-ul" style="width:30%">
                <li>array</li>
                <li>bool</li>
                <li>float</li>
                <li>int</li>clea
                <li>string</li>
            </ul>
        </li>
    </ul>

        <h2>No declaration (like old php)</h2>
        <div class="w3-code jsHigh">
            function sum($a, $b){<br/>
            &nbsp;&nbsp;&nbsp;return $a+$b;<br/>
            }<br/>
            <br/>
            echo gettype(sum(2, 3)); // <span class="w3-blue">integer</span><br/>
            echo gettype(sum("2", "3")) // <span class="w3-blue">integer</span> - 'cos math operation cannot be on string and PHP7 converts from string to integer<br/>
            echo gettype(sum(2.0, 3.0)) // <span class="w3-blue">double (float)</span>
        </div>

        <h2>PHP7 - Coercive type</h2>
        <div class="w3-code jsHigh">
            function sum($a, $b)<strong class="w3-amber">: int</strong> {<br/>
            &nbsp;&nbsp;&nbsp;return $a+$b;<br/>
            }<br/>
            <br/>
            echo gettype(sum(2, 3)); // <span class="w3-green">integer</span><br/>
            echo gettype(sum("2", "3")) // <span class="w3-green">integer</span><br/>
            echo gettype(sum(2.0, 3.0)) // <span class="w3-green">integer</span>
        </div>

        <h2>PHP7 - Strict type declaration</h2>
        <div class="w3-code jsHigh">
            <strong class="w3-amber">declare(strict_type=1);</strong><br/><br/>
            function sum($a, $b)<strong class="w3-amber">: int</strong> {<br/>
            &nbsp;&nbsp;&nbsp;return $a+$b;<br/>
            }<br/>
            <br/>
            echo gettype(sum(2, 3)); // <span class="w3-green">integer</span><br/>
            echo gettype(sum("2", "3")) // <span class="w3-green">integer</span><br/>
            echo gettype(sum(2.0, 3.0)) // <span class="w3-red">TypeError: Return value must be of the type integer, float returned</span>
        </div>

    </div>

<?php

include_once dirname(__FILE__).'/layout/footer.php';