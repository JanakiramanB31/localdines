
START TRANSACTION;

INSERT INTO `plugin_base_fields` VALUES (NULL, 'price_err_ARRAY_100', 'arrays', 'price_err_ARRAY_100', 'script', '2019-08-26 08:17:13');
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `plugin_base_multi_lang` VALUES (NULL, @id, 'pjBaseField', '::LOCALE::', 'title', 'The price cannot be greater than 9999999.99.', 'script');

COMMIT;