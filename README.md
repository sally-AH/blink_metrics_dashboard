<img src="./readme/title1.png"/> 
<br><br> 

<img src="./readme/title7.png"/> 


- [Tech Stack](#tech-stack)
  - [Frontend](#Frontend)
  - [Backend](#Backend)
- [Demo](#Demo)
- [How to Run](#how-to-run)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)


<br><br>  



<!-- Tech stack -->
<a name="tech-stack" ></a>
<img src="./readme/title5.png"/>

###  Predict Pro is built using the following technologies:

<a name="Frontend" ></a>
#### Frontend Development:
The Predict Pro app is built using Flutter app development framework. Flutter enables the development of cross-platform mobile applications with a single codebase, allowing it to run seamlessly on various devices, including mobile, desktop, and web.

<a name="Backend" ></a>
#### Backend Development:
For the backend, Laravel is used. Laravel is a robust PHP framework known for its elegant syntax and powerful features, making it ideal for building efficient and secure server-side applications.

#### Database Management:
The application relies on MySQL for database management. MySQL is a widely used open-source relational database management system that ensures data is stored and retrieved efficiently.

#### Real-time Chat:
To facilitate real-time communication among users, Firebase Realtime Database is integrated. Firebase is a Google-backed platform that offers real-time database capabilities, making it perfect for features like live chatting within the app.

#### Notifications:
Firebase Cloud Messaging (FCM) is used for sending push notifications to users. FCM is a cross-platform messaging solution that ensures reliable message delivery across different devices.

<br><br>

<!-- Demo -->
<a name="Demo" ></a>
<img src="./readme/title4.png"/>

> Using the wireframes and mockups as a guide, we implemented the Predict Pro app with the following features:

### User Screens (Mobile)
| Login Screen  | Register Screen | Landing Screen | Loading Screen |
| ---| ---| ---| ---|
| ![Landing](./readme/demo/Rloginpage.jpg) | ![fsdaf](./readme/demo/RregisterScreen.jpg) | ![fsdaf](./readme/demo/Rlandingpage.jpg) | ![fsdaf](./readme/demo/Mdash.jpg) |



| Dashboard Screen | Stock Screen | Chat Screen | Login/Sign up Screen |
| ---| ---| ---| ---|
| ![Landing](./readme/demo/GIFs/ezgif.com-gif-maker.gif) | ![fsdaf](./readme/demo/GIFs/ezgif.com-gif-maker(1).gif) | ![fsdaf](./readme/demo/GIFs/ezgif.com-gif-maker(2).gif) | ![fsdaf](./readme/demo/GIFs/ezgif.com-video-to-gif.gif) |

### User Screens (Admin)
| Landing Screen | Users Screen |
| ---| ---|
| ![Landing](./readme/demo/newDash.PNG) | ![fsdaf](./readme/demo/users.PNG) |

| Light Mode Landing Screen | Light Mode Users Screen |
| ---| ---|
| ![Landing](./readme/demo/LNdash.PNG) | ![fsdaf](./readme/demo/Luser.PNG) |

| Pie Chart Screen | Bar Chart Screen | Line Chart Screen |
| ---| ---| ---|
| ![Landing](./readme/demo/pie.PNG) | ![fsdaf](./readme/demo/Bar.PNG) | ![fsdaf](./readme/demo/line.PNG) |

| Light/Dark Mode | Team screen |
| ---| ---|
| ![Landing](./readme/demo/GIFs/GD1.gif) | ![fsdaf](./readme/demo/GIFs/GG2.gif) |

| Bar Chart Screen | Pie Chart Screen |
| ---| ---|
| ![Landing](./readme/demo/GIFs/GD3.gif) | ![fsdaf](./readme/demo/GIFs/GD4.gif) |


<br><br> 



<!-- How to run -->
<a name="how-to-run" ></a>
<img src="./readme/title6.png"/> 

> To set up Coffee Express locally, follow these steps:

### Admin dashboard

#### Installation


1. Clone the repo
   ```sh
   git clone https://github.com/sally-AH/blink_metrics_dashboard.git
   ```
2. Install Laravel dependencies by navigating to the Laravel project directory:
   ```sh
   cd AdminDashboard
   composer install
   ```
3. Copy the example env file and make the required configuration changes in the .env file:
   ```sh
   cp .env.example .env
   ```
4. Start the local development server:
   ```sh
   php artisan serve
   ```


Now, you should be able to run Blink Matrics locally and explore its features.
