
START TRANSACTION;

INSERT INTO `plugin_base_fields` VALUES (NULL, 'lblNoLocationsFound', 'backend', 'lblNoLocationsFound', 'script', '2020-08-22 12:38:30');
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `plugin_base_multi_lang` VALUES (NULL, @id, 'pjBaseField', '::LOCALE::', 'title', 'No location found. Add a location', 'script');

COMMIT;