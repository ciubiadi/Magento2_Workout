<?php


namespace Printq\FirstModule\Controller\FirstController;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Printq\FirstModule\Api\PencilInterface;
use Printq\FirstModule\Model\PencilFactory;
use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\Event\ManagerInterface;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $productFactory;

    protected $pencilInterface;

    protected $productRepository;

    protected $pencilFactory;

    protected $_eventManager;

    public function __construct(
        Context $context,
        PencilInterface $pencilInterface,
        ProductRepositoryInterface $productRepository,
        PencilFactory $pencilFactory,
        ProductFactory $productFactory,
        ManagerInterface $_eventManager
    )
    {
        $this->pencilInterface      = $pencilInterface;
        $this->productRepository    = $productRepository;
        $this->pencilFactory        = $pencilFactory;
        $this->productFactory       = $productFactory;
        $this->_eventManager        = $_eventManager;
        parent::__construct($context);
    }


    public function execute()
    {
//        echo $this->injectedInterfacePencil->getPencilType();
//        echo get_class($this->productRepository);

//        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
//        $student = $objectManager->crete('Printq\FirstModule\Model\Studennt');
//        $book = $objectManager->create('Printq\FirstModule\Model\Book');

//        $pencil = $objectManager->create('Printq\FirstModule\Model\Pencil');
//        var_dump($pencil);

//        $pencil = $this->pencilFactory->create(array("name" => "Albert", "school" => "CNMK"));
//        var_dump($pencil);
        //load the product with the ID of 1
//        $productWithId1 = $this->productFactory->create()->load(1);
//        $productWithId1->setName('Test Product');
//        $product1Name = $productWithId1->getName();
//        $product1Name = $productWithId1->getIdBySku('24-MB01');
//        var_dump($product1Name);

//        echo '<br>';
//        $productWithId2 = $this->productFactory->create()->load(2);
//        var_dump($productWithId2->getName());

//        echo 'Main method <br>';

        $message = new \Magento\Framework\DataObject(array('greeting' => 'Good afternnon'));
        $this->_eventManager->dispatch('custom_event', ['greeting'=>$message]);
        echo $message->getGreeting();
    }
}
