
START TRANSACTION;

SET @id := (SELECT `id` FROM `plugin_base_fields` WHERE `key` = 'price_err_ARRAY_100');
UPDATE `plugin_base_multi_lang` SET `content` = 'The price cannot be greater than 99999999999999.99.' WHERE `foreign_id` = @id AND `model` = 'pjBaseField' AND `field` = 'title';

ALTER TABLE `categories` MODIFY COLUMN `packing_fee` decimal(14,2);

ALTER TABLE `orders` MODIFY COLUMN `price_packing` decimal(14,2);
ALTER TABLE `orders` MODIFY COLUMN `price` decimal(14,2);
ALTER TABLE `orders` MODIFY COLUMN `price_delivery` decimal(14,2);
ALTER TABLE `orders` MODIFY COLUMN `discount` decimal(14,2);
ALTER TABLE `orders` MODIFY COLUMN `subtotal` decimal(14,2);
ALTER TABLE `orders` MODIFY COLUMN `tax` decimal(14,2);
ALTER TABLE `orders` MODIFY COLUMN `total` decimal(14,2);

ALTER TABLE `orders_items` MODIFY COLUMN `price` decimal(14,2);

ALTER TABLE `orders_payments` MODIFY COLUMN `amount` decimal(14,2);

ALTER TABLE `products` MODIFY COLUMN `price` decimal(14,2);
ALTER TABLE `products_prices` MODIFY COLUMN `price` decimal(14,2);

ALTER TABLE `prices` MODIFY COLUMN `total_from` decimal(14,2);
ALTER TABLE `prices` MODIFY COLUMN `total_to` decimal(14,2);
ALTER TABLE `prices` MODIFY COLUMN `price` decimal(14,2);

ALTER TABLE `vouchers` MODIFY COLUMN `discount` decimal(14,2);

ALTER TABLE `extras` MODIFY COLUMN `price` decimal(14,2);
	
COMMIT;