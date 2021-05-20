<?php


namespace Magciu\FirstModule\Controller\FirstController;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magciu\FirstModule\Api\PencilInterface;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $pencilInterface;

    protected $productRepository;

    public function __construct(
        Context $context,
        PencilInterface $pencilInterface,
        ProductRepositoryInterface $productRepository
    )
    {
        $this->pencilInterface      = $pencilInterface;
        $this->productRepository    = $productRepository;
        parent::__construct($context);
    }


    public function execute()
    {
//        echo $this->injectedInterfacePencil->getPencilType();
//        echo get_class($this->productRepository);

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
//        $student = $objectManager->crete('Magciu\FirstModule\Model\Studennt');
//        $book = $objectManager->create('Magciu\FirstModule\Model\Book');

        $pencil = $objectManager->create('Magciu\FirstModule\Model\Pencil');
        var_dump($pencil);
    }
}
