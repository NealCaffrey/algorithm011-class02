<?php
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function preorderTraversal($root) {
        if(empty($root)) return [];

        $arr = [$root->val];
        $a = $this->preorderTraversal($root->left);
        $b = $this->preorderTraversal($root->right);

        return array_merge($arr, $a, $b);
    }
}