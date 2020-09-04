INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`)
VALUES
	(1, 'admin', 'Administrador', 'Administrador del sitio\n', '2020-09-03 16:00:57', '2020-09-03 16:00:57'),
	(2, 'mod', 'Moderador', 'Moderador', '2020-09-03 16:00:57', '2020-09-03 16:00:57'),
	(3, 'estudiante', 'Estudiante', 'Estudiante', '2020-09-03 16:00:57', '2020-09-03 16:00:57');

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1, 'Leandro', 'lea.arturi@gmail.com', NULL, '$2y$10$2BXmt09AN6rs47UNPRuJu.f8C7il5/r56nk8kisAd7x3gjY24miKC', NULL, '2020-09-03 16:00:57', '2020-09-03 16:00:57'),
	(2, 'Cinthia', 'cinthia@gmail.com', NULL, '$2y$10$2BXmt09AN6rs47UNPRuJu.f8C7il5/r56nk8kisAd7x3gjY24miKC', NULL, '2020-09-03 16:00:57', '2020-09-03 16:00:57');
