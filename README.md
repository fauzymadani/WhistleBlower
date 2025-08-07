# School Whistleblowing System

A simple and privacy-focused web application built with Laravel 11 to help students safely report bullying incidents at school. This system empowers students to speak up without fear of exposure or retaliation.

## 🎯 Purpose

The goal of this project is to provide a secure, anonymous, and user-friendly platform for students who have witnessed or experienced bullying. It is designed to:

- Protect the identity of whistleblowers
- Encourage honest and safe reporting
- Help school administrators handle reports effectively

## 🔐 Key Features

- **Anonymous Reporting**: Users can choose to submit reports anonymously or include their identity if they're comfortable.
- **Auto-generated Usernames**: During registration, usernames are randomly generated to protect user identity.
- **Detailed Reporting**: Users can file reports specifying the incident, perpetrator information, and their role (victim/witness).
- **User Dashboard**: Logged-in users can view, edit, and delete their own reports.
- **Admin Panel**: Admins can view full report details, mark them as handled, and delete irrelevant or invalid reports.
- **Role-based Access**: Only registered users can submit reports, and only admins can manage them.

## 🛠 Tech Stack

- Laravel 11
- Breeze (Blade with Alpine.js)
- MySQL
- Tailwind CSS (via Breeze)

## 🚀 Getting Started

1. Clone the repo  

```bash
git clone https://github.com/your-username/whistleblowing-system.git
cd whistleblowing-system
```

2. Install Dependencies
```bash
composer install
npm install && npm run build
```

3. Set up your `.env`
```bash
cp .env.example .env
php artisan key:generate
```

4. Set your DB credentials in `.env`, then run migrations:
```bash
php artisan migrate
php artisan db:seed
php artisan storage:link
```

5. Start the dev server
```bash
npm install && npm run dev
php artisan serve
```

## 🙌 Contributor
This project is built for educational and ethical purposes. Contributions and improvements are welcome to make it even more secure and helpful.
you can contribute with creating a fork and pull request or submit a patch via issue.

<a href="https://github.com/fauzymadani/WhistleBlower/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=fauzymadani/WhistleBlower&max=50&columns=10&anon=1" />
</a>

## Commits
[![activity](https://github-readme-activity-graph.vercel.app/graph?username=fauzymadani&theme=react-dark)](https://github.com/ashutosh00710/github-readme-activity-graph)
[![activity](https://github-readme-activity-graph.vercel.app/graph?username=andikagithub1&theme=react-dark)](https://github.com/ashutosh00710/github-readme-activity-graph)
[![activity](https://github-readme-activity-graph.vercel.app/graph?username=AgungPajar&theme=react-dark)](https://github.com/ashutosh00710/github-readme-activity-graph)
[![activity](https://github-readme-activity-graph.vercel.app/graph?username=Azzelzz&theme=react-dark)](https://github.com/ashutosh00710/github-readme-activity-graph)
# License
[GNU General Public License v3.0 (GPL-3.0)](https://www.gnu.org/licenses/gpl-3.0.html)

GNU GENERAL PUBLIC LICENSE
Version 3, 29 June 2007

Copyright (C) 2025 <fauzymadani>

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>.

