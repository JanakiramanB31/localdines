
START TRANSACTION;

ALTER TABLE `categories` MODIFY COLUMN `packing_fee` decimal(16,2);

ALTER TABLE `orders` MODIFY COLUMN `price_packing` decimal(16,2);
ALTER TABLE `orders` MODIFY COLUMN `price` decimal(16,2);
ALTER TABLE `orders` MODIFY COLUMN `price_delivery` decimal(16,2);
ALTER TABLE `orders` MODIFY COLUMN `discount` decimal(16,2);
ALTER TABLE `orders` MODIFY COLUMN `subtotal` decimal(16,2);
ALTER TABLE `orders` MODIFY COLUMN `tax` decimal(16,2);
ALTER TABLE `orders` MODIFY COLUMN `total` decimal(16,2);

ALTER TABLE `orders_items` MODIFY COLUMN `price` decimal(16,2);

ALTER TABLE `orders_payments` MODIFY COLUMN `amount` decimal(16,2);

ALTER TABLE `products` MODIFY COLUMN `price` decimal(16,2);
ALTER TABLE `products_prices` MODIFY COLUMN `price` decimal(16,2);

ALTER TABLE `prices` MODIFY COLUMN `total_from` decimal(16,2);
ALTER TABLE `prices` MODIFY COLUMN `total_to` decimal(16,2);
ALTER TABLE `prices` MODIFY COLUMN `price` decimal(16,2);

ALTER TABLE `vouchers` MODIFY COLUMN `discount` decimal(16,2);

ALTER TABLE `extras` MODIFY COLUMN `price` decimal(16,2);

COMMIT;