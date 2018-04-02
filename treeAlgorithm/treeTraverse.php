<?php
class Tree{
    public $node,$index;

    function __construct()
    {
        $this->node = array();
        $this->index = 0;
    }

    //build the tree with the array
    public function buildTree($value)
    {
        if (!isset($this->node[$this->index])) {
            $this->node[$this->index] = $value;
            return;
        }
        if ($value < $this->node[$this->index]) {
            $this->index = $this->index*2 + 1;
            $this->buildTree($value);
        } else {
            $this->index = $this->index*2 + 2;
            $this->buildTree($value);
        }
    }

    //mid left right(recursion)
    public function preOrder($para)
    {
        if (isset($this->node[$para])) {
            echo $this->node[$para].' ';
            $this->preOrder($para*2 + 1);
            $this->preOrder($para*2 + 2);
        }
    }

    //left mid right(recursion)
    public function midOrder($para)
    {
        if (isset($this->node[$para])) {
            $this->midOrder($para*2 + 1);
            echo $this->node[$para].' ';
            $this->midOrder($para*2 + 2);
        }
    }

    //left right mid(recursion)
    public function postOrder($para)
    {
        if (isset($this->node[$para])) {
            $this->postOrder($para*2 + 1);
            $this->postOrder($para*2 + 2);
            echo $this->node[$para].' ';
        }
    }
}
function main()
{
    $tree = new Tree();
    $disorderQueue = [3,2,38,5,15,36,26,13,4,65,1,42,39,7];
    foreach ($disorderQueue as $key => $value) {
        $tree->index = 0;
        $tree->buildTree($value);
    }
    $tree->preOrder(0);
    echo "<br>";
    $tree->preOrder1(0);
    echo "<br>";
    $tree->midOrder(0);
    echo "<br>";
    $tree->postOrder(0);
}
main();
