<?php


namespace Printq\FirstModule\Plugin;


class ProductSolution
{
//    public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name)
//    {
//        return "Before Plugin " . $name;
//    }
//
//    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
//    {
//        return $result . " After Plugin";
//    }

//    public function aroundGetIdBySku(
//        \Magento\Catalog\Model\Product $subject,
//        callable $proceed,
//        $sku
//    )
//    {
//        echo 'before proceed ' . '<br>';
//        $id = $proceed($sku);
//        echo $id . '<br>';
//        echo ' after proceed ' . '<br>';
//        return $id;
//    }
//
//    public function aroundGetName(
//        \Magento\Catalog\Model\Product $subject, callable $proceed)
//    {
//        echo 'before proceed ' . '<br>';
//        $name = $proceed();
//        echo $name . '<br>';
//        echo ' after proceed ' . '<br>';
//        return $name;
//    }
    public function beforeExecute(
        \Printq\FirstModule\Controller\FirstController\Index $subject
    )
    {
        echo "before Execute sort order 10 <br>";
    }

    public function afterExecute(
        \Printq\FirstModule\Controller\FirstController\Index $subject
    )
    {
        echo "after Execute sort order 10 <br>";
    }

    public function aroundExecute(
        \Printq\FirstModule\Controller\FirstController\Index $subject,
        Callable $proceed
    )
    {
        echo "before proceed sort order 10 <br>";
        $proceed();
        echo 'after proceed sort order 10 <br>';
    }
}
