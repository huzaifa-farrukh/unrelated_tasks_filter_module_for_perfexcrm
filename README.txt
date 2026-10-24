Dropdown Unrelated Tasks Filter

Version: 1.3.0
System name: unrelated_tasks_filter
Tested Perfex CRM version: 3.4.1
Minimum supported Perfex CRM version: 3.4.1

Installation
1. Extract the unrelated_tasks_filter folder from the package.
2. Upload it to your Perfex CRM modules directory, preserving the folder name.
3. In Setup > Modules, activate the module.
4. On Tasks, use Filters > New Filter and add the Unrelated Tasks rule. Save it with the name you prefer.

Upgrade
Replace the module files with the new release, then use Upgrade Database on the Modules page if Perfex requests it. This release contains a no-op migration because it adds no database tables or columns.

The rule is opt-in and is not applied unless included in a filter. Saved filters are staff-specific and use Perfex CRM's standard saved-filter behavior.

Compatibility
Tested with Perfex CRM 3.4.1 and PHP 8.2. Other versions and hosting configurations have not been verified. Test upgrades on a staging copy before deploying to a production site.

Support
Include your Perfex CRM version, PHP version, browser console errors, and steps to reproduce when requesting support.
