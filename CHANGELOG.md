# Changelog

All notable changes to this project will be documented in this file.

## 3.2.0 - 2026-11-17

- Partial ANPD notice (Res. CD/ANPD 15/2024, art. 6, §3): a *Partial notice* toggle on **ANPD notified** schedules the complementary information 20 business days after the notice; record it with the new **Complement sent to the ANPD** action. A late complement shows as "Complement overdue".
- 19 languages updated.
- Requires laravel-lgpd-incidents ^1.1: publish and run its migrations again (`php artisan vendor:publish --tag=lgpd-incidents-migrations && php artisan migrate`).

## 3.1.0 - 2026-11-16

- Translations for 17 more languages: ar, az, de, es, fa, fr, hi, it, ja, nl, pl, pt, ru, tr, uk, uz, zh_CN (19 in total with en and pt_BR)

## 3.0.0 - 2026-11-16

Filament 5: security incident register for [laravel-lgpd-incidents](https://github.com/jeffersongoncalves/laravel-lgpd-incidents) (Res. CD/ANPD 15/2024).

- Register incidents: the deadline is set from the discovery date (business days, Brazilian holidays skipped), which is locked afterwards
- Assess risk (low / relevant); low-risk incidents need no communication
- Record the ANPD notification (with protocol) and the data subject notification, then close with the measures taken
- Status badges, pending and overdue filters, navigation badge with pending incidents (red when overdue)
- English and Brazilian Portuguese

## [Unreleased]
