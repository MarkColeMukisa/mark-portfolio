# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/).

## [Unreleased]

### Added

- **Dynamic experience-years** in the portfolio traits component. The hard-coded
  "5+ years Experience" label is now driven by an `experience_start_date` stored
  on the `users` table.  When set, the label is calculated automatically (e.g.
  "6+ years") using the `ExperienceCalculator` service ported from the
  [experience-ftr](https://github.com/MarkColeMukisa/experience-ftr) repository.
  When the field is not set, the display falls back gracefully to "5+ years".
- `app/Services/ExperienceCalculator.php` — service class that computes a
  full experience breakdown (years, months, days, total months) from a start date.
- `app/Support/ExperienceBreakdown.php` — readonly value-object returned by the
  calculator, including a `formattedPeriod()` helper.
- Migration `2026_04_03_000000_add_experience_start_date_to_users_table.php` —
  adds a nullable `experience_start_date` date column to the `users` table
  (safe default: `null`; rollback drops the column cleanly).
- Profile settings page now exposes an **Experience Start Date** date-picker so
  authenticated users can update their start date from the Settings → Profile page.
- Unit tests for `ExperienceCalculator` in `tests/Unit/ExperienceCalculatorTest.php`.
- Feature tests for the dynamic traits label in `tests/Feature/ExperienceTraitsTest.php`.

### Changed

- `app/Models/User.php` — `experience_start_date` added to `$fillable` and cast
  as `'date'`.
- `app/Concerns/ProfileValidationRules.php` — `experienceStartDateRules()` added;
  `profileRules()` now includes `experience_start_date` validation.
- `resources/views/components/portfolio/⚡traits.blade.php` — experience label is
  now computed dynamically from the portfolio owner's `experience_start_date`
  with a "5+ years" fallback.
- `resources/views/pages/settings/⚡profile.blade.php` — added
  `experience_start_date` property and the corresponding date-picker input.

## How to Configure experience-years

1. Log in to the portfolio admin and navigate to **Settings → Profile**.
2. Set the **Experience Start Date** to the date you started your professional
   development career (e.g. `2019-04-01`).
3. Save. The portfolio traits section will now show the dynamically calculated
   years of experience (e.g. "7+ years Experience").

To seed the value for a fresh installation you can run a Tinker command:

```bash
php artisan tinker
> App\Models\User::first()->update(['experience_start_date' => '2019-04-01']);
```
