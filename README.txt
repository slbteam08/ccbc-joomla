# CCBC Project - Joomla 5 with Custom API

This project provides a Joomla 5 installation with Docker and custom API endpoints for the CCBC application.

## Prerequisites

- Docker and Docker Compose installed on your system
- Git (for cloning the repository)

## Quick Start

### 1. Clone and Start the Application

```bash
# Clone the repository
git clone <repository-url>
cd CCBC_Project

# Start the Docker containers
docker-compose up -d
```

### 2. Access Joomla Administrator

1. Open your browser and go to: http://localhost:8080/administrator/
2. Login credentials:
   - **Username:** `admin`
   - **Password:** `ccbc8888****`

### 3. Install CCBC Plugin (if available)

1. Go to **System** → **Install** → **Discover**
   - URL: http://localhost:8080/administrator/index.php?option=com_installer&view=discover
2. Find **CCBC Plugin** in the list and click **Install**
3. Go to **System** → **Manage** → **Plugins**
4. Search for **CCBC Plugin**
5. **Enable** the plugin by clicking on the status icon

## Custom API Endpoints

The project includes working custom API endpoints that can be accessed without authentication:

### Available Endpoints

#### 1. Simple API Endpoint
```bash


# POST request - Echo back submitted data
curl -X POST "http://localhost:8080/api/index.php/v1/ccbc_plugin/login" \
  -H "Content-Type: application/json" \
  -d '{"name":"joomla","email":"joomla@secured"}'
```

## Services Overview

The Docker setup includes the following services:

- **Joomla**: Main application running on port 8080
- **MySQL**: Database server on port 3306
- **phpMyAdmin**: Database management interface on port 8081

### Service Access URLs

- **Joomla Frontend**: http://localhost:8080
- **Joomla Administrator**: http://localhost:8080/administrator
- **phpMyAdmin**: http://localhost:8081

## Database Access

### phpMyAdmin
- **URL**: http://localhost:8081
- **Username**: `root`
- **Password**: `rootpassword`

### Direct MySQL Connection
- **Host**: `localhost`
- **Port**: `3306`
- **Database**: `ccbc_2025`
- **Username**: `root`
- **Password**: `ccbc8888****`
- **Root Password**: `rootpassword`
