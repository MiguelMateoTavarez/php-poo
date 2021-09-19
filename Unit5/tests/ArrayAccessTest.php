<?php

use Lufia\Model;

class ModelArrayAccessTest extends \PHPUnit\Framework\TestCase
{
    public function test_offset_get()
    {
        $user = new UserTest([
            'name' => 'Miguel Mateo',
            'email' => 'miguel@mateo.com',
        ]);

        $this->assertSame('Miguel Mateo', $user['name']);

        $this->assertSame('miguel@mateo.com', $user['email']);
    }

    public function test_offset_exists()
    {
        $user = new UserTest([
            'name' => 'Miguel Mateo',
        ]);

        $this->assertTrue(isset($user['name']));

        $this->assertFalse(empty($user['name']));

        $this->assertFalse(isset($user['email']));

        $this->assertTrue(empty($user['email']));
    }

    public function test_offset_set()
    {
        $user =  new UserTest;

        $user['name'] = 'Miguel Mateo';

        $this->assertTrue(isset($user['name']));

        unset($user['name']);

        $this->assertFalse(isset($user['name']));
    }
}

class UserTest extends Model implements ArrayAccess
{
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }

    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
}