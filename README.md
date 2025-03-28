🖥️ Real-Time Process Monitoring Dashboard

📌 Introduction
The Real-Time Process Monitoring Dashboard is a graphical tool designed to provide system administrators with real-time insights into system processes, CPU usage, and memory consumption. A process monitoring dashboard is essential for managing system performance efficiently, enabling users to identify performance bottlenecks, monitor trends, and take necessary actions such as terminating unresponsive processes. Traditional process monitoring tools often provide static or periodic updates, but this project aims to introduce a real-time solution with dynamic visualization and alert mechanisms.
This dashboard will leverage modern technologies like AI-driven anomaly detection, Web Sockets for real-time updates, and interactive visualization to offer an intuitive and efficient experience for users. By continuously tracking and analysing system processes, the tool ensures optimal resource allocation and helps prevent system slowdowns or crashes.


🚀 Features
•	Develop an interactive dashboard: Provide a real-time graphical interface to monitor system performance.
•	Real-time Process Monitoring: Continuously track and display active system processes, CPU usage, and memory consumption.
•	Efficient Process Management: Enable users to search, filter, and terminate unresponsive processes.
•	Threshold-Based Alerts: Notify users when CPU or memory usage exceeds predefined limits.
•	Scalability & Adaptability: Ensure that the solution works for both small-scale systems and large-scale distributed networks.
•	Performance Optimization: Optimize system resource allocation, preventing bottlenecks and improving responsiveness.

•	Enhanced System Performance: By proactively monitoring processes, the system will help improve overall performance and efficiency.
•	Improved Resource Utilization: The tool will optimize resource allocation by providing clear insights into CPU and memory usage trends.
•	Intelligent Process Control: The system will provide actionable insights, allowing users to terminate, prioritize, or analyse running processes effectively.
•	Reduced Downtime: By detecting anomalies and performance issues early, the dashboard will help prevent system crashes and slowdowns.
•	Prototype Implementation: A fully functional working prototype demonstrating real-time process monitoring and management in a controlled or live system environment.


🛠️ Technologies Used
🔹 Programming Languages - HTML, CSS, and JavaScript
    •	HTML: Defines the structure of the dashboard, including elements like tables, charts, and controls.
    •	CSS: Styles the interface, ensuring a visually appealing and responsive layout.
    •	JavaScript (Vanilla): Handles user interactions, dynamic updates, and real-time visualization on the frontend.
    • Node.js
    •	Backend Execution: Acts as the server-side runtime environment, managing data retrieval and processing.
    •	Asynchronous Processing: Enables efficient handling of multiple API requests using event-driven architecture.
🔹 Libraries & Tools - Backend Technologies (Node.js & Express.js)
    •	Express.js: Provides a backend framework for handling API requests efficiently.
    •	child_process (exec): Executes system commands like tasklist and taskkill for process      management.
    •	OS Module: Fetches system metrics like CPU usage, memory consumption, and process details.
    •	node-disk-info: Retrieves disk space details, including total, used, and free storage.
    •	systeminformation: Gathers system stats like CPU load, network activity, and process     statuses.
🔹 Frontend Technologies
    •	Vanilla JavaScript: Implements real-time updates, interactivity, and user controls    without relying on heavy frameworks.
    •	CSS & HTML: Used for structuring and styling the dashboard interface.
🔹 Networking & CORS
    •	CORS Module: Enables Cross-Origin Resource Sharing (CORS) for secure API access    and communication between frontend and backend.
