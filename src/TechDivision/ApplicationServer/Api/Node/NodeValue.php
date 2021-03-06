<?php
/**
 * TechDivision\ApplicationServer\Api\Node\NodeValue
 *
 * PHP version 5
 *
 * @category   Appserver
 * @package    TechDivision_ApplicationServer
 * @subpackage Api
 * @author     Tim Wagner <tw@techdivision.com>
 * @copyright  2013 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */

namespace TechDivision\ApplicationServer\Api\Node;

use TechDivision\Configuration\Interfaces\ValueInterface;
use TechDivision\Configuration\Interfaces\ConfigurationInterface;

/**
 * Represents a node's value.
 *
 * @category   Appserver
 * @package    TechDivision_ApplicationServer
 * @subpackage Api
 * @author     Tim Wagner <tw@techdivision.com>
 * @copyright  2013 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */
class NodeValue implements ValueInterface
{

    /**
     * The nodes value.
     *
     * @var string
     */
    protected $value;

    /**
     * Initializes the node with the value.
     *
     * @param \TechDivision\Configuration\Interfaces\ConfigurationInterface $configuration The configuration instance
     *
     * @return void
     */
    public function initFromConfiguration(ConfigurationInterface $configuration)
    {
        $this->value = $configuration->getValue();
    }

    /**
     * Initializes the node with the passed data.
     *
     * @param string $value The value to initialize the node with
     */
    public function __construct($value = '')
    {
        $this->value = $value;
    }

    /**
     * Set's the node's value.
     *
     * @param string $value The value to set
     *
     * @return void
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Return's the node value.
     *
     * @return string The node value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Implements toString method
     *
     * @return string
     * @see \TechDivision\ApplicationServer\Api\Node\NodeValue::getValue()
     */
    public function __toString()
    {
        return $this->getValue();
    }
}
