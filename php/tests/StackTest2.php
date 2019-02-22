<?php
/**
 * Created by PhpStorm.
 * User: RC <longwtg@163.com>
 * Date: 2019/2/22
 * Time: 17:58
 */

namespace tests;


class StackTest2 extends \PHPUnit\Framework\TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);
        return $stack;
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);
        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}