<h2 id="product-name"><?=$product->name?></h2>
<div class="shopping-cart-description left">
	<p>
		<?=$product->description_formatted()?>
	</p>
</div>

<div class="product-add-to-cart-form right">
	<?=form::open('cart/add')?>
		<?=form::hidden('product_id', $product)?>
		<div class="choose-quantity">
			<?=form::label('quantity', 'Quantity')?>
			<?=form::input(array('name' => 'quantity', 'value' => 1, 'class' => 'cart-item-quantity-input'))?>
			<span class="price"><?=$product->base_price()?> lb</span>
		</div>
		<div class="add-to-cart-button">
			<?=form::submit('submit', 'Add to Cart')?>
		</div>
	<?=form::close()?>
</div>
<div class="clear"></div>