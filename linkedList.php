<?php

class ListNode {
	public $data = NULL;
	public $next = NULL;
	
	public function __construct($data = NULL) {
		$this->data = $data;
	}
}

class LinkedList {
	private $first_node = NULL;
	private $total_nodes = 0;
	
	public function insert( $data = NULL) {
		$new_node = new ListNode($data);

		if ($this->first_node === NULL) {
			$this->first_node = $new_node;
		} else {
			$current_node = $this->first_node;
			while ($current_node->next !== NULL) {
				$current_node = $current_node->next;
			}
			$current_node->next = $new_node;
		}

		$this->total_nodes++;
		return true;
	} 

	public function display() {
		echo "Total nodes: ".$this->total_nodes."<br/>";
		$current_node = $this->first_node;
		
		while ($current_node !== NULL) {
			echo $current_node->data . "<br/>";
			$current_node = $current_node->next;
		}
	}
}

$list = new LinkedList();
$list2 = new LinkedList();

$list->insert("First Node");
$list2->insert("First Node V2");

$list->insert("Second Node");
$list->insert("Third Node");

$list2->insert("Second Node V2");
$list2->insert("Third Node V2");

$list->display();
$list2->display();

?>