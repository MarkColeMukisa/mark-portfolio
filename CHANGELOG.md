# Changelog

All notable changes to mark-portfolio are documented here.

---

## [Unreleased] — Dynamic Experience Years (Death-Match)

### Added

- **`app/Services/ExperienceCalculator`** — service (ported from
  [experience-ftr](https://github.com/MarkColeMukisa/experience-ftr)) that
  calculates years/months/days of professional experience from a single start
  date using Carbon.
- **`app/Support/ExperienceBreakdown`** — readonly value-object returned by
  `ExperienceCalculator`, exposing `years`, `months`, `days`, `totalMonths`,
  `startedOn`, `asOf`, and a human-readable `formattedPeriod()` helper.
- **`config/portfolio.php`** — new portfolio-specific config file with an
  `experience_start_date` key (default `2020-06-01`).  Override it via the
  `PORTFOLIO_EXPERIENCE_START_DATE` environment variable — no code change
  required.
- **`.env.example`** — documents the new `PORTFOLIO_EXPERIENCE_START_DATE`
  environment variable.
- **`tests/Unit/ExperienceCalculatorTest.php`** — unit tests covering the
  service: detailed breakdown, sub-month fallback, singular/plural labels, and
  implicit current-date behaviour.
- **`tests/Feature/PortfolioPageTest.php`** — three new feature tests asserting
  that the traits component renders the correct dynamic experience label for
  different configured start dates.

### Changed

- **`resources/views/components/portfolio/⚡traits.blade.php`** — replaces the
  hard-coded `"5+ years Experience"` string with a dynamic label computed by
  `ExperienceCalculator` from `config('portfolio.experience_start_date')`.
  Display format is preserved (`"N+ years Experience"`).  The component falls
  back to `"5+ years"` if the config value cannot be parsed.

### How to configure

1. Set `PORTFOLIO_EXPERIENCE_START_DATE=YYYY-MM-DD` in your `.env` file (or
   deployment environment).
2. Run `php artisan config:clear` if config is cached.
3. The traits section of the portfolio page will now show the correct number of
   years automatically.

### How to test locally

```bash
composer install
php artisan key:generate
php artisan migrate
vendor/bin/pest
```
