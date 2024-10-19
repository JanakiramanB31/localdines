INSERT INTO `food_delivery_plugin_base_fields` (`id`, `key`, `type`, `label`, `source`, `modified`) VALUES
(NULL, 'front_label_date', 'frontend', 'Label / Date', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `food_delivery_plugin_base_multi_lang` (`id`, `foreign_id`, `model`, `locale`, `field`, `content`, `source`) VALUES
(NULL, @id, 'pjBaseField', 1, 'title', 'Date', 'script');


INSERT INTO `food_delivery_plugin_base_fields` (`id`, `key`, `type`, `label`, `source`, `modified`) VALUES
(NULL, 'front_label_time', 'frontend', 'Label / Time', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `food_delivery_plugin_base_multi_lang` (`id`, `foreign_id`, `model`, `locale`, `field`, `content`, `source`) VALUES
(NULL, @id, 'pjBaseField', 1, 'title', 'Time', 'script');

INSERT INTO `food_delivery_plugin_base_fields` (`id`, `key`, `type`, `label`, `source`, `modified`) VALUES
(NULL, 'front_label_people', 'frontend', 'Label / People', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `food_delivery_plugin_base_multi_lang` (`id`, `foreign_id`, `model`, `locale`, `field`, `content`, `source`) VALUES
(NULL, @id, 'pjBaseField', 1, 'title', 'People', 'script');

INSERT INTO `food_delivery_plugin_base_fields` (`id`, `key`, `type`, `label`, `source`, `modified`) VALUES
(NULL, 'front_label_check_availability', 'frontend', 'Label / Check Availability', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `food_delivery_plugin_base_multi_lang` (`id`, `foreign_id`, `model`, `locale`, `field`, `content`, `source`) VALUES
(NULL, @id, 'pjBaseField', 1, 'title', 'Check Availability', 'script');

INSERT INTO `food_delivery_plugin_base_fields` (`id`, `key`, `type`, `label`, `source`, `modified`) VALUES
(NULL, 'front_label_avail_title', 'frontend', 'Label / Available for', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `food_delivery_plugin_base_multi_lang` (`id`, `foreign_id`, `model`, `locale`, `field`, `content`, `source`) VALUES
(NULL, @id, 'pjBaseField', 1, 'title', 'Available tables for %1s person(s) on %2s at %3s. Click on a table to book it.', 'script');

INSERT INTO `food_delivery_plugin_base_fields` (`id`, `key`, `type`, `label`, `source`, `modified`) VALUES
(NULL, 'front_label_book', 'frontend', 'Book', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `food_delivery_plugin_base_multi_lang` (`id`, `foreign_id`, `model`, `locale`, `field`, `content`, `source`) VALUES
(NULL, @id, 'pjBaseField', 1, 'title', 'Book', 'script');

INSERT INTO `food_delivery_plugin_base_fields` (`id`, `key`, `type`, `label`, `source`, `modified`) VALUES
(NULL, 'front_label_send_enquiry', 'frontend', 'Label / Send Enquiry', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `food_delivery_plugin_base_multi_lang` (`id`, `foreign_id`, `model`, `locale`, `field`, `content`, `source`) VALUES
(NULL, @id, 'pjBaseField', 1, 'title', 'Send Enquiry', 'script');

INSERT INTO `food_delivery_plugin_base_fields` (`id`, `key`, `type`, `label`, `source`, `modified`) VALUES
(NULL, 'front_no_available_table', 'frontend', 'Label / No table', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `food_delivery_plugin_base_multi_lang` (`id`, `foreign_id`, `model`, `locale`, `field`, `content`, `source`) VALUES
(NULL, @id, 'pjBaseField', 1, 'title', 'There is no table available. Click on SEND ENQUIRY button to make an enquiry.', 'script');

INSERT INTO `food_delivery_plugin_base_fields` (`id`, `key`, `type`, `label`, `source`, `modified`) VALUES
(NULL, 'front_label_selected_tables', 'frontend', 'Label / Selected table(s)', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `food_delivery_plugin_base_multi_lang` (`id`, `foreign_id`, `model`, `locale`, `field`, `content`, `source`) VALUES
(NULL, @id, 'pjBaseField', 1, 'title', 'Selected table', 'script');

INSERT INTO `food_delivery_plugin_base_fields` (`id`, `key`, `type`, `label`, `source`, `modified`) VALUES
(NULL, 'front_label_your_booking', 'frontend', 'Label / Your booking', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `food_delivery_plugin_base_multi_lang` (`id`, `foreign_id`, `model`, `locale`, `field`, `content`, `source`) VALUES
(NULL, @id, 'pjBaseField', 1, 'title', 'Booking details', 'script');

INSERT INTO `food_delivery_plugin_base_fields` (`id`, `key`, `type`, `label`, `source`, `modified`) VALUES
(NULL, 'front_label_booking_form', 'frontend', 'Label / Booking form', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `food_delivery_plugin_base_multi_lang` (`id`, `foreign_id`, `model`, `locale`, `field`, `content`, `source`) VALUES
(NULL, @id, 'pjBaseField', 1, 'title', 'Reservation form fill the form to reserve a table', 'script');

INSERT INTO `food_delivery_plugin_base_fields` (`id`, `key`, `type`, `label`, `source`, `modified`) VALUES
(NULL, 'front_label_date_time', 'frontend', 'Label / Date and time', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `food_delivery_plugin_base_multi_lang` (`id`, `foreign_id`, `model`, `locale`, `field`, `content`, `source`) VALUES
(NULL, @id, 'pjBaseField', 1, 'title', 'Date and time', 'script');

INSERT INTO `food_delivery_plugin_base_fields` (`id`, `key`, `type`, `label`, `source`, `modified`) VALUES
(NULL, 'front_label_table_for', 'frontend', 'Label / Table for person', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `food_delivery_plugin_base_multi_lang` (`id`, `foreign_id`, `model`, `locale`, `field`, `content`, `source`) VALUES
(NULL, @id, 'pjBaseField', 1, 'title', 'Table for %s person(s)', 'script');

INSERT INTO `food_delivery_plugin_base_fields` (`id`, `key`, `type`, `label`, `source`, `modified`) VALUES
(NULL, 'front_label_change', 'frontend', 'Label / change', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `food_delivery_plugin_base_multi_lang` (`id`, `foreign_id`, `model`, `locale`, `field`, `content`, `source`) VALUES
(NULL, @id, 'pjBaseField', 1, 'title', 'change selection', 'script');

INSERT INTO `food_delivery_plugin_base_fields` (`id`, `key`, `type`, `label`, `source`, `modified`) VALUES
(NULL, 'front_label_title', 'frontend', 'Label / Title', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `food_delivery_plugin_base_multi_lang` (`id`, `foreign_id`, `model`, `locale`, `field`, `content`, `source`) VALUES
(NULL, @id, 'pjBaseField', 1, 'title', 'Title', 'script');

INSERT INTO `food_delivery_plugin_base_fields` (`id`, `key`, `type`, `label`, `source`, `modified`) VALUES
(NULL, 'front_label_fname', 'frontend', 'Label / First name', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `food_delivery_plugin_base_multi_lang` (`id`, `foreign_id`, `model`, `locale`, `field`, `content`, `source`) VALUES
(NULL, @id, 'pjBaseField', 1, 'title', 'First name', 'script');

INSERT INTO `food_delivery_plugin_base_fields` (`id`, `key`, `type`, `label`, `source`, `modified`) VALUES
(NULL, 'front_label_lname', 'frontend', 'Label / Last name', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `food_delivery_plugin_base_multi_lang` (`id`, `foreign_id`, `model`, `locale`, `field`, `content`, `source`) VALUES
(NULL, @id, 'pjBaseField', 1, 'title', 'Last name', 'script');

INSERT INTO `food_delivery_plugin_base_fields` (`id`, `key`, `type`, `label`, `source`, `modified`) VALUES
(NULL, 'front_label_phone', 'frontend', 'Label / Phone', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `food_delivery_plugin_base_multi_lang` (`id`, `foreign_id`, `model`, `locale`, `field`, `content`, `source`) VALUES
(NULL, @id, 'pjBaseField', 1, 'title', 'Phone', 'script');


INSERT INTO `food_delivery_plugin_base_fields` (`id`, `key`, `type`, `label`, `source`, `modified`) VALUES
(NULL, 'front_label_checkout', 'frontend', 'Label / Checkout', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `food_delivery_plugin_base_multi_lang` (`id`, `foreign_id`, `model`, `locale`, `field`, `content`, `source`) VALUES
(NULL, @id, 'pjBaseField', 1, 'title', 'Checkout', 'script');

INSERT INTO `food_delivery_plugin_base_fields` (`id`, `key`, `type`, `label`, `source`, `modified`) VALUES
(NULL, 'front_label_cancel', 'frontend', 'Label / Cancel', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `food_delivery_plugin_base_multi_lang` (`id`, `foreign_id`, `model`, `locale`, `field`, `content`, `source`) VALUES
(NULL, @id, 'pjBaseField', 1, 'title', 'Cancel', 'script');

INSERT INTO `food_delivery_plugin_base_fields` (`id`, `key`, `type`, `label`, `source`, `modified`) VALUES
(NULL, 'front_button_cancel', 'frontend', 'Button / Cancel', 'script', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `food_delivery_plugin_base_multi_lang` (`id`, `foreign_id`, `model`, `locale`, `field`, `content`, `source`) VALUES
(NULL, @id, 'pjBaseField', 1, 'title', 'Cancel', 'script');