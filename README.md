# Restaurant POS and Website

A comprehensive restaurant management system with customer-facing website and staff administration panel.

## Built with

<p align="left">
   <a href="#">
      <img alt="HTML5" src="https://img.shields.io/badge/html5%20-%23E34F26.svg?&style=for-the-badge&logo=html5&logoColor=white"/>
      <img alt="CSS3" src="https://img.shields.io/badge/css3%20-%231572B6.svg?&style=for-the-badge&logo=css3&logoColor=white"/>
      <img alt="MySQL" src="https://img.shields.io/badge/mysql-%2300f.svg?&style=for-the-badge&logo=mysql&logoColor=white"/>
      <img alt="Php" src="https://img.shields.io/badge/php-474a8a?style=for-the-badge&logo=php&logoColor=white" />
      <img alt="JavaScript" src="https://img.shields.io/badge/javascript%20-%23F7DF1E.svg?&style=for-the-badge&logo=javascript&logoColor=black"/>
   </a>
</p>

**PHP Version:** 7.4+

## Project Structure

The project consists of two main components:

### Customer Side (customerSide/)

Website for customers with features:

- Account registration and login
- Table reservations
- Points system
- Profile management
- Feedback submission

### Staff Side (adminSide/)

Administrative panel for restaurant staff with features:

- Point-of-Sale (POS) system
- Order management
- Kitchen display system
- Payment processing
- Receipt generation
- Customer data management
- Analytics and reporting
- Menu management

## Installation

### Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx)
- Modern web browser

### Setup Instructions

1. Clone the repository:

   ```
   git clone https://github.com/yourusername/RestaurantProject.git
   cd RestaurantProject
   ```

2. Configure your web server to point to the project directory.

3. Set up environment variables:

   - Copy the example environment file:
     ```
     cp env.example .env
     ```
   - Edit the `.env` file with your database credentials:
     ```
     DB_HOST=localhost
     DB_USER=your_username
     DB_PASS=your_password
     DB_NAME=restaurantdb
     ```

4. Access the site through your web browser:
   - The first visit will automatically set up the database
   - After setup, you can access:
     - Customer site: `/customerSide/home/home.php`
     - Admin panel: `/adminSide/StaffLogin/login.php`

## Demo Accounts

Customer:

- Email: naz@gmail.com
- Password: 123456

## Screenshots

(Screenshots will be added here)

## Contributing

Contributions are welcome! Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
# restaurant-p
