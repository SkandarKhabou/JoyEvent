This project integrates **Laravel** with **Vue.js** to build a powerful web application that combines a robust backend with a dynamic frontend. 
**Laravel** handles server-side logic, database management, and API endpoints, while **Vue.js** provides an interactive and responsive user interface. 
Key features include dynamic management of hotels and rooms, with user-friendly forms for adding, editing, and deleting entries. 
The application showcases its functionality through various components and real-time data interactions, ensuring a smooth user experience. 
 
**Screenshots**: 
1. **Homepage**: Displays the main interface of the application. 
   ![Homepage](Screenshots/Capture1.png) 
2. **Hotel List**: Shows a list of hotels fetched from the server. 
   ![Hotel List](Screenshots/Capture2.png) 
3. **Room Details**: Provides detailed information about rooms in a selected hotel. 
   ![Room Details](Screenshots/Capture3.png) 
4. **Add Room**: A form for adding new rooms to the system. 
   ![Add Room](Screenshots/Capture4.png) 
5. **Edit Room**: Interface for modifying existing room details. 
   ![Edit Room](Screenshots/Capture5.png) 
6. **Delete Room Confirmation**: Popup for confirming room deletion. 
   ![Delete Room Confirmation](Screenshots/Capture6.png) 
7. **Events Management**: Manage events related to rooms and hotels. 
   ![Events](Screenshots/Capture7.png) 
 
**Setup Instructions**: 
1. **Clone the Repository**: 
   ```bash 
   git clone https://github.com/your-username/your-repo.git 
   cd your-repo 
   ``` 
2. **Backend (Laravel)**: 
   - Install Laravel dependencies: 
     ```bash 
     cd backend 
     composer install 
     ``` 
   - Set up environment variables: 
     ```bash 
     cp .env.example .env 
     ``` 
   - Generate the application key: 
     ```bash 
     php artisan key:generate 
     ``` 
   - Run database migrations: 
     ```bash 
     php artisan migrate 
     ``` 
   - Start the Laravel server: 
     ```bash 
     php artisan serve 
     ``` 
3. **Frontend (Vue.js)**: 
   - Install Vue.js dependencies: 
     ```bash 
     cd ../frontend 
     npm install 
     ``` 
   - Start the Vue development server: 
     ```bash 
     npm run dev 
     ``` 
 
**Usage**: 
- Access the Laravel backend at: `http://localhost:8000` 
- Access the Vue.js frontend at: `http://localhost:5173` 
 
**Contributing**: 
- Fork the repository and submit a pull request for any contributions or improvements. 
 
**License**: 
- This project is licensed under the **MIT License**. 
