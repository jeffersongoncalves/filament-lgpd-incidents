# Changelog

All notable changes to this project will be documented in this file.

## 3.0.0 - 2026-11-16

Filament 5: security incident register for [laravel-lgpd-incidents](https://github.com/jeffersongoncalves/laravel-lgpd-incidents) (Res. CD/ANPD 15/2024).

- Register incidents: the deadline is set from the discovery date (business days, Brazilian holidays skipped), which is locked afterwards
- Assess risk (low / relevant); low-risk incidents need no communication
- Record the ANPD notification (with protocol) and the data subject notification, then close with the measures taken
- Status badges, pending and overdue filters, navigation badge with pending incidents (red when overdue)
- English and Brazilian Portuguese

## [Unreleased]
