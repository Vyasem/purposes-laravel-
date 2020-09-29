INSERT INTO menu (id, name, link, sort) VALUES
    (1, 'О проекте', '/about/', 1),
    (2, 'Блог', '/blog/', 2),
    (3, 'Помощь', '/help/', 3);

INSERT INTO users (id, login, password, email, name, remember_token) VALUES
    (17, 'Lota', '$2y$10$PEI.M.NaguCzfwB1Nkm4buwK/dBkMSXsMWvNt50gGV2zib3M51Ivm', 'lota@gmail.com', 'Лота', ''),
    (19, 'Lola', '$2y$10$PEI.M.NaguCzfwB1Nkm4buwK/dBkMSXsMWvNt50gGV2zib3M51Ivm', 'lola@gmail.com', 'Lola', 'BJHbTdfkhsGowpSBZGAqheBnFZUfoN3EoZ4c9IADAEnMas24oIgpgFlZNF7e'),
    (23, 'Spirit', '$2y$10$gEHtCF.yY2PSoAhZc7UFBOFrorAmMutE3XTXFhhHs52jemsXa7Wu.', 'vyasem@gmail.com', 'Слава', 'false');

INSERT INTO targets (id, name, start, "end", text, user_id) VALUES
    (2, 'Изучить английский', '2018-06-29', NULL, 'Изучить английский язык', 19);

INSERT INTO stages (id, name, priority, start, "end", description, status, target_id) VALUES
    (7, 'Накопить денег', 1, '2018-02-01', '2018-08-01', 'Необходимо накопить 100 000 за 6 месяцев', 'successful', 2),
    (8, 'Пройти тестирование', 2, '2018-08-01', NULL, 'Пройти тестирование для определения текущего уровня языка.', 'process', 2),
    (9, 'Podpisati', 3, '2018-09-01', NULL, 'Заключить договор на оказание образовательных услуг', 'wait', 2),
    (10, 'Приступить к изучению языка', 4, '2018-09-10', NULL, 'Начать изучать язык', 'wait', 2);