<?php
class User extends Model implements JsonSerializable
{
    public function jsonSerialize()
    {
        return array(
            'name' => $this->name,
        );
    }
}
