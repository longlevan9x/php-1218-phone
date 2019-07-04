<?php 
namespace App\Helper;
session_start();

class Cart 
{
	public static function getInstance() {
		return new static();
	}

	public function addCart($id, $item) {
		$cart = $this->getCart($id);

		if (empty($cart)) {
			$cart = [
				"name" => $item['name'],
				"qty" => $item['qty'],
				"id" => $item['id'],
				"price" => $item['price'],
				"image" => $item['image']
			];
		}
		else {
			$qty = $cart['qty'] + $item['qty'];
			$cart['qty'] = $qty;
		}

		$this->setItemCart($id, $cart);
		
	}

	public function setItemCart($id, $cart) {
		if (!isset($_SESSION['cart'])) {
			$_SESSION['cart'] = [];
		}
		$_SESSION['cart'][$id] = $cart;
	}

	public function getItemCart($id) {
		if (isset($_SESSION['cart'][$id])) {
			return $_SESSION['cart'][$id];
		}
		return [];
	}

	public function getAllCart() {
		if (isset($_SESSION['cart'])) {
			return $_SESSION['cart'];
		}
		return [];
	}

	public function getCart($id) {
		if (isset($_SESSION['cart'][$id])) {
			return $_SESSION['cart'][$id];
		}
		return [];
	}

	public function countAllCart() {
		return count($this->getAllCart());
	}

	public function removeCart($id)
	{
		$cart = $this->getItemCart($id);
		if (!empty($cart)) {
			unset($_SESSION['cart'][$id]);
			return true;
		}
		return false;
	}

	public function updateQty($id, $qty) {
		$_SESSION['cart'][$id]['qty'] = $qty;
	}
}


?>