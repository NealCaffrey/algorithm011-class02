### 深度优先

```php
function dfs($node) {
	if (in_array($node, $visited)) return;
	$visited[] = $node;
	dfs($node->left);
	dfs($node->right);
}
```



### 广度优先

```php
function bfs($graph, $start, $end) {
	$queue = [];
	$queue[] = [$start];
	$visited[] = $start;
	while($queue) {
		$node = array_pop($queue);
		$visited[] = $node;
		process($node);
		$nodes = generateRelatedNodes($node);
        array_push($queue, $nodes);
	}
}
```



### 贪心算法

每一步都选择当前最优解，从而希望结果成为全局最优解。它与动态规划的区别在于不会保存当前运算结果，不能进行回退。