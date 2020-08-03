DROP TABLE `company`;

CREATE TABLE `company` (
    `emp_id` INT NOT NULL,
    `company` VARCHAR(30),
    `hours_worked` INT NOT NULL,
    `unit_price` INT NOT NULL 
);

INSERT INTO `company` (`emp_id`, `company`, `hours_worked`, `unit_price`) VALUES (12, 'Ford', 3, 300);
INSERT INTO `company` (`emp_id`, `company`, `hours_worked`, `unit_price`) VALUES (31, 'Subaru', 2, 350);
INSERT INTO `company` (`emp_id`, `company`, `hours_worked`, `unit_price`) VALUES (54, 'Mitsubishi', 4, 300);
INSERT INTO `company` (`emp_id`, `company`, `hours_worked`, `unit_price`) VALUES (86, 'Nissan', 1, 400);
INSERT INTO `company` (`emp_id`, `company`, `hours_worked`, `unit_price`) VALUES (31, 'Mitsubishi', 4, 350);
INSERT INTO `company` (`emp_id`, `company`, `hours_worked`, `unit_price`) VALUES (54, 'Nissan', 2, 300);
INSERT INTO `company` (`emp_id`, `company`, `hours_worked`, `unit_price`) VALUES (86, 'Ford', 6, 400);
INSERT INTO `company` (`emp_id`, `company`, `hours_worked`, `unit_price`) VALUES (12, 'Subaru', 3, 300);
INSERT INTO `company` (`emp_id`, `company`, `hours_worked`, `unit_price`) VALUES (54, 'Ford', 6, 300);
INSERT INTO `company` (`emp_id`, `company`, `hours_worked`, `unit_price`) VALUES (86, 'Subaru', 10, 400);
INSERT INTO `company` (`emp_id`, `company`, `hours_worked`, `unit_price`) VALUES (12, 'Mitsubishi', 4, 300);
INSERT INTO `company` (`emp_id`, `company`, `hours_worked`, `unit_price`) VALUES (31, 'Nissan', 2, 350);
INSERT INTO `company` (`emp_id`, `company`, `hours_worked`, `unit_price`) VALUES (86, 'Mitsubishi', 1, 400);
INSERT INTO `company` (`emp_id`, `company`, `hours_worked`, `unit_price`) VALUES (12, 'Nissan', 2, 300);
INSERT INTO `company` (`emp_id`, `company`, `hours_worked`, `unit_price`) VALUES (31, 'Ford', 7, 350);
INSERT INTO `company` (`emp_id`, `company`, `hours_worked`, `unit_price`) VALUES (54, 'Subaru', 8, 300);
