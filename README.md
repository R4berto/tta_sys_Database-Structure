# TTA System

A comprehensive web-based management system for inventory, payroll, HR, marketing, and administrative operations.

## Features

- **Inventory Management**: Add, edit, delete, and report on products, sales, users, and groups. Separate modules for users and admins.
- **Payroll System**: Generate payslips, manage payroll data, and configure payroll settings. Admin and user interfaces.
- **HR & Marketing Modules**: HR and marketing management with dedicated PHP modules for activities, results, and views.
- **Admin Tools**: About Us admin, system admin, and backup/restore utilities.
- **Authentication**: Secure login/logout for users and admins.
- **Database Backup**: SQL backup for disaster recovery.

## Project Structure

```
/
├── Inventory/           # Inventory management (user)
├── Inventory_Admin/     # Inventory management (admin)
├── payrolls/            # Payroll system (user)
├── payrolls_admin/      # Payroll system (admin)
├── AboutUs_Admin/       # About Us admin interface
├── DB_Backup File/      # Database backup SQL
├── *.php                # HR, marketing, system, and user modules
├── *.css, *.png         # Styles and images
```

## Setup

1. **Clone the repository:**
   ```sh
   git clone https://github.com/R4berto/tta_sys_Database-Structure.git
   ```
2. **Import the database:**
   - Use the SQL file in `DB_Backup File/tta_database.sql` to set up your MySQL database.
3. **Configure database connection:**
   - Edit `config.php` and relevant files in `includes/` or `conn/` folders to match your DB credentials.
4. **Deploy on a PHP server:**
   - Place the project in your web server's root directory (e.g., `htdocs` for XAMPP).

## Usage

- Access the system via `index.php` for the main dashboard.
- Use the admin modules for advanced management and reporting.
- Payroll and inventory modules are separated for users and admins.

## License

This project is released under the [Unlicense](https://unlicense.org).

---

*For more details, see the code and module documentation within each folder.* 