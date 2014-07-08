<?php
namespace Goetas\XML\XSDReader\Schema\Type;

class SimpleType extends Type
{

    /**
     *
     * @var Type
     */
    protected $restrict;


    protected $attributes = array();


    public function getRestrict()
    {
        return $this->restrict;
    }

    public function setRestrict(Type $restrict)
    {
        $this->restrict = $restrict;
        return $this;
    }

}
