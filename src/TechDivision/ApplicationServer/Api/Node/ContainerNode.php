<?php
/**
 * TechDivision\ApplicationServer\Api\Node\ContainerNode
 *
 * PHP version 5
 *
 * @category   Appserver
 * @package    TechDivision_ApplicationServer
 * @subpackage Api
 * @author     Tim Wagner <tw@techdivision.com>
 * @author     Johann Zelger <jz@techdivision.com>
 * @copyright  2013 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */

namespace TechDivision\ApplicationServer\Api\Node;

/**
 * DTO to transfer a container.
 *
 * @category   Appserver
 * @package    TechDivision_ApplicationServer
 * @subpackage Api
 * @author     Tim Wagner <tw@techdivision.com>
 * @author     Johann Zelger <jz@techdivision.com>
 * @copyright  2013 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */
class ContainerNode extends AbstractNode
{

    /**
     * The container's name.
     *
     * @var string
     * @AS\Mapping(nodeType="string")
     */
    protected $name;

    /**
     * The container's class name.
     *
     * @var string
     * @AS\Mapping(nodeType="string")
     */
    protected $type;

    /**
     * The thread class name that start's the container.
     *
     * @var string
     * @AS\Mapping(nodeType="string")
     */
    protected $threadType;

    /**
     *
     * @var \TechDivision\ApplicationServer\Api\Node\DescriptionNode
     * @AS\Mapping(nodeName="description", nodeType="TechDivision\ApplicationServer\Api\Node\DescriptionNode")
     */
    protected $description;

    /**
     * The receiver used to start the container's socket.
     *
     * @var \TechDivision\ApplicationServer\Api\Node\ReceiverNode
     * @AS\Mapping(nodeName="receiver", nodeType="TechDivision\ApplicationServer\Api\Node\ReceiverNode")
     */
    protected $receiver;

    /**
     * The servers used in container
     *
     * @var array
     * @AS\Mapping(nodeName="servers/server", nodeType="array", elementType="TechDivision\ApplicationServer\Api\Node\ServerNode")
     */
    protected $servers;

    /**
     * The host configuration information.
     *
     * @var \TechDivision\ApplicationServer\Api\Node\HostNode
     * @AS\Mapping(nodeName="host", nodeType="TechDivision\ApplicationServer\Api\Node\HostNode")
     */
    protected $host;

    /**
     * The deployment configuration information.
     *
     * @var \TechDivision\ApplicationServer\Api\Node\DeploymentNode
     * @AS\Mapping(nodeName="deployment", nodeType="TechDivision\ApplicationServer\Api\Node\DeploymentNode")
     */
    protected $deployment;

    /**
     * Returns the unique container name.
     *
     * @return string The unique container name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the container's class name.
     *
     * @return string The container's class name
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Returns the thread class name that start's the containere.
     *
     * @return string The thread class name that start's the container
     */
    public function getThreadType()
    {
        return $this->threadType;
    }

    /**
     * Returns the receiver description.
     *
     * @return \TechDivision\ApplicationServer\Api\Node\DescriptionNode The receiver description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the receiver configuration used to start the container's socket.
     *
     * @return \TechDivision\ApplicationServer\Api\Node\ReceiverNode The receiver configuration
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Returns the host configuration information.
     *
     * @return \TechDivision\ApplicationServer\Api\Node\HostNode The host configuration information
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Returns the deployment configuration information.
     *
     * @return \TechDivision\ApplicationServer\Api\Node\DeploymentNode The deployment configuration information
     */
    public function getDeployment()
    {
        return $this->deployment;
    }

    /**
     * Return's all server nodes
     *
     * @return array
     */
    public function getServers()
    {
        return $this->servers;
    }
}
