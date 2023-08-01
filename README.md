<a name="readme-top"></a>

<div align="center">
  <!-- <img src="m alt="logo" width="140"  height="auto" />
  <br/> -->

  <h1><b>LaravelBlogApi</b></h1>

</div>

<!-- TABLE OF CONTENTS -->

# 📗 Table of Contents

- [📖 About the Project](#about-project)
  - [🛠 Built With](#built-with)
    - [Tech Stack](#tech-stack)
    - [Key Features](#key-features)
  - [🚀 Live Demo](#live-demo)
- [💻 Getting Started](#getting-started)
  - [Setup](#setup)
  - [Prerequisites](#prerequisites)
  - [Install](#install)
  - [Usage](#usage)
  - [Run tests](#run-tests)
  - [Deployment](#deployment)
- [👥 Author](#author)
- [🔭 Future Features](#future-features)
- [🤝 Contributing](#contributing)
- [⭐️ Show your support](#support)
- [🙏 Acknowledgements](#acknowledgements)
<!-- - [❓ FAQ (OPTIONAL)](#faq) -->
- [📝 License](#license)

<!-- PROJECT DESCRIPTION -->

## 📖 Laravel Blog API <a name="about-project"></a>

This is a blog application built with Laravel as the API backend and Vue.js as the frontend. Users can register, login, create, read, update, and delete blog posts. Additionally, users can like and comment on blog posts.

## 🛠 Built With <a name="built-with"></a>

### Tech Stack <a name="tech-stack"></a>

- PHP with Laravel framework for the backend API.
- MySQL database for data storage.
- Vue.js and Tailwind CSS for the frontend.
- JWT for authentication.
- Axios for making API requests.
- Laravel Mix for compiling frontend assets.

<details>
  <summary>Client</summary>
  <ul>
    <li><a href="https://laravel.com/">Laravel</a></li>
  </ul>
</details>

<details>
  <summary>Server</summary>
  <ul>
    <li><a href="https://webpack.js.org/">Webpack Dev Server</a></li>
  </ul>
</details>

<details>
<summary>Database</summary>
  <ul>
    <li><a href="https://www.postgresql.org/">MySQL</a></li>
  </ul>
</details>

<!-- Features -->

### Key Features <a name="key-features"></a>

- **User registration and login with JWT token-based authentication**
- **CRUD functionality for blog posts (title, description, and image)**
- **Ability for users to like and comment on blog posts**
- **Follows SOLID principles for clean and maintainable code**

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- LIVE DEMO -->

## 🚀 Live Demo <a name="live-demo"></a>

- [Not yet available]

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- GETTING STARTED -->

## 💻 Getting Started <a name="getting-started"></a>

To get a local copy up and running, follow these steps.

### Prerequisites

You will need any code editor, dependncy manager and a database, most preferrably, MySQL. PHP version used is 8.1

### Setup

Clone this repository to your desired directory:

```sh
  git clone https://github.com/rloterh/LaravelBlogApi.git
  cd LaravelBlogApi
  git checkout dev
```

### Install Dependencies:

Open project with a code editor and install this project with:

```sh
  composer install
  npm install
```

### Configure Local Environment:

1. Create a `.env` file based on the `.env.example` file and update the database configuration.
2. Generate the application key and add to the `.env` file:

```sh
  php artisan key:generate
```

### Compile the Vue.js Frontend:

After installing the npm dependencies, run the following command to compile the Vue.js frontend:

```sh
  npm run dev
```

### Create and Seed the Database:

Run the following commands to create the necessary database tables and seed some initial data:

```sh
  php artisan migrate
  php artisan db:seed
```

### Start the Development Server:

Run the following command to start the Laravel development server:

```sh
  php artisan serve
```

### Access Your Application:

Once the server is running, open your web browser and visit

`http://127.0.0.1:8000`

### Register and Login:

If the application requires authentication, you can register a new user and log in using the registration and login forms.

<!-- ### Deployment

You can deploy this project using: -->

<!--
Example:

```sh

```
 -->

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- AUTHOR -->

## 👥 Author <a name="author"></a>

👤 **Robert Loterh**

[![GitHub](https://img.shields.io/badge/-GitHub-000?style=for-the-badge&logo=GitHub&logoColor=white)](https://github.com/rloterh) <br>
[![LINKEDIN](https://img.shields.io/badge/-LINKEDIN-0077B5?style=for-the-badge&logo=Linkedin&logoColor=white)](https://www.linkedin.com/in/robert-loterh/) <br>
[![EMAIL](https://img.shields.io/badge/-EMAIL-D14836?style=for-the-badge&logo=Mail.Ru&logoColor=white)](mailto:rloterh@gmail.com) <br>
[![TWITTER](https://img.shields.io/badge/-TWITTER-1DA1F2?style=for-the-badge&logo=Twitter&logoColor=white)](https://twitter.com/RLoterh)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- FUTURE FEATURES -->

## 🔭 Future Features <a name="future-features"></a>

- **Unit and integration tests for API endpoints.**
- **Fix The Frontend**

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTRIBUTING -->

## 🤝 Contributing <a name="contributing"></a>

Contributions, issues, and feature requests are welcome!

Feel free to check the [issues page](../../issues/).

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- SUPPORT -->

## ⭐️ Show your support <a name="support"></a>

If you like this project...

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- ACKNOWLEDGEMENTS -->

## 🙏 Acknowledgments <a name="acknowledgements"></a>

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- FAQ (optional) -->

<!-- ## ❓ FAQ (OPTIONAL) <a name="faq"></a> -->

<!-- > Add at least 2 questions new developers would ask when they decide to use your project.

- **[Question_1]**

  - [Answer_1]

- **[Question_2]**

  - [Answer_2]

<p align="right">(<a href="#readme-top">back to top</a>)</p> -->

<!-- LICENSE -->

## 📝 License <a name="license"></a>

This project is [MIT](./LICENSE) licensed.

<p align="right">(<a href="#readme-top">back to top</a>)</p>
