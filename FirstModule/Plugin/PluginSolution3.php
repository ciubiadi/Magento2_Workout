<?php


namespace Printq\FirstModule\Plugin;


class PluginSolution3
{
    public function beforeExecute(
        \Printq\FirstModule\Controller\FirstController\Index $subject
    )
    {
        echo "before Execute sort order 30 <br>";
    }

    public function afterExecute(
        \Printq\FirstModule\Controller\FirstController\Index $subject
    )
    {
        echo "after Execute sort order 30 <br>";
    }

    public function aroundExecute(
        \Printq\FirstModule\Controller\FirstController\Index $subject,
        Callable $proceed
    )
    {
        echo "before proceed sort order 30 <br>";
        $proceed();
        echo 'after proceed sort order 30 <br>';
    }
}
