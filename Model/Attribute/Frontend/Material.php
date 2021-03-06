<?php
namespace Perspectivee\TutorialProductPage\Model\Attribute\Frontend;

class Material extends \Magento\Eav\Model\Entity\Attribute\Frontend\AbstractFrontend
{

    protected $mass = [
        '1' => ['x' => 10, 'y' => 50],
        '2' => ['x' => 35, 'y' => 55],
        '3' => ['x' => 125, 'y' => 15],
        '4' => ['x' => 99, 'y' => 99],
    ];
    
    public function getValue(\Magento\Framework\DataObject $object)
    {
        $value = $object->getData($this->getAttribute()->getAttributeCode());
        $result = $this->getMass(strval($value));
        if (!$result) {
            return "";
        }
        $positionLabel = $this->getAttribute()->getFrontendLabel();
        $label = $object->getAttributeText($this->getAttribute()->getAttributeCode());
        return "<b>" . $positionLabel . ": ". "</b>" . $label . "(top: " . $result['x'] . "/left: " . $result['y'] . ")";
    }

    protected function getMass(string $val)
    {
        $value = $val;
        $returnParam = null;
        if (array_key_exists($value, $this->mass)) {
            $returnParam = $this->mass[$value];
        }
        return $returnParam;

    }
    
}