<?php
namespace MooPhp\MooInterface\Data\Types;
use Weasel\JsonMarshaller\Config\Annotations\JsonProperty;
use Weasel\JsonMarshaller\Config\Annotations\JsonInclude;
use Weasel\XmlMarshaller\Config\Annotations\XmlElement;
use Weasel\XmlMarshaller\Config\Annotations\XmlAttribute;
use Weasel\XmlMarshaller\Config\Annotations\XmlRootElement;

/**
 * @package MooPhp
 * @author Jonathan Oddy <jonathan at woaf.net>
 * @copyright Copyright (c) 2011, Jonathan Oddy
 * @JsonInclude(JsonInclude.Include.NON_NULL)
 * @XmlRootElement(namespace="http://www.moo.com/xsd/template-1.0")
 */

class Font
{

    public function __construct($family = null, $bold = false, $italic = false)
    {
        $this->_family = $family;
        $this->_bold = $bold;
        $this->_italic = $italic;
    }


    /**
     * @var string
     */
    protected $_family;

    /**
     * @var bool
     */
    protected $_bold;

    /**
     * @var bool
     */
    protected $_italic;

    /**
     * @return boolean
     * @JsonProperty(type="bool")
     */
    public function getBold()
    {
        return $this->_bold;
    }

    /**
     * @return string
     * @JsonProperty(name="fontFamily", type="string")
     */
    public function getFamily()
    {
        return $this->_family;
    }

    /**
     * @return boolean
     * @JsonProperty(type="bool")
     */
    public function getItalic()
    {
        return $this->_italic;
    }

    /**
     * @param boolean $bold
     * @JsonProperty(type="bool")
     */
    public function setBold($bold)
    {
        $this->_bold = $bold;
    }

    /**
     * @param string $family
     * @JsonProperty(name="fontFamily", type="string")
     */
    public function setFamily($family)
    {
        $this->_family = $family;
    }

    /**
     * @param boolean $italic
     * @JsonProperty(type="bool")
     */
    public function setItalic($italic)
    {
        $this->_italic = $italic;
    }
}