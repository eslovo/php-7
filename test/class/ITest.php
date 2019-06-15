<?php
/**
 * Created by Vitaly Lebedev
 * Email: eslovo@gmail.com
 * Date: 14.06.2019
 * Time: 17:06
 */

namespace test\test;

interface iTest
{
    /**
     * @param string $baz
     * @return string
     */
    public function bar (string $baz) : string;
}