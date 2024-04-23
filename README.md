# Contact Management System (CMS) using Laravel

This project is a basic Contact Management System (CMS) developed using Laravel and Mysql. It provides functionalities to manage contacts including creating, viewing, updating, and deleting contacts.

## Navigating the Application

        - **Create Contacts**:  can add new contacts with their name, email, phone, and address.
<img src="./screenshots/home.png" alt="drawing"   width="auto" />
<img src="./screenshots/create.png" alt="drawing"   width="auto" />
<img src="./screenshots/mobilcreate.png" alt="drawing"   width="auto" />
<img src="./screenshots/createsecuss.png" alt="drawing"   width="auto" />
        - **View Contacts**: Contacts are displayed in a list format, showing their basic information.
<img src="./screenshots/home.png" alt="drawing"   width="auto" />
<img src="./screenshots/recherch.png" alt="drawing"   width="auto" />
        - **Update Contacts**:  can edit the details of existing contacts.
<img src="./screenshots/update.png" alt="drawing"   width="auto" />

        - **Delete Contacts**: Contacts can be removed from the system if they are no longer needed.
<img src="./screenshots/delete.png" alt="drawing"   width="auto" />
<img src="./screenshots/message.png" alt="drawing"   width="auto" />

## Setup

To set up and run this project locally, follow these steps:

1. **Clone the Repository**: 
   ```bash
   git clone https://github.com/abdelati-elhouari/contact-management-system.git

2. **Navigate to the Project Directory**:
    cd contact-management-system

3. **Install Dependencies:**:
    composer install

4. **Configure Database**:
²²²Update the database configuration in the .env file with your database credentials.

5. **Run Migrations:**:
    php artisan migrate

6. **Start the Development Server**:
    php artisan serve

9. **Access the Application**:
        Open your web browser and navigate to http://localhost:8000.